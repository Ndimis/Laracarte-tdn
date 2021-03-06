<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\contactsController;
use App\Mail\ContactMessageCreated;

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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/contact', [ContactsController::class, 'create'])->name('contact');

Route::post('/contact', [ContactsController::class, 'store'])->name('store');

Route::get('/test-email',function(){
	return new ContactMessageCreated('Ndimis','tndimis@live.fr','Merci Honore TDN.');
});
		