<?php

use App\Http\Controllers\SeriesController;
use App\Series;
// use Illuminate\Support\Facades\Auth;
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

    $featuredSeries= Series::take(3)->latest()->get();
  
    return view('front',compact('featuredSeries'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/series','SeriesController');
Route::get('series/{series}/episodes/{episodeNumber}', 'SeriesController@episode')->name('series.episode');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
