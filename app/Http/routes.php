<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

require __DIR__.'/Routes/admin.php';
require __DIR__.'/Routes/home.php';
require __DIR__.'/Routes/test.php';

Route::get('/', function () {
    $list = App\Model\Demo::all();
    return view('welcome', ['list' => $list]);
});
Route::get('/home', function () {
    $list = App\Model\Demo::all();
    return view('home', ['list' => $list]);
});
 
//首页
Route::get('/', 'HomeController@index');



Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');