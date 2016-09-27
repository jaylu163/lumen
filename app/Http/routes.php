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

$app->group(['prefix' => 'demo','namespace' => 'App\Http\Controllers'],function() use ($app){

    $app->get('abc','DemoController@index');
    $app->get('getUser','DemoController@getUserById');
});
