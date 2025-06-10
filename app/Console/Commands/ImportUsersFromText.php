<?php

namespace App\Console\Commands;

use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\Command;

class ImportUsersFromText extends Command
{
    protected $signature = 'import:users-from-text {path}';
    protected $description = 'Импортирует пользователей из текстового файла';

    public function handle()
    {
        $path = $this->argument('path');

        if (!file_exists($path)) {
            $this->error("Файл {$path} не найден.");
            return;
        }

        $content = file_get_contents($path);

        $pattern = '/([a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}):\s*((?:\s*-\s*.+\n?)*)/i';
        preg_match_all($pattern, $content, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $email = trim($match[1]);
            $courseLines = array_filter(array_map('trim', explode('-', $match[2])));

            // Создание пользователя
            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => 'Пользователь',
                    'password' => Hash::make('12345678'),
                    'role' => 'user',
                ]
            );

            $this->info("Пользователь: {$email}");

            foreach ($courseLines as $courseTitle) {
                $courseTitle = trim($courseTitle);
                if (!$courseTitle)
                    continue;

                $course = Course::where('name', $courseTitle)->first();

                if (!$course) {
                    $course = Course::create([
                        'name' => $courseTitle,
                        'price' => 10000,
                        'image' => 'images/blank.png',
                    ]);
                }

                $user->courses()->syncWithoutDetaching($course->id);

                $this->info("  ➤ Курс добавлен: {$courseTitle}");
            }
        }

    }
}
