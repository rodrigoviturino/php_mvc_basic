<?php
use core\Router;

$router = new Router();

// método HTTP - Rota - ClassController@metodoDaClassController
$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');
