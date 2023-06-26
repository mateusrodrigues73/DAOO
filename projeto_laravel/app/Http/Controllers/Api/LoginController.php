<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        try{
            $usuario = Usuario::where('email', $request->email)->first();
            if(!$usuario || !Hash::check($request->senha, $usuario->senha)) {
                throw new Exception('Falha na autenticação!');
            }
            $ability = $usuario->papel;
            $token = $usuario->createToken($request->email, $ability)->plainTextToken;
            return response()->json(['token'=>$token]);
        }catch(Exception $error){
            return response()->json([
                'erro'=>$error->getMessage()
            ],401);
        }
    }
}
