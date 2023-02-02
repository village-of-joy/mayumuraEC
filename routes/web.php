<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\DollController;

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

<<<<<<< HEAD
Route::get('/varif/{doll}', [DollController::class, 'varif']);
Route::post('/varif', [DollController::class, 'store']);
=======
Route::get('/varif/{goods}', [GoodsController::class, 'varif']);
Route::post('/varif', [GoodsController::class, 'store']);
>>>>>>> origin/dev_basis10

Route::get('/board', [GoodsController::class, 'board']);
Route::get('/boardDolls1/{goods}', [GoodsController::class, 'boardDolls1']);
Route::post('/boardDolls1', [GoodsController::class, 'BoardStore']);

Route::get('/shikishi', [GoodsController::class, 'shikishi']);
Route::get('/shikishiDolls', [GoodsController::class, 'shikishiDolls']);
