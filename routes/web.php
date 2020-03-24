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
Route::get('/news-show',function (){
    return view('Fronted.news-show');
});
Route::get('/OGE','ogeController@index')->name('main-oge');

Route::get('/EGE','EgeController@index')->name('main-ege');
Route::post('/School/submit', 'SchoolController@submit');



