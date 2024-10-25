<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;


// Landing Page Controller
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{slug}', [HomeController::class, 'blogDetails'])->name('detail_blog');
Route::get('/leaderboard', [HomeController::class, 'leaderboard'])->name('leaderboard');
Route::get('/articleCategory/{id}', [HomeController::class, 'articleCategory'])->name('articleCategory');
Route::get('/searchArticle', [HomeController::class, 'searchArticle'])->name('searchArticle');

//Quiz
Route::get('/quiz', [QuizController::class, 'quizPage'])->middleware(['auth', 'verified'])->name('quizPage');
Route::put('/quizSubmit/{id}', [QuizController::class, 'quizSubmit'])->middleware(['auth', 'verified'])->name('quizSubmit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
