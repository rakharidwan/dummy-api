<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\UserLoginRequest;
use App\Http\Resources\v1\UserResource;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return array("token" => 123);
        // $credentials = $request->validated();

        // if (auth()->attempt($credentials)) {
        //     $user = auth()->user();

        //     return (new UserResource($user))->additional([
        //         'token' => $user->createToken('myAppToken')->plainTextToken,
        //     ]);
        // }

        // return response()->json([
        //     'message' => 'Your credential does not match.',
        // ], 401);
    }
}
