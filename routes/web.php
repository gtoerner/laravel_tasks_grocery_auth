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

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () { return view('welcome');});

    /**
     * Add New Task
     */
    Route::post('/task', 'TaskController@addTask')->name('tasks');

    /**
     * Delete Task
     */
    Route::delete('/task/{id}','TaskController@deleteTask')->name('tasks');

Route::get('/grocery/additem', 'GroceryController@addItem');
Route::post('grocery', 'GroceryController@store');

Auth::routes();

Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/grocery', 'GroceryController@index');

