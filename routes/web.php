<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//New Controller for admin Users

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
//Initial View when starting app
Route::get('/', function () {
    return Inertia::render('Home',[
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

//Go to Admin Dashboard
Route::get('/admin-dashboard', function (){
    return Inertia::render("Admin/Admin-Dashboard");
}) ->name('admin-dashboard');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

});
