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

Route::get('users',"YajraTableController@index");
Route::get('ajax-list',"YajraTableController@ajaxList");
/**
     * Route for the contact.
     *
     * @return route
     */
Route::get('contact',"ContactController@index");
Route::post('contact',"ContactController@contact");
Route::get('list',"ContactController@list")->name("Clist");
Route::get('ajax-list-conctact',"ContactController@ajaxList")->name("contactlist");
Route::get('edit-conctact/{id?}',"ContactController@edit")->name("contactEdit");

Route::post('edit-store',"ContactController@editStore")->name("contactEditSave");

Route::get('get-data-where',"ContactController@getDataWhere");
Route::get('send-mail',"ContactController@sendmail");



