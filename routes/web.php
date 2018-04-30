<?php


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

Route::get('/', 'GuestController@index');

// email
Route::get('/auth/verify/{token}', 'Auth\RegisterController@verify');
Route::get('/auth/resend-verification', 'Auth\RegisterController@resendVerification');

// pinjam dan mengembalikan buku
Route::get('/books/{book}/borrow', 'BooksController@borrow')->name('guest.books.borrow');
Route::patch('/books/{book}/return', 'BooksController@return')->name('member.books.return');

// captcha
Route::get('/refresh-captcha', 'Auth\RegisterController@refreshCaptcha');

// Settings Profile
Route::get('settings/profile', 'SettingController@profile')->name('profile');
Route::get('settings/profile/edit', 'SettingController@editProfile')->name('profile.edit');
Route::post('settings/profile', 'SettingController@updateProfile')->name('profile.update');

// Setting Password
Route::get('settings/password/edit', 'SettingController@editPassword')->name('password.edit');
Route::post('settings/password', 'SettingController@updatePassword')->name('password.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function() {
    Route::resource('authors', 'AuthorsController');
    Route::resource('books', 'BooksController');
    Route::resource('members', 'MembersController');
    Route::get('statistics', 'StatisticsController@index')->name('statistics.index');

    Route::get('export/books', 'BookExportController@export')->name('export.books');
    Route::post('export/books', 'BookExportController@exportPost')->name('export.books.post');

    Route::get('template/books', 'BooksImportController@generateExcelTemplate')->name('template.books');
    Route::post('import/books', 'BooksImportController@importExcel')->name('import.books.excel');
});
