<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return redirect(route('login'));
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [
        HomeController::class, 'index'
    ])->name('home');

    Route::resource('classrooms', App\Http\Controllers\ClassroomController::class);

    Route::resource('teachers', App\Http\Controllers\TeacherController::class);

    Route::resource('classes', App\Http\Controllers\ClassesController::class);

    Route::resource('students', App\Http\Controllers\StudentController::class);

    Route::resource('employees', App\Http\Controllers\EmployeeController::class);

    Route::resource('equipment', App\Http\Controllers\EquipmentController::class);
});