<?php

namespace App\Http\Controllers\Configuracion;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\Models\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticateController extends Controller
{
    public function Authenticate(Request $request){
        $credentials=$request->only('email','password');

        try{
            if(!$token=JWTAuth::attempt($credentials)){
       return response()->json(['error'=>'could_not_create_token'],401);
      
            }

        }catch(JWTException $e){
            return response()->json(['error'=>'token no creado'],500);
        }

        $response=compact('token');
        $response['user']=Auth::user();

        return $response;
    }
}
