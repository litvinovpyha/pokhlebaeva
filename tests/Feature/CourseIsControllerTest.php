<?php

namespace Tests\Feature;

use App\Models\Course;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\User;

class CourseIsControllerTest extends TestCase
{

    protected $admin;

    protected function setUp(): void
    {
        parent::setUp();

        $this->admin = User::factory()->create(['role' => 'admin']);
        $this->actingAs($this->admin);
    }
    use RefreshDatabase;

    public function test_course_is_successfully_created()
    {
        Storage::fake('public');


        $data = [
            'name' => 'Test Course',
            'price' => 1000,
            'image' => UploadedFile::fake()->image('course.jpg'),
        ];

        $response = $this->post(route('courses.store'), $data);

        $response->assertRedirect();

        $this->assertDatabaseHas('courses', [
            'name' => 'Test Course',
            'price' => 1000,
        ]);

        Storage::disk('public')->assertExists('courses/' . $data['image']->hashName());
    }

    public function test_course_creation_with_empty_name()
    {
        Storage::fake('public');


        $data = [
            'name' => '',
            'price' => 1000,
            'image' => UploadedFile::fake()->image('course.jpg'),
        ];

        $response = $this->post(route('courses.store'), $data);

        $response->assertSessionHasErrors('name');

    }
    public function test_course_creation_name_non_string()
    {
        Storage::fake('public');


        $data = [
            'name' => 123,
            'price' => 1000,
            'image' => UploadedFile::fake()->image('course.jpg'),
        ];

        $response = $this->post(route('courses.store'), $data);

        $response->assertSessionHasErrors('name');

    }
    public function test_course_creation_with_long_name()
    {
        Storage::fake('public');


        $data = [
            'name' => str_repeat('a', 256),
            'price' => 1000,
            'image' => UploadedFile::fake()->image('course.jpg'),
        ];

        $response = $this->post(route('courses.store'), $data);

        $response->assertSessionHasErrors('name');

    }
    public function test_course_creation_price_non_integer()
    {
        Storage::fake('public');


        $data = [
            'name' => 'name',
            'price' => '100w0',
            'image' => UploadedFile::fake()->image('course.jpg'),
        ];

        $response = $this->post(route('courses.store'), $data);

        $response->assertSessionHasErrors('price');

    }
    public function test_course_creation_with_empty_price()
    {
        Storage::fake('public');


        $data = [
            'name' => 'name',
            'price' => '',
            'image' => UploadedFile::fake()->image('course.jpg'),
        ];

        $response = $this->post(route('courses.store'), $data);

        $response->assertSessionHasErrors('price');

    }
    public function test_guest_user_cannot_create_course()
    {
        Storage::fake('public');

        $data = [
            'name' => 'Test Course',
            'price' => 1000,
            'image' => UploadedFile::fake()->image('course.jpg'),
        ];
        $user = User::factory()->create([
            'role' => 'user',
        ]);
        $response = $this->actingAs($user)->post(route('courses.store'), $data);

        $response->assertRedirect('/');
    }
    public function test_course_creation_with_invalid_image_extension()
    {
        Storage::fake('public');

        $data = [
            'name' => 'Test Course',
            'price' => 1000,
            'image' => UploadedFile::fake()->create('course.txt', 500),
        ];

        $response = $this->post(route('courses.store'), $data);

        $response->assertSessionHasErrors('image');
        Storage::disk('public')->assertMissing('courses/' . $data['image']->hashName());
    }

    // public function test_course_creation_with_large_image()
    // {
    //     Storage::fake('public');

    //     $data = [
    //         'name' => 'Test Course',
    //         'price' => 1000,
    //         'image' => UploadedFile::fake()->image('course.jpg', 5120, 4000), // this image < 100kb | validated 1024 kb
    //     ];

    //     $response = $this->post(route('courses.store'), $data);

    //     $response->assertSessionHasErrors('image');  
    //     Storage::disk('public')->assertMissing('courses/' . $data['image']->hashName());  
    // }


    // index
    public function test_index_displays_courses()
    {

        $courses = Course::factory()->count(5)->create();

        $response = $this->get(route('courses.index'));

        $response->assertStatus(200);

        $response->assertViewHas('courses');

        $this->assertCount(5, $response->viewData('courses'));

        foreach ($courses as $course) {
            $response->assertSee($course->name);
            $response->assertSee((string) $course->price);
            $response->assertSee($course->image);
        }
    }

    public function test_create_view_is_accessible()
    {

        $response = $this->get(route('courses.create'));

        $response->assertStatus(status: 200);
        $response->assertViewIs('admin.courses.create');
    }


    public function test_show_view_is_accessible()
    {
        $course = Course::factory()->create();
        $response = $this->get(route('courses.show', $course));
        $response->assertStatus(status: 200);
        $response->assertViewIs('admin.courses.show');
        $response->assertViewHas('course', $course);
        $response->assertSee($course->name);

    }
    public function test_edit_page_returns_successful_response()
    {
        $course = Course::factory()->create();
        $response = $this->get(route('courses.edit', $course));
        $response->assertStatus(status: 200);
        $response->assertViewIs('admin.courses.edit');
        $response->assertViewHas('course', $course);



    }

    public function test_edit_page_contains_course_data()
    {
        $course = Course::factory()->create();
        $response = $this->get(route('courses.edit', $course));
        $response->assertSee($course->name);
        $response->assertSee($course->price);

    }


    public function test_edit_form_shows_existing_image_if_present()
    {
        $course = Course::factory()->create();
        $response = $this->get(route('courses.edit', $course));
        $response->assertSee('Сохранить изменения');

    }

    public function test_course_is_deleted_successfully()
    {
        $course = Course::factory()->create();
        $response = $this->delete(route('courses.destroy', $course));
        $response->assertStatus(status: 302);
        $this->assertDatabaseMissing('courses', ['id' => $course->id]);

    }

    public function test_course_is_updated_successfully()
    {
        $course = Course::factory()->create();
        $data = [
            'name' => 'Updated Course Name',
            'price' => 2000,
            'image' => UploadedFile::fake()->image('course_updated.jpg')
        ];
        $response = $this->put(route('courses.update', $course), $data);
        $response->assertRedirect(route('courses.show', $course));
        $response->assertSessionHas('success', 'Курс успешно обновлён!');

        $course->refresh();
        $this->assertEquals('Updated Course Name', $course->name);
        $this->assertEquals(2000, $course->price);
    }

    public function test_course_update_validation_fails_for_invalid_data()
    {
        $course = Course::factory()->create();

        $response = $this->put(route('courses.update', $course), [
            'name' => '',
            'price' => 2000,
        ]);
        $response->assertSessionHasErrors('name');
    
        $response = $this->put(route('courses.update', $course), [
            'name' => 'Valid Course Name',
            'price' => 'invalid',
        ]);
        $response->assertSessionHasErrors('price');
    
        $response = $this->put(route('courses.update', $course), [
            'name' => 'Valid Course Name',
            'price' => 2000,
            'image' => UploadedFile::fake()->create('not_image.txt', 500),
        ]);
        $response->assertSessionHasErrors('image');
    }
}
