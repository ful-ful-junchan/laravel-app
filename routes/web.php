<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Sample\SampleController;

use App\Http\Controllers\Sidebar\SidebarController;

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

// メニュー操作
Route::prefix('sidebar')->group(function() {
	Route::get('/list', [ SidebarController::class, 'list' ])->name('sidebar.list');
});




Route::get('/', function () {
	return Redirect::route('sample');
});

// sample
Route::get('/sample/{directory?}/{page?}', [ SampleController::class, 'show' ])->name('sample');

// Group::Sample
/*
Route::prefix('sample')->group(function() {
	// Dashboard
	Route::get('/dashboard/{name?}', [ SampleController::class, 'dashboard' ])->name('sample.dashboard');
	// Forms
	Route::get('/form/{name?}', [ SampleController::class, 'form' ])->name('sample.form');
	// UI Elements
	Route::get('/ui/{name?}', [ SampleController::class, 'ui' ])->name('sample.ui');
	// Tables
	Route::get('/tables/{name?}', [ SampleController::class, 'tables' ])->name('sample.tables');
	// Presentation
	Route::get('/presentation/{name?}', [ SampleController::class, 'presentation' ])->name('sample.presentation');
	// Layouts
	Route::get('/layouts/{name?}', [ SampleController::class, 'layouts' ])->name('sample.layouts');
	// Extras
	Route::get('/extras/{name?}', [ SampleController::class, 'extras' ])->name('sample.extras');
});
*/
