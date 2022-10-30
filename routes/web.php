<?php

use App\Http\Controllers\OpenGroupController;
use App\Http\Controllers\CreateGroupController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\PaymentsController;
use App\Http\Middleware\WgSessionMiddleware;
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
Route::get('/create-group', [CreateGroupController::class, 'create'])->name('create.group');
Route::post('/create-group', [CreateGroupController::class, 'store']);

// open group
Route::get('/open-group', [OpenGroupController::class, 'open'])->name('open.group');
Route::post('/open-group', [OpenGroupController::class, 'submitToken']);
Route::get('/verify/{token}', [OpenGroupController::class, 'verifyToken'])->name('verify.token');
Route::post('/verify/{token}', [OpenGroupController::class, 'chooseUser']);

Route::middleware([WgSessionMiddleware::class])->group(function() {

    // payments
    Route::get('/payments', [PaymentsController::class, 'index'])->name('payments');
    Route::get('/payments/new', [PaymentsController::class, 'create'])->name('payments.new');
    Route::post('/payments/new', [PaymentsController::class, 'store']);
    Route::get('/payments/edit/{id}', [PaymentsController::class, 'show'])->name('payments.edit');
    Route::post('/payments/edit/{id}', [PaymentsController::class, 'edit']);

});
