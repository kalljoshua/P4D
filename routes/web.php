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



Route::get('/', 'App\Http\Controllers\user\HomeController@home')->name('home');
Route::get('/files', 'App\Http\Controllers\user\FilesController@getFiles')->name('files');
Route::get('/plan-files', 'App\Http\Controllers\user\FilesController@getPlanFiles')->name('plan_files');
Route::get('/budget-files', 'App\Http\Controllers\user\FilesController@getBudgetFiles')->name('budget_files');
Route::get('/year-files', 'App\Http\Controllers\user\FilesController@getYearFiles')->name('year_files');
Route::get('/contact-us', 'App\Http\Controllers\user\HomeController@contact')->name('contact');
Route::post('/{file_id}/file-details', 'App\Http\Controllers\user\HomeController@getFileDetails')->name('get_file_details');
Route::get('/file-details', 'App\Http\Controllers\user\HomeController@fileDetails')->name('file_details');
//Route::get('/', 'App\Http\Controllers\AuthController@login_form')->name('login-form');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard')->name('dashboard');

Route::get('/countries', 'App\Http\Controllers\CountriesController@getCountries')->name('countries');
Route::get('/add-country', 'App\Http\Controllers\CountriesController@addCountry')->name('add-country');
Route::post('/add-country', 'App\Http\Controllers\CountriesController@postCountry')->name('post-country');
Route::post('/{country_id}/delete-country', 'App\Http\Controllers\CountriesController@deleteCountry')->name('delete-country');
Route::post('/{country_id}/edit-country', 'App\Http\Controllers\CountriesController@editCountry')->name('edit-country');

Route::get('/districts', 'App\Http\Controllers\DistrictsController@getDistricts')->name('districts');
Route::get('/country-districts', 'App\Http\Controllers\DistrictsController@getCountryDistricts')->name('country-districts');
Route::get('/add-district', 'App\Http\Controllers\DistrictsController@addDistrict')->name('add-district');
Route::post('/add-district', 'App\Http\Controllers\DistrictsController@postDistrict')->name('post-district');
Route::post('/{district_id}/delete-district', 'App\Http\Controllers\CountriesController@deleteDistrict')->name('delete-district');
Route::post('/{district_id}/edit-district', 'App\Http\Controllers\CountriesController@editDistrict')->name('edit-district');

Route::get('/sectors', 'App\Http\Controllers\SectorsController@getSectors')->name('sectors');
Route::get('/district-sectors', 'App\Http\Controllers\SectorsController@getDistrictSectors')->name('district-sectors');
Route::get('/add-sectors', 'App\Http\Controllers\SectorsController@addSector')->name('add-sector');
Route::post('/add-sectors', 'App\Http\Controllers\SectorsController@postSector')->name('post-sector');
Route::post('/{sector_id}/delete-sector', 'App\Http\Controllers\CountriesController@deleteSector')->name('delete-sector');
Route::post('/{sector_id}/edit-sector', 'App\Http\Controllers\CountriesController@editSector')->name('edit-sector');

Route::get('/plans', 'App\Http\Controllers\FilesController@getPlanFiles')->name('plans');
Route::get('/create-plan', 'App\Http\Controllers\FilesController@createPlan')->name('create-plan');
Route::post('/add-plan', 'App\Http\Controllers\FilesController@addPlan')->name('add-plan');

Route::get('/budgets', 'App\Http\Controllers\FilesController@getBudgetFiles')->name('budgets');
Route::get('/create-budget', 'App\Http\Controllers\FilesController@createBudget')->name('create-budget');
Route::post('/add-budget', 'App\Http\Controllers\FilesController@addBudget')->name('add-budget');

//Route::get('/files', 'App\Http\Controllers\FilesController@getFiles')->name('files');
Route::get('/create-file', 'App\Http\Controllers\FilesController@createFile')->name('create-file');
Route::post('/add-file', 'App\Http\Controllers\FilesController@addFile')->name('add-file');
Route::post('/{file_id}/edit-file', 'App\Http\Controllers\FilesController@editFile')->name('edit-file');
Route::post('/{file_id}/delete-file', 'App\Http\Controllers\FilesController@deleteFile')->name('delete-file');
