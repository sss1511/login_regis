<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\blogs\blogsController;

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


Route::get('/',[AuthController::class, 'home']);

Route::get('/userdashbord',[AuthController::class, 'userdashbord']);

Route::get('/userblogs',[AuthController::class, 'usershowblogs']);

Route::get('/register',[AuthController::class, 'register']);

Route::post('/regis', [AuthController::class,'storeuser']);


Route::get('/admindashbord',[AuthController::class, 'admindashbord']);



Route::post('/loginget', [AuthController::class,'authenticate']);



Route::get('/logout',[AuthController::class, 'logout']);





// Route::resource('products',[ProductController::class]);


//routes for blogs

Route::get('/showblogs',[blogsController::class, 'index']);

Route::get('/addblogs',[blogsController::class, 'create']);

Route::post('/addblogs',[blogsController::class, 'store']);

Route::get('blogedit/{id}',[blogsController::class, 'edit']);

Route::get('showbyid/{id}',[blogsController::class, 'show']);


Route::post('update/{id}',[blogsController::class, 'updated']);

Route::post('deleteblog/{id}',[blogsController::class, 'delete']);


Route::group(['middleware' => 'AdminViewUnAuth'], function ()
{ 
    Route::get('/login',[AuthController::class, 'login']);

   });









