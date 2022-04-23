<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
//use App\Department;

class DepartmentController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
        $departments = Department::get();
    	return view('department.index-view',['staff'=>'active','dept'=>'active','data'=>$departments]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'd_name' => 'required|unique:departmentmaster'
        ],
        ['unique' =>'This Department name is Already exist',
         'required' =>'Department name is required' 
        ]);
        
        Department::create(['d_name'=>$request->input('d_name')]);
        session()->flash('message','Department has been created successfully');
        return redirect()->back();
    }

     public function edit($id)
    {
    	$categoryDetail = Department::find($id);
    	return view('department.edit',['deptDetail'=> $categoryDetail]);
    }

    public function update(Request $request,$id)
    {
    	$category = Department::find($id);
    	$this->validate($request, [
			'department' => 'required'
        ]);

        $category->update(['d_name'=>$request->input('department')]);
        session()->flash('message','department has been updated successfully');
        return redirect()->route('department.index');
    }

    public function delete_department(Request $request)
    {
    	$id = $request->id;
    	Department::where('d_id',$id)->delete();
    	$data['status'] = true;
    	$data['msg'] = 'Department deleted';
    	echo json_encode($data);
    	exit;
    }
}
