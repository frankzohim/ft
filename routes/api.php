<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RideController;
use App\Http\Controllers\Auth\RegisteredUserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('v1')->group(function(){
    
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    Route::post('edit/profile', [RegisteredUserController::class, 'editProfile']);
    //Route::get('ride/{ride}', [RideController::class,'show']);

    Route::get('ride/{ride}', [RideController::class, 'show']);

});

Route::post('register', [RegisteredUserController::class, 'storeAPI']);

Route::get('test', function (Request $request) {
    return 'Authenticated from fast travel v2';
});

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
