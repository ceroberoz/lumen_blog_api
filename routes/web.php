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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('api/v1/post','PostController@index');
$app->get('api/v1/post/{id}','PostController@getpost');
$app->post('api/v1/post','PostController@createpost');
$app->put('api/v1/post/{id}','PostController@updatepost');
$app->delete('api/v1/post/{id}','PostController@deletepost');

// $app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
// {
//     $app->get('post','PostController@index');
//     $app->get('post/{id}','PostController@getpost');
//     $app->post('post','PostController@createpost');
//     $app->put('post/{id}','PostController@updatepost');
//     $app->delete('post/{id}','PostController@deletepost');
// });