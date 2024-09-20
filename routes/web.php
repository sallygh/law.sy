<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\LegalCaseController;

Route::get('/cases/create', [LegalCaseController::class, 'create'])->name('cases.create');
Route::post('/cases', [LegalCaseController::class, 'store'])->name('cases.store');
Route::get('/cases', [LegalCaseController::class, 'index'])->name('cases.index');
