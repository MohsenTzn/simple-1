<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class Authcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function register(RegisterRequest $request)
    {
        $input=$request->validated();
        $input['password']=bcrypt($input['password']);
        $user= User::create($input);
        $access['token'] =  $user->createToken('AuthToken')->accessToken;
        //dd($accessToken);
        return response()->json(['user'=>$user , 'access_token'=>$access]);
    }
    public function login(LoginRequest $request)
    {
        $logindate=$request->validated();
         if (!auth()->attempt($logindate)){
             return Response()->json(["message"=>'invalid request']);
         }
        $success['token'] =  auth()->user()->createToken('AuthToken')-> accessToken;
        return response()->json(["user"=>auth()->user() ,'success'=>$success]);

    }
}

