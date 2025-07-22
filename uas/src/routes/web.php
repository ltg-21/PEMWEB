<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Pendaftaran;
use Livewire\Livewire;

/* NOTE: Do Not Remove Livewire asset handling */
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/* END */

Route::get('/', Home::class)->name('home');
Route::get('/pendaftaran', Pendaftaran::class)->name('pendaftaran');