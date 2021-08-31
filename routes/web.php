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

Route::get('/', function () {
    return view('welcome');
});
Route::get('followup/detail', function () {
    return view('followup/detail');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('penawaran/index','PenawaranController@index')->name('penawaran/index')->middleware('auth');
Route::get('penawaran/create','PenawaranController@create')->middleware('auth');
// Route::get('/penawaran/detail/{penawaran}','PenawaranController@show');

Route::POST('penawaran','PenawaranController@store')->name('penawaran')->middleware('auth');
Route::get('/cari','PenawaranController@search')->name('cari')->middleware('auth');
Route::get('/detail/{penawaran}','PenawaranController@show')->name('detail')->middleware('auth');
Route::get('/penawaran/{penawaran}/edit', 'PenawaranController@edit')->middleware('auth');
Route::patch('/penawaran/{penawaran}', 'PenawaranController@update')->middleware('auth');

Route::get('penawaran/pdf/{penawaran}','PenawaranController@pdf')->name('penawaran/cetak_pdf')->middleware('auth');
Route::get('penawaran/cetak_pdf/{penawaran}','PenawaranController@cetak_pdf')->name('penawaran/cetak_pdf')->middleware('auth');
Route::get('penawaran/{user}/followup','PerusahaanController@index')->name('penawaran/flowup')->middleware('auth');
// Route::get('penawaran/followup', function () {
//     return view('penawaran/followup');
// })->name('flup');
// Route::get('penawaran/cetak_pdf/{penawaran}','PenawaranController@pdf')->name('penawaran/cetak_pdf');
// Route::get('/cetak_pdf', ['uses' => 'PenawaranController@cetak_pdf', 'as' => 'cetak_pdf']);

Route::get('followup','FollowupController@index')->name('followup')->middleware('auth');
Route::get('/search', 'FollowupController@search')->name('search')->middleware('auth');
Route::get('menu', 'FollowupController@menu')->name('menu');

// Route::get('menu', function () {
//     return view('followup/menu');
// })->name('menu');

// Route::get('/fab', 'FollowupController@fab')->name('fab');
Route::get('followup/fab', function () {
    return view('followup/fab');
})->name('upload');

Route::get('fab', function () {
    $pdf= PDF::loadview('followup/fab')->setOptions(['defaultFont' => 'sans-serif']);
    return $pdf->download('FAB-pdf.pdf');
})->name('download');


Route::get('file/{penawaran}/create','FileController@getFile')->name('file.create')->middleware('auth');

Route::POST('file/create','FileController@store')->name('file')->middleware('auth');
Route::get('file/{penawaran}','FileController@show')->name('data');
Route::get('file/download/{id}', 'FileController@download')->name('file.download');
// Route::get('identitas/{penawaran}','FileController@datadiri')->name('data');


Route::get('identitas/{identitas}/create','IdentitasController@create')->name('identitas.create');
Route::POST('identitas/create','IdentitasController@store')->name('identitas');