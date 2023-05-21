<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegAccount;
use App\Http\Controllers\CompanyController;


Route::get('login', [RegAccount::class, 'index'])->name('login');
Route::post('post-login', [RegAccount::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [RegAccount::class, 'registration'])->name('register');
Route::post('post-registration', [RegAccount::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [RegAccount::class, 'dashboard']); 
Route::get('logout', [RegAccount::class, 'logout'])->name('logout');

Route::resource('companies', CompanyController::class);
Route::get('/search', [CompanyController::class, 'search'])->name('companies.search');