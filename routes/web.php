<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!Cache::has("users")) {
        Cache::remember('users', 3600, function () {
            return \App\Models\User::all();
        });
    }

    $user = Cache::get('users');

    \App\Events\UserBroadcastEvent::dispatch($user);

    echo 'data serve using reverb broadcasting';
});
