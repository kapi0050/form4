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

Route::any('/login/index', 'LoginController@getIndex');
Route::any('/list/index', 'ListController@getIndex');
Route::any('/delete_confirm/index', 'Delete_confirmController@getIndex');
Route::any('/delete_complete/index', 'Delete_completeController@getIndex');
Route::any('/update/index', 'UpdateController@getIndex');
Route::any('/update_confirm/index', 'Update_confirmController@getIndex');
Route::any('/update_complete/index', 'Update_completeController@getIndex');
