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

    // Users
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as'=>'users.index', 'uses'=>'App\Http\Controllers\UserController@index']);
        Route::get('/create', ['as'=>'users.create', 'uses'=>'App\Http\Controllers\UserController@create']);
        Route::post('/', ['as'=>'users.store', 'uses'=>'App\Http\Controllers\UserController@store']);
        Route::get('/{user_id}', ['as'=>'users.show', 'uses'=>'App\Http\Controllers\UserController@show']);
        Route::get('/edit/{user_id}', ['as'=>'users.edit', 'uses'=>'App\Http\Controllers\UserController@edit']);
        Route::match(['put', 'patch'], '/{user_id}', ['as'=>'users.update', 'uses'=>'App\Http\Controllers\UserController@update']);
        Route::delete('/{user_id}', ['as'=>'users.destroy', 'uses'=>'App\Http\Controllers\UserController@destroy']);
    });

    // Reports
    Route::group(['prefix' => 'reports'], function () {
        Route::get('/general', ['as'=>'reports.general', 'uses'=>'App\Http\Controllers\ReportController@general']);
    });
});