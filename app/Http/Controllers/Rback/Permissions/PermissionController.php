<?php

namespace App\Http\Controllers\Rback\Permissions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePermission;
use App\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \View::make('Rback.Permissions.permissions-list');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return \View::make('Rback.Permissions.permission-create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermission $request)
    {
        $validatedData = $request->validated();

        $data = array(
            array('name' => $validatedData['permission'].' create' , 'guard_name' => 'web' , 'created_at'=> date('Y-m-d H:i:s') , 'updated_at' => date('Y-m-d H:i:s')),
            array('name' => $validatedData['permission'].' view' , 'guard_name' => 'web' , 'created_at'=> date('Y-m-d H:i:s') , 'updated_at' => date('Y-m-d H:i:s')),
            array('name' => $validatedData['permission'].' edit' , 'guard_name' => 'web' , 'created_at'=> date('Y-m-d H:i:s') , 'updated_at' => date('Y-m-d H:i:s')),
            array('name' => $validatedData['permission'].' delete' , 'guard_name' => 'web' , 'created_at'=> date('Y-m-d H:i:s') , 'updated_at' => date('Y-m-d H:i:s')),
        );

        if(Permission::insert($data)){

            return \response()->json(['status'=>'true' , 'message'=>'Permission added successfully' ]);

        }else{

            return \response()->json(['status'=>'error' , 'message'=>'error occured ! please try agin' ]);
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

    // **************** get all data in datatable **************

    public function datatable()
    {
        return \response()->json(Permission::all() , 200);
    }
}
