<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller

{
    public function registerAdmin(AuthRequest $request)  {
        $newAdmin = new Admin();

        $newAdmin->email = $request->email;
        $newAdmin->password = Hash::make($request->password);

        $newAdmin->save();

        return response($newAdmin, 201);
    }

    public function loginAdmin(AuthRequest $request) {
        $loginAdmin = new Admin();

        $loginAdmin->email = $request->email;
        $loginAdmin->password = Hash::make($request->password);

        $loginAdmin = Admin::where('email', $request->email)->first();

        if(!$loginAdmin || !Hash::check($request->password, $loginAdmin->password, )) {
            return response('Invalid Credential', 500);
        }

        $token = $loginAdmin->createToken('access-token')->plainTextToken;


        return response([
            'message' => 'Login Successfully',
            'token' => $token
        ], 201);
       }

    }


