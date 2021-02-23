<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    return view('dashboard.index');
});


Route::group(['middleware'=>'prevent-back-history'], function(){

	Auth::routes(['verify'=>false]);



	/*========== inserting the shipping details into the database ==================================*/
	Route::resource('shipping', 'ShippingController');
	/*========== inserting the shipping details into the database ==================================*/

	/*=========== get the value of a country cost per shipping =====================================*/
	Route::post('dashboard/get_transaction', 'ShippingController@getTransaction')->name('dashboard.get_transaction');
	/*=========== get the value of a country cost per shipping =====================================*/

	/*=========== get the array of a paystack reponses  ============================================*/
	Route::get('dashboard/paystack_response', 'ShippingController@paystackTransaction')->name('dashboard.paystack_response');
	/*=========== get the array of a paystack reponses  ============================================*/




});
