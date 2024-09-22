<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



use App\Http\Controllers\LegalCaseController;

Route::get('/cases/create', [LegalCaseController::class, 'create'])->name('cases.create');
Route::post('/cases', [LegalCaseController::class, 'store'])->name('cases.store');
Route::get('/cases', [LegalCaseController::class, 'index'])->name('cases.index');


use App\Http\Controllers\ClientController;

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
