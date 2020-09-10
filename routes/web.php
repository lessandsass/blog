<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/users/{id}', function ($id) {
    // look $id in database
    // return view with data
    return response($id);
});
