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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    //Start System Routs
    //Clients Routs
    Route::resource('clients','ClientsController',['names' => ['index' => 'index_clients']]);
    Route::get('deleted-clients','ClientsController@showdestroied')->name('showdestroiedclients');
    Route::delete('clients/{id}/delete','ClientsController@predestroy')->name('predestroyclients');
    Route::get('clients/{id}/restore','ClientsController@restore')->name('restorclient');;
    //Companies Routs
    Route::resource('companies','CompaniesController',['names' => ['index' => 'companies']]);
    Route::get('deleted-companies','CompaniesController@showdestroied')->name('showdestroiedcompanies');
    Route::delete('companies/{id}/delete','CompaniesController@predestroy')->name('predestroycompanies');
    Route::get('companies/{id}/restore','CompaniesController@restore')->name('restorcompany');;
    //Vendors Routs
    Route::resource('vendors','VendorsController',['names' => ['index' => 'vendors']]);
    Route::get('deleted-vendors','VendorsController@showdestroied')->name('showdestroiedvendors');
    Route::delete('vendors/{id}/delete','VendorsController@predestroy')->name('predestroyvendors');
    Route::get('vendors/{id}/restore','VendorsController@restore')->name('restorvendor');;
    //moneymakers Routs
    Route::resource('moneymakers','MoneyMakersController',['names' => ['index' => 'moneymakers']]);
    Route::get('deleted-moneymakers','MoneyMakersController@showdestroied')->name('showdestroiedmoneymakers');
    Route::delete('moneymakers/{id}/delete','MoneyMakersController@predestroy')->name('predestroymoneymakers');
    Route::get('moneymakers/{id}/restore','MoneyMakersController@restore')->name('restormoneymaker');
    //moneymakersProcesses Routs
    Route::resource('moneymakersprocesses','MoneyMakersProcessesController',['names' => ['index' => 'moneymakersprocesses']]);
    Route::get('deleted-moneymakersprocesses','MoneyMakersProcessesController@showdestroied')->name('showdestroiedmoneymakersprocesses');
    Route::delete('moneymakersprocesses/{id}/delete','MoneyMakersProcessesController@predestroy')->name('predestroymoneymakersprocesses');
    Route::get('moneymakersprocesses/{id}/restore','MoneyMakersProcessesController@restore')->name('restormoneymaker');
    //ProductTypes Routs
    Route::resource('producttypes','ProductTypesController',['names' => ['index' => 'producttypes']]);
    Route::resource('brands','BrandsController',['names' => ['index' => 'brands']]);
    Route::resource('products','ProductsController',['names' => ['index' => 'products']]);
    Route::resource('services','ServicesController',['names' => ['index' => 'services']]);
    Route::resource('offers','OffersController',['names' => ['index' => 'offers']]);
    Route::resource('purchaseinvoices','PurchaseInvoicesController',['names' => ['index' => 'purchaseinvoices']]);
    Route::resource('purchaseorders','PurchaseOrdersController',['names' => ['index' => 'purchaseorders']]);
    Route::resource('salesinvoices','SalesInvoicesController',['names' => ['index' => 'salesinvoices']]);
    Route::resource('salesorders','SalesOrdersController',['names' => ['index' => 'salesorders']]);
    Route::resource('payments','PaymentInvoicesController',['names' => ['index' => 'payments']]);
    Route::resource('safe','SafeProcessesController',['names' => ['index' => 'safe']]);
    Route::resource('reports','ReportsController',['names' => ['index' => 'reports']]);
    Route::resource('basics','BasicDataController',['names' => ['index' => 'basics']]);
    //End System Routs
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

