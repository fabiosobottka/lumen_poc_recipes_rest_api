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

$router->group(['prefix' => 'api'], function () use ($router) {

    // Matches "/api/register
    $router->get('/', function () use ($router) {
        $res['success'] = true;
        $res['result'] = "Hello there welcome to your first web api using lumen!";
        return response($res);
    });

    $router->post('/login', 'LoginController@login');
    $router->post('/logout', 'UserController@logout');

    $router->post('/user', 'LoginController@create');
    $router->get('/users', 'UserController@getAll');
    $router->get('/user/profile', 'UserController@profile');
    $router->get('/user/{id}', 'UserController@getUser');

    $router->post('/recipe', 'RecipeController@create');
    $router->put('/recipe/{id}', 'RecipeController@update');
    $router->delete('/recipe/{id}', 'RecipeController@delete');
    $router->get('/recipe/{id}', 'RecipeController@getRecipe');
    $router->get('/recipes', 'RecipeController@getAll');
});
