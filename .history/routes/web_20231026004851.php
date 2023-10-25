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
$router->get('/practice/{slug}', 'PageController@practice');
$router->get('/contact', 'PageController@contact');
$router->get('/news', 'PageController@news');
$router->get('/news/{slug}', 'PageController@showNews');

$router->get('/login', 'PageController@login');
$router->post('/login', 'AuthController@login');

$router->get('/private/dashboard', 'PageController@dashboard');
$router->get('/private/profile', 'PageController@profile');
$router->post('/private/profile', 'PageController@updateProfile');

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

$router->get('/private/links', 'LinkController@index');
$router->get('/private/link/add', 'LinkController@create');
$router->post('/private/link/store', 'LinkController@store');
$router->get('/private/link/edit/{id}', 'LinkController@edit');
$router->post('/private/link/update/{id}', 'LinkController@update');
$router->delete('/private/link/delete/{id}', 'LinkController@destroy');

$router->get('/private/practices', 'PracticeController@index');
$router->get('/private/practice/add', 'PracticeController@create');
$router->post('/private/practice/store', 'PracticeController@store');
$router->get('/private/practice/edit/{id}', 'PracticeController@edit');
$router->post('/private/practice/update/{id}', 'PracticeController@update');
$router->delete('/private/practice/delete/{id}', 'PracticeController@destroy');
