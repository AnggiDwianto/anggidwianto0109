<?php
use App\Http\Controllers\HomeController;
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
Route::get('/menu',[HomeController::class, 'menu'] );
Route::get('/menu/home',[HomeController::class, 'home'] );
Route::get('/menu/artikel',[HomeController::class, 'artikel'] );
Route::get('/menu/artikel/contact',[HomeController::class, 'contact'] );