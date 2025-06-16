<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportUsersCourses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:users-courses';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Импортирует данные из insert_users_courses.sql в базу данных';

    /**
     * Execute the console command.
     */
     public function handle()
    {
        $path = base_path('insert_users_courses.sql');

        if (!file_exists($path)) {
            $this->error("❌ Файл не найден: $path");
            return 1;
        }

        $sql = file_get_contents($path);

        try {
            DB::unprepared($sql);
            $this->info('✅ SQL-файл успешно импортирован.');
        } catch (\Throwable $e) {
            $this->error("⛔ Ошибка при импорте: " . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
