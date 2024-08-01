<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{

    public function all(Request $request): LengthAwarePaginator
    {
        $perPage = $request->query('per_page', 20);

        return User::query()->paginate($perPage);
    }
}
