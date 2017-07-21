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

Route::get('/', [
 'uses' => 'VinylController@getVinyl',
 'as' => 'index'
]);

Route::get('/admin', function () {
    return view('adminpage');
})->name('admin');

Route::post('/', [
  'uses' => 'VinylController@postVinyl' ,
  'as' => 'create'
]);

Route::get('/vinyl/{vinyl_id}/delete' , [
      'uses' => 'VinylController@getDeleteVinyl' ,
      'as' => 'admin.vinyl.delete'
    ]);

Route::get('/adminshow', [
  'uses' => 'VinylController@getVinylAdmin',
  'as' => 'adminshow'
]);

Route::get('/singlevinyl/{vinyl_id}',[
  'uses' => 'VinylController@getSingleVinyl',
  'as' => 'singlevinyl'
]);

Route::get ('/vinyledit/{vinyl_id}', [
  'uses' => 'VinylController@getEditVinyl',
  'as' =>'editVinyl'
]);

Route::post('/vinyl/update/{vinyl_id}',[
  'uses' => 'VinylController@vinylUpdate',
  'as' =>'updateVinyl'
]);
