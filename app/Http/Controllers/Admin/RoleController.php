<?php


/*
<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Role;
use Exception;

class RoleController extends Controller
{
    public function add(Request $request)
    {
        $name=$request->name;

        try {
            $role=Role::create(["name" => $name]);
            return response()->json([
                'data' => $role,
                'msg' => 'successfully'], 500);
        } catch (Exception $exception) {
            return response()->json([
                'data' => $exception,
                'msg' => 'failed'], 500);
        }
    }
    public function index(){
        return view('welcome');
    }
}
*/

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Role;
use Exception;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role= Role::query()->select([
            'id','name'
        ])->get();
        return view("Role.sign_in",compact('role'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view("Role.all");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->name;

        try {
            $role=Role::create(["name" => $name]);
            return view("Role.sign_in");
            return response()->json([
                'data' => $role,
                'msg' => 'successfully'], 500);
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
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
