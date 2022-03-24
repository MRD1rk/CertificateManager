<?php

use App\Http\Controllers\CertificatesController;
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

Route::get('/', function () {
    return view('welcome');
});
// route to show the login form
Route::get('certificates/new', function () {
    return view('certificates.new');
});
Route::post('certificates/checkout', [CertificatesController::class, 'checkout']);
Route::get('certificates/confirm/{id}', [CertificatesController::class, 'confirm'])
    ->where('id', '[0-9]+')
    ->name('certificates.confirm');
Route::get('certificates/download/{id}', [CertificatesController::class, 'download'])
    ->where('id', '[0-9]+')
    ->name('certificates.download');
Route::get('certificates/view/{id}', [CertificatesController::class, 'view'])
    ->where('id', '[0-9]+')
    ->name('certificates.view');

