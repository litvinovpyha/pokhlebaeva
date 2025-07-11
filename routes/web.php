<?php

use App\Http\Controllers\CallbackController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MyCoursesController;
use App\Http\Controllers\MyLessonController;
use App\Http\Controllers\OnlineManicureController;
use App\Http\Controllers\LaminationController;
use App\Http\Controllers\HairstylistController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonContentController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\ManicureController;
use App\Http\Controllers\OnlineTrainingController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSeo;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/obratnyi-zvonok', [CallbackController::class, 'show'])->name('callback');
Route::post('/obratnyi-zvonok', [CallbackController::class, 'store'])->name('callback.submit');


Route::prefix('/kursy')->group(function () {
    Route::get('/online-kursy', [OnlineTrainingController::class, 'show'])->name('courses.online');
    Route::get('/parikmaher', [HairstylistController::class, 'index'])->name('courses.hairstylist');
    Route::get('/manikyur', [ManicureController::class, 'index'])->name('courses.manicure');
    Route::get('/laminirovanie', [LaminationController::class, 'index'])->name('courses.lamination');
    Route::get('/onlayn-manikyur', [OnlineManicureController::class, 'index'])->name('courses.onlinemanicure');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/mycourses', [MyCoursesController::class, 'index'])->name('mycourses.index');
    Route::get('/mycourses/{id}', [MyCoursesController::class, 'show'])->name('mycourses.show');
    Route::get('/mycourses/{id}/{lesson_id}', [MyLessonController::class, 'show'])->name('lesson.show');
    Route::post('/mycourses/{id}/{lesson_id}/complete', [MyLessonController::class, 'complete'])->name('lesson.complete');
});


Route::get('/log-in', function () {
    return redirect()->route('login', [], 301);
});

Route::middleware([IsAdmin::class])->prefix('console')->group(function () {
//    Route::get('/', [ConsoleController::class, 'store'])->name('callback.store');
    Route::get('/', [ConsoleController::class, 'show'])->name('console');
    Route::resource('courses', CourseController::class);
    Route::resource('lessons', LessonsController::class);
    Route::resource('user', UserController::class);
    Route::post('/admin/users/{user}/courses/{course}/assign', [UserController::class, 'assignSingleCourse'])->name('user.assignSingleCourse');
    Route::delete('/admin/users/{user}/revoke-course/{course}', [UserController::class, 'revokeCourse'])->name('user.revokeCourse');
    Route::delete('/lesson-contents/{content}', [LessonContentController::class, 'destroy'])->name('lesson-contents.destroy');
});


Route::middleware([IsSeo::class])->prefix('console')->group(function () {
    Route::get('/seo', [SeoController::class, 'show'])->name('seo');
    Route::post('/save-gtm', [SeoController::class, 'saveGtm'])->name('seo.save.gtm');
});
