<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/catalogue', [PageController::class, 'catalogue']);
Route::get('/investor-relationship', [PageController::class, 'investor']);
Route::get('/download', [PageController::class, 'download']);

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
