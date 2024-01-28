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
    return view('home');
});

Route::get('/signup', function() {
    return view('signup');
});

Route::get('/auto-rotate', function() {
    return view('Product/autoRotate');
});

Route::get('/machine-detection', function() {
    return view('Product/machine');
});


Route::get('/sticky-agent', function() {
    return view('Product/stickyAgent');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/speed-to-dial', function () {
    return view('Product/speed');
});

Route::get('/smart-did-routing', function () {
    return view('Product/smartDid');
});

Route::get('/sms', function () {
    return view('Product/sms');
});

Route::get('/voip-for-market-research', function () {
    return view('Solutions/industry/VoIPMarket');
});

Route::get('/call-centre-solution-for-software-and-technology', function () {
    return view('Solutions/industry/software');
});

Route::get('/call-center-software-solution', function () {
    return view('Solutions/By Need/callCenter');
});

Route::get('/voip-system-for-real-estate', function () {
    return view('Solutions/industry/realEstate');
});


Route::get('/support-contact-center', function () {
    return view('Solutions/By Use Case/support');
});
