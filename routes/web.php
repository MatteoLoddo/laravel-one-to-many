<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ThemeController;
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

Route::get('/', function () {
    return view('welcome1');
});


Route::middleware('auth')
->prefix('admin')
->name('admin.')
->namespace('Admin')
->group(function() {

ROUTE::get('/', 'HomeController@index')->name('home');


    // index
ROUTE::get('/themes','ThemeController@index')->name('themes.index');



// create
ROUTE::get('/themes/create','ThemeController@create')->name('themes.create');

//store
ROUTE::post('/themes','ThemeController@store')->name('themes.store');

// show
ROUTE::get('/themes/{theme}','ThemeController@show')->name('themes.show');




//edit
ROUTE::get('/themes/{theme}/edit','ThemeController@edit')->name('themes.edit');

//update
ROUTE::match(['patch', 'put'],'/themes/{theme}','ThemeController@update')->name('themes.update');


//destory
ROUTE::delete('/themes/{theme}/','ThemeController@destroy')->name('themes.destroy');






});



Auth::routes();



// middleware
// Route::middleware('auth')->get('/admin', 'Admin\HomeController@index')->name('admin.index');


// Route::get('/admin', 'Admin\HomeController@index')->name('admin.index');


