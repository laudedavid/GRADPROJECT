<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	
	return View::make('hello');
});
Route::get('/home', function()
{

	return View::make('home');
});

Route::get('login/fb', 'LoginFacebookController@login');
Route::get('login/fb/callback', 'LoginFacebookController@callback');

Route::get('homeBuyer', 'BuyerController@buyer');
Route::get('homeBuyer1',['as'=>'homeBuyer', 'uses'=>'BuyerController@buyerStore']);

Route::get('homeSeller', 'SellerController@seller');
Route::get('homeSeller1',['as'=>'homeSeller', 'uses'=>'SellerController@sellerStore']);

Route::get('productsSeller','SellerController@listOfSellerCakes');
Route::get('productsBuyer','BuyerController@listOfBuyerCakes');

Route::get('singlepageSeller','BuyerController@listOfSellers');

Route::get('myaccountSeller', 'SellerController@listOfSellerCreationCakes');
Route::get('myaccountBuyer','BuyerController@listOfBuyerOrderCakes');

Route::get('order/{id}','CakeController@order');
Route::get('addCake','CakeController@addCake');
Route::post('addCake','CakeController@saveCake');
Route::get('editCake/{$id}', 'CakeController@editCake');
Route::post('updateCake','CakeController@updateCake');


Route::get('logoutUser', function()
{
	return Redirect::to('/home');
});
Route::get('logout','LoginFacebookController@logout');



//CAKE MODEL CREATE

Route::get('Display', function(){
	 Helper::Display();
});

Route::get('createCake','CakeController@createCake');
Route::get('addItemCakeModel','CakeController@addItemCakeModel');
Route::get('fuck', 'CakeController@fuck');
Route::get('BaseLayers', 'CakeController@BaseLayers');