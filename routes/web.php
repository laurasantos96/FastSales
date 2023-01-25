<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RevisorController;


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

Route::get('/', [PublicController::class, 'index'])->name('home');

Route::get('/category/{category:name}/ads', [PublicController::class, 'adsByCategory'])->name('category.ads');

Auth::routes();

Route::get('/ads/create', [AdController::class, 'create'])->name('ads.create');
Route::get('/ads/{ad}', [AdController::class, 'show'])->name('ads.show');
Route::get('/revisor', [RevisorController::class, 'index'])->name('revisor.home');

Route::patch('/revisor/ad/{ad}/accept', [RevisorController::class, 'acceptAd'])->name('revisor.ad.accept');
Route::patch('/revisor/ad/{ad}/reject', [RevisorController::class, 'rejectAd'])->name('revisor.ad.reject');

Route::get('/revisor/become', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor.become');
Route::get('/revisor/{user}/make', [RevisorController::class, 'makeRevisor'])->middleware('auth')->name('revisor.make');

Route::post('/locale/{locale}',[PublicController::class,'setLocale'])->name('locale.set');
Route::get('/search',[PublicController::class,'search'])->name('search');

Route::get('/contact',  [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');


Route::get('/dashboard', [PanelController::class, 'index'])->name('panel.index');
Route::delete('/ads/{ad}', [AdController::class, 'destroy'])->name('ad.destroy');

