<?php

use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\CourseController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([IsAdmin::class])->prefix('console')->group(function () {
    Route::get('/', action: [ConsoleController::class, 'show'])->name('console');
    Route::resource('courses', CourseController::class);
});
