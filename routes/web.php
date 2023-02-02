<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\DollsController;

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
Route::get('/', [GoodsController::class, 'index']);

Route::get('/varif/{goods}', [GoodsController::class, 'varif']);
Route::post('/varif', [GoodsController::class, 'store']);

Route::get('/board', [GoodsController::class, 'board']);
Route::get('/boardDolls1', [GoodsController::class, 'boardDolls1']);
Route::get('/boardDolls2', [GoodsController::class, 'boardDolls2']);

Route::get('/shikishi', [GoodsController::class, 'shikishi']);
Route::get('/shikishiDolls', [GoodsController::class, 'shikishiDolls']);
