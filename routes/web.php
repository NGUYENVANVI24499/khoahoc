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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//auth route for both
//Route::group(['middleware'=>['auth']],function(){
	
	Route::get('/trangchu1','UserController@trangchu1')->name('trangchu1');

//});
//auth route for user
Route::group(['middleware'=>['auth','role:user']],function(){
	Route::get('/dashboard/myprofile','Dashboarcontroller@myprofile')->name('dashboard.myprofile');
});

//xem lich công tác 







//  begin
Route::group(['middleware'=>['auth']],function(){

Route::get('index','AdminController@getindex')->name('index');
Route::get('lichcongtac/{id}','AdminController@getlichcongtac');
Route::get('tuancongtac','AdminController@gettuancongtac');
Route::get('thanhphan/{id}','AdminController@getthanhphan');
Route::get('themcongtactuan/{id}','AdminController@themcongtactuan');

Route::post('addlichcongtac','AdminController@addlichcongtac');
Route::get('themtuan/{id}','AdminController@themtuan');



Route::get('themgiangvien','AdminController@addgiangvien');
Route::get('addgv/{id}','AdminController@addgv');



//điểm danh
Route::get('diemdanh', 'AdminController@viewdiemdanh')->name('diemdanh');
Route::get('danhsachdiemdanh/{id}','AdminController@getdanhsachdiemdanh');
Route::post('post','AdminController@postdiemdanh')->name('attendence_post');


//add thêm thành phần của lịch công tác
Route::post('addthanhphan','AdminController@addthanhphan')->name('add_lecturers');



Route::get('tongket','AdminController@gettongket')->name('tongket');
Route::post('posttongket','AdminController@posttongket')->name('posttongket');


//thêm loại công tác
Route::get('loaicongtac','AdminController@tl_loaicongtac');
Route::get('addloaicongtac','AdminController@addloaicongtac');
Route::post('postcongtacmoi','AdminController@postloaicongtac')->name('postcongtacmoi');
Route::get('edit/{id}','AdminController@editloaicongtac');
Route::post('posteditcongtacmoi','AdminController@posteditcongtacmoi')->name('posteditcongtacmoi');
//thêm giảng viên
Route::get('danhsachgv','AdminController@getdsgv')->name('danhsachgv');
Route::get('add_gv','AdminController@add_gv');
Route::post('postadd_gv','AdminController@postadd_gv')->name('postadd_gv');


//xuất excel
Route::get('export/{id}','ControllerExport@export')->name('export');

// end

});

//user


Route::get('giangvien','UserController@index');
require __DIR__.'/auth.php';


