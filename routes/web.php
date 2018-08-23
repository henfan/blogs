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

Route::group([
    'prefix'=>'test',
    'namespace'=>'Test',
],function(){
    Route::get('index','TestController@index');
    Route::get('insert/{name?}','TestController@insert');
    Route::get('detail/{id}','TestController@detail');
    Route::get('delete/{id}','TestController@delete');
    Route::get('update/{id}/{name}','TestController@update');
});
yum install php72w php72w-cli php72w-common php72w-devel php72w-embedded php72w-fpm php72w-gd php72w-mbstring php72w-mysqlnd php72w-opcache php72w-pdo php72w-xml php72w-curl php72w-redis