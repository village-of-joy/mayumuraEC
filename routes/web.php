<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(GoodsController::class)->middleware(['auth'])->group(function(){
   Route::get('/', 'index')->name('index');
   
   Route::get('/varif/{goods}', 'varif')->name('varif');
   Route::post('/varif', 'store')->name('store');
   Route::delete('/varif/{goods}', 'deleteVarif');
   Route::delete('/cart/{goods}', 'deleteCart');
   
   Route::get('/board', 'board')->name('board');
   Route::get('/boardDolls1', 'boardDolls1')->name('boardDolls1');
   Route::get('/boardDolls2', 'boardDolls2')->name('boardDolls2');
   Route::get('/shikishi', 'shikishi')->name('shikishi');
   Route::get('/shikishiDolls1', 'shikishiDolls1')->name('shikishiDolls1');
   Route::get('/shikishiDolls2', 'shikishiDolls2')->name('shikishiDolls2');
   
   Route::get('/cart/show', 'cart')->name('cart');
   Route::post('/cart', 'cartStore')->name('cartStore');
   
   Route::get('/show/{goods}', 'show')->name('show');
   
   

});

Route::controller(PaymentController::class)->middleware(['auth'])->group(function(){
   Route::post('/pay', 'pay')->name('pay');
   Route::get('/completed', 'completed')->name('completed');
});