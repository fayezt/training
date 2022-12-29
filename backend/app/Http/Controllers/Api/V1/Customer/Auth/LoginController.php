<?php

namespace App\Http\Controllers\Api\V1\Customer\Auth;

use App\Facades\CustomerService;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Resources\CustomerResource;


class LoginController extends ApiBaseController
{

    public function __invoke(LoginRequest $request)
    {
        try {
            $customer = CustomerService::getByCredential($request->get('email'), $request->get('password'));

            $token = $customer->createToken("Training Course")->plainTextToken;

            return $this->returnWithSuccess("Successfully Login", [
                'profile' => new CustomerResource($customer),
                'token' => $token
            ]);

        } catch (\Exception $e) {
            return $this->returnWithError($e->getMessage(), code: 403);
        }

    }
}
