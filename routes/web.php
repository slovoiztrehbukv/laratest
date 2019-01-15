<?php

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
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
});
/**
 * testing the migrations bellow
 */
Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    $task = DB::table('tasks')->find($id);

    return view('tasks.show', compact('task'));
});
/**
 * testing end here
 */

Route::get('about', function () {
    $arr = [
        'serg',
        'john',
        'anna'
    ];
    return view('about', compact('arr'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
