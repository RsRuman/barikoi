<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function all(Request $request);
}
