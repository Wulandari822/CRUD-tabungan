<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloController;

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


Route::get('/',[helloController::class , 'index'])->name('index');
Route::post('/',[helloController::class , 'store'])->name('store');
Route::post('/indexActivity', [helloController::class, 'indexActivity'])->name('indexActivity');
Route::get('/indexEditActivity/{id}', [helloController::class, 'indexEditActivity'])->name('indexEditActivity');
Route::post('/deleteActivity/{id}', [helloController::class, 'deleteActivity'])->name('deleteActivity');
Route::post('/updateActivity/{id}', [helloController::class, 'updateActivity'])->name('updateActivity');

