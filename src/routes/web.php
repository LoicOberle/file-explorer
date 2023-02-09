<?php

use LoicOberle\FileExplorer\FileExplorerController;
use Illuminate\Support\Facades\Route;

Route::get('database', FileExplorerController::class);