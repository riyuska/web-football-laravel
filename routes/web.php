<?php

use App\Http\Controllers\LandingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/', LandingController::class);

Route::get('/', function () {
    return view('pages.landing-page.index');
})->name('index');

Route::get('clubs', function () {
    return view('pages.landing-page.clubs');
})->name('clubs');

Route::get('players', function () {
    return view('pages.landing-page.players');
})->name('players');

Route::get('managers', function () {
    return view('pages.landing-page.managers');
})->name('managers');

Route::get('anas', function () {
    return view('pages.landing-page.stadiums');
})->name('stadiums');
