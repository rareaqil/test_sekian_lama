<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BeanController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\FileController;
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

Route::get('/', [AuthenticationController::class, 'index'])->name('index');
Route::get('home', [AuthenticationController::class, 'home'])->name('home');
Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/beans', [BeanController::class, 'index'])->name('beans.index');


Route::get('distributors', [DistributorController::class, 'index'])->name('distributors.index');
Route::get('distributors/create', [DistributorController::class, 'create'])->name('distributors.create');
Route::post('distributors/store', [DistributorController::class, 'store'])->name('distributors.store');
Route::get('distributors/{distributor}/edit', [DistributorController::class, 'edit'])->name('distributors.edit');
Route::put('distributors/{distributor}', [DistributorController::class, 'update'])->name('distributors.update');


Route::get('files', [FileController::class, 'index'])->name('files.index');
Route::post('files', [FileController::class, 'store'])->name('files.store');
