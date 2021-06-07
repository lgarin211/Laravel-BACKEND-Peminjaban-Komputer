<?php

use App\Admin\Controllers\dayPcController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('Server Information');
    $router->get('/Server_Information', 'HomeController@index')->name('Server Information');
    $router->resource('/dayhistory', PcController::class);
    $router->get('/onlinepc', 'dayPcController@index');
    $router->get('/new_Baner', 'dayPcController@addBaner');
    $router->post('/new_Baner', 'dayPcController@addBaner');
    $router->resource('/DataBaner', BanerController::class);



});
