<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //barang
    $router->get('/barang', 'barangController@index');
    $router->get('/barang/{id}', 'barangController@show');
    $router->post('/barang', 'barangController@store');
    $router->put('/barang/{id}', 'barangController@update');
    $router->delete('/barang/{id}', 'barangController@destroy');
    //detail_penjualan
    $router->get('/detail_penjualan', 'detail_penjualanController@index');
    $router->get('/detail_penjualan/{id}', 'detail_penjualanController@show');
    $router->post('/detail_penjualan', 'detail_penjualanController@store');
    $router->put('/detail_penjualan/{id}', 'detail_penjualanController@update');
    $router->delete('/detail_penjualan/{id}', 'detail_penjualanController@destroy');
    //kategori
    $router->get('/kategori', 'kategoriController@index');
    $router->get('/kategori/{id}', 'kategoriController@show');
    $router->post('/kategori', 'kategoriController@store');
    $router->put('/kategori/{id}', 'kategoriController@update');
    $router->delete('/kategori/{id}', 'kategoriController@destroy');
    //pelanggan
    $router->get('/pelanggan', 'pelangganController@index');
    $router->get('/pelanggan/{id}', 'pelangganController@show');
    $router->post('/pelanggan', 'pelangganController@store');
    $router->put('/pelanggan/{id}', 'pelangganController@update');
    $router->delete('/pelanggan/{id}', 'pelangganController@destroy');
    //penjualan
    $router->get('/penjualan', 'penjualanController@index');
    $router->get('/penjualan/{id}', 'penjualanController@show');
    $router->post('/penjualan', 'penjualanController@store');
    $router->put('/penjualan/{id}', 'penjualanController@update');
    $router->delete('/penjualan/{id}', 'penjualanController@destroy');


});