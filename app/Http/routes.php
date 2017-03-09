<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home_layouts.default_loggedIn');
});

//users login
Route::get('/game/login', 'LoginUsers@get_data');
Route::post('/game/login', 'LoginUsers@auth');
Route::get('/game/logout', 'LoginUsers@log_user_out');

//users apis
Route::post('/game/api/changenation', 'GameController@change_user_nation');
Route::get('/game/api/totalbills/{nation_id}', 'GameController@estimate_total_bills');
Route::get('/game/api/paybills/{nation_id}', 'GameController@pay_bills');
Route::get('/game/api/totaltaxes/{nation_id}', 'GameController@estimate_total_taxes');
Route::get('/game/api/collecttaxes/{nation_id}', 'GameController@collect_taxes');
Route::get('/game/api/lastreligion/{nation_id}', 'GameController@last_r_edit');
Route::get('/game/api/lasttaxrate/{nation_id}', 'GameController@last_tax_rate');
Route::post('/game/api/maketraderequest', 'GameController@make_trade_deal');
Route::post('/game/api/activaterequest', 'GameController@activate_trade_request');
Route::get('/game/api/getnationtech', 'construction_controller@get_nation_tech');
Route::get('/game/api/nationresources', 'construction_controller@get_nation_resources');
Route::get('/game/api/nationbuildings', 'construction_controller@get_nation_builds');
Route::get('/game/api/gettech', 'construction_controller@get_tech');
Route::get('/game/api/getfulltech', 'construction_controller@get_full_tech');


//main menu
Route::get('/game/getnationinfo/{nation_id?}', 'GameController@get_private_info');
Route::get('/game/editnation', 'GameController@edit_nation');
Route::post('/game/editnation', 'GameController@update_nation');

//financial menu
Route::get('/game/getfinfo', 'financial_controller@get_info');
Route::get('/game/getresources', 'financial_controller@get_resources');
Route::get('/game/displaytaxes', 'financial_controller@display_taxes');
Route::post('/game/collecttaxes', 'financial_controller@collect_taxes');
Route::get('/game/displaybills', 'financial_controller@display_bills');
Route::post('/game/paybills', 'financial_controller@pay_bills');
Route::get('/game/displaygrievances', 'financial_controller@display_grievances');
Route::get('/game/paygrievances', 'financial_controller@pay_grievances');

//Construction menu
Route::get('/game/displayconstructions', 'construction_controller@display_construction');
Route::get('/game/construct', 'construction_controller@construct_new_building');
Route::post('/game/construct', 'construction_controller@buy_building');
Route::get('/game/tech', 'construction_controller@display_tech');
Route::post('/game/unlocktech', 'construction_controller@unlock_tech');

//admin panel
Route::group(['middleware' => ['web', /*'admin'*/], 'prefix' => 'admin'], function () {
    //Dashboard Route
    Route::get('dashboard', function() {
        return view('admin.home');
    });
});
