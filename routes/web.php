<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;


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

//top画面
Route::get('/', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);

//認可処理
Route::middleware(['auth'])->group(function () {
  Route::prefix('/park_search')->group(function () {
    Route::get('/top', [SearchController::class, 'top']);
    Route::get('/entry', [SearchController::class, 'entry']);
    //Route::post('/register', [SearchController::class, 'register']);

  });

});