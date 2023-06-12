<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\InvestorController;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::prefix('fif-admin')->group(function () {

    Route::middleware('auth')->group(function () {
        // Page
        Route::get('/', [AdminController::class, 'Dashboard'])->name('dashboard');
        Route::get('/catalogue', [AdminController::class, 'Catalogue'])->name('catalogue');
        Route::post('/catalogue', [CatalogueController::class, 'store'])->name('catalogue.store');
        Route::delete('/catalogue', [CatalogueController::class, 'destroy'])->name('catalogue.destroy');

        Route::get('/investor-relationship', [AdminController::class, 'Investor'])->name('investor');
        Route::post('/investor-relationship', [InvestorController::class, 'store'])->name('investor.store');
        Route::delete('/investor-relationship', [InvestorController::class, 'destroy'])->name('investor.destroy');

        // Profile
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});
