<?php

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

Auth::routes();

Route::get('/register/confirm/{token}', function ($token) {
    $user = App\User::whereToken($token)->firstOrFail();

    $user->verified = true;
    $user->token = null;
    $user->save();

    // send success email

    return redirect()->route('login');
});

Route::resource('posts', 'PostsController');
