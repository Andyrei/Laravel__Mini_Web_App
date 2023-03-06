<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactHandler;
use App\Http\Controllers\CareerHandler;

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

Route::get('/', function(){return view('index');});
Route::get('/about',function(){return view('pages.about');});

Route::get('/career', function(){return view('pages.career');});
Route::post('/print-career', [CareerHandler::class, 'getAllInputs']);

Route::get ('/contact', function(){return view('pages.contact');});
Route::post ('/print-contact', [ContactHandler::class, 'getAllInputs']);
