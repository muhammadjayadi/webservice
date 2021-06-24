<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kursus', 'API\CourseController@index');

Route::get('kursus/{data}', 'API\CourseController@show');

// Route Hapus Data
Route::delete('kursus/{data}', 'API\CourseController@destroy');

// Route Tambah Data
Route::post('kursus', 'API\CourseController@store');

// Route Update Data
Route::patch('kursus/{id}', 'API\CourseController@update');


// Institution
// tampil data
Route::get('institusi', 'API\InstitutionController@index');
Route::get('institusi/{data}', 'API\InstitutionController@show');

// tabah data
Route::post('institusi/create', 'API\InstitutionController@store');

// ubah data
Route::patch('institusi/update/{id}', 'API\InstitutionController@update');

// hapus data
Route::delete('institusi/delete/{data}', 'API\InstitutionController@destroy');