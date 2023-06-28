<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealController;
use App\Http\Middleware\LoginAutomatically;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Manually switch authenticated user
Route::post('/login', [LoginController::class, 'login']);

// Defaults to deals page
Route::redirect('/', '/deals');

// Login the user with ID 1 if no user is logged in
Route::middleware([LoginAutomatically::class])->group(function () {
    
    Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
    
    Route::resource('contacts', ContactController::class)->only([
    'index', 'show'
]);
    
    Route::get('/deals', [DealController::class, 'index'])->name('deals.index');
});
