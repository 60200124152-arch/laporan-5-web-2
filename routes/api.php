<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// Mendaftarkan rute CRUD Item secara otomatis
Route::apiResource('items', ItemController::class);