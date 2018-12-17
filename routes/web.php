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

Route::resource('staff', 'AdminController')->names([
    'create' => 'staff.create',
    'index' => 'staff.index',
    'store' => 'staff.store'
]);;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adverts/add', 'HomeController@add_advert')->name('pages.adverts.add');
Route::get('/adverts', 'HomeController@view_adverts')->name('pages.adverts');
Route::get('/users', 'HomeController@users')->name('pages.users');
Route::get('/ask-me', 'HomeController@ask_me')->name('pages.ask-me');
Route::get('/money-transfer', 'HomeController@money_transfer')->name('pages.money-transfer');
Route::get('/rabbit-team', 'HomeController@rabbit_team')->name('pages.rabbit-team');
Route::get('/rabbit-team-post', 'HomeController@rabbit_team_post')->name('pages.rabbit-team-post');
Route::get('/properties', 'HomeController@properties')->name('pages.properties');
Route::get('/profile', 'HomeController@profile')->name('pages.profile');
Route::get('/wallet', 'HomeController@wallet')->name('pages.wallet');
Route::get('/notifications/email', 'HomeController@notifications_email')->name('pages.notifications.email');
Route::get('/notifications/push', 'HomeController@notifications_push')->name('pages.notifications.push');
Route::get('/notifications/add/email', 'HomeController@notification_add_email')->name('pages.notifications.add.email');
Route::get('/notifications/add/push', 'HomeController@notification_add_push')->name('pages.notifications.add.push');
Route::get('/products', 'HomeController@products')->name('pages.products');
Route::get('/moments', 'HomeController@moments')->name('pages.moments');
Route::get('/chats', 'HomeController@chats')->name('pages.chats');
Route::get('/contents', 'HomeController@contents')->name('pages.contents');
Route::get('/conversion', 'HomeController@conversion')->name('pages.conversion');
Route::get('/packages', 'HomeController@packages')->name('pages.packages');
Route::get('/vouchers', 'HomeController@vouchers')->name('pages.vouchers');
Route::get('/purchased', 'HomeController@purchased')->name('pages.purchased');
Route::get('/spam', 'HomeController@spam')->name('pages.spam');
Route::get('/social-circle-articles', 'HomeController@social_circle_articles')->name('pages.social-circle.articles');
Route::get('/social-circle-categories', 'HomeController@social_circle_categories')->name('pages.social-circle.categories');
Route::get('/level-chart', 'HomeController@level_chart')->name('pages.level-chart');
Route::get('/special-offers', 'HomeController@special_offers')->name('pages.special-offers');
Route::get('/special-offers/add', 'HomeController@add_special_offers')->name('pages.special-offers.add');
