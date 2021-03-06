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
    return view('layouts.master');
});

Auth::routes();

//Steam Routes
Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'NewsController@dotaNews')->name('DotaNews');

// Players/Users Routes
Route::resource('profile', 'ProfileController');
Route::post('profile/steam/connect', 'ProfileController@connectSteam')->name('profileSteamConnect');


// Clan Routes

//Test Routes
Route::get('/test', function(){
    //http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=FE78599E790C897A251A433A7867127F&steamids=76561197960435530
    
    //$appid = 'FE78599E790C897A251A433A7867127F';
    $id = 'kingsunny007';
    

    $test = Steam::convertId($id);

    return $test;
    
});
