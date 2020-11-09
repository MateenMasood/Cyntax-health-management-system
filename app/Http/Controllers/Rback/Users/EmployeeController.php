<?php

namespace App\Http\Controllers\Rback\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployee;
use App\Models\Employee;
use App\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \View::make('Rback.Users.employees-list');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('Rback.Users.employee-create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {
         $validatedData = $request->validated();

        DB::beginTransaction();
        try {

            $userModel = new User();
            $userModel->first_name = $validatedData['firstName'];
            $userModel->last_name = $validatedData['lastName'];
            $userModel->email = $validatedData['email'];
            $userModel->contact = $validatedData['phoneNo'];
            $userModel->password = Hash::make($validatedData['password']);

            $userModel->save();

            $employeeModel = new Employee();
            $employeeModel->user_id = $userModel->id;
            $employeeModel->date_of_birth = $validatedData['dateOfBirth'];
            $employeeModel->address = $validatedData['address'];
            $employeeModel->status = '1';
            $employeeModel->created_by = '1';

            $employeeModel->save();

            $roleModel = Role::find($validatedData['roleId']);

            $userModel->assignRole($roleModel->name);

            DB::commit();
            return \response()->json(['status'=>'true' , 'message'=>'User created successfully']);

        } catch (\Throwable $th) {
                DB::rollback();
                //throw $th;
                return $th;

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

    // ******************* get all data ********************

    public function datatable()
    {
        return \response()->json(Employee::with('user')->get() , 200);
        # code...
    }
}
