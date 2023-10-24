<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\PageController;

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

$router->get('/', 'PageController@home');
$router->get('/about', 'PageController@about');
$router->get('/practice', 'PageController@practice');
$router->get('/contact', 'PageController@contact');
$router->get('/news', 'PageController@news');
$router->get('/login', 'PageController@login');

$router->post('/login', 'AuthController@login');

$router->get('/private/dashboard', 'PageController@dashboard');
$router->post('/private/about', 'AboutController@update');
$router->post('/private/about/image', 'AboutController@update');
// $router->get('/private/news', 'NewsController@index');
