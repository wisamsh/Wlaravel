<?php
use Illuminate\Http\Request;
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




    
Route::get('add/{name?}/{number?}', 'Helperscontroller@MyRequests');

Route::get('select/', 'Helperscontroller@MySelect');

Route::get('deleter/{id?}', 'Helperscontroller@MyDeleter');

Route::get('update/{id?}/{name?}/{number?}/{canceled?}', 'Helperscontroller@MyUpdater');

