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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile','UserController@index');

Route::post('/updateUser/{id}' , 'UserController@update');

//--------------------------------------------------------------\\

//controller for shoes

route::get('/shoes' , 'ShoesController@index') ;

route::get('/display/{id}' , 'ShoesController@display') ;

route::post('/addCart/{id}/{price}' , 'ShoesController@addToCart') ;

//--------------------------------------------------------------\\
//controller for cart
route::get('/viewcart' ,'CartController@index') ;

route::get('/deleteCart/{id}' , 'CartController@delete') ;

//--------------------------------------------------------------\\
//controller for transaction

route::post('/checkout' ,'TransactionController@insert') ;

//route::post('/register' , 'UserController@register');

route::get('/transaction',function(){
	return view('transaction');
});

route::get('/transactionDetail',function(){
	return view('transactionDetail');
});