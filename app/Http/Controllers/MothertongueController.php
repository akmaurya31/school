<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Mothertongue;

class MothertongueController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
        $data = Mothertongue::where('status',1)->get();
    	return view('mothertongue.index-view',['add'=>'active','mothertongue'=>'active','data'=>$data]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'mother_tongue_name' => 'required|unique:mothertonguemaster'
        ],
        ['unique' =>'This Mother tongue name is Already exist'
        ]);
        
        Mothertongue::create(['mother_tongue_name'=>$request->input('mother_tongue_name')]);
        return redirect()->back()->withSuccess('Mother tongue has been created successfully');
    }

    public function edit($id)
    {
    	$edit_details = Mothertongue::find($id);
    	$data = Mothertongue::where('status',1)->get();
    	return view('mothertongue.index-view',['add'=>'active','mothertongue'=>'active','data'=>$data,'edit_details'=>$edit_details]);
    }

    public function update(Request $request,$id)
    {
    	$category = Mothertongue::find($id);
    	$this->validate($request, [
			'mother_tongue_name' => 'required'
        ]);

        $category->update(['mother_tongue_name'=>$request->input('mother_tongue_name')]);
        return redirect()->route('mothertongue.index')->withSuccess('mother tongue updated successfully');
    }

    public function delete_mother_tongue(Request $request)
    {
    	$id = $request->id;
    	$mothertongue = Mothertongue::find($id);
    	$mothertongue->status=0;
    	$mothertongue->save();
    	$response = array('status'=>true,
                          'msg'=>'mother tongue has been deleted successfully');
    	echo json_encode($response);

    }
}
