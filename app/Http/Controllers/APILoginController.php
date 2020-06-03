<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;

class APILoginController extends Controller
{
     //Please add this method
    public function login() {
        // get email and password from request
        $credentials = request(['email', 'password']);
        
        // try to auth and get the token using api authentication
        if (!$token = auth('api')->attempt($credentials)) {
            // if the credentials are wrong we send an unauthorized error in json format
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'token' => $token,
            'type' => 'bearer', // you can ommit this
            'expires' => auth('api')->factory()->getTTL() * 60, // time to expiration
            
        ]);
    }
    
    public function register(Request $request){
          $data = $request->all();

       $validation = Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
      
      if ($validation->fails()) {
            return response()->json(['error'=>$validation->errors()],400);
        }
        else{

             $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
              return response()->json(['msg'=>'register user successfully','data'=>$user],200);
        }

    }


       public function logout()
        {
            Auth::logout();
            $data = [
            'status' => true,
            'code' => 200,
            'data' => [
            'message' => 'Successfully logged out'
            ],
            'err' => null
            ];
            return response()->json($data,200);
        }


}
