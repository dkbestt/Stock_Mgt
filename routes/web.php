<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MerchantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('merchant', [MerchantController::class, 'index'])->name('view_merchant');
Route::get('merchant/add', [MerchantController::class, 'addMerchant'])->name('add_merchant');
Route::post('merchant/add/post', [MerchantController::class, 'createMerchant'])->name('add_merchant.post');

// Route::get('/', function () {
//     return view('index.admin');
// });

// Route::get('/insert_merchant', function () {
//     return view('pages.merchant.add_mer');
// });
// Route::get('/view_merchant', function () {
//     return view('pages.merchant.view_mer');
// });
