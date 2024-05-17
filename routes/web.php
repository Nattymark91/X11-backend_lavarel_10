<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

$router->group(['prefix' => 'api'], function($router){
    $router->get('cards', 'App\Http\Controllers\CardsController@index');
    $router->post('cards', 'App\Http\Controllers\CardsController@create');
});
