<?php

use App\Http\Controllers\Front\SubventionController;

Route::get('/', [SubventionController::class, 'create'])->name('subventions.create');
Route::post('/subventions/store', [SubventionController::class, 'store'])->name('subventions.store');
