<?php

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;

Route::get('/get-registers-count', [CommonController::class, 'getRegistersCount']);
    return response()->json([
        'message' => 'Hello!'
    ]);
});
