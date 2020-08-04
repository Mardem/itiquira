<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function () {
    Route::get('days', 'DaysController')->name('api.days');

    Route::namespace('Admin')->group(function () {
        Route::post('save-day', 'DaysController@store')->name('api.save-day');
        Route::get('get-day', 'DaysController@days')->name('api.get-day');
    });


    Route::post('pay-pagseguro', 'PagSeguroController@pay')->name('pagseguro.pay');
    Route::get('installments-pagseguro', 'PagSeguroController@installments')->name('pagseguro.installment');
});
