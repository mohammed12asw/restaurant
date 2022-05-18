<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddingController;
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
    return view('index');
});
Route::get('/home', [HomeController::class, 'home']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/menu', [HomeController::class, 'menu']);

Route::get('/search', [HomeController::class, 'search']);
Route::get('/searchbyill', [HomeController::class, 'searchbyill']);
Route::get('/chef', [HomeController::class, 'chef']);
Route::get('/chef', [HomeController::class, 'chef']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/users', [AdminController::class, 'user']);

Route::get('/adminchef', [AdminController::class, 'adminchef']);

Route::get('/adminreservation', [AdminController::class, 'adminreservation']);
Route::get('/reservation', [HomeController::class, 'reservation']);

Route::get('/foods', [AdminController::class, 'foods']);
Route::post('/uploadfood', [AdminController::class, 'uploadfood']);

Route::post('/uploadchef', [AdminController::class, 'uploadchef']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
Route::get('/deletefood/{id}', [AdminController::class, 'deletefood']);

Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);

Route::get('/deletereservation/{id}', [AdminController::class, 'deletereservation']);


Route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);

Route::get('/updatefood/{id}', [AdminController::class, 'updatefood']);
/* form action */
Route::post('/update/{id}', [AdminController::class, 'update']);
/* reservation post */
Route::post('/reservation', [AdminController::class, 'reservation']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);
/* showcart */
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);

Route::get('/addpasta', [AddingController::class, 'addpasta']);
Route::get('/addchicken', [AddingController::class, 'addchicken']);
Route::get('/addfish', [AddingController::class, 'addfish']);
Route::get('/addpotato', [AddingController::class, 'addpotato']);
Route::get('/addporkmeat', [AddingController::class, 'addporkmeat']);
Route::get('/addrice', [AddingController::class, 'addrice']);
Route::get('/addwheat', [AddingController::class, 'addwheat']);
Route::get('/addsoy', [AddingController::class, 'addsoy']);
Route::get('/addbeans', [AddingController::class, 'addbeans']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
