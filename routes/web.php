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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


// $router->get('/users/register', '');
// $router->get('/users/login', '');
// $router->get('/users/password/forgot', '');
// $router->get('/users/password/reset', '');
// $router->get('/users/profile', '');
// $router->get('/users/profile/{id}/update', '');

// $router->get($uri, $callback);
// $router->post($uri, $callback);
// $router->put($uri, $callback);
// $router->patch($uri, $callback);
// $router->delete($uri, $callback);
// $router->options($uri, $callback);

$router->group(['prefix' => 'api'], function() use (&$router) {

    $router->group(['prefix' => 'v1'], function() use (&$router) {

        $router->group(['prefix' => 'test'], function() use (&$router) {
            echo "routing stuff...";
        });

    });

});
