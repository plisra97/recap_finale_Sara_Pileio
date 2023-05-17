<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('article/show{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('article/edit{article}', [ArticleController::class, 'edit'])->name('article.edit');

