<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;

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
Route::get('/goods', [GoodsController::class, 'goods']);
Route::get('/varif/{goods}', [GoodsController::class, 'varif']);
Route::post('/varif', [GoodsController::class, 'store']);
Route::get('/dolls', [GoodsController::class, 'dolls']);
Route::get('/board', [GoodsController::class, 'board']);
Route::get('/shikishi', [GoodsController::class, 'shikishi']);
Route::get('/boardDolls', [GoodsController::class, 'boardDolls']);
Route::get('/shikishiDolls', [GoodsController::class, 'shikishiDolls']);