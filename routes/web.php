<?php

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

$app->group(['prefix' => 'api'], function() use ($app) {     
    //product route     
    $app->get('products', 'ProductController@index');
    $app->get('products/{id}', 'ProductController@show');
    $app->post('products', 'ProductController@store');
    $app->put('products/{id}', 'ProductController@update');
    $app->delete('products/{id}', 'ProductController@delete');
    $app->get('categories', 'CategoryController@index');
    $app->get('categories/{id}', 'CategoryController@show');
    $app->post('categories', 'CategoryController@store');
    $app->put('categories/{id}', 'CategoryController@update');
    $app->delete('categories/{id}', 'CategoryController@delete'); 
});

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });



// How to Add Key on Lumen
// $router->get('/key', function() {
//     return str_random(32);
// });
