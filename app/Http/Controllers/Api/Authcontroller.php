<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function register(RegisterRequest $request)
    {
        $input = $request->validated();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $token = $user->createToken('AuthToken')->accessToken;
        return response(['user' => $user, 'access_token' => $token]);
    }

    public function login(LoginRequest $request)
    {
        $logindata = $request->validated();
        if (!auth()->attempt($logindata)) {
            return Response()->json(["message" => 'invalid request']);
        }
        $user=Auth::user();
        $token = $user->createToken('AuthToken')->accessToken;
        return response()->json(['access_token' => $token]);

    }

}

