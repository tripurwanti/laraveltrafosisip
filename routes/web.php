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
Auth::routes([
    'register' => false,
    'verify' => true,
    'reset' => false
  ]);


Route::get('/', function () {
  return view('login');
});
Route::post('/login', 'LoginController@postLogin');

// Route::get('/home', function () {
//   return view('home');
// });

//Route::get('/login', 'LoginController@getLogin');
Route::get('/home', 'HomeController@index'); 
Route::get('/logout', 'LoginController@logout');
Route::get('/login', array('uses' => 'LoginController@showLogin'));

Route::get('/employee', 'EmployeeController@index');
Route::get('/employeeadd', 'EmployeeController@create');
Route::post('/employee', 'EmployeeController@store');
Route::delete('/employee/{empl}', 'EmployeeController@destroy');
Route::get('/employee/edit','EmployeeController@edit');
Route::patch('/employee/update', 'EmployeeController@update');

// Route::get('/data', 'TestController@test' );
// Route::get('/masterbarang', 'MasterbarangController@index');
// Route::resource('/masterbarang', 'MasterbarangController');
// Route::post('masterbarangpost', 'MasterbarangController@store');
// Route::get('/masterbarang', 'MasterbarangController@edit');

// Route::get('/stokbarang', 'StokbarangController@index');
// Route::get('/peminjaman', 'PeminjamanController@index');
// Route::get('/kehilangan', 'KehilanganController@index');
// Route::get('/pegawai', 'PerawatanController@index');
// Route::get('/pengembalian', 'PengembalianController@index');


// Route::get('/login', 'LoginController@index');