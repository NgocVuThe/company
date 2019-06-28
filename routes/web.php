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
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('management.main_page.manager');
});
// Route::group([
//     'namespace' => 'Management',
//     'prefix' => 'manager',
// ], function () {
//     Route::get('/admin-page', 'UserController@index')->name('manager.admin.page');
// });



