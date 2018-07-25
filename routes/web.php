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

Route::any('/','DefaultController@home')->name('home');
Route::any('/how-it-works','DefaultController@works')->name('works');
Route::any('/about','DefaultController@about')->name('about');
Route::any('/contact-us','DefaultController@contact')->name('contact');
Route::any('/register','UserController@register')->name('customer.register');
Route::any('/login','UserController@login')->name('customer.login');
Route::any('/logout','UserController@logout')->name('customer.logout');

Route::any('/business/register','BusinessController@register')->name('business.register');
Route::any('/business/login','BusinessController@login')->name('business.login');
Route::any('/business/logout','BusinessController@logout')->name('business.logout');


Route::group(['prefix' => '/','middleware' => 'auth.customer'],function (){
   Route::group(['prefix' => 'listing/'], function (){
       Route::any('/', 'ListingController@all')->name('customer.listing');
       Route::any('view/{listing}', 'ListingController@view')->name('customer.listing.view');
       Route::post('service/{listing}/{user}', 'ListingController@service')->name('customer.listing.service');
   });
});

Route::get('clear', function (){
    \Illuminate\Support\Facades\Artisan::call("cache:clear");
    \Illuminate\Support\Facades\Artisan::call("config:cache");
    dd('done');
});

Route::group(['prefix' => '/','middleware' => 'auth.business'],function (){
    Route::any('profile', 'ProfileController@index')->name('business.profile');
    Route::post('profile/update/{type}', 'ProfileController@update')->name('business.update');
    Route::post('profile/socials/update', 'ProfileController@socials')->name('business.social');
});