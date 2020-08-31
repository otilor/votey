<?php

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
    return view('welcome');
});

Route::get('email', fn() => response()->json(['message' => 'Did you see my email?']))->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('upgrade', fn () => auth()->user()->assignRole('admin'));

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
   Route::get('dashboard', 'Admin\DashboardController')->name('admin.dashboard');
   Route::get('accounts/dashboard', 'Admin\Account\AccountController@index')->name('admin.accounts.dashboard');
   Route::get('election/dashboard', 'Admin\Election\ElectionController@index');
   Route::post('sessions/store', 'Admin\Session\SessionController@store')->name('admin.sessions.store');
   Route::resource('sessions', 'Admin\Session\SessionController');
   Route::resource('polls', 'Admin\Poll\PollController');
});

Route::group(['prefix' => 'student', 'middleware' => 'role:student'], function () {
    Route::get('dashboard', fn () => 'Welcome to the student dashboard!')->name('student.dashboard');
});

Route::group(['prefix' => 'contestant', 'middleware' => 'role:contestant'], function () {
    Route::get('dashboard', fn () => 'Welcome to the contestant dashboard!')->name('contestant.dashboard');
});

Route::get('dashboard', fn () => handleDashboard())->middleware('auth');
