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

// Route::get('/vinyl/{vinyl_id}/delete' , [
//       'uses' => 'VinylController@getDeleteVinyl' ,
//       'as' => 'admin.vinyl.delete'
//     ]);

// Route::get('/adminshow', [
//   'uses' => 'VinylController@getVinylAdmin',
//   'as' => 'adminshow'
// ]);

Route::get('/singlevinyl/{vinyl_id}',[
  'uses' => 'VinylController@getSingleVinyl',
  'as' => 'singlevinyl'
]);



 Auth::routes();

// Route::group(['middleware' => 'auth'], function()
// {
//
//   // Authentication Routes...
//       Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//       Route::post('login', 'Auth\LoginController@login');
//       Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//
//       // Registration Routes...
//       Route::get('register', 'Auth\RegisterController@showRegistrationForm');
//       Route::post('register', 'Auth\RegisterController@register');
//
//       // Password Reset Routes...
//       Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//       Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//       Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//       Route::post('password/reset', 'Auth\ResetPasswordController@reset');
// });

Route::group(['prefix'=>'/user', 'middleware'=>'auth'], function (){


    Route::get('/', [
    'uses' => 'VinylController@getVinylAdmin',
    'as' => 'home'
        ]);

    Route::get('/admin', function () {
        return view('adminpage');
        })->name('admin');

    Route::post('/create', [
      'uses' => 'VinylController@postVinyl' ,
      'as' => 'create'
        ]);


    Route::get ('/vinyledit/{vinyl_id}', [
          'uses' => 'VinylController@getEditVinyl',
          'as' =>'editVinyl'
        ]);

    Route::post('/vinyl/update/{vinyl_id}',[
          'uses' => 'VinylController@vinylUpdate',
          'as' =>'updateVinyl'
        ]);

    Route::get('/vinyl/{vinyl_id}/delete' , [
          'uses' => 'VinylController@getDeleteVinyl' ,
          'as' => 'admin.vinyl.delete'
        ]);
});

 // Route::get('/home', 'HomeController@index')->name('home');
