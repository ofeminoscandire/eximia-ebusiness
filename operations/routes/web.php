<?php

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
    return view('operationboard');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Routes for Vendors
 */
Route::get('/vendors', 'VendorsController@index')->name('VendorList');
Route::get('/vendors/create', 'VendorsController@create')->name('CreateVendor');
Route::post('/vendors/create', 'VendorsController@saveVendor')->name('CreateVendor');
Route::post('/vendors/update', 'VendorsController@update')->name('UpdateVendor');
Route::post('/vendors/delete', 'VendorsController@delete')->name('DeleteVendor');

/**
 * Routes for BOQ
 */
Route::get('/boq/', 'BillOfQuantityController@index')->name('BOQList');
Route::get('/boq/create', 'BillOfQuantity@create')->name('CreateBOQ');
Route::post('/boq/update', 'BillOfQuantity@update')->name('UpdateBOQ');
Route::post('/boq/delete', 'BillOfQuantity@delete')->name('DeleteVendorBOQ');
