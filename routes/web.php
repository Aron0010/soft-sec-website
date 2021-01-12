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



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });


    Route::view('contact', 'contact-form.contact')->name('contact');

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('post/create', \App\Http\Livewire\Post\Create::class)
    ->name('create-post');

    Route::get('post/{slug}', \App\Http\Livewire\Post\Show::class);

    Route::view('blog', 'post.index')->name('blog');

    Route::personalDataExports('personal-data-exports');
});
