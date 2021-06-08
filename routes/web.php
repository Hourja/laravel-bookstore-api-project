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

//API ROUTES
Route::get('/api/books', 'APIBookController@index');

Route::get(
    'api/books/show/{id?}',
    'APIBookController@show'
)->where(['id' => '\d+']);



//ESHOP ROUTES

Route::get('/eshop', 'EshopController@index');  // DEFAULT HOME INDEX

Route::get('/eshop/item/{id?}', 'EshopController@show'); // SINGLE ITEM PAGE

Route::get(
    'eshop/categories/{id?}',
    'EshopController@category'     // CATEGORY PAGE
);
Route::get(
    'eshop/subcategories/{id?}',  // SUBCATEGORY PAGE
    'EshopController@subcategory'
);
