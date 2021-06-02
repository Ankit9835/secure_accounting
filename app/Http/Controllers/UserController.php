<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;

class UserController extends Controller
{
    public function check(Request $req)
    { 
        $validator = Validator::make($req->all(),[
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
            'email' => 'required|email|unique:users',
            ]);
        if ($validator->fails()){
            return \Response::json(['status' =>false,'message' => 'error','error' => $validator->errors()
            ]);
        }
        $data = User::where('phone',$req->phone)->first();
        $data1 = User::where('email',$req->email)->first();
        if($data === null && $data1 === null)
        {
            return response()->json(['status' => true,'message' => 'User Not Found'],200);
        }
        else
        {
            return response()->json(['status' => false,'message' => 'User already exists!'],200);
        }
    }
    public function getdata()
    {
        $data = User::all();
        return $data;   
    }
    public function signupdata(Request $req)
    { 
        $data = new User;
        $validator = Validator::make($req->all(),[
            'name' => 'required|string:50',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);
            if ($validator->fails()){
                return \Response::json([
                'status' =>false,
                'message' => 'error',
                'error' => $validator->errors()
             ]);
            }
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->password = Hash::make($req->password);
       if($data->save())
       {
        return response()->json(['status' => true,'message' => 'User created sucessfully'],200);
       }
       else
       {
        return response()->json(['status' => false,'message' => 'Something went wrong'],200);
       }   
    } 
    function login(Request $req)
    {
        $user= User::where('email', $req->email)->first();
            if (!$user || !Hash::check($req->password, $user->password)) {
                return response()->json(['status' => false,'message' => 'Invalid Credential'],200);
            }
            $token = $user->createToken('my-app-token')->plainTextToken;
            $response = [
                'status' => true,
                'message' => 'login sucessully',
                'user_details' => $user,
                'token' => $token
            ];
             return response($response, 200);
    }
    function forgetpassword(Request $req,$id)
    {
        $data = User::where('id','=',$id)->first();
        $validator = Validator::make($req->all(),[
            'password' => 'required|min:6',
        ]);
            if ($validator->fails()){
                return \Response::json([
                'status' =>false,
                'message' => 'error',
                'error' => $validator->errors()
             ]);
            }
        $data->password = Hash::make($req->password);
       if($data->save())
       {
        return response()->json(['status' => true,'message' => 'Password updated sucessfully'],200);
       }
       else
       {
        return response()->json(['status' => false,'message' => 'Something went wrong'],200);
       }   
    } 
}
