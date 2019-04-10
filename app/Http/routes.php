<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

   return view('welcome');


});

Route::auth();



Route::get('/home', 'HomeController@index');

Route::get('/user/role',['middleware'=>'role',function(){

	return "heloo";
}]);
//you can register a lot of middleware in the same time 
Route::get('/user/role',['middleware'=>['role','auth','web'],function(){

	return "heloo";
}]);

Route::get('/admin','AdminController@index');