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


/*
Route::get('/hello', function () {
   // return view('welcome');
   return '<h1>Hello World</h1>';
 });
 */

/*
Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is User '.$name. ' with the id '.$id;  
});
*/

Route::get('/', 'PagesController@index' );
Route::get('/books', 'PagesController@books' );
Route::get('/bookshops', 'PagesController@bookshops' );
Route::get('/libraries', 'PagesController@libraries' );
Auth::routes();

Route::get('/readerdashboard', 'ReaderDashboardController@index');

Route::get('/bookshop/login', 'Auth\BookshopLoginController@showLoginForm')->name('bookshop.login');
Route::post('/bookshop/login', 'Auth\BookshopLoginController@login')->name('bookshop.login.submit');
Route::get('/bookshopdashboard', 'BookshopDashboardController@index')->name('bookshop.dashboard');
Route::get('/bookshop/register', 'Auth\BookshopRegisterController@showRegistrationForm')->name('bookshop.register');
Route::post('/bookshop/register', 'Auth\BookshopRegisterController@register')->name('bookshop.register.submit');

Route::get('/library/login', 'Auth\LibraryLoginController@showLoginForm')->name('library.login');
Route::post('/library/login', 'Auth\LibraryLoginController@login')->name('library.login.submit');
Route::get('/librarydashboard', 'LibraryDashboardController@index')->name('library.dashboard');
Route::get('/library/register', 'Auth\LibraryRegisterController@showRegistrationForm')->name('library.register');
Route::post('/library/register', 'Auth\LibraryRegisterController@register')->name('library.register.submit');