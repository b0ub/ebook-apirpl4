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

Route::get('coba', function(){
    return "Halo";
});

Route::get('coba1', function(){
    return ['rapli','jeje','juju'];
});

Route::get('coba2', function(){
    return [
        'Nama' => 'Kevin Jonson',
        'Kelas' => 'RPL 4',
        'NIS' => 696969
    ];
});

Route::get('coba3', function(){
    return response()->json(
        [
        'Nama' => 'Kevin Jonson',
        'Kelas' => 'RPL 4',
        'NIS' => 696969
        ], 201
    );
});