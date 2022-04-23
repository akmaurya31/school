<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddEmployee;
use Auth;
use App\Employeemaster;
use App\Staff;

class AddEmployeeController extends Controller
{
    public function addemployee(Request $request)
    {
		if(!isset($request->name))
		{
			$data=Staff::where('t_id',$request->nameInp)->get();
			$arr=['employe_type'=>$request->typeEmployeeRad,
		'department'=>$request->deptInp,
		'job_title'=>$request->jobTitleInp,
		'hire_date'=>date("Y-m-d",strtotime($request->hireDate)),
		'manager_id'=>$request->managerSel,
		'annual_salary'=>$request->salInp,
		'employee_name'=> $data[0]['t_name'],
		'employee_id'=>$request->nameInp,
		'email'=>$request->emailInp,
		'location'=>$request->locInp,
		'created_by'=>Auth::user()->id,
		'status'=>$request->jobTitleInp =='employee'? 0 : 1   ];
		}
		else
		{
			$arr=[
				'employe_type'=>$request->typeEmployeeRad,
		'department'=>$request->deptInp,
		'job_title'=>$request->jobTitleInp,
		'hire_date'=>date("Y-m-d",strtotime($request->hireDate)),
		'manager_id'=>$request->managerSel,
		'annual_salary'=>$request->salInp,
		'employee_name'=>$request->name,
		// 'employee_id'=>is_int($request->nameInp)==true ? $request->nameInp:0,
		'email'=>$request->emailInp,
		'location'=>$request->locInp,
		'created_by'=>Auth::user()->id,
		'status'=>$request->jobTitleInp =='employee'? 0 : 1   ];
		}
		
		

    	AddEmployee::create($arr);
    	return redirect()->back();
    }
    public function get_title(Request $request)
    {
    	// $employeemaster


	}
	public function update(Request $request)
	{
		$arr=[
			'employe_type'=>$request->typeEmployeeRad,
	'department'=>$request->deptInp,
	'job_title'=>$request->jobTitleInp,
	'hire_date'=>date("Y-m-d",strtotime($request->hireDate)),
	'manager_id'=>$request->managerSel,
	'annual_salary'=>$request->salInp,
	'employee_name'=>$request->name,
	// 'employee_id'=>is_int($request->nameInp)==true ? $request->nameInp:0,
	'email'=>$request->emailInp,
	'location'=>$request->locInp,
	'created_by'=>Auth::user()->id,
	'status'=>$request->jobTitleInp =='employee'? 0 : 1   ];
	echo "<pre>";
	print_r($arr);
	exit;
	addemployee::where('id',$request->employee_id)->update($arr);
	return redirect()->back();
	}
	public function delete_record(Request $request)
	{
		AddEmployee::where('id',$request->id)->delete();
		echo  'success';
	}
}
