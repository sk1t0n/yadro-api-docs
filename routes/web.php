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
use App\Http\Controllers\LeadController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\YadroController;

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
    Route::get('/company/search', 'search');
    Route::get('/company/list', 'list');
    Route::get('/company/{id}', 'company');
    Route::post('/company/create', 'create');
    Route::post('/company/update', 'update');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact/search', 'search');
    Route::get('/contact/list', 'list');
    Route::get('/contact/{id}', 'contact');
    Route::post('/contact/create', 'create');
    Route::post('/contact/update', 'update');
});

Route::controller(FieldController::class)->group(function () {
    Route::post('/field/create', 'create');
});

Route::controller(LeadController::class)->group(function () {
    Route::get('/lead/search', 'search');
    Route::get('/lead/list', 'list');
    Route::get('/lead/links', 'links');
    Route::get('/lead/{id}/links', 'linksById');
    Route::get('/lead/{id}', 'lead');
    Route::post('/lead/create', 'create');
    Route::post('/lead/update', 'update');
});

Route::controller(NoteController::class)->group(function () {
    Route::get('/note/{id}', 'note');
    Route::post('/note/create', 'create');
    Route::post('/note/update', 'update');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('/task/list', 'list');
    Route::get('/task/{id}', 'task');
    Route::post('/task/create', 'create');
});

Route::controller(YadroController::class)->group(function () {
    Route::post('/yadro/sendToAmo', 'sendToAmo');
});
