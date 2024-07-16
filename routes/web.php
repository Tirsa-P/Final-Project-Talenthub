<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, Laravel!';
});

Route::get('/user/{id}', function ($id) {
    return 'User' . $id;
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function () {
        return 'Admin Users';
    });
});

Route::post('/user', function (Illuminate\Http\Request $request) {
    $name = $request->input('name');
    return 'User ' . $name;
});



