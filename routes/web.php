<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleCalendarController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::inertia('/', 'HomeComponent');

// Route::get('/google-calender', [GoogleCalendarController::class,'index']);
// Route::get('/event/edit/{event}',[GoogleCalendarController::class])

Route::resource('event', GoogleCalendarController::class);
// Route::inertia('/google', 'GoolgeComponent');
