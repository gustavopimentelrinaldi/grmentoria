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
    return view('index');
});

Route::get('/action', function () {
    return view('action');
});

Route::get('/adventure', function () {
    return view('adventure');
});

Route::get('/animation', function () {
    return view('animation');
});

Route::get('/biography', function () {
    return view('biography');
});

Route::get('/blog-left-sidebar', function () {
    return view('blog-left-sidebar');
});

Route::get('/blog-right-sidebar', function () {
    return view('blog-right-sidebar');
});

Route::get('/blog-single', function () {
    return view('blog-single');
});

Route::get('/comedy', function () {
    return view('comedy');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/drama', function () {
    return view('drama');
});

Route::get('/horror', function () {
    return view('horror');
});

Route::get('/library', function () {
    return view('library');
});

Route::get('/log-in', function () {
    return view('log-in');
});

Route::get('/movies-home', function () {
    return view('movies-home');
});

Route::get('/movies-infinite-scroll', function () {
    return view('movies-infinite-scroll');
});

Route::get('/movies-load-more', function () {
    return view('movies-load-more');
});

Route::get('/movies-pagination', function () {
    return view('movies-pagination');
});

Route::get('/movies-style-1', function () {
    return view('movies-style-1');
});

Route::get('/movies-style-2', function () {
    return view('movies-style-2');
});

Route::get('/movies-style-3', function () {
    return view('movies-style-3');
});

Route::get('/pricing-style-1', function () {
    return view('pricing-style-1');
});

Route::get('/pricing-style-2', function () {
    return view('pricing-style-2');
});

Route::get('/recover-password', function () {
    return view('recover-password');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/single-episode', function () {
    return view('single-episode');
});

Route::get('/single-movie', function () {
    return view('single-movie');
});

Route::get('/single-tv-shows', function () {
    return view('single-tv-shows');
});

Route::get('/tennis', function () {
    return view('tennis');
});

Route::get('/traveling', function () {
    return view('traveling');
});

Route::get('/tv-shows-home', function () {
    return view('tv-shows-home');
});

Route::get('/tv-shows-infinite-scroll', function () {
    return view('tv-shows-infinite-scroll');
});

Route::get('/tv-shows-load-more', function () {
    return view('tv-shows-load-more');
});

Route::get('/tv-shows-pagination', function () {
    return view('tv-shows-pagination');
});

Route::get('/tv-shows-style-1', function () {
    return view('tv-shows-style-1');
});

Route::get('/tv-shows-style-2', function () {
    return view('tv-shows-style-2');
});

Route::get('/tv-shows-style-3', function () {
    return view('tv-shows-style-3');
});

Route::get('/upload-video', function () {
    return view('upload-video');
});

Route::get('/video-home', function () {
    return view('video-home');
});

Route::get('/video-infinite-scroll', function () {
    return view('video-infinite-scroll');
});

Route::get('/video-load-more', function () {
    return view('video-load-more');
});

Route::get('/video-pagination', function () {
    return view('video-pagination');
});

Route::get('/videos-style-1', function () {
    return view('videos-style-1');
});

Route::get('/videos-style-2', function () {
    return view('videos-style-2');
});

Route::get('/videos-style-3', function () {
    return view('videos-style-3');
});