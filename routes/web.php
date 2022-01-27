<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact;

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
    return View::make('pages.index');
})->name('home');
Route::get('contact', function () {
    return View::make('pages.contact');
})->name('contact');

Route::post('/contact/add', [Contact::class, 'insert'])->name('form_add');
Route::get('/contact/list', [Contact::class, 'getContact'])->name('contact_list');
Route::post('/contact/delete', [Contact::class, 'delete'])->name('form_delete');

Route::group(['prefix' => 'admin'],function () { 
    Route::get('/', function () {
        return View::make('pages.admin.contact');
    })->name('admin_contact_list');
});
