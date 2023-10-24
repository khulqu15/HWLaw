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
$router->post('/private/about/upload_image', 'AboutController@uploadImage');

$router->get('/private/news', 'NewsController@index');
$router->get('/private/news/add', 'NewsController@create');
$router->post('/private/news/store', 'NewsController@store');
$router->get('/private/news/edit/{id}', 'NewsController@edit');
$router->post('/private/news/update/{id}', 'NewsController@update');
$router->delete('/private/news/delete/{id}', 'NewsController@destroy');

$router->get('/private/news/categories', 'NewsCategoryController@index');
$router->get('/private/news/category/add', 'NewsCategoryController@create');
$router->post('/private/news/category/store', 'NewsCategoryController@store');
$router->get('/private/news/category/edit/{id}', 'NewsCategoryController@edit');
$router->post('/private/news/category/update/{id}', 'NewsCategoryController@update');
$router->delete('/private/news/category/delete/{id}', 'NewsCategoryController@destroy');
