<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    \Session::put('lang', 'en');
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/404-page', function () {
    return view('404-page');
});
Route::get('/home', function () {
    return view('pages/home');
});
Route::get('/profile', function () {
    return view('pages/profile');
});
Route::get('/typography', function () {
    return view('pages/typography');
});
Route::get('/grid', function () {
    return view('pages/grid');
});
Route::get('/table', function () {
    return view('pages/table');
});
Route::get('/form-elements', function () {
    return view('pages/forms/form-elements');
});
Route::get('/form-components', function () {
    return view('pages/forms/form-components');
});

Route::get('/button', function () {
    return view('pages/ui-element/button');
});
Route::get('/dropdown', function () {
    return view('pages/ui-element/dropdown');
});
Route::get('/icons', function () {
    return view('pages/ui-element/icon');
});
Route::get('/panels', function () {
    return view('pages/ui-element/panel');
});
Route::get('/alerts', function () {
    return view('pages/ui-element/alert');
});
Route::get('/progressbars', function () {
    return view('pages/ui-element/progressbar');
});
Route::get('/pagination', function () {
    return view('pages/ui-element/pagination');
});
Route::get('/other-elements', function () {
    return view('pages/ui-element/other');
});

Route::get('/chartjs', function () {
    return view('pages/charts/chartjs');
});
Route::get('/c3chart', function () {
    return view('pages/charts/c3chart');
});
Route::get('/calendar', function () {
    return view('pages/calendar');
});
Route::get('/inbox', function () {
    return view('pages/mail/inbox');
});
Route::get('/compose', function () {
    return view('pages/mail/compose');
});
Route::get('/invoice', function () {
    return view('pages/invoice');
});
Route::get('/docs', function () {
    return view('pages/docs');
});
Route::get('/blank', function () {
    return view('pages/blank');
});

Route::get('api/change-theme', function() {
    Session::set('theme', Request::get('theme'));
});
Route::get('api/lang', function() {
    Session::set('lang', Request::get('lang'));
});
Route::get('api/set-rtl', function() {
    Session::set('rtl', Request::get('rtl'));
});
