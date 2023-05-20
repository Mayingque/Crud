<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegAccount;



Route::get('companies', [RegAccount::class, 'index']);


Route::post('/regaccountRoute', [RegAccount::class, 'regaccount'])->name('regaccount');

