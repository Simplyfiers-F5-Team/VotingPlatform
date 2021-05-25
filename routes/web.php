<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\VoteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create')->middleware('auth');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store')->middleware('auth');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index')->middleware('auth');
Route::get('courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit')->middleware('auth');
Route::put('courses/{course}', [CourseController::class, 'update'])->name('courses.update')->middleware('auth');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy')->middleware('auth');

Route::get('/vote', [CourseController::class, 'voteform'])->name('courses.voteoptions');

Route::post('/vote', [VoteController::class, 'store'])->name('votes.store');
Route::get('/voted', [VoteController::class, 'index'])->name('votes.index');
Route::delete('/vote', [VoteController::class, 'destroy'])->name('votes.destroy');

