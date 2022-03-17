<?php

use App\Http\Controllers\LocatieController;
use App\Http\Controllers\WerkorderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/backend/getAlleWerkorders', [WerkorderController::class, 'getAlleWerkorders'])->name('werkorders');
Route::get('/backend/getStatusFromStatusId/{status_id}', [WerkorderController::class, 'getStatusFromStatusId'])->name('werkorders');

Route::get('/backend/getAlleLocaties', [LocatieController::class, 'getAlleLocaties'])->name('werkorders');



