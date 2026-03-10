<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


Route::post('/login', [AuthController::class, 'login']);


Route::get('/token-test', function () {
    $user = \App\Models\User::first();
    return $user ? $user->createToken('test-token')->plainTextToken : 'No user found';
});