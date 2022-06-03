<?php

use App\Http\Controllers\GiftCardController;
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

Route::get('/', [GiftCardController::class, 'index']);
Route::get('/form_next', [GiftCardController::class, 'form_next']);
Route::get('/{form}', [GiftCardController::class, 'register']);

