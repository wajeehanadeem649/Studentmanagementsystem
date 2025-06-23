<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\batchcontroller;
use App\Http\Controllers\enrollmentcontroller;
use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\coursecontroller;



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
    return view('layout');
});
Route::resource('/students',studentcontroller::class);
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

Route::resource('/teachers',teachercontroller::class);
Route::get('/teachers/{id}', [teachercontroller::class, 'show'])->name('teachers.show');
Route::get('/teachers/{id}/edit', [teachercontroller::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{id}', [teachercontroller::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{id}', [teachercontroller::class, 'destroy'])->name('teachers.destroy');



Route::resource('/batches',batchcontroller::class);
Route::get('/batches/{id}', [batchcontroller::class, 'show'])->name('batches.show');
Route::get('/batches/{id}/edit', [batchcontroller::class, 'edit'])->name('batches.edit');
Route::put('/batches/{id}', [batchcontroller::class, 'update'])->name('batches.update');
Route::delete('/batches/{id}', [batchcontroller::class, 'destroy'])->name('batches.destroy');

Route::resource('/courses',coursecontroller::class);
Route::get('/courses/{id}', [coursecontroller::class, 'show'])->name('courses.show');
Route::get('/courses/{id}/edit', [coursecontroller::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [coursecontroller::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [coursecontroller::class, 'destroy'])->name('courses.destroy');



Route::resource('/enrollments',enrollmentcontroller::class);
Route::get('/enrollments/{id}', [enrollmentcontroller::class, 'show'])->name('enrollments.show');
Route::get('/enrollments/{id}/edit', [enrollmentcontroller::class, 'edit'])->name('enrollments.edit');
Route::put('/enrollments/{id}', [enrollmentcontroller::class, 'update'])->name('enrollments.update');
Route::delete('/enrollments/{id}', [enrollmentcontroller::class, 'destroy'])->name('enrollments.destroy');

Route::resource('/payments',paymentcontroller::class);
Route::get('/payments/{id}', [paymentcontroller::class, 'show'])->name('payments.show');
Route::get('/payments/{id}/edit', [paymentcontroller::class, 'edit'])->name('payments.edit');
Route::put('/payments/{id}', [paymentcontroller::class, 'update'])->name('payments.update');
Route::delete('/payments/{id}', [paymentcontroller::class, 'destroy'])->name('payments.destroy');