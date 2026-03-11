<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnvViewerController;


Route::get('/', [EnvViewerController::class, 'index']);
