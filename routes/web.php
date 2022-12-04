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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('Kawa', function () {
    return view('welcome');
});

    Route::get('/Marketing', function () {
         return view('pages.sponsor');
     });

     Route::get('/Websites', function () {
        return view('pages.web');
    });

    Route::get('/App-mobile', function () {
        return view('pages.app');
    });

    Route::get('/Design', function () {
        return view('pages.design');
    });

    Route::get('/Store', function () {
        return view('pages.store');
    });

    Route::get('/Hosting', function () {
        return view('pages.design');
    });


    Route::get('/', ['App\Http\Controllers\DoController'::class,'kawa'])->name("kawa");




    Route::resource('/Notification', 'App\Http\Controllers\NotificationController'::class)->only(['store']);;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/Members', 'App\Http\Controllers\MemberController'::class);

    Route::resource('/Projects', 'App\Http\Controllers\ProjectController'::class);

    Route::put('/updateNoty/{id}', ['App\Http\Controllers\DoController'::class,'updateNotify'])->name("updateNotify");

    Route::post('/deleteP', ['App\Http\Controllers\DoController'::class,'deleteP'])->name("deleteP");

    Route::post('/deletememb', ['App\Http\Controllers\DoController'::class,'deletememb'])->name("deletememb");

    Route::post('/memAdd', ['App\Http\Controllers\DoController'::class,'store'])->name("memAdd");

    Route::resource('/Notification', 'App\Http\Controllers\NotificationController'::class)->only(['index']);



});
