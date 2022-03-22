<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () { return view('welcome'); });

// Login Logout Website
Route::get('/dangnhap', function () { return view('login.login'); });
Route::get('/dangky', function () { return view('login.register'); });
// 
Route::get('/chat', function () { return view('chat.chatForm'); });
// 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Send Email
// Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'showContactForm'])->name('contactForm');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.sendmail');