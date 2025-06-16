<?php

namespace App\Console\Commands;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonContent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportLessons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:lessons';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Импортирует уроки и контент из CSV';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = storage_path('app/lessons_export.csv');

        if (!file_exists($path)) {
            $this->error("Файл не найден: $path");
            return;
        }

        $handle = fopen($path, 'r');
        if (!$handle) {
            $this->error("Не удалось открыть файл.");
            return;
        }

        $header = fgetcsv($handle); // Пропустить заголовки

        DB::beginTransaction();

        try {
            while (($data = fgetcsv($handle)) !== false) {
                [$courseName, $lessonTitle, $lessonPosition, $type, $content, $contentPosition] = $data;

                // Найти курс
                $course = Course::where('name', trim($courseName))->first();
                if (!$course) {
                    $this->warn("Курс не найден: $courseName");
                    continue;
                }

                // Найти или создать урок
                $lesson = Lesson::updateOrCreate(
                    ['course_id' => $course->id, 'title' => trim($lessonTitle)],
                );
                // Принудительно задаем позицию
                $lesson->position = (int) $lessonPosition;
                $lesson->save();
                // Добавить контент
                LessonContent::create([
                    'lesson_id' => $lesson->id,
                    'type' => trim($type),
                    'content' => trim($content),
                    'position' => (int) $contentPosition,
                ]);
            }

            DB::commit();
            fclose($handle);
            $this->info("Импорт завершён успешно.");
        } catch (\Throwable $e) {
            DB::rollBack();
            $this->error("Ошибка импорта: " . $e->getMessage());
        }
    }
}
