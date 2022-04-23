<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\RegistrationController;
use App\Http\Controllers\Api\AuthController;

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

Route::group(['prefix'=>'', ['middleware' => ['XSS']], 'namespace'=>'Api'], function(){
	Route::get('registrations', [RegistrationController::class, 'get_registrations']);    
	Route::get('listusers', [RegistrationController::class, 'list_users']);    
	Route::post('register', [RegistrationController::class, 'register_user']);    
	Route::post('login', [AuthController::class, 'login']);    
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
