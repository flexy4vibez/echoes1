<?php

use App\Http\Controllers\page_controller;
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

Route::get('/', [page_controller::class, 'home'])->name('home');

Route::get('/sign_in', [page_controller::class, 'sign_in_get'])->name('sign_in_get');

Route::get('/sign_up', [page_controller::class, 'sign_up_get'])->name('sign_up_get');

Route::post('/sign_up', [page_controller::class, 'sign_up_post'])->name('sign_up_post');

Route::post('/sign_in_post', [page_controller::class, 'sign_in_post'])->name('sign_in_post');

Route::get('/logout', [page_controller::class, 'logout'])->name('logout');
