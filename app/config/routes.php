<?php

use app\controllers\ApiExampleController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */
$router->get('/', function() use ($app) {
	$app->render('welcome', [ 'message' => 'You are gonna do great things!' ]);
});

$router->group('/auth', function() use ($app) {
    // You could put your auth routes here
    // $router->get('/login', [ $Auth_Controller, 'login' ]);
    // $router->get('/logout', [ $Auth_Controller, 'logout' ]);
    // $router->get('/register', [ $Auth_Controller, 'register' ]);
    // $router->get('/forgot-password', [ $Auth_Controller, 'forgotPassword' ]);
    // $router->get('/reset-password', [ $Auth_Controller, 'resetPassword' ]);
});