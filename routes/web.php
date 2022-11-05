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
// get
Route::view("/", "welcome")->name("home");
Route::view("/contact", "contact")->name("contact");
Route::view("/blog", "blog")->name("blog");
Route::view("/about", "about")->name("about");
