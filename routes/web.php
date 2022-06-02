<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', 'App\Http\Controllers\messageController@index');
Auth::routes();
Route::get('message', 'App\Http\Controllers\messageController@index')->name('message.index');
Route::Post('message', 'App\Http\Controllers\messageController@store')->name('message.store');
Route::get('message/{user}/{id}', 'App\Http\Controllers\messageController@create')->name('message.create');
Route::get('profile', 'App\Http\Controllers\profileController@index')->name('profile.index');
Route::get('updateUser', function () {
    $id = auth()->user()->id;
    $user = User::find($id);
    return view("profile.updateUser")->with('user' , $user);
})->name('updateUser');
Route::get('updatePassword', function () {
    return view("profile.updatePassword");
})->name('updatePassword');
Route::get('chanageImage', function () {
    $id = auth()->user()->id;
    $user = User::find($id);
    return view("profile.chanageImage")->with('user' , $user);
})->name('chanageImage');
Route::post('updateUser/edit', 'App\Http\Controllers\profileController@updateuser')->name('profile.update');
Route::post('updarePassword/edit', 'App\Http\Controllers\profileController@updatepassword')->name('profile.upadate.password');
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::post('chanageImage', 'App\Http\Controllers\profileController@uploadeImage')->name('profile.image');

