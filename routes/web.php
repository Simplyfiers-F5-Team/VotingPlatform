<?php

use Illuminate\Support\Facades\Route;


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


Route::get('/courses/create', [App\Http\Controllers\CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
Route::delete('/courses/{id}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.destroy');

Route::get('/vote', [App\Http\Controllers\CourseController::class, 'voteform'])->name('courses.voteoptions');

Route::post('/vote', [App\Http\Controllers\VoteController::class, 'store'])->name('votes.store');
Route::get('/voted', [App\Http\Controllers\VoteController::class, 'index'])->name('votes.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');