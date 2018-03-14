<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('/', function () { return 'API home'; });
    $api->get('/echo/{id?}', 'App\Api\v1\Controllers\SimpleController@show');
    $api->resource('simple', 'App\Api\v1\Controllers\SimpleController', ['only' => ['index', 'show']]);
});
