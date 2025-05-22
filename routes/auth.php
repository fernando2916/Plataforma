<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\ResetPasswordController;


  Route::get('/crear-cuenta', [RegisterController::class, 'index'])->name('register');

  Route::post('/crear-cuenta', [RegisterController::class, 'store']);
   
  Route::get('/activar-cuenta/{user:verification_id}', [VerifyEmailController::class, 'show'])->name('verification.show');

  Route::post('/reset-code/{user:verification_id}', [VerifyEmailController::class, 'resetCode'])->name('reset.code');
  
  Route::post('/activar-cuenta/{user:verification_id}', [VerifyEmailController::class, 'verify'])->name('verification.verify');

  
  Route::get('/ingresar', [LoginController::class, 'index'])->name('login');
  
  Route::post('/ingresar', [LoginController::class, 'store']);
  
  Route::get('/reset-password', [ResetPasswordController::class, 'index'])->name('reset.index');
  
  Route::post('/reset-password', [ResetPasswordController::class, 'store'])->name('reset.store');

  Route::get('/confirmar-contraseña/{user:verification_id}', [ConfirmPasswordController::class, 'index'])->name('password.confirm');

  Route::post('/confirmar-contraseña/{user:verification_id}', [ConfirmPasswordController::class, 'store']);
  
  Route::post('logout', [LogoutController::class, 'store'])->name('logout');




