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



Auth::routes();

Route::get('user/activation/{token}', 'Auth\RegisterController@userActivation');

Route::get('/', 'HomeController@index')->name('index');

Route::get('/terms', function(){
  return view('terms');
});

Route::get('/policy', function(){
  return view('policy');
});

Route::get('/home', 'HomeController@index')->name('index');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/masternodes', 'MasternodeController@coins')->name('masternodecoins');
Route::get('/videos', 'VideoController@videos')->name('videos');
Route::get('/masternodes/coin/{id}', 'MasternodeController@masternodes')->name('masternodes');
Route::get('/masternode/{id}', 'MasternodeController@masternode')->name('masternode');
Route::get('/balances', 'UserController@balances')->name('balances');
Route::get('/settings', 'UserController@settings')->name('settings');
Route::get('/deposit_history', 'UserController@deposit_history')->name('deposit_history');
Route::get('/withdrawal_history', 'UserController@withdrawal_history')->name('withdrawal_history');
Route::get('/reward_history', 'UserController@reward_history')->name('reward_history');
Route::get('/sales', 'UserController@sales_history')->name('sales_history');
Route::get('/user_settings', 'UserController@user_settings')->name('user_settings');

Route::post('/withdraw', 'UserController@withdraw_post')->name('withdraw_post');
Route::post('/buyseats', 'UserController@buyseats')->name('buyseats');
Route::post('/resendToken', 'Auth\RegisterController@resendToken')->name('resendToken');
Route::post('/forgetpassword', 'Auth\RegisterController@forgetpassword')->name('forgetpassword');
Route::post('/changepassword', 'UserController@changepassword')->name('changepassword');

Route::get('/2fa','PasswordSecurityController@show2faForm');
Route::post('/generate2faSecret','PasswordSecurityController@generate2faSecret')->name('generate2faSecret');
Route::post('/2fa','PasswordSecurityController@enable2fa')->name('enable2fa');
Route::post('/disable2fa','PasswordSecurityController@disable2fa')->name('disable2fa');

Route::get('/2faVerify', function(){
return redirect('/');
});
Route::post('/2faVerify', function () {
return redirect(URL()->previous());
})->name('2faVerify')->middleware('2fa');
