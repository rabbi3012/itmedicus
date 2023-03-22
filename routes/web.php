<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\CompaniesController;
use App\Http\Controllers\backend\EmployeesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|/
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration',[AuthController::class,'regform'])->name('regform');
Route::post('/reg-form-submit',[AuthController::class,'regformsubmit'])->name('regform.submit');
Route::get('/',[AuthController::class,'login'])->name('login.form');
Route::post('/login-store',[AuthController::class,'store'])->name('admin.login');
Route::get('/log-out',[AuthController::class,'logout'])->name('logout');


Route::get('/admin-dashboard',[AdminController::class,'dashboard']);
Route::get('/master',[AdminController::class,'master']);
Route::get('/admin-new-page',[AdminController::class,'page'])->name('new.page');

Route::get('/companies-list',[CompaniesController::class,'list'])->name('list');
Route::get('/companies-form',[CompaniesController::class,'form'])->name('form');
Route::post('/companies-store',[CompaniesController::class,'store'])->name('companies.store');
Route::get('/companies/view/{id}',[CompaniesController::class,'view'])->name('companies.view');
Route::get('/companies/delete/{id}',[CompaniesController::class,'delete'])->name('companies.delete');
Route::get('/companies/edit/{id}',[CompaniesController::class,'edit'])->name('edit');
Route::post('/companies/update/{id}',[CompaniesController::class,'update'])->name('companies.update');


 Route::get('/employees-list',[EmployeesController::class,'list'])->name('employees.list');
 Route::get('/employess-form',[EmployeesController::class,'form'])->name('employees.form');
 Route::post('/employees-store',[EmployeesController::class,'store'])->name('employees.store');
 Route::get('/employees/view/{id}',[EmployeesController::class,'view'])->name('employees.view');
 Route::get('/employees/delete/{id}',[EmployeesController::class,'delete'])->name('employees.delete');
 Route::get('/employees/edit/{id}',[EmployeesController::class,'edit'])->name('employees.edit');
 Route::post('/employees/update/{id}',[EmployeesController::class,'update'])->name('employees.update');