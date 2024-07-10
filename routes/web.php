<?php


use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\LoanStatusController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;


//No auth routes
Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    //Auth routes
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/loans', LoanController::class);
    Route::resource('/applications', LoanApplicationController::class);
    Route::resource('/statuses', LoanStatusController::class);
    Route::resource('/payments', PaymentController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/profiles', UserProfileController::class);

});
