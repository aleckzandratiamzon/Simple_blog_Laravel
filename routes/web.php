<?php

use App\Http\Controllers\WebViewsController;
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

Route::get('/', 'APIController@index');

Route::get('/about', 'WebViewsController@about')->name('about');

Route::get('/contact', 'WebViewsController@contact')->name('contact');

Route::get('/login', 'WebViewsController@login')->name('login');

Route::get('/register', 'WebViewsController@register')->name('register');

Route::get('/post/{id}', 'APIController@show')->name('post.show');
