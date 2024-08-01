<?php

use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('users', [UserController::class, 'index']);
});
