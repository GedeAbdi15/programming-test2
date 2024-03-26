<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterAuthorController;
use App\Http\Controllers\MasterBookController;
use App\Http\Controllers\MasterCategory;
use App\Http\Controllers\MasterCategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/masters/categories', [MasterCategoryController::class, 'index']);
Route::get('/masters/authors', [MasterAuthorController::class, 'index']);
Route::get('/masters/books', [MasterBookController::class, 'index']);
