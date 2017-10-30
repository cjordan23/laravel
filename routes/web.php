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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World!';
});

Route::get('/about',function(){
    return view('pages.about');
});

Route::get('/users/{id}/{name}', function($id,$name){
    return 'This is user '.$id.' This user name is '.$name;
});                                                       

Route::get('/index', 'PagesController@index');

Route::get('/about',function(){
    return view('pages.about');
});