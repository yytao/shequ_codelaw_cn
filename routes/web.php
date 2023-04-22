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

    Auth::routes();

    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryAll');
    Route::get('/share', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryShare');
    Route::get('/unused', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryUnused');
    Route::get('/renting', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryRenting');
    Route::get('/social', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategorySocial');

    Route::get('/verify', [App\Http\Controllers\Auth\RegisterController::class, 'verifyUser'])->name('verify.user');

    //检索
    Route::get('/search', [App\Http\Controllers\IndexController::class, 'search'])->name('search');

    Route::get('/a/{article_id}', [\App\Http\Controllers\ArticleController::class, 'index']);

//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware'=>['auth']], function(){
        Route::get('/user', [\App\Http\Controllers\UserController::class, 'user']);
        Route::get('/post', [\App\Http\Controllers\ArticleController::class, 'post']);
        Route::post('/post', [\App\Http\Controllers\ArticleController::class, 'postContent'])->name('postContent');

        Route::post('/article/star', [\App\Http\Controllers\ArticleController::class, 'star'])->name('star');
        Route::post('/article/collect', [\App\Http\Controllers\ArticleController::class, 'collect'])->name('collect');
        Route::post('/article/comment', [\App\Http\Controllers\ArticleController::class, 'postComment'])->name('postComment');


    });

});

//修改语言
Route::get('/changeLocale/{locale}', [\App\Http\Controllers\IndexController::class, 'changeLocale']);
