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
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
});

Route::prefix('user')->group(function() {
    Route::get('/unsubscribe/{user}', function (Request $request) {
//        if (!$request->hasValidSignature()) {
//            abort(401);
//        }
        Route::get('/send', 'SubscribeController@send');
        // ...
    })->name('unsubscribe');
    Route::get('/send', 'SubscribeController@send');

    Route::get('/profile/{id}', 'UserController@profile')->name('profile');

    Route::get('/flight', 'UserController@flight')->name('flight');
});
