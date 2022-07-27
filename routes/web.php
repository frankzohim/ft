<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PathController;
use App\Http\Controllers\MakeController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\CarController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [DashboardController::class, 'index'])
	->middleware('auth')->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::resources([
        'path' => PathController::class,
        'make' => MakeController::class,
        'carmodel' => CarModelController::class,
        'car' => CarController::class,
    ]);

});

require __DIR__.'/auth.php';
