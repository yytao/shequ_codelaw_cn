<?php

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

Route::group(['middleware'=>['setLocale']], function(){

    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryRoot');
    Route::get('/share', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryShare');
    Route::get('/unused', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryUnused');
    Route::get('/renting', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryRenting');
    Route::get('/social', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategorySocial');

    Route::get('/a/{article_id}', [\App\Http\Controllers\ArticleController::class, 'index']);

    Route::get('/user', [\App\Http\Controllers\IndexController::class, 'user']);

    Route::get('/post', [\App\Http\Controllers\IndexController::class, 'post']);

});



//修改语言
Route::get('/changeLocale/{locale}', [\App\Http\Controllers\IndexController::class, 'changeLocale']);
