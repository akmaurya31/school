<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class EducationController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
        $data = Education::where('status',1)->get();
    	return view('education.index-view',['add'=>'active','education'=>'active','data'=>$data]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'education_name' => 'required|unique:educationmaster'
        ],
        ['unique' =>'This Education name is Already exist'
        ]);
        
        Education::create(['education_name'=>$request->input('education_name')]);
        return redirect()->back()->withSuccess('Education has been created successfully');
    }

    public function edit($id)
    {
    	$edit_details = Education::find($id);
    	$data = Education::where('status',1)->get();
    	return view('education.index-view',['add'=>'active','education'=>'active','data'=>$data,'edit_details'=>$edit_details]);
    }

    public function update(Request $request,$id)
    {
    	$education = Education::find($id);
    	$this->validate($request, [
			'education_name' => 'required'
        ]);

        $education->update(['education_name'=>$request->input('education_name')]);
        return redirect()->route('education.index')->withSuccess('education updated successfully');
    }

    public function delete_education(Request $request)
    {
    	$id = $request->id;
    	$education = Education::find($id);
    	$education->status=0;
    	$education->save();
    	$response = array('status'=>true,
                          'msg'=>'Education has been deleted successfully');
    	echo json_encode($response);

    }
}
