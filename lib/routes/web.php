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

Route::get('/','HomeController@getHome');
Route::get('/s','HomeController@getSent');



Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'admin','middleware'=>'CheckLogout'], function () {

        Route::get('/home', 'AdminController@getAdmin' );

        Route::get('/logout', 'AdminController@getLogout' );

        Route::group(['prefix' => 'category'], function () {

            Route::get('/', 'AdminController@getCategory');

        });

        Route::group(['prefix' => 'product'], function () {

            Route::get('/', 'AdminController@getProduct');

            Route::get('/add', 'AdminController@getAddProduct');

            
        });

        Route::get('/user', 'AdminController@getUser' );

        Route::get('/bill/all', 'AdminController@getBill' );

        Route::get('/bill/processing', 'AdminController@getBillProcessing' );

        Route::get('/bill/done', 'AdminController@getBillDone' );
    });
    
    Route::group(['prefix' => 'arca','middleware'=>'CheckLogin'], function () {
        Route::get('/', 'AdminController@getLogin' );
        Route::post('/', 'AdminController@postLogin' );
    });
    
});
