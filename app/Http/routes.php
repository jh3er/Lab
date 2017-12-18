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

Route::get('/profile','UserController@profile');

Route::post('/updateUser/{id}' , 'UserController@update');

Route::get('/viewuser' , 'UserController@index');

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


route::get('/tranhistory' , 'TransactionController@index') ;

route::get('/detail/{tranId}' , 'DetailController@index') ;

Route::get('/test', function () {
    return view('insertShoes');
});

Route::get('/test2', function () {
    return view('updateShoes');
});

Route::get('/test3', function () {
    return view('insertBrand');
});

Route::get('/test4', function () {
    return view('updateBrand');
});

Route::get('/test5', function () {
    return view('brandList');
});

Route::get('/test6', function () {
    return view('updateUser');
});

Route::get('/test7', function () {
    return view('insertUser');
});

Route::get('/test8', function () {
    return view('userList');
});


