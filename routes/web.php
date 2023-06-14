<?php

use App\Jobs\EmailJob;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test-job', function () {
    EmailJob::dispatch(['test' => 'value']);

    return 'ok - test job';
});

Route::get('/', function () {
    return view('welcome');
});
