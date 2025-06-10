<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class LessonControllerTest extends TestCase
{
    protected $admin;
    protected $course;
    protected $lesson;
    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($this->admin);

        $this->course = Course::factory()->create([
            'name' => 'test',
            'price' => '123',
            'image' => UploadedFile::fake()->image('course.jpg'),
        ]);
        $this->lesson = Lesson::factory()->create([
            'title' => 'lesson 1',
            'course_id' => $this->course->id,
        ]);

    }
    use RefreshDatabase;
    public function test_lesson_created()
    {
        Storage::fake('public');

        $data = [
            'title' => 'Test lesson',
            'course_id' => $this->course->id,
            'contents' => [
                ['type' => 'text', 'content' => 'Some text content'],
                ['type' => 'youtube', 'content' => 'https://www.youtube.com/watch?v=PK0UqVt-olU'],
                ['type' => 'image', 'content' => UploadedFile::fake()->image('lessontest1.jpg')],
                ['type' => 'pdf', 'content' => UploadedFile::fake()->create('test.pdf', 100)],
                ['type' => 'text', 'content' => 'Some text content 2'],
                ['type' => 'text', 'content' => 'Some text content 3'],
                ['type' => 'youtube', 'content' => 'https://www.youtube.com/watch?v=PK0UqVt-olU1'],
                ['type' => 'pdf', 'content' => UploadedFile::fake()->create('test1.pdf', 100)],
                ['type' => 'image', 'content' => UploadedFile::fake()->image('lessontest231.jpg')],

            ],
        ];

        $response = $this->post(route('lessons.store'), $data);
        $response->assertRedirect();

        $this->assertDatabaseHas('lessons', [
            'title' => 'Test lesson',
            'course_id' => $this->course->id,
        ]);

        $lesson = \App\Models\Lesson::where('title', 'Test lesson')->first();

        foreach ($data['contents'] as $index => $item) {
            $type = $item['type'];

            // Общая проверка наличия записи
            $this->assertDatabaseHas('lesson_contents', [
                'lesson_id' => $lesson->id,
                'type' => $type,
                'position' => $index,
            ]);

            // Только для текстовых или youtube: проверка content
            if (in_array($type, ['text', 'youtube'])) {
                $this->assertDatabaseHas('lesson_contents', [
                    'lesson_id' => $lesson->id,
                    'type' => $type,
                    'position' => $index,
                    'content' => $item['content'],
                ]);
            }

            // Только для файлов: проверка наличия в storage
            if (in_array($type, ['image', 'pdf'])) {
                $path = \App\Models\LessonContent::where('lesson_id', $lesson->id)
                    ->where('type', $type)
                    ->where('position', $index)
                    ->value('content');

                Storage::disk('public')->assertExists($path);
            }
        }
    }


    public function test_lesson_edit()
    {
        // Сохраняем оригинальное содержимое
        $originalContents = $this->lesson->contents()->get()->toArray();

        // Обновляем только title
        $data = ['title' => 'Новое название'];
        $response = $this->put(route('lessons.update', $this->lesson->id), $data);

        $response->assertRedirect();

        // Проверка обновлённого title
        $this->assertDatabaseHas('lessons', [
            'id' => $this->lesson->id,
            'title' => 'Новое название',
        ]);

        // Проверка, что contents не изменились
        $this->assertEquals(
            $originalContents,
            $this->lesson->fresh()->contents()->get()->toArray()
        );
    }

    public function test_lesson_update_text_content()
    {
        Storage::fake('public');
        // Предварительно создаём урок с текстом
        $lesson = Lesson::factory()->create(['title' => 'Старый заголовок', 'course_id' => $this->course->id]);
        $lesson->contents()->create([
            'type' => 'text',
            'content' => 'Старый текст',
            'position' => 0,
        ]);
        $data = [
            'title' => 'Обновлённый урок',
            'contents' => [
                [
                    'type' => 'text',
                    'content' => 'Новый текст контента',
                ],
            ],
        ];
        $response = $this->actingAs($this->admin)
            ->put(route('lessons.update', $lesson->id), $data);
        $response->assertRedirect();
        $this->assertDatabaseHas('lessons', ['title' => 'Обновлённый урок']);
        $this->assertDatabaseHas('lesson_contents', ['content' => 'Новый текст контента']);
        $this->assertDatabaseMissing('lesson_contents', ['content' => 'Старый текст']);
    }
}
