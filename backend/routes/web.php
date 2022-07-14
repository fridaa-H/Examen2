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

$router->get('/usuarios', "UsuarioController@index");
//$router->get('/docentes', "DocenteController@index2");
$router->post('/usuarios', "UsuarioController@create");
$router->get ('/usuarios/{id}', "UsuarioController@show");
$router->put('/usuarios/{id}', 'UsuarioController@edit');
$router->delete('/usuarios/{id}', 'UsuarioController@delete');
//$router->get("/calcular/{nombre}/{peso}/{estatura}","calcularImc@calcular");


