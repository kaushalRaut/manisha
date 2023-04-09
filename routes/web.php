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
    return view('user/beforelogin');
});

Route::get('/welcome', 'adminController@welcome')->name('welcome');
// for a demo
// Route::get('/shoewdestinationdetails', [someThing::class, 'shoewdestinationdetails'])->name('shoewdestinationdetails');

//..............STARTS    ADMIN.............................................................................................................

//Showing the Admin dashboard form
//..................................................................................
Route::get('/showadmindashboard', 'adminController@showadmindashboard')->name('showadmindashboard');
Route::get('/showadmindashboardform', 'adminController@showadmindashboardform')->name('showadmindashboardform');

//showing the Admin login form
// ...................................................................................
// Route::get('/showadminlogin',[adminController::class,'showadminlogin'])->name('Sadminlogin');
Route::get('/showadminlogin', 'adminController@showadminlogin')->name('showadminlogin');

// Showing the Admin Registration form
// ..........................................................................................
Route::get('/showadminregister', 'adminController@showadminregister')->name('showadminregister');

//Showing the Admin verification form
//..................................................................................
Route::get('/showadminverify', 'adminController@showadminverify')->name('showadminverify');


//Submitting the Admin Registratio form
//...........................................................................................
Route::post('/submitAdminRegister','adminController@submitAdminRegister')->name('submitAdminRegister');

//Completting the Admin login process form
//...........................................................................................
Route::post('/submitadminlogin','adminController@submitadminlogin')->name('submitadminlogin');

//Completting the Admin otp verification process form
//...........................................................................................
Route::post('/adminotpverify/{id}','adminController@adminotpverify')->name('adminotpverify');

//Competting the Admin Log-out form
//...........................................................................................
Route::get('/adminlogoutform','adminController@adminlogoutform')->name('adminlogoutform');



//................................END ADMIN...............................................................................................



//................................STARTS USER...................................................................................................

//Showing the User Login form
//...........................................................
Route::get('/showuserlogin', 'userController@showuserlogin')->name('showuserlogin');

//showing the uer Login form
//..................................................
Route::get('/showuserregister', 'userController@showuserregister')->name('showuserregister');

//showing the uer verification form
//..................................................
Route::get('/showuserverify', 'userController@showuserverify')->name('showuserverify');

//Submitting the user Registration form
//.........................................................
Route::post('/submitUserRegister', 'userController@submitUserRegister')->name('submitUserRegister');



//................................END USER....................................................................................................

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
