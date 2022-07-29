<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;


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

// Client

Route::get('/client/login',[ClientController::class,"clientLogin"])->name("clientLogin");
Route::post('/client/login',[ClientController::class,"clientLoginSubmitted"])->name("clientLogin");

Route::get('/client/registration',[ClientController::class,"clientRegistration"])->name("clientRegistration");
Route::post('/client/registration',[ClientController::class,"clientRegistrationSubmitted"])->name("clientRegistration");

Route::get('/client/home',[ClientController::class,"home"])->name("home");

Route::get('/logout',function()
{
    session()->flush();
    session()->flash('msg','Sucessfully Logged out');
    return redirect()->route('clientLogin');
                            })->name('logout');

Route::get('/client/profile',[ClientController::class,"clientProfile"])->name("clientProfile");
Route::post('/client/profile',[ClientController::class,"clientProfileUpdated"])->name("clientProfile");

Route::get('/doctors',[ClientController::class,"doctorList"])->name("doctorList");

//Product List
Route::get('productlist',[ProductController::class, 'list'])->name('productlist');

//add product
Route::get('/addProduct', function () {
    return view('addProduct');
});

Route::post('/addProduct',[ProductController::class, 'add'])->name('add');

