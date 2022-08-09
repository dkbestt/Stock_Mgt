<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('merchant', [MerchantController::class, 'viewMerchant'])->name('view_merchant');
Route::get('merchant/add', [MerchantController::class, 'addMerchant'])->name('add_merchant');
Route::post('merchant/add/post', [MerchantController::class, 'createMerchant'])->name('add_merchant.post');
Route::delete('merchant/delete_post/{id}', [MerchantController::class, 'destroy'])->name('del_mer.destroy');
Route::get('merchant/single_mer/{id}', [MerchantController::class, 'show'])->name('show_mer');
Route::get('merchant/edit_mer/{id}', [MerchantController::class, 'edit'])->name('edit_mer');
Route::put('merchant/edit_mer/{id}', [MerchantController::class, 'update'])->name('update_mer.put');

Route::get('worker', [WorkerController::class, 'viewWorker'])->name('view_worker');
Route::get('worker/add', [WorkerController::class, 'addWorker'])->name('add_worker');
Route::post('worker/add/post', [WorkerController::class, 'createWorker'])->name('add_worker.post');
Route::delete('worker/delete_post/{id}', [WorkerController::class, 'destroy'])->name('del_worker.destroy');
Route::get('worker/single_worker/{id}', [WorkerController::class, 'show'])->name('show_worker');
Route::get('worker/edit_worker/{id}', [WorkerController::class, 'edit'])->name('edit_worker');
Route::put('worker/edit_worker/{id}', [WorkerController::class, 'update'])->name('update_worker.put');

Route::get('product', [ProductController::class, 'viewProduct'])->name('view_product');
Route::get('product/add', [ProductController::class, 'addProduct'])->name('add_product');
Route::post('product/add/post', [ProductController::class, 'createProduct'])->name('add_product.post');


// Route::get('login', function () {
//     return view('auth.login');
// });