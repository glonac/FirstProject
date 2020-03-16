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

Route::get('/','MainController@index')->name('main-list');
Route::get('/Personal', function () {
    return view('Fronted.Personal');
});
//Route::get('/Services', function () {
//    return view('Fronted.Services');
//});
Route::get('/Services','ServicesController@index')->name('services-list');
Route::get('/news', function () {
    return view('Fronted.news');
});
Route::get('/School', function () {
    return view('Fronted.School');
});
Route::get('/OGE', function () {
    return view('Fronted.OGE');
});
Route::get('/EGE', function () {
    return view('Fronted.EGE');
});
Route::post('/School/submit', 'SchoolController@submit');



