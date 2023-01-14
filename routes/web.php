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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return "Contact Image";
})->name('home.contact');
Route::get('/about', function () {
    return "About Page";
})->name('home.about');

// parameter
// Route::get('/post/{id}', function ($id) {
//     return "Post ID: " . $id;
// })->name('post.show');


// with regular expresion
Route::get('/post/{id}', function ($id) {
    return "Post ID: " . $id;
})->where([
    'id' => '[0-9]+'
])
    ->name('post.show');

// optionnal parameter
Route::get('/recent-post/{days_ago?}', function ($days_ago = 3) {
    return "Recent Post " . $days_ago . ' ago.';
})->name('post.show');
