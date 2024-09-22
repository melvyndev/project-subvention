<?php

use App\Http\Controllers\SubventionController;

Route::get('/subventions/create', [SubventionController::class, 'create'])->name('subventions.create');
Route::post('/subventions/store', [SubventionController::class, 'store'])->name('subventions.store');
