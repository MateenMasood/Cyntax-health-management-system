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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/' , 'AdminController@index');

// *********************** rback ****************************

// ******************** roles ******************

Route::get('/roles/select2-roles' , 'Rback\Roles\RoleController@select2');
Route::get('/roles/datatable' , 'Rback\Roles\RoleController@datatable');
Route::resource('/roles' , 'Rback\Roles\RoleController');

// **********************permissions ********************************

Route::get('/permissions/datatable' , 'Rback\Permissions\PermissionController@datatable');
Route::resource('/permissions' , 'Rback\Permissions\PermissionController');

// **********************users ********************************

Route::get('/employees/datatable' , 'Rback\Users\EmployeeController@datatable');
Route::resource('/employees' , 'Rback\Users\EmployeeController');


// Route::get('/{page}', 'AdminController@index');
Auth::routes();

Route::resource('/logout', 'Auth\LogoutController');
