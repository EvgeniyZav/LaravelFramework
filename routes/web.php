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

Route::get('/my-name', function () {
    return 'Заволынцев Евгений Сергеевич';
});

Route::get('/my-friend', function () {
    return 'Маеров Салават';
});
Route::get('/get-friend/{Name}', function ($Name) {
    return 'Мой друг: '.$Name;
});

Route::get('/my-city/{city}', function ($city) {
    return 'Мой город: '.$city;
});



Route::get('/Level/{lvl}', function ($lvl) {
return 'Нубас'.$lvl;
})->where('lvl', '[0-25]');

Route::get('/Level/{lvl}', function ($lvl) {
    return 'Специалист'.$lvl;
})->where('lvl', '[26-50]');

Route::get('/Level/{lvl}', function ($lvl) {
    return 'Босс'.$lvl;
})->where('lvl', '[51-75]');

Route::get('/Level/{lvl}', function ($lvl) {
    return 'Король'.$lvl;
})->where('lvl', '[76-98]');

Route::get('/Level/{lvl}', function ($lvl) {
    return 'Нубас'.$lvl;
})->where('lvl', '[99]');
