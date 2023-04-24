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
    Route::get('/verify', [App\Http\Controllers\Auth\RegisterController::class, 'verifyUser'])->name('verify.user');

    Route::group(['namespace'=>'post'], function (){
        Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryAll');
        Route::get('/share', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryShare');
        Route::get('/unused', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryUnused');
        Route::get('/renting', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategoryRenting');
        Route::get('/social', [\App\Http\Controllers\IndexController::class, 'index'])->name('CategorySocial');

        //检索
        Route::get('/search', [App\Http\Controllers\IndexController::class, 'search'])->name('search');
    });


//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware'=>['auth']], function(){

        Route::group(['namespace'=>'message'], function (){
            Route::get('/message', [\App\Http\Controllers\IndexController::class, 'index'])->name('message');


        });

        Route::get('/a/{article_id}', [\App\Http\Controllers\ArticleController::class, 'index']);
        Route::post('/article/star', [\App\Http\Controllers\ArticleController::class, 'star'])->name('star');
        Route::post('/article/collect', [\App\Http\Controllers\ArticleController::class, 'collect'])->name('collect');
        Route::post('/article/comment', [\App\Http\Controllers\ArticleController::class, 'postComment'])->name('postComment');


        Route::group(['namespace'=>'post'], function (){
            Route::get('/post', [\App\Http\Controllers\ArticleController::class, 'post']);
            Route::post('/post', [\App\Http\Controllers\ArticleController::class, 'postContent'])->name('postContent');

        });

        Route::group(['namespace'=>'user'], function (){
            Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
            Route::get('/user/collect', [\App\Http\Controllers\UserController::class, 'collect'])->name('user.collect');
            Route::get('/user/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');

            Route::post('/user/edit/n', [\App\Http\Controllers\UserController::class, 'editName'])->name('user.edit.name');
            Route::post('/user/edit/p', [\App\Http\Controllers\UserController::class, 'editPassword'])->name('user.edit.password');


            Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('user.logout');
        });

    });

});

//修改语言
Route::get('/changeLocale/{locale}', [\App\Http\Controllers\IndexController::class, 'changeLocale']);
