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
Route::get('/404-error', function () {
    return view('404_error');
});
Route::get('/about-us', function () {
    return view('about');
});
Route::get('/employer', function () {
    return view('employer');
});
Route::get('/why-us', function () {
    return view('why-us');
});
Route::get('/terms-&-conditions', function () {
    return view('terms-&-conditions');
});
Route::get('/submit-a-job', function () {
    return view('submit-a-job');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/listing-single', function () {
    return view('listing-single');
});
Route::get('/listing-right', function () {
    return view('listing-right');
});
Route::get('/listing-left', function () {
    return view('listing-left');
});
Route::get('/job-seeker', function () {
    return view('job-seeker');
});
Route::get('/index_vi', function () {
    return view('index_vi');
});
Route::get('/index_v', function () {
    return view('index_v');
});
Route::get('/index_map', function () {
    return view('index_map');
});
Route::get('/index_iv', function () {
    return view('index_iv');
});
Route::get('/index_II', function () {
    return view('index_II');
});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/cv-register', function () {
    return view('cv-registration');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/company-listing-single-results', function () {
    return view('company-listing-single-results');
});
Route::get('/company-listing-single', function () {
    return view('company-listing-single');
});
Route::get('/company-listing', function () {
    return view('company-listing');
});
Route::get('/client-review', function () {
    return view('client-review');
});
Route::get('/candidate-profile', function () {
    return view('candidate-profile');
});
Route::get('/candidate-listing', function () {
    return view('candidate-listing');
});
Route::get('/blog-single-right', function () {
    return view('blog-single-right');
});
Route::get('/blog-single-left', function () {
    return view('blog-single-left');
});
Route::get('/blog-right', function () {
    return view('blog-right');
});
Route::get('/blog-left', function () {
    return view('blog-left');
});
Route::get('/temporary-staffing', function () {
    return view('temporary-staffing');
});