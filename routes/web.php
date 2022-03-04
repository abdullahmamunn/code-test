<?php

use App\Http\Controllers\UrlShorteningController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('url',UrlShorteningController::class);

Route::middleware(['throttle:global'])->group(function () {
    Route::get('redirect/{url}',[UrlShorteningController::class, 'redirectUrl'])->name('short_url');
});

Route::get('tracking-info',[UrlShorteningController::class, 'userTrackingInfo'])->name('tracking.user');
Route::get('daily-reports',[UrlShorteningController::class, 'dailyReports'])->name('daily.trafic.report');
Route::get('weekly-reports',[UrlShorteningController::class, 'weeklyReports'])->name('weekly.trafic.report');
Route::get('monthly-reports',[UrlShorteningController::class, 'monthlyReports'])->name('monthly.trafic.report');

Route::get('details/{id}',[UrlShorteningController::class, 'showDetails'])->name('show.more');
Route::get('pdf/{type}', [UrlShorteningController::class, 'generatePDF'])->name('pdf');




