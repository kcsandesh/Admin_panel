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

// Route::get('/', function () {
//     return view('auth.login');
// });
// Route:group(['middleware=>['Authenticate','admin']], function(){
    // Route::get('/home', function () {
    //     return view('admin.dashboard');
    // }); 
   
 
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::post('form/submit',[
//     'uses'=>'SubmitController@store',
//     'as'=>'form.submit'
// ]);
// Route::get('/table', function () {
//     return view('admin.dashboard');
// });


// Auth::routes();

// // Route::get('/tables', 'HomeController@store')->name('tables');
Route::post('/client/submit',[
    'uses'=>'SubmitClientController@store',
    'as'=>'client.submit'
]);

Route::get('/client/list','ClientController@index')->name('client');

Route::get('/client/edit/{id}','ClientController@edit')->name('edit');
Route::post('/client/update/{id}','ClientController@update')->name('update');
Route::get('/client/delete/{id}','ClientController@delete')->name('delete');





