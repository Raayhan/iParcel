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
Route::get('/login', [PagesController::class, 'login']);




        
   
Route::group(['middleware' => 'prevent-back-history'],function(){
 

  //All Customer Routes


  Route::prefix('/customer')->name('customer.')->namespace('Customer')->group(function(){

      Route::get('/dashboard',[App\Http\Controllers\Customer\DashboardController::class,'index'])->middleware('customer')->name('dashboard');
    

      //Login Routes
      Route::get('/register',[App\Http\Controllers\Customer\Auth\RegisterController::class,'CustomerRegisterForm'])->name('register');
      Route::post('/register',[App\Http\Controllers\Customer\Auth\RegisterController::class,'RegisterCustomer']);
      Route::get('/login',[App\Http\Controllers\Customer\Auth\LoginController::class,'showLoginForm'])->name('login');
      Route::post('/login',[App\Http\Controllers\Customer\Auth\LoginController::class,'login']);
      Route::post('/logout',[App\Http\Controllers\Customer\Auth\LoginController::class,'logout'])->name('logout');
  

      //Profile Routes

      Route::get('/profile/complete',[App\Http\Controllers\Customer\Profile\CompleteProfileController::class,'CompleteForm'])->middleware('customer')->name('CompleteForm');
      Route::post('/profile/complete', [App\Http\Controllers\Customer\Profile\CompleteProfileController::class,'CompleteProfile']);
  });
  
  


  //All Branch Routes


  
  Route::prefix('/branch')->name('branch.')->namespace('Branch')->group(function(){

      Route::get('/dashboard',[App\Http\Controllers\Branch\DashboardController::class,'index'])->middleware('branch')->name('dashboard');
    
      //Login Routes
      Route::get('/login',[App\Http\Controllers\Branch\Auth\LoginController::class,'showLoginForm'])->name('login');
      Route::post('/login',[App\Http\Controllers\Branch\Auth\LoginController::class,'login']);
      Route::post('/logout',[App\Http\Controllers\Branch\Auth\LoginController::class,'logout'])->name('logout');
  
  });
   
    


  //All Admin Routes




  Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    
    //Dashboard Routes
      Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->middleware('admin')->name('dashboard');
     
      // Admin Profile Routes

      Route::get('/profile/view',[App\Http\Controllers\Admin\Profile\viewProfileController::class,'ViewProfile'])->middleware('admin')->name('profile');


     
      //Branch Admin Routes
      Route::get('/branch/branches',[App\Http\Controllers\Admin\ViewBranchController::class,'index'])->middleware('admin')->name('branches');
      Route::get('/branch/add',[App\Http\Controllers\Admin\AddBranchController::class,'BranchRegisterForm'])->middleware('admin')->name('branch.add');
      Route::post('/branch/add',[App\Http\Controllers\Admin\AddBranchController::class,'AddBranch']);
    

      //Customer Admin Routes
      Route::get('/customer/customers',[App\Http\Controllers\Admin\ViewCustomerController::class,'index'])->middleware('admin')->name('customers');
    
      //Login Routes
      Route::get('/login',[App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('login');
      Route::post('/login',[App\Http\Controllers\Admin\Auth\LoginController::class,'login']);
      Route::post('/logout',[App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('logout');
  });
    

 

      //Auth::routes();   
          

      Route::get('/auth/google', [App\Http\Controllers\Customer\Auth\GoogleController::class, 'redirectToGoogle']);
      Route::get('/auth/google/callback', [App\Http\Controllers\Customer\Auth\GoogleController::class, 'handleGoogleCallback']);

      Route::get('/auth/linkedin', [App\Http\Controllers\Customer\Auth\LinkedinController::class, 'redirectToLinkedin']);
      Route::get('/auth/linkedin/callback', [App\Http\Controllers\Customer\Auth\LinkedinController::class, 'handleLinkedinCallback']);




});
