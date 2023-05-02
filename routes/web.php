<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AdminController;


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
Route::get('/', [SchoolController::class,'index']);


Route::get('/aboutus', [SchoolController::class,'about'])->name('about');
Route::get('/teachers', [SchoolController::class,'teachers'])->name('teachers');
Route::get('/sign', [SchoolController::class,'sign'])->name('sign');
Route::post('/sign', [SchoolController::class,'signsubmit'])->name('signsubmit');
Route::get('/home', [HomeController::class,'index']);



Route::group(['middleware' => 'auth'], function () {
    
Route::get('/admin', [AdminController::class ,'admin']);
Route::get('/admin/student', [AdminController::class ,'allstudents']);
Route::get('/admin/student/accepted', [AdminController::class ,'acceptedstudents']);
Route::get('/admin/student/{id}', [AdminController::class ,'student']);
Route::get('/admin/teacher', [AdminController::class ,'allteachers']);
Route::get('/admin/teachers/{id}', [AdminController::class ,'teacher']);
Route::get('/admin/teacher/add', [AdminController::class ,'addteacher']);
Route::post('/admin/teacher/add', [AdminController::class,'storeteacher'])->name('add new teacher');

Route::get('/admin/admins', [AdminController::class ,'alladmins']);
Route::get('/admin/admins/{id}', [AdminController::class ,'adminview']);
Route::get('/admin/admins/{id}/edit', [AdminController::class ,'editadmin']);
Route::post('/admin/admins/{id}/edit', [AdminController::class,'update'])->name('edit');
Route::get('/admin/student/accept/{id}', [AdminController::class ,'accept']);
Route::get('/admin/student/delete/{id}', [AdminController::class ,'decline']);
Route::get('/admin/teacher/delete/{id}', [AdminController::class ,'deleteteacher']);
Route::get('/admin/teacher/{id}/edit', [AdminController::class ,'editteacher']);
Route::post('/admin/teacher/{id}/edit', [AdminController::class,'updateteacher'])->name('edit teacher');



});













Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
