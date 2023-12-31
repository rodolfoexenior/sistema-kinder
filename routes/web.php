<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagmentController;
use App\Http\Controllers\TurnController;
use App\Http\Controllers\TutorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CourseManagmentController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ProvinciasController;
use App\Http\Controllers\StudentController;
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

Route::get('/migrate-fresh', function() {
    Artisan::call('migrate:fresh');
});
Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
});
Route::get('/config-clear', function() {
    Artisan::call('config:clear');
});
Route::get('/optimize-clear', function() {
    Artisan::call('optimize:clear');
});
Route::get('/route-clear', function() {
    Artisan::call('route:clear');
});
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/provincias', [ProvinciasController::class, 'provincias']);
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
Route::resource('admin/students', StudentController::class)->names('admin.students');
Route::resource('admin/yearbooks', ManagmentController::class)->names('admin.yearbooks');
Route::resource('admin/provinces', ProvinceController::class)->names('admin.provinces');
Route::resource('admin/coursemanagments', CourseManagmentController::class)->names('admin.coursemanagments');

