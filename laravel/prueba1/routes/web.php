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

// router forma #1
/*
Route::get ('home',function(){
    return view ('home');
});

Route::get ('acercade',function(){
    return view ('acercade');
});


Route::get ('contacto',function(){
    return view ('contacto');
});


Route::get ('quienessomos',function(){
    return view ('quienessomos');
});*/

// router forma #2

//Route::get ('home','pagesController@home');
/*
Route::get ('acercade','pagesController@acercade');
Route::get ('contactenos','pagesController@contactenos');
Route::get ('quienessomos','pagesController@quienessomos');
*/
//route forma 3

Route::get ('home',["as"=>"route.home","uses"=>"pagesController@home"]);
Route::get ('acercade',["as"=>"route.acercade","uses"=>"pagesController@acercade"]);
Route::get ('contactenos',["as"=>"route.contactenos","uses"=>"pagesController@contactenos"]);
Route::get ('quienessomos',["as"=>"route.quienessomos","uses"=>"pagesController@quienessomos"]);
