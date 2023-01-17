<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
            // 'privacy_policy' => 'required|boolval'
        ]);

        if ($validator->fails()) {
            $success['status'] = false;
            $response = [
                'data' => $success,
                'message' => $validator->errors()
            ];
            
            // dd($response);
            return response()->json($response);
        }

        $encrypted_password = Hash::make($request->password);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $encrypted_password
        ]);
        
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        $success['status'] = true;

        $response = [
            'message' => "successfuly",
            'data' => $success
        ];

        return response()->json($response);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $success['status'] = false;
            $response = [
                'data' => $success,
                'message' => $validator->errors()
            ];
        
            return response()->json($response);
        }

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credential)) {
            $user = $request->user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
            $success['status'] = true;
            $response = [
                'data' => $success,
                'message' => "successfuly",
            ];
            return response()->json($response);
        } else {
            $success['status'] = false;
            $response = [
                'data' => $success,
                'message' => "The provided credentials do not match our records."
            ];
            return response()->json($response);
        };
    }

    // public function logout()
    // {
    //     try {
    //         Session::flush();
    //         $message = "success";
    //         $success = true;
    //     } catch (\Illuminate\Database\QueryException $execption) {
    //         $success = false;
    //         $message = $execption->getMessage();
    //     }

    //     $response = [
    //         'success' => $success,
    //         'message' => $message
    //     ];

    //     return response()->json($response);
    // }

}
