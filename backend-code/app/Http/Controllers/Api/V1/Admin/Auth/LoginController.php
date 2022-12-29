<?php

namespace App\Http\Controllers\Api\V1\Admin\Auth;

use App\Facades\UserService;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Resources\UserResource;
use Facade\FlareClient\Http\Exceptions\NotFound;


class LoginController extends ApiBaseController
{

    public function __invoke(LoginRequest $request)
    {
        try {
            $user = UserService::getByCredential($request->get('email'), $request->get('password'));

            $token = $user->createToken("Training Course")->plainTextToken;

            return $this->returnWithSuccess("Successfully Login", [
                'profile' => new UserResource($user),
                'token' => $token
            ]);

        } catch (\Exception $e) {
            return $this->returnWithError($e->getMessage(), code: 403);
        }

    }
}
