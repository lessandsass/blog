<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {

    $posts = [
        // ['id' => 1, 'title' => 'Post one'],
        // ['id' => 2, 'title' => 'Post two'],
        // ['id' => 3, 'title' => 'Post three']
    ];

    return view('posts.index', [
        'posts' => $posts
    ]);
});

