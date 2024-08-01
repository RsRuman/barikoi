<?php

namespace App\Http\Controllers\Api\V1;

use AllowDynamicProperties;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response as HttpResponse;

#[AllowDynamicProperties]
class UserController extends Controller
{
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Users all
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $users = $this->userRepository->all($request);
        $users = UserResource::collection($users);
        $users = $this->collectionResponse($users);

        return Response::json([
            'message' => 'Users retrieved successfully.',
            'data' => $users,
        ], HttpResponse::HTTP_OK);
    }
}
