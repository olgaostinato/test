<?php
namespace App\Http\Controllers;

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

Route::get('/', function () {
    return redirect('/news/categories', 302);
});

Route::get('/news/categories', [NewController::class, 'index'])->name('news.index');
Route::get('/news/categories/{id}', [NewController::class, 'list'])->name('news.list');
Route::get('/news/{id}', [NewController::class, 'show'])->name('news.show');



