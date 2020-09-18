<?php
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/customer/login', [PagesController::class, 'CustomerLogin']);



        
   
Route::group(['middleware' => 'prevent-back-history'],function(){
 
  Route::prefix('/branch')->name('branch.')->namespace('Branch')->group(function(){

    Route::get('/dashboard',[App\Http\Controllers\Branch\DashboardController::class,'index'])->name('dashboard');
   
    //Login Routes
    Route::get('/login',[App\Http\Controllers\Branch\Auth\LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[App\Http\Controllers\Branch\Auth\LoginController::class,'login']);
    Route::post('/logout',[App\Http\Controllers\Branch\Auth\LoginController::class,'logout'])->name('logout');
  
  });
   
    
  Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    
    
      Route::get('/dashboard',[App\Http\Controllers\AdminDashboardController::class,'index'])->middleware('admin')->name('dashboard');
  
    
  
    
    
    //Login Routes
    Route::get('/login',[App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[App\Http\Controllers\Admin\Auth\LoginController::class,'login']);
    Route::post('/logout',[App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('logout');
  });
    

 

Auth::routes();   
    
Route::get('/customer/dashboard', [App\Http\Controllers\CustomerDashboardController::class, 'index'])->middleware('customer')->name('dashboard');
Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);





});
