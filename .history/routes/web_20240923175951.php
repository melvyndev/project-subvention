<?php


Route::get('/', [App/ Http/Controllers/Front/SubventionController::class, 'create'])->name('subventions.create');
Route::post('/subventions/store', [SubventionController::class, 'store'])->name('subventions.store');
