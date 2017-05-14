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

Route::get('/', 'GuestPagesController@index');
Route::get('/competition/{competition}', 'GuestPagesController@competition');
Route::get('/event/{event}', 'GuestPagesController@event');
Route::get('/competitions', 'GuestPagesController@allcompetition');
Route::get('/departments', 'GuestPagesController@departmentslist');
Route::get('/department/{department}', 'GuestPagesController@department');

Route::get('/admin/allusers', 'UserAdminController@alluser');
Route::get('/admin/newusers', 'UserAdminController@newuser');
Route::get('/admin/activeusers', 'UserAdminController@activeuser');
Route::get('/admin/blockedusers', 'UserAdminController@blockeduser');
Route::post('/admin/usersupdate', 'UserAdminController@userupdate');

Route::resource('/admin/department', 'DepartmentController');
Route::resource('/user/events', 'EventsController');
Route::post('/user/events/{event}/updateranklist', 'EventsController@updateranklist');
Route::resource('/user/competitions', 'CompetitionsController');
Route::post('/user/competitions/{competition}/image', 'CompetitionsController@storeimage');
Route::post('/user/competitions/{competition}/image/delete', 'CompetitionsController@deleteimage');
Route::get('/user/competitions/{competition}/createevent', 'CompetitionsController@createevent');

Auth::routes();

Route::get('/home', 'HomeController@index');
