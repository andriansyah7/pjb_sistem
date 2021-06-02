<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('Template.dashboard');
});

Route::get('/warning', function () {
    return view('Template.nolevel');
});

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/beranda', 'BerandaController@index');
Route::get('cetakdoc/{spv_approval_id}', 'SpvController@cetakdoc')->name('cetakdoc');
Route::get('cetakmng/{manager_approval_id}', 'ManagerController@cetakmng')->name('cetakmng');


//super user
Route::group(['middleware' => ['auth', 'ceklevel: 1']], function () {
    //Data User
    Route::get('/data-user', 'UserController@index')->name('data-user');
    Route::get('/create-user', 'UserController@create')->name('create-user');
    Route::get('/fungsi/{unit_id}', 'UserController@getfungsi')->name('create-fungsi');
    Route::post('/simpan-user', 'UserController@store')->name('simpan-user');
    Route::get('/edit-user/{user}', 'UserController@edit')->name('edit-user');
    Route::patch('/update-user/{user}', 'UserController@update')->name('update-user');
    Route::get('/delete-user/{user_nid}', 'UserController@destroy')->name('delete-user');
    //Data Jabatan
    Route::get('/data-jabatan', 'JabatanController@index')->name('data-jabatan');
    Route::get('/create-jabatan', 'JabatanController@create')->name('create-jabatan');
    Route::post('/simpan-jabatan', 'JabatanController@store')->name('simpan-jabatan');
    Route::get('/edit-jabatan/{jabatan}', 'JabatanController@edit')->name('edit-jabatan');
    Route::patch('/update-jabatan/{jabatan}', 'JabatanController@update')->name('update-jabatan');
    Route::get('/delete-jabatan/{jabatan_id}', 'JabatanController@destroy')->name('delete-jabatan');
    //Data Bidang
    Route::get('/data-unit', 'UnitController@index')->name('data-unit');
    Route::get('/create-unit', 'UnitController@create')->name('create-unit');
    Route::post('/simpan-unit', 'UnitController@store')->name('simpan-unit');
    Route::get('/edit-unit/{unit}', 'UnitController@edit')->name('edit-unit');
    Route::patch('/update-unit/{unit}', 'UnitController@update')->name('update-unit');
    Route::get('/delete-unit/{unit_id}', 'UnitController@destroy')->name('delete-unit');
    //Data Fungsi
    Route::get('/data-fungsi', 'FungsiController@index')->name('data-fungsi');
    Route::get('/create-fungsi', 'FungsiController@create')->name('create-fungsi');
    Route::post('/simpan-fungsi', 'FungsiController@store')->name('simpan-fungsi');
    Route::get('/edit-fungsi/{fungsi}', 'FungsiController@edit')->name('edit-fungsi');
    Route::patch('/update-fungsi/{fungsi}', 'FungsiController@update')->name('update-fungsi');
    Route::get('/delete-fungsi/{fungsi_id}', 'FungsiController@destroy')->name('delete-fungsi');
    //data blok
    Route::get('/data-blok', 'SerpBlokController@index')->name('data-blok');
    Route::get('/create-blok', 'SerpBlokController@create')->name('create-blok');
    Route::post('/simpan-blok', 'SerpBlokController@store')->name('simpan-blok');
    Route::get('/edit-blok/{serp_blok}', 'SerpBlokController@edit')->name('edit-blok');
    Route::patch('/update-blok/{serp_blok}', 'SerpBlokController@update')->name('update-blok');
    Route::get('/delete-blok/{serp_blok}', 'SerpBlokController@destroy')->name('delete-blok');
    Route::get('/show-blok/{serp_blok}', 'SerpBlokController@show')->name('show-blok');
   //data_unit
    Route::get('/data-serp_unit', 'SerpUnitController@index')->name('data-serp_unit');
    Route::get('/create-serp_unit', 'SerpUnitController@create')->name('create-serp_unit');
    Route::post('/simpan-serp_unit', 'SerpUnitController@store')->name('simpan-serp_unit');
    Route::get('/edit-serp_unit/{serp_unit}', 'SerpUnitController@edit')->name('edit-serp_unit');
    Route::patch('/update-serp_unit/{serp_unit}', 'SerpUnitController@update')->name('update-serp_unit');
    Route::get('/delete-serp_unit/{serp_unit}', 'SerpUnitController@destroy')->name('delete-serp_unit');
    Route::get('/show-serp_unit/{serp_unit}', 'SerpUnitController@show')->name('show-serp_unit');
});
//super user, user spv, admin engineer
Route::group(['middleware' => ['auth', 'ceklevel:super user,user spv,admin engineer']], function () {    
    Route::get('/data-ecp', 'EcpController@index')->name('data-ecp');
    Route::get('/data-cmt', 'CmtController@index')->name('data-cmt');
    Route::get('/show-cmt/{id}', 'CmtController@show')->name('show-cmt');
});

//user spv/approval1
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {    
    Route::get('/data-ecp-approval1', 'EcpController@ecpapproval')->name('data-ecp-approval1');
    Route::get('/progres-spv/{ecp_no}', 'EcpController@progres_spv')->name('progres-spv');
    Route::get('/reject-spv/{ecp_no}', 'EcpController@reject_spv')->name('reject-spv');
    Route::get('/data-spv', 'SpvController@index')->name('data-spv');
    Route::get('/create-spv', 'SpvController@create')->name('create-spv');
    Route::post('/simpan-spv', 'SpvController@store')->name('simpan-spv');
    Route::get('/show-spv/{spv_approval}', 'SpvController@show')->name('show-spv');
    Route::get('/edit-spv/{spv_approval}', 'SpvController@edit')->name('edit-spv');
    Route::patch('/update-spv/{spv_approval}', 'SpvController@update')->name('update-spv');
    Route::get('/delete-spv/{spv_approval_id}', 'SpvController@destroy')->name('delete-spv');
});

//user manager/approval2
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {    
    Route::get('/data-ecp-approval2', 'EcpController@ecpapproval2')->name('data-ecp-approval2');
    Route::get('/progres-manager/{ecp_no}', 'EcpController@progres_manager')->name('progres-manager');
    Route::get('/reject-manager/{ecp_no}', 'EcpController@reject_manager')->name('reject-manager');
    Route::get('/data-manager', 'ManagerController@index')->name('data-manager');
    Route::get('/create-manager', 'ManagerController@create')->name('create-manager');
    Route::post('/simpan-manager', 'ManagerController@store')->name('simpan-manager');
    Route::get('/show-manager/{manager_approval}', 'ManagerController@show')->name('show-manager');
    Route::get('/edit-manager/{manager_approval}', 'ManagerController@edit')->name('edit-manager');
    Route::patch('/update-manager/{manager_approval}', 'ManagerController@update')->name('update-manager');
    Route::get('/delete-manager/{manager_approval_id}', 'ManagerController@destroy')->name('delete-manager');
});
//admin engineer/notulen
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {    
    Route::get('/data-notulen', 'NotulenController@index')->name('data-notulen');
    Route::get('/progres-notulen/{ecp_no}', 'EcpController@progres_notulen')->name('progres-notulen');
    Route::get('/progres-tindaklanjut/{ecp_no}', 'EcpController@progres_tindaklanjut')->name('progres-tindaklanjut');
    Route::get('/create-notulen', 'NotulenController@create')->name('create-notulen');
    Route::post('/simpan-notulen', 'NotulenController@store')->name('simpan-notulen');
    Route::get('/edit-notulen/{notulen}', 'NotulenController@edit')->name('edit-notulen');
    Route::patch('/update-notulen/{notulen}', 'NotulenController@update')->name('update-notulen');
    Route::get('/delete-notulen/{notulen_id}', 'NotulenController@destroy')->name('delete-notulen');
    Route::get('/show-notulen/{notulen}', 'NotulenController@show')->name('show-notulen');
    Route::get('/cetaknotulen/{notulen_id}', 'NotulenController@cetaknotulen')->name('cetaknotulen');
    //tindaklanjutecp
    Route::get('/data-tindaklanjut', 'TindakLanjutController@index')->name('data-tindaklanjut');
    Route::get('/create-tindaklanjut', 'TindakLanjutController@create')->name('create-tindaklanjut');
    Route::post('/simpan-tindaklanjut', 'TindakLanjutController@store')->name('simpan-tindaklanjut');
    Route::get('/edit-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@edit')->name('edit-tindaklanjut');
    Route::patch('/update-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@update')->name('update-tindaklanjut');
    Route::get('/delete-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@destroy')->name('delete-tindaklanjut');
    Route::get('/show-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@show')->name('show-tindaklanjut');
    //serp_system
    Route::get('/data-serp_system', 'SerpSystemController@index')->name('data-serp_system');
    Route::get('/create-serp_system', 'SerpSystemController@create')->name('create-serp_system');
    Route::post('/simpan-serp_system', 'SerpSystemController@store')->name('simpan-serp_system');
    Route::post('/ekspor-serp_system', 'SerpSystemController@ekspor')->name('ekspor-serp_system');
    Route::post('/impor-serp_system', 'SerpSystemController@impor')->name('impor-serp_system');
    Route::get('/edit-serp_system/{serp_system}', 'SerpSystemController@edit')->name('edit-serp_system');
    Route::patch('/update-serp_system/{serp_system}', 'SerpSystemController@update')->name('update-serp_system');
    Route::get('/delete-serp_system/{serp_system}', 'SerpSystemController@destroy')->name('delete-serp_system');
    Route::get('/show-serp_system/{serp_system}', 'SerpSystemController@show')->name('show-serp_system');
    //serp_pic
    Route::get('/data-serp_pic', 'SerpPicController@index')->name('data-serp_pic');
    Route::get('/create-serp_pic', 'SerpPicController@create')->name('create-serp_pic');
    Route::post('/simpan-serp_pic', 'SerpPicController@store')->name('simpan-serp_pic');
    Route::get('/edit-serp_pic/{serp_pic}', 'SerpPicController@edit')->name('edit-serp_pic');
    Route::patch('/update-serp_pic/{serp_pic}', 'SerpPicController@update')->name('update-serp_pic');
    Route::get('/delete-serp_pic/{serp_pic}', 'SerpPicController@destroy')->name('delete-serp_pic');
    Route::get('/show-serp_pic/{serp_pic}', 'SerpPicController@show')->name('show-serp_pic');
    
    Route::get('/data-serp_main', 'SerpMainEquipmentController@index')->name('data-serp_main');
    Route::get('/create-serp_main', 'SerpMainEquipmentController@create')->name('create-serp_main');
    Route::get('/ekspor-serp_main', 'SerpMainEquipmentController@ekspor')->name('ekspor-serp_main');
    Route::post('/impor-serp_main', 'SerpMainEquipmentController@impor')->name('impor-serp_main');
    Route::post('/simpan-serp_main', 'SerpMainEquipmentController@store')->name('simpan-serp_main');
    Route::get('/edit-serp_main/{serp_main_equipment}', 'SerpMainEquipmentController@edit')->name('edit-serp_main');
    Route::patch('/update-serp_main/{serp_main_equipment}', 'SerpMainEquipmentController@update')->name('update-serp_main');
    Route::get('/delete-serp_main/{serp_main_equipment}', 'SerpMainEquipmentController@destroy')->name('delete-serp_main');
    Route::get('/show-serp_main/{serp_main_equipment}', 'SerpMainEquipmentController@show')->name('show-serp_main');
});

//user staff
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {
    Route::get('/create-ecp', 'EcpController@create')->name('create-ecp');
    Route::get('/data-ecp', 'EcpController@index')->name('data-ecp');
    Route::post('/simpan-ecp', 'EcpController@store')->name('simpan-ecp');
    Route::get('/edit-ecp/{ecp}', 'EcpController@edit')->name('edit-ecp');
    Route::patch('/update-ecp/{ecp_no}', 'EcpController@update')->name('update-ecp');
    Route::get('/delete-ecp/{ecp_no}', 'EcpController@destroy')->name('delete-ecp');
    Route::get('/show-ecp/{ecp_no}', 'EcpController@show')->name('show-ecp');
    Route::get('/cetakword/{ecp_no}', 'EcpController@cetakWord')->name('cetakword');
    
});

