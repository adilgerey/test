<?php

use App\Http\Controllers\Admin\Tmz\Tm;
use App\Http\Controllers\Admin\Tmz\Tmz;
use Illuminate\Support\Facades\Route;
use Admin\Tmzs\TmController;

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

Route::get('/admin/tmz/tmz/add', [Tmz::class, 'add_tmz']);

Route::get('/admin/tmz/tmz/edit/{id}', [Tmz::class, 'get_tmz']);
Route::resource('/tmz', Tm::class);
