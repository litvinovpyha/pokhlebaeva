<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdmin extends Command
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin';
    protected $description = 'Создание пользователя-админа, если он ещё не существует';
    /**
     * Execute the console command.
     */
 public function handle()
{
    if (app()->environment('production')) {
        $this->error('Вы находитесь в продакшене. Админ не будет создан.');
        return;
    }

    $adminExists = \App\Models\User::where('role', 'admin')->exists();
    if ($adminExists) {
        $this->info('Администратор уже существует.');
        return;
    }

    $user = new \App\Models\User();
    $user->name = 'admin';
    $user->email = 'admin@mail.ru';
    $user->password = bcrypt('1144');
    $user->role = 'admin';
    $user->save();

    $this->info('Жестко создан администратор:');
    $this->info('Email: admin@mail.ru');
    $this->info('Пароль: 1144');
}

}
