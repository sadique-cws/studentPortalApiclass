<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiresource('student', App\Http\Controllers\StudentRecordController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
