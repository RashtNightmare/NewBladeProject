<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\User;
use Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'test';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $role=User::create([
                "name" => $request->name,
                "email" => $request->email,
                "mobile" => $request->mobile,
                "role_id" => $request->role_id,
                "password" => hash('sha512',$request->password,)
            ]);
            return $this->index();
        } catch (Exception $exception) {
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role= User::query()->where('id',$id)->first();
        if (!$role) {
         return response()->json([
                'msg' => "NOT FOUND",
            ],200);}
         else{
             return view("User.edit", compact('role'));
         }    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  //$role= SELECT *  FROM roles WHERE 'id' = $id
  $role= User::query()->where('id', $id)->first();
  if (!$role) {
      return response()->json([
          'msg' => "NOT FOUND",
      ], 200);
  } else {
      $role->name=$request->name;
      $role->mobile=$request->mobile;
      $role->role_id=$request->role_id;
      $role->email=$request->email;
      $role->password=$request->password;
      $role->save();
         return $this->index();
}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::query()->where('id', $id)->delete();
        return $this->index();
    }
}
