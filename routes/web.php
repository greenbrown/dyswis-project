<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoriesController;

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

Route::get('/home', function () {
    return view('home');
});

// Route::get('/stories', function () {
//     return view('welcome');
// });

Route::get('/episodes', function () {
    return view('welcome');
});

Route::resource('stories',StoriesController::class);
