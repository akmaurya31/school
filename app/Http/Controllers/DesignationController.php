<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes;
use App\Department;
use App\Designation;

class DesignationController extends Controller
{
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
        $designations = Designation::select('designationmaster.*','departmentmaster.d_name AS department_name')
                  ->join('departmentmaster', 'departmentmaster.d_id', '=', 'designationmaster.d_id')
                  ->get();
        
    	return view('designation.index-view',['staff'=>'active','desig'=>'active','data'=>$designations, 'departments' => Department::get()]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'ds_name' => 'required|unique:designationmaster'
        ],
        ['unique' =>'This Designation is Already Exist',
         'required'=>'Designation field is required'
        ]);

        Designation::create([
            'ds_name' => $request->input('ds_name'), 
            'd_id' => (int) $request->input('id_department'),
        ]);
        
        session()->flash('message','Designation has been created successfully');
        return redirect()->back();
    }

     public function edit($id)
    {
    	$categoryDetail = Designation::find($id);
    	return view('designation.edit',['deptDetail'=> $categoryDetail]);
    }

    public function update(Request $request,$id)
    {
    	$category = Designation::find($id);
    	$this->validate($request, [
			'designation' => 'required'
        ]);

        $category->update(['ds_name'=>$request->input('designation')]);
        session()->flash('message','Designation has been updated successfully');
        return redirect()->route('designation.index');
    }

    public function delete_designation(Request $request)
    {
    	$id = $request->id;
    	Designation::where('ds_id',$id)->delete();
    	$data['status'] = true;
    	$data['msg'] = 'Designation deleted';
    	echo json_encode($data);
    	exit;
    }
}
