<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\User;
use Exception;

class UserController extends Controller
{
    public function add(Request $request){
        $name=$request->name;
        $email=$request->email;
        $password=$request->password;
        $mobile=$request->mobile;
        $role_id=$request->role_id;
        try {
            $user=User::create(["name" => $name ,
         "email" => $email,"password" => $password,
         "mobile" => $mobile,"role_id" => $role_id]);
         return response()->json([
            'data' => $user,
            'msg' => 'successfully'],500);

        }catch(Exception $exception){
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'],500);
        } 
    }
}
