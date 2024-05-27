<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/verification/{token}', [VerificationController::class, 'verify'])->name('verification');

Route::get('/lock-screen', [LockScreenController::class, 'showLockScreen'])->name('lock-screen.show');
Route::post('/unlock-screen', [LockScreenController::class, 'unlockScreen'])->name('lock-screen.unlock');


require __DIR__.'/auth.php';
