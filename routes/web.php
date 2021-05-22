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
Route::get('/menu0109',[HomeController::class, 'menu0109'] );
Route::get('/menu0109/home0109',[HomeController::class, 'home0109'] );
Route::get('/menu0109/artikel0109',[HomeController::class, 'artikel0109'] );
Route::get('/menu0109/artikel0109/contact0109',[HomeController::class, 'contact0109'] );