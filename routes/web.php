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

Route::get('/profile', 'AdminController@profile')->name('profile');
Route::post('/profile/password', 'AdminController@profile_password')->name('profile.password');

Route::resource('staff', 'StaffController')->names([
    'create' => 'staff.create',
    'index' => 'staff.index',
    'store' => 'staff.store'
]);

Route::resource('admin', 'AdminController')->names([
    'create' => 'admin.create',
    'index' => 'admin.index',
    'store' => 'admin.store',
]);

Route::resource('offers', 'OfferController')->names([
    'create' => 'offer.create',
    'index' => 'offer.index',
    'store' => 'offer.store'
]);

Route::resource('adverts', 'AdvertController')->names([
    'create' => 'advert.create',
    'index' => 'advert.index',
    'store' => 'advert.store'
]);

Route::resource('notification-email', 'EmailNotificationController')->names([
    'create' => 'notification.email.create',
    'index' => 'notification.email.index',
    'store' => 'notification.email.store'
]);

Route::resource('notification-push', 'PushNotificationController')->names([
    'create' => 'notification.push.create',
    'index' => 'notification.push.index',
    'store' => 'notification.push.store'
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@users')->name('pages.users');
Route::get('/ask-me', 'HomeController@ask_me')->name('pages.ask-me');
Route::get('/money-transfer', 'HomeController@money_transfer')->name('pages.money-transfer');
Route::get('/rabbit-team', 'HomeController@rabbit_team')->name('pages.rabbit-team');
Route::get('/rabbit-team-post', 'HomeController@rabbit_team_post')->name('pages.rabbit-team-post');
Route::get('/properties', 'HomeController@properties')->name('pages.properties');
Route::get('/wallet', 'HomeController@wallet')->name('pages.wallet');
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
