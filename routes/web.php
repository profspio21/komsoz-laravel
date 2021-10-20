<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});
Route::get('/streaming', function () {
    return view('streaming');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/jadwalmisa', function () {
    return view('jadwalmisa');
});
Route::get('/news', [PostController::class, 'index']);
Route::get('/news/{slug}', [PostController::class, 'show']);

Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Route::get('/admin', [LoginController::class, 'index']);;
// Route::post('/admin', [LoginController::class, 'authenticate']);;

Route::group(['middleware' => 'auth'], function () {
 
    Route::get('admin', [HomeController::class, 'index'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});