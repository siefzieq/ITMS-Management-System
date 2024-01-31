<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

//All user level can access
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    //Business Unit can only access
    Route::resource('order', \App\Http\Controllers\OrderController::class)->middleware('can:isBU');
    Route::get('/requestlist', [\App\Http\Controllers\OrderController::class, 'list'])->name('list')->middleware('can:isBU');

    //Manager can only access
    Route::resource('project', \App\Http\Controllers\ProjectController::class)->middleware('can:isManager');
    Route::get('/projectList', [\App\Http\Controllers\ProjectController::class, 'list'])->name('projectlist')->middleware('can:isManager');
    Route::resource('devInfo', \App\Http\Controllers\DevInfoController::class)->middleware('can:isManager');
    Route::get('/projectList', [\App\Http\Controllers\ProjectController::class, 'list'])->name('projectlist')->middleware('can:isManager');
    Route::get('/devlist', [\App\Http\Controllers\DevInfoController::class, 'list'])->name('devlist')->middleware('can:isManager');

    //Lead Developer and Manager can only access
    Route::resource('progress', \App\Http\Controllers\ProgressReportController::class);
    Route::get('/progresslist', [\App\Http\Controllers\ProgressReportController::class, 'list'])->name('progresslist');

});
