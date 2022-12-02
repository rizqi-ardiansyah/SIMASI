<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
<<<<<<< HEAD
use App\Http\Controllers\Admins\RoleController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\PermissionController;
use App\Http\Controllers\Admins\AdminDashboardController;
=======
use App\Http\Controllers\Admins\AdminDashboardController;
use App\Http\Controllers\Admins\UserController;
use App\Http\Controllers\Admins\AdminController;
use App\Http\Controllers\Admins\PengungsiController;
use App\Http\Controllers\Admins\BackupController;
use App\Http\Controllers\Admins\LaporanController;
use App\Http\Controllers\Admins\BencanaController;
use App\Http\Controllers\Admins\PoskoController;
use App\Http\Controllers\Admins\PermissionController;
use App\Http\Controllers\Admins\RoleController;
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', 'verified', 'role: admin|pusdalop|trc'])->group(function() {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');

    // Route::resource('admin', UserController::class)->except(['create', 'show', 'edit']);
    // Route::resource('admins', UserController::class)->except(['create', 'show', 'edit']);
    Route::resource('users', UserController::class)->except(['create', 'show', 'edit']);
    Route::resource('pengungsi', PengungsiController::class)->except(['create', 'show', 'edit']);
    Route::resource('backup', BackupController::class)->except(['create', 'show', 'edit']);
    Route::resource('laporan', LaporanController::class)->except(['create', 'show', 'edit']);
    Route::resource('bencana', BencanaController::class)->except(['create', 'show', 'edit']);
    Route::resource('posko', PoskoController::class)->except(['create', 'show', 'edit']);
    Route::resource('permissions', PermissionController::class)->except(['create', 'show', 'edit']);
    Route::resource('roles', RoleController::class)->except(['create', 'show', 'edit']);
});
