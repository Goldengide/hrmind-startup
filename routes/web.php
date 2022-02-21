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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/Employers', 'App\Http\Controllers\PagesController@jobSeekers');

Route::get('/Resources', 'App\Http\Controllers\PagesController@resources');

Route::get('/About', 'App\Http\Controllers\PagesController@about');

Route::get('/News', 'App\Http\Controllers\PagesController@news');

Route::get('/Contact', 'App\Http\Controllers\PagesController@contact');

Route::get('/Nurses', 'App\Http\Controllers\PagesController@nurses');

Route::get('/support-workers', 'App\Http\Controllers\PagesController@supportWorkers');

Route::get('/healthcare-assistants', 'App\Http\Controllers\PagesController@healthcareAssistants');

Route::get('/care-managers', 'App\Http\Controllers\PagesController@careManagers');

Route::get('/timesheets', 'App\Http\Controllers\PagesController@timesheets');

Route::get('/recruitment-services', 'App\Http\Controllers\PagesController@recruitmentServices');

Route::get('/temporary-staff', 'App\Http\Controllers\PagesController@temporaryStaff');
