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

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FieldController;

Route::get('/', function () {
   return redirect('/api/documentation');
});

Route::controller(AccountController::class)->group(function () {
    Route::get('/account', 'account');
    Route::get('/account/statuses', 'statuses');
    Route::get('/account/allStatuses', 'allStatuses');
    Route::get('/account/pipelines', 'pipelines');
    Route::get('/account/users', 'users');
    Route::get('/account/fields', 'fields');
});

Route::controller(CompanyController::class)->group(function () {
    Route::get('/company/{id}', 'company');
    Route::get('/company/search', 'search');
    Route::get('/company/list', 'list');
    Route::post('/company/create', 'create');
    Route::post('/company/update', 'update');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact/{id}', 'contact');
    Route::get('/contact/search', 'search');
    Route::get('/contact/list', 'list');
    Route::post('/contact/create', 'create');
    Route::post('/contact/update', 'update');
});

Route::controller(FieldController::class)->group(function () {
    Route::post('/field/create', 'create');
});
