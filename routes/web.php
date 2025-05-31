<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\InPostPoints;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/price', PriceController::class)->name('price');
// Route::get('/price', function () {
//   return view('price');
// })->name('price');

Route::get('/faqs', FaqController::class)->name('faqs');
Route::get('/gallery', GalleryController::class)->name('gallery');

Route::get('/contacts', [ContactController::class, 'show'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'send'])->name('contacts.send');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
