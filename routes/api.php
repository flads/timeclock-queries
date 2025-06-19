<?php

use App\Http\Controllers\CommonController;
use App\Http\Controllers\GetInnerJoinController;
use App\Http\Controllers\GetInnerJoinLateralController;
use App\Http\Controllers\GetLeftJoinController;
use App\Http\Controllers\GetRightJoinController;
use Illuminate\Support\Facades\Route;

Route::get('/get-registers-count', [CommonController::class, 'getRegistersCount']);
Route::get('/get-inner-join', GetInnerJoinController::class);
Route::get('/get-left-join', GetLeftJoinController::class);
Route::get('/get-right-join', GetRightJoinController::class);
Route::get('/get-inner-join-lateral', GetInnerJoinLateralController::class);
