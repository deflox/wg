<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PaymentsController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

// create group
Route::get('/create-group', [GroupController::class, 'create'])->name('create-group');
Route::post('/create-group', [GroupController::class, 'store']);

// open existing group
Route::get('/open-group', [AccessController::class, 'open'])->name('open-group');
Route::post('/open-group', [AccessController::class, 'submitToken']);
Route::get('/verify/{token}', [AccessController::class, 'verifyToken'])->name('verify-token');
Route::post('/verify/{token}', [AccessController::class, 'chooseUser'])->name('choose-user');

// payments
Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
Route::get('/payments/new', [PaymentsController::class, 'create'])->name('payments.new');
Route::post('/payments/new', [PaymentsController::class, 'store']);
Route::get('/payments/edit/{id}', [PaymentsController::class, 'show'])->name('payments.edit');
Route::post('/payments/edit/{id}', [PaymentsController::class, 'edit']);
