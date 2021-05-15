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


//super user
Route::group(['middleware' => ['auth', 'ceklevel: 1']], function () {
    //Data User
    Route::get('/data-user', 'UserController@index')->name('data-user');
    Route::get('/create-user', 'UserController@create')->name('create-user');
    Route::post('/simpan-user', 'UserController@store')->name('simpan-user');
    Route::get('/edit-user/{user_nid}', 'UserController@edit')->name('edit-user');
    Route::put('/update-user/{user_nid}', 'UserController@update')->name('update-user');
    Route::get('/delete-user/{user_nid}', 'UserController@destroy')->name('delete-user');
    //Data Jabatan
    Route::get('/data-jabatan', 'JabatanController@index')->name('data-jabatan');
    Route::get('/create-jabatan', 'JabatanController@create')->name('create-jabatan');
    Route::post('/simpan-jabatan', 'JabatanController@store')->name('simpan-jabatan');
    Route::get('/edit-jabatan/{jabatan_id}', 'JabatanController@edit')->name('edit-jabatan');
    Route::post('/update-jabatan/{jabatan_id}', 'JabatanController@update')->name('update-jabatan');
    Route::get('/delete-jabatan/{jabatan_id}', 'JabatanController@destroy')->name('delete-jabatan');
    //Data Bidang
    Route::get('/data-unit', 'UnitController@index')->name('data-unit');
    Route::get('/create-unit', 'UnitController@create')->name('create-unit');
    Route::post('/simpan-unit', 'UnitController@store')->name('simpan-unit');
    Route::get('/edit-unit/{unit_id}', 'UnitController@edit')->name('edit-unit');
    Route::post('/update-unit/{unit_id}', 'UnitController@update')->name('update-unit');
    Route::get('/delete-unit/{unit_id}', 'UnitController@destroy')->name('delete-unit');
    //Data Fungsi
    Route::get('/data-fungsi', 'FungsiController@index')->name('data-fungsi');
    Route::get('/create-fungsi', 'FungsiController@create')->name('create-fungsi');
    Route::post('/simpan-fungsi', 'FungsiController@store')->name('simpan-fungsi');
    Route::get('/edit-fungsi/{fungsi_id}', 'FungsiController@edit')->name('edit-fungsi');
    Route::post('/update-fungsi/{fungsi_id}', 'FungsiController@update')->name('update-fungsi');
    Route::get('/delete-fungsi/{fungsi_id}', 'FungsiController@destroy')->name('delete-fungsi');
});
//super user, user spv, admin engineer
Route::group(['middleware' => ['auth', 'ceklevel:super user,user spv,admin engineer']], function () {    
    Route::get('/data-ecp', 'EcpController@index')->name('data-ecp');
    Route::get('/data-cmt', 'CmtController@index')->name('data-cmt');
    Route::get('/show-spv/{id}', 'SpvController@show')->name('show-spv');
    Route::get('/show-cmt/{id}', 'CmtController@show')->name('show-cmt');
});

//user spv/approval1
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {    
    Route::get('/data-ecp-approval1', 'EcpController@ecpapproval')->name('data-ecp-approval1');
    Route::get('/data-spv', 'SpvController@index')->name('data-spv');
    Route::get('/create-spv', 'SpvController@create')->name('create-spv');
    Route::post('/simpan-spv', 'SpvController@store')->name('simpan-spv');
    Route::get('/edit-spv/{spv_approval_id}', 'SpvController@edit')->name('edit-spv');
    Route::post('/update-spv/{spv_approval_id}', 'SpvController@update')->name('update-spv');
    Route::get('/delete-spv/{spv_approval_id}', 'SpvController@destroy')->name('delete-spv');
});

//user manager/approval2
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {    
    Route::get('/data-ecp-approval2', 'EcpController@ecpapproval2')->name('data-ecp-approval2');
    Route::get('/data-manager', 'ManagerController@index')->name('data-manager');
    Route::get('/create-manager', 'ManagerController@create')->name('create-manager');
    Route::post('/simpan-manager', 'ManagerController@store')->name('simpan-manager');
    Route::get('/edit-manager/{manager_approval_id}', 'ManagerController@edit')->name('edit-manager');
    Route::post('/update-manager/{manager_approval_id}', 'ManagerController@update')->name('update-manager');
    Route::get('/delete-manager/{manager_approval_id}', 'ManagerController@destroy')->name('delete-manager');
});
//admin engineer/notulen
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {    
    Route::get('/data-notulen', 'NotulenController@index')->name('data-notulen');
    Route::get('/create-notulen', 'NotulenController@create')->name('create-notulen');
    Route::post('/simpan-notulen', 'NotulenController@store')->name('simpan-notulen');
    Route::get('/edit-notulen/{notulen_id}', 'NotulenController@edit')->name('edit-notulen');
    Route::post('/update-notulen/{notulen_id}', 'NotulenController@update')->name('update-notulen');
    Route::get('/delete-notulen/{notulen_id}', 'NotulenController@destroy')->name('delete-notulen');
    Route::get('/show-notulen/{notulen}', 'NotulenController@show')->name('show-notulen');
    
    Route::get('/data-tindaklanjut', 'TindakLanjutController@index')->name('data-tindaklanjut');
    Route::get('/create-tindaklanjut', 'TindakLanjutController@create')->name('create-tindaklanjut');
    Route::post('/simpan-tindaklanjut', 'TindakLanjutController@store')->name('simpan-tindaklanjut');
    Route::get('/edit-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@edit')->name('edit-tindaklanjut');
    Route::patch('/update-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@update')->name('update-tindaklanjut');
    Route::get('/delete-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@destroy')->name('delete-tindaklanjut');
    Route::get('/show-tindaklanjut/{tindaklanjut}', 'TindakLanjutController@show')->name('show-tindaklanjut');
});

//user staff
Route::group(['middleware' => ['auth', 'ceklevel:1,2,3,4,5']], function () {
    Route::get('/create-ecp', 'EcpController@create')->name('create-ecp');
    Route::get('/data-ecp', 'EcpController@index')->name('data-ecp');
    Route::post('/simpan-ecp', 'EcpController@store')->name('simpan-ecp');
    Route::get('/edit-ecp/{ecp_no}', 'EcpController@edit')->name('edit-ecp');
    Route::patch('/update-ecp/{ecp_no}', 'EcpController@update')->name('update-ecp');
    Route::get('/delete-ecp/{ecp_no}', 'EcpController@destroy')->name('delete-ecp');
    Route::get('/show-ecp/{ecp_no}', 'EcpController@show')->name('show-ecp');
    
});

