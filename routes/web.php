<?php

use App\Http\Controllers\TshirtController;
use App\Models\TshirtM;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [TshirtController::class, 'index']);
Route::post('/save-batch',[TshirtController::class, 'store'] )->name('saveBatch');
Route::get('/delete/{id}', [TshirtController::class, 'delete']);
Route::get('/edit/{id}', [TshirtController::class, 'edit']);
Route::post('/edit', [TshirtController::class, 'update'])->name('update');
