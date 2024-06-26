<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;

require __DIR__.'/tenant.php';
require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['universal', 'auth', 'verified', InitializeTenancyByDomain::class])->name('dashboard');

Route::middleware(['universal', 'auth', InitializeTenancyByDomain::class])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('lang-switch', [LanguageController::class, 'update'])->middleware(['universal', 'auth', InitializeTenancyByDomain::class])->name('language.switch');
