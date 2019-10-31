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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/home', 'PublicHomeController@index')->name('home');
Route::get('/home/create', 'PublicHomeController@create');
Route::post('/home', 'PublicHomeController@store');
Route::post('/msg', 'PublicHomeController@message');

Route::get('/pricing/{id}', 'PublicHomeController@pricingIndex');
Route::get('/pricing/air-trans/{id}', 'PublicHomeController@at');
Route::get('/pricing/dcri/{id}', 'PublicHomeController@dcri');
Route::get('/pricing/dcro/{id}', 'PublicHomeController@dcro');
Route::get('/pricing/mcr/{id}', 'PublicHomeController@mcr');


Route::get('/', function () {
    return redirect('/home');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');



Route::get('/logout', 'LogoutController@index');

Route::group(['middleware' => ['sess']], function(){

Route::get('/UserHome', 'UserHomeController@index')->name('UserHome');
Route::get('/UserHome/{id}', 'UserHomeController@show');
Route::get('/UserHome/{id}/edit', 'UserHomeController@edit');
Route::put('/UserHome/{id}', 'UserHomeController@update');
Route::get('/UserHome/{id}/changeprofilepicture', 'UserHomeController@changeprofilepicture');
Route::put('/UserHome/{id}/upprofilepicture', 'UserHomeController@updatepic');
Route::get('/UserHome/{id}/changepassword', 'UserHomeController@changepassword');
Route::put('/UserHome/{id}/uppassword', 'UserHomeController@updatepass');
Route::post('/UserHome', 'UserHomeController@message');
Route::post('/message', 'UserHomeController@message');
// Route::post('/message', 'UserHomeController@message');

Route::get('/packages', 'PackagesController@index');
Route::get('/packages/{id}', 'PackagesController@pricingIndex');
Route::get('/packages/air-trans/{id}', 'PackagesController@at');
Route::get('/packages/dcri/{id}', 'PackagesController@dcri');
Route::get('/packages/dcro/{id}', 'PackagesController@dcro');
Route::get('/packages/mcr/{id}', 'PackagesController@mcr');

Route::get('/packagesadmin', 'PackagesController@indexadmin');
Route::get('/packagesadmin/{id}', 'PackagesController@pricingIndexadmin');
Route::get('/packagesadmin/air-trans/{id}', 'PackagesController@atadmin');
Route::get('/packagesadmin/dcri/{id}', 'PackagesController@dcriadmin');
Route::get('/packagesadmin/dcro/{id}', 'PackagesController@dcroadmin');
Route::get('/packagesadmin/mcr/{id}', 'PackagesController@mcradmin');

Route::get('/package/{id}/edit', 'PackagesController@edit');
Route::put('/package/{id}' , 'PackagesController@update');
Route::get('/package/{id}', 'PackagesController@show');
Route::get('/edit', 'PackagesController@indexview');

Route::get('/booking/{id}', 'BookingController@index');
Route::get('/mybookings/{id}', 'BookingController@indexall');
Route::get('/bookinginfo/{id}/edit', 'BookingController@edit');
Route::get('/bookinginfoshow/{id}', 'BookingController@show');
Route::post('/bookinginfo', 'BookingController@store');
Route::put('/bookinginfo/{id}', 'BookingController@updateToCancel');
Route::put('/bookinginfoe/{id}', 'BookingController@update');

//Route::group(['middleware' => ['type']], function(){

Route::get('/AdminHome', 'AdminHomeController@index');
Route::get('/AdminHome/{id}', 'AdminHomeController@show');
Route::get('/AdminHome/{id}/edit', 'AdminHomeController@edit');
Route::put('/AdminHome/{id}', 'AdminHomeController@update');
Route::get('/AdminHome/{id}/changepassword', 'AdminHomeController@changepassword');
Route::put('/AdminHome/{id}/uppassword', 'AdminHomeController@updatepass');
Route::get('/AdminHome/{id}/changeprofilepicture', 'AdminHomeController@changeprofilepicture');
Route::put('/AdminHome/{id}/upprofilepicture', 'AdminHomeController@updatepic');

Route::get('/userrequest', 'AdminHomeController@userreq');
Route::get('/usersearch', 'AdminHomeController@usersearch');
Route::get('/employeesearch', 'AdminHomeController@empsearch');
Route::get('/bookingrequest', 'AdminHomeController@bookingreq');
Route::get('/allbookings', 'AdminHomeController@allbookings');


Route::get('/user/{id}', 'AdminHomeController@usershow');
Route::get('/user/{id}/edit', 'AdminHomeController@usereditshow');
Route::get('/user/{id}/delete', 'AdminHomeController@userdeleteshow');
Route::put('/user/{id}', 'AdminHomeController@userupdate');
Route::delete('/user/{id}', 'AdminHomeController@userdelete');

Route::get('/employee/{id}', 'AdminHomeController@empshow');
Route::get('/employee/{id}/edit', 'AdminHomeController@empeditshow');
Route::get('/employee/{id}/delete', 'AdminHomeController@empdeleteshow');
Route::put('/employee/{id}', 'AdminHomeController@empupdate');
Route::delete('/employee/{id}', 'AdminHomeController@empdelete');

Route::get('/bookingsinfo/{id}', 'AdminHomeController@bookingsshow');
Route::get('/bookingsinfo/{id}/edit', 'AdminHomeController@bookingseditshow');
Route::get('/bookingsinfo/{id}/delete', 'AdminHomeController@bookingsdeleteshow');
Route::put('/bookingsinfo/{id}', 'AdminHomeController@bookingsupdate');
Route::delete('/bookingsinfo/{id}', 'AdminHomeController@bookingsdelete');

//
Route::get('/create-employee', 'AdminHomeController@createEmp');
Route::post('/AdminHome', 'AdminHomeController@store');

Route::get('/allmessage', 'AdminHomeController@msgshow');
Route::get('/openmessage/{id}', 'AdminHomeController@msgopen');


//});

});
