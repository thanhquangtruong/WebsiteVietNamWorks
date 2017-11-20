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
Route::get('home',function(){
	return view('index');
});
Route::get('dangnhap',function(){
	return view('login');
});
Route::get('dangky',function(){
	return view('signup');
});
Route::get('thongtintaikhoan',function(){
	return view('user.taikhoancuatoi');
});


// Dang nhap bang fb, gg
Route::get('facebook/redirect',['as'=>'loginfacebook','uses'=> 'AuthController@redirectToFacebook']);
Route::get('facebook/callback', 'AuthController@handleFacbookCallback');
Route::get('google/redirect', 'AuthController@redirectToGoogle');
Route::get('google/callback', 'AuthController@handleGoogleCallback');

// Dang xuat
Route::get('dangxuat', 'UserController@getDangXuat');

//Dang nhap bang Email
Route::get('dangnhap', 'UserController@getLogin');
Route::post('dangnhap', 'UserController@postLogin');

//Dang ky tai khoan  moi
Route::get('dangky', 'UserController@getDangky');
Route::post('dangky', 'UserController@postDangky');

// Sua thong tin tai khoan
Route::get('suathongtintaikhoan', 'UserController@getEditTaiKhoanCuaToi');
Route::post('suathongtintaikhoan', 'UserController@postEditTaiKhoanCuaToi');

// Thay doi email dang nhap
Route::get('suathongtinemailtaikhoan', 'UserController@getEditMail');
Route::post('suathongtinemailtaikhoan', 'UserController@postEditMail');

// Doi mat khau
Route::get('doimatkhau', 'UserController@getChangePassword');
Route::post('doimatkhau', 'UserController@postChangePassword');


// Ho so viec lam
	Route::get('hosovieclam',function(){
		return view('user.hosovieclam.hosocuatoi');
	});

	//Sua Avatar
	Route::get('SuaAvatar', 'HosovieclamController@getAvatar');
	Route::post('SuaAvatar', 'HosovieclamController@postAvatar');

	//Sua thong tin ca nhan
	Route::get('SuaThongTinCaNhan', 'HosovieclamController@getSuaThongTinCaNhan');
	Route::post('SuaThongTinCaNhan', 'HosovieclamController@postSuaThongTinCaNhan');

	//Sua thong tin chung
	Route::get('SuaThongTinChung', 'HosovieclamController@getSuaThongTinChung');
	Route::post('SuaThongTinChung', 'HosovieclamController@postSuaThongTinChung');
