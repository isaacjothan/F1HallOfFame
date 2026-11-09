<?php

use App\Http\Controllers\ChampionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/campeones', [ChampionController::class, 'index'])->name('champions.index');
Route::get('/campeones/{driver:slug}', [ChampionController::class, 'show'])->name('champions.show');
