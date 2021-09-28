<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\sample\SampleController;

use App\Http\Controllers\menu\MenuController;

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
Route::prefix('menu')->group(function() {
	Route::get('/list', [ MenuController::class, 'list' ])->name('menu.list');
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
