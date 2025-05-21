<?php

use App\Http\Controllers\InfoController;

Route::prefix('info')->controller(InfoController::class)->group(function () {
    Route::get('/server',   'server');
    Route::get('/client',   'client');
    Route::get('/database', 'database');
});
