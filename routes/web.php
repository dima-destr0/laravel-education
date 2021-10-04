<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Models\Article;
use App\Models\User;

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
    return view('home');
})->name('home');

Route::post('/task2', 'App\Http\Controllers\UserController@addUser')->name('add-user');

Route::post('/task3', 'App\Http\Controllers\ArticleController@deleteArticle')->name('delete-article');

//For test purpose
Route::get('/task4', function() {
        $article = Article::withTrashed()->find(4);
        $user = User::find(1);
        Log::info($article->isAuthor($user));
})->name('is-author');


Route::get('/task5', 'App\Http\Controllers\UserController@getExp')->name('get-exp');
