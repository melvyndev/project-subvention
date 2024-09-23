<?php


Route::get('/', [App\Http\Controllers\Front\SubventionController::class, 'create'])->name('subventions.create');
Route::post('/formule/store', [App\Http\Controllers\Front\SubventionController::class, 'store'])->name('subventions.store');
Route::resource('subventions', App\Http\Controllers\SubventionController::class);
