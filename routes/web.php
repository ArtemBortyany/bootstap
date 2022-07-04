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
Route::get('/2', function () {
    return view('Lesson2');
});
Route::get('/3', function () {
    return view('Lesson3');
});
Route::get('/4', function () {
    return view('Lesson4');
});
Route::get('/5', function () {
    return view('Lesson5');
});
Route::get('/6', function () {
    return view('Lesson6');
});
Route::get('/7', function () {
    return view('Lesson7');
});
Route::get('/8', function () {
    return view('Lesson8');
});
Route::get('/9', function () {
    return view('Lesson9');
});
Route::get('/10', function () {
    return view('Lesson10');
});
Route::get('/11', function () {
    return view('Lesson11');
});
Route::get('/12', function () {
    return view('Lesson12');
});
Route::get('/13', function () {
    return view('Lesson13');
});
Route::get('/14', function () {
    return view('Lesson14');
});
Route::get('/15', function () {
    return view('Lesson15');
});
Route::get('/Test', function () {
    return view('Test');
});
Route::get('/sample', function () {
    return view('sample');
});
Route::get('/index', 'ContactController@index');

