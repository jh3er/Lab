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

Route::get('/insertuserview', function () {
    return view('insertUser');
});

route::post('/insertuser' , 'UserController@insert');

Route::get('/updateuserview/{id}', 'UserController@display');

route::post('/deleteuser/{id}' , 'UserController@delete') ;
//--------------------------------------------------------------\\

//controller for shoes

route::get('/shoes' , 'ShoesController@index') ;

route::get('/shoessearch' , 'ShoesController@search');

route::get('/display/{id}' , 'ShoesController@display') ;

route::post('/addCart/{id}/{price}' , 'ShoesController@addToCart') ;

route::post('/insertsh' , 'ShoesController@insert') ;

Route::get('/insertshoe', function () {
    return view('insertShoes');
});

Route::get('/updateShoe/{id}' , 'ShoesController@display') ;

route::post('/updateshoes/{id}' , 'ShoesController@update') ;

route::post('/deleteshoes/{id}' , 'ShoesController@delete') ;
//--------------------------------------------------------------\\
//controller for cart
route::get('/viewcart' ,'CartController@index') ;

route::get('/deleteCart/{id}' , 'CartController@delete') ;

//--------------------------------------------------------------\\
//controller for transaction

route::post('/checkout' ,'TransactionController@insert') ;


route::get('/tranhistory' , 'TransactionController@index') ;

route::get('/detail/{tranId}' , 'DetailController@index') ;



//--------------------------------------------------------------\\
//controller for brand

Route::get('/viewbrand', 'BrandController@index');

Route::get('/insertbrandview', function () {
    return view('insertBrand');
});

route::post('/insertbrand' , 'BrandController@insert') ;

Route::get('/updatebrandview/{id}', 'BrandController@display');

route::post('/updatebrand/{id}' , 'BrandController@update') ;





