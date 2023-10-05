<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\events\EventsController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\IctController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\project\ProjectsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('welcome'); });

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/create',[EventController::class,'create'])->name('events.create');
Route::get('/delete',[EventController::class,'deleteEvent'])->name('events.delete');
Route::delete('/destroy/{event}',[EventController::class,'destroy'])->name('events.destroy');
Route::post('/store',[EventController::class,'store'])->name('events.store');

Route::get('/coding_education', [EducationController::class, 'index'])->name('codeEd.codingEducation');
Route::get('/create_code', [EducationController::class, 'create'])->name('codeEd.codecreate');
Route::get('/delete_code', [EducationController::class, 'delete'])->name('codeEd.codedelete');
Route::delete('/destroy_code', [EducationController::class, 'destroy'])->name('codeEd.codedestroy');
Route::get('/store_code', [EducationController::class, 'store'])->name('codeEd.codestore');

Route::get('/digital_exchange', [ExchangeController::class, 'index'])->name('d_exchange.codingEducation');
Route::get('/create_exchange', [ExchangeController::class, 'create'])->name('d_exchange.codecreate');
Route::get('/delete_exchange', [ExchangeController::class, 'delete'])->name('d_exchange.exchangedelete');
Route::delete('/destroy_exchange/{post}', [ExchangeController::class, 'destroy'])->name('d_exchange.exchangedestroy');
Route::post('/store_exchange', [ExchangeController::class, 'store'])->name('d_exchange.exchangestore');

Route::get('/donations', [IctController::class, 'index'])->name('donationsEd.donations');
Route::get('/create_donations', [IctController::class, 'create'])->name('donationsEd.codecreate');
Route::get('/delete_donations', [IctController::class, 'delete'])->name('donationsEd.donationsdelete');
Route::delete('/destroy_donations', [IctController::class, 'destroy'])->name('donationsEd.donationsdestroy');
Route::post('/store_donations', [IctController::class, 'store'])->name('donationsEd.donationsstore');

Route::get('/donate', [ProjectsController::class, 'donate'])->name('projects.donate');
Route::get('/contact_us', [ProjectsController::class, 'contactUs'])->name('projects.contact_us');
Route::post('/sendEmail', [ProjectsController::class, 'sendEmail'])->name('projects.sendEmail');

Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
