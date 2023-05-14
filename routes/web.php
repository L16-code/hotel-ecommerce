<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserprofileController;
use App\Http\Controllers\Admin\AdminController;
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

Auth::routes();
Route::post('/signup', [UserController::class, 'register_save'])->name('user.register.save');
Route::post('/login', [UserController::class, 'login_save'])->name('user.login.save');
Route::get('/login',[UserController::class, 'userlogin'])->name('user.login');
Route::get('/register',[UserController::class, 'userregister'])->name('user.register');
Route::get('/logout',[UserController::class, 'userlogout'])->name('user.logout');


// Route::post('/login-submit', [LoginController::class, 'userlogin'])->name('user.login.submit');
Route::get('/',[UserController::class, 'user'])->name('user.home');
Route::get('/hotel-list',[UserController::class, 'hotel_list'])->name('user.hotel.list');
Route::get('/single-hotel/{id}',[UserController::class, 'hotel_single'])->name('user.hotel.singlehotel');
Route::get('/hotel-data/{id}',[UserController::class, 'hotel_data'])->name('user.hotel.data');
Route::get('/hotel-booking/{id}',[UserController::class, 'hotel_booking'])->name('user.hotel.booking');
Route::post('/hotel-save/{id}',[UserController::class, 'hotel_booking_save'])->name('user.hotel.book.save');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//activites user routes
Route::get('/Activity-list',[UserController::class, 'activity_list'])->name('user.activity.list');
Route::get('/single-activity/{id}',[UserController::class, 'activity_single'])->name('user.activity.singleactivity');
Route::get('/activity-data/{id}',[UserController::class, 'activity_data'])->name('user.activity.data');
Route::get('/activity-booking/{id}',[UserController::class, 'activity_booking'])->name('user.activity.booking');
Route::post('/activity-save/{id}',[UserController::class, 'activity_booking_save'])->name('user.activity.book.save');

// Route::get('/activity-data/{id}',[UserController::class, 'activity_data'])->name('user.activity.data');

//user profile routes
Route::get('/my-dashboard',[UserprofileController::class, 'user_dashboard'])->name('user.profile');
Route::get('/my-profile',[UserprofileController::class, 'user_profile'])->name('user.dashboard.profile');
Route::get('/profile-edit',[UserprofileController::class, 'user_profile_edit'])->name('user.dashboard.edit');

Route::post('/profile-edit-data',[UserprofileController::class, 'user_profile_edit_data'])->name('user.dashboard.profile.edit');
Route::post('/profile-edit-password',[UserprofileController::class, 'user_profile_edit_password'])->name('user.dashboard.password.edit');






//admin login
Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');

//admin routes
Route::group(['middleware' => 'auth:admin','prefix' => 'admin'], function() {



Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
Route::get('/agents', [AdminController::class, 'agent'])->name('agent');


//villas
Route::get('/villas-create', [AdminController::class, 'villas'])->name('villas');
Route::post('/villas-save', [AdminController::class, 'villas_save'])->name('villas.save');
Route::get('/villas', [AdminController::class, 'villas_show'])->name('villas.show');
Route::get('/villas_edit/{id}', [AdminController::class, 'villas_edit'])->name('villas.edit');
Route::get('/villas_delete/{id}', [AdminController::class, 'villas_delete'])->name('villas.delete');
Route::get('/villas_view/{id}', [AdminController::class, 'villas_view'])->name('villas.view');
Route::post('/villas-update/{id}', [AdminController::class, 'villas_update'])->name('villas.update');


//activities
Route::get('/activities-create', [AdminController::class, 'activities_create'])->name('activities.create');
Route::post('/activities-save', [AdminController::class, 'activities_save'])->name('activities.save');
Route::get('/activities-show', [AdminController::class, 'activities_show'])->name('activities.show');
Route::get('/activities_delete/{id}', [AdminController::class, 'activities_delete'])->name('activities.delete');
Route::get('/activities_view/{id}', [AdminController::class, 'activities_view'])->name('activities.view');
Route::get('/activities_edit/{id}', [AdminController::class, 'activities_edit'])->name('activities.edit');
Route::post('/activities-update/{id}', [AdminController::class, 'activities_update'])->name('activities.update');

//hotel booking
Route::get('/Hotel-booking', [AdminController::class, 'Hotel_booking'])->name('admin.booking');

});
