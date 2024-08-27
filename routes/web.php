<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/course', function () {
    return view('pages.course');
});

Route::get('/teacher', function () {
    return view('pages.teacher');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog-detail', function () {
    return view('pages.blog-detail');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
