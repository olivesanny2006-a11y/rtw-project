<?php

use App\Livewire\Customer\Activity;
use App\Livewire\Customer\Actuality;
use App\Livewire\Customer\Index;
use Illuminate\Support\Facades\Route;

/* Route::get('/',[MainController::class,'Index']); */

Route::get('/',Index::class)->name('index');
Route::get('actuality',Actuality::class)->name('actuality');
Route::get('activity',Activity::class)->name('activity');
