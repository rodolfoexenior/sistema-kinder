<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagmentController;
use App\Http\Controllers\TurnController;
use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseManagmentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('admin/tutors', TutorController::class)->names('admin.tutors');
Route::resource('admin/countries', CountryController::class)->names('admin.countries');
Route::resource('admin/cities', CityController::class)->names('admin.cities');
Route::resource('admin/courses', CourseController::class)->names('admin.courses');
Route::resource('admin/turns', TurnController::class)->names('admin.turns');
Route::resource('admin/teachers', TeacherController::class)->names('admin.teachers');
Route::resource('admin/managments', ManagmentController::class)->names('admin.managments');
Route::resource('admin/coursemanagments', CourseManagmentController::class)->names('admin.coursemanagments');

