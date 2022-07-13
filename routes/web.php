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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'App\Http\Controllers\AuthController@login_form')->name('login-form');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard')->name('dashboard');

Route::get('/countries', 'App\Http\Controllers\CountriesController@getCountries')->name('countries');
Route::get('/add-country', 'App\Http\Controllers\CountriesController@addCountry')->name('add-country');
Route::post('/add-country', 'App\Http\Controllers\CountriesController@postCountry')->name('post-country');
Route::post('/{country_id}/delete-country', 'App\Http\Controllers\CountriesController@deleteCountry')->name('delete-country');
Route::post('/{country_id}/edit-country', 'App\Http\Controllers\CountriesController@editCountry')->name('edit-country');

Route::get('/districts', 'App\Http\Controllers\DistrictsController@getDistricts')->name('districts');
Route::get('/add-district', 'App\Http\Controllers\DistrictsController@addDistrict')->name('add-district');
Route::post('/add-district', 'App\Http\Controllers\DistrictsController@postDistrict')->name('post-district');

Route::get('/sectors', 'App\Http\Controllers\SectorsController@getSectors')->name('sectors');
Route::get('/add-sectors', 'App\Http\Controllers\SectorsController@addSector')->name('add-sector');
Route::post('/add-sectors/{districtId}', 'App\Http\Controllers\SectorsController@postSector')->name('post-sector');

Route::get('/plans', 'App\Http\Controllers\FilesController@getPlanFiles')->name('plans');
Route::get('/create-plan', 'App\Http\Controllers\FilesController@createPlan')->name('create-plan');
Route::post('/add-plan', 'App\Http\Controllers\FilesController@addPlan')->name('add-plan');

Route::get('/budgets', 'App\Http\Controllers\FilesController@getBudgetFiles')->name('budgets');
Route::get('/create-budget', 'App\Http\Controllers\FilesController@createBudget')->name('create-budget');
Route::post('/add-budget', 'App\Http\Controllers\FilesController@addBudget')->name('add-budget');

Route::get('/files', 'App\Http\Controllers\FilesController@getFiles')->name('files');
Route::get('/create-file', 'App\Http\Controllers\FilesController@createFile')->name('create-file');
Route::post('/add-file', 'App\Http\Controllers\FilesController@addFile')->name('add-file');
Route::post('/{file_id}/edit-file', 'App\Http\Controllers\FilesController@editFile')->name('edit-file');
Route::post('/{file_id}/delete-file', 'App\Http\Controllers\FilesController@deleteFile')->name('delete-file');
