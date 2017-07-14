<?php

use App\Models\Post;

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
    \Mail::to($user)->send(new App\Mail\EmailConfirmed($user));

    return redirect()->route('login');
});

// Route::resource('posts', 'PostsController');

Route::get('dashboard/posts', function () {
    $posts = Post::latest()->get();
    return view('dashboard.posts.index', compact('posts'));
});

Route::delete('dashboard/posts/{post}', function (Post $post) {
    $post->delete();

    return \Illuminate\Support\Facades\Response::json([
        'deleted' => true,
    ]);
})->name('dashboard.posts.destroy');
