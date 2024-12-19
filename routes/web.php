<?php

use App\Http\Controllers\aboutus_controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\collaboration_controller;
use App\Http\Controllers\community_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\home_Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\service_controller;
use App\Http\Controllers\UploadsController;
use Illuminate\Support\Facades\Route;


Route::get('/',[home_Controller::class, 'getHome'])->name('home');
Route::get('/about',[aboutus_controller::class, 'getAbout'])->name('about');
Route::get('/service',[service_controller::class, 'getService'])->name('service');
Route::get('/collaboration',[collaboration_controller::class, 'getCollaboration'])->name('collaboration');
Route::get('/air+community',[community_controller::class, 'getCommunity'])->name('community');
Route::get('/contact',[contact_controller::class, 'getContact'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');
