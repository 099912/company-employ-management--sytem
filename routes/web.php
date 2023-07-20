<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\ForgotPasswordController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/',[UserController::class,'show'])->name('login.view');
Route::post('/login',[UserController::class,'checklogin'])->name('login.check');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');


Route::middleware(['user'])->group( function () {

    Route::get('/admin/home',[AdminController::class,'index'])->name('admin.view');



Route::get('/company',[CompanyController::class,"create"])->name('company.create') ;
Route::post('/company/save',[CompanyController::class,"store"])->name('company.store') ;
Route::get('/company/view',[CompanyController::class,"show"])->name('company.show') ;
Route::get('/company/destroy/{id}',[CompanyController::class,"destroy"])->name('company.destroy') ;
Route::get('/company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::post('/company/update/{id}',[CompanyController::class,'update'])->name('company.update');

//Employe
// Route::resource('employ', EmployController::class);
Route::get('/employ',[EmployController::class,"create"])->name('employ.create') ;
 Route::post('/employ/save',[EmployController::class,"store"])->name('employ.store') ;
 Route::get('/employ/view',[EmployController::class,"show"])->name('employ.show') ;
 Route::get('/employ/destroy/{id}',[EmployController::class,"destroy"])->name('employ.destroy') ;
 Route::get('/employ/edit/{id}',[EmployController::class,"edit"])->name('employ.edit');
 Route::post('/employ/update/{id}',[EmployController::class,"update"])->name('employ.update');




});
});


















Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
