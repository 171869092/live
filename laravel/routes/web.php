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
    return view('index');
});

Route::get('hello','UserController@index');

#. 用户管理
Route::get('members','MembersController@index');

#. 菜单
Route::get('getMenu','UserController@getMenu'); #-- menu list
Route::post('addMenu','UserController@addMenu'); #-- menu list

#. 订单
Route::get('orders','ordersController@index'); #-- list
Route::get('abnormal','ordersController@abnormal'); #-- exception
Route::get('timeout','ordersController@timeout'); #-- timeout
Route::get('bounces','ordersController@bounces'); #-- bounces
Route::get('import','ordersController@import'); #-- import
Route::post('handPullOrder','ordersController@handPullOrder'); #-- get order
#. 执行订单一件发货
Route::post('execShip','ordersController@execShip');


#.账号授权
Route::get('auth','AuthController@index'); #-- authoriztion
Route::get('b2c','AuthController@b2c'); #-- b2c
Route::post('authSave','AuthController@authSave'); #-- add authoriation
Route::post('authCheck','AuthController@authCheck'); #-- authCheck


#.个人中心
Route::get('userIndex','UserController@index'); #-- Safety
Route::get('userSafety','UserController@userSafety'); #-- Safety
Route::get('channgeEmail','UserController@channgeEmail'); #-- channgeEmail
Route::get('channgePhone','UserController@channgePhone'); #-- channgePhone
Route::get('channgePwd','UserController@channgePwd'); #-- channgePwd
Route::get('addPayPwd','UserController@addPayPwd'); #-- addPayPwd
Route::get('safetyQuestion','UserController@safetyQuestion'); #-- securityQuestion
Route::get('setPage','UserController@setPage'); #-- set page
Route::get('subscribe','UserController@subscribe'); #-- subscribe
#.获取用户权限菜单
Route::get('getUrserRight','UserController@getUrserRight'); #-- getUrserRight

#.一件刊登
Route::get('place','PlaceController@index'); #-- products
Route::get('freightTmp','PlaceController@freightTmp'); #-- products
Route::get('getCategory','PlaceController@getCategory'); #-- products


Route::get('inventories','InventoryController@index');
Route::get('authtest','authorization@runAuthorization');

Route::get('test','UserController@urserRight');
Route::get('testPlaceEdit','PlaceController@placeEdit');
Route::get('testgetCategory','PlaceController@getCategory');

//ApiLogic
Route::group(['prefix' => 'api', 'as' => 'api.'], function () {
    Route::get('/index', 'ApiLogisticsController@index')->name('index');
});
