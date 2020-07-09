<?php

use Illuminate\Support\Facades\Route;
use Trungpv1601\TALL\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
