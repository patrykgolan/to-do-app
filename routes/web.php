<?php

use App\Http\Controllers\ToDoController;
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
Route::redirect('/', 'to-do');
/*
 * GET|HEAD        to-do .................to-do.index › ToDoController@index
 * POST            to-do .................to-do.store › ToDoController@store
 * GET|HEAD        to-do/create ..........to-do.create › ToDoController@create
 * GET|HEAD        to-do/{to_do} ........ to-do.show › ToDoController@show
 * PUT|PATCH       to-do/{to_do} .........to-do.update › ToDoController@update
 * DELETE          to-do/{to_do} ........ to-do.destroy › ToDoController@destroy
 * GET|HEAD        to-do/{to_do}/edit ... to-do.edit › ToDoController@edit
 */
Route::resource('to-do', ToDoController::class);
Route::post('to-do/{to_do}/mark-as-completed', [ToDoController::class, 'markAsCompleted'])->name('to-do-to-do.mark-as-completed');
Route::get('/analytics', [ToDoController::class, 'analytics'])->name('todo.analytics');
