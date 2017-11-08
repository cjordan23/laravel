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



Route::get('/users/{id}/{name}', function($id,$name){
    return 'This is user '.$id.' This user name is '.$name;
});                                                       

Route::get('/index', 'PagesController@index');
Route::get('/posting','PagesController@posting');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

// Route::get('/index',function(){
//     return view('pages.index');
// });
// Route::get('/about',function(){
//     return view('pages.about');
// });
// Route::get('/services',function(){
//     return view('pages.services');
