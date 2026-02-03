<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $plans = \App\Models\Plan::with('service')->get();
    return view('welcome', compact('plans'));
})->name('home');

Route::view('/automation', 'services.automation')->name('services.automation');
Route::view('/automation', 'services.automation')->name('services.automation');
Route::view('/omnichannel', 'services.omnichannel')->name('services.omnichannel');

Route::view('/policies/privacy', 'legal.privacy')->name('legal.privacy');
Route::view('/policies/terms', 'legal.terms')->name('legal.terms');

// Client Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\ClientDashboardController::class, 'index'])->name('dashboard');
    Route::get('/subscribe/{plan}', [\App\Http\Controllers\SubscribeController::class, 'show'])->name('subscribe.show');
    Route::post('/subscribe/{plan}', [\App\Http\Controllers\SubscribeController::class, 'store'])->name('subscribe.store');
});

require __DIR__ . '/auth.php';
