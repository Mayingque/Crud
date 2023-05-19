<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegAccount;



Route::get('companies', function () {
    return view('companies.index');
});

Route::post('/regaccountRoute', [RegAccount::class, 'regaccount'])->name('regaccount');

