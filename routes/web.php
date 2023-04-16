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
 * GET|HEAD        to-do .................to-do.index › ToDoController@index // main view
 * POST            to-do .................to-do.store › ToDoController@store //add new and redirect to main view
 * GET|HEAD        to-do/create ..........to-do.create › ToDoController@create //unused
 * GET|HEAD        to-do/{to_do} ........ to-do.show › ToDoController@show //unused
 * PUT|PATCH       to-do/{to_do} .........to-do.update › ToDoController@update //unused
 * DELETE          to-do/{to_do} ........ to-do.destroy › ToDoController@destroy // delete and redirect to main view
 * GET|HEAD        to-do/{to_do}/edit ... to-do.edit › ToDoController@edit //unused
 */
Route::resource('to-do', ToDoController::class);
Route::post('to-do/{to_do}/mark-as-completed', [ToDoController::class, 'markAsCompleted'])->name('to-do-to-do.mark-as-completed');
Route::get('/analytics', [ToDoController::class, 'analytics'])->name('to-do.analytics');
