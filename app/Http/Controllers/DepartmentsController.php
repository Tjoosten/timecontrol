<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Departments;
use App\Department_members;
use Mail;
use App\User;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $departments = Departments::orderBy('department_name', 'asc')->paginate(10);
        return view('departments/list', ['departments' => $departments]);
    }

    public function create()
    {
        $managers = User::all();
        return view('departments/create', ['managers' => $managers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departments = new Departments;
        $departments->department_name = $request->get('department_name');
        $departments->department_manager = $request->get('department_manager');
        $departments->department_description = $request->get('department_description');
        $departments->save();

        $department_id = $departments->id;

        $manager = new Department_members;
        $manager->departmentid = $department_id;
        $manager->userid = $request->get('department_manager');
        $manager->save();

         \Session::flash('message', "New department has been saved");
        return redirect('staff/departments');
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
}
