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
