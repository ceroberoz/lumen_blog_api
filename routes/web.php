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

// $app->get($uri, $callback);
// $app->post($uri, $callback);
// $app->put($uri, $callback);
// $app->patch($uri, $callback);
// $app->delete($uri, $callback);
// $app->options($uri, $callback);

// $app->get('meong/{id}', function($id)
// {
// 	return "meong ".$id;
// });

// $app->post('meong', function()
// {
// 	//
// });