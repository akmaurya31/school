<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Totalsit;

class TotalsitController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
       $data['session'] = $this->getSession();
       $data['classes'] = $this->getClasses();
       $totalsits = Totalsit::where('status',1)->get();
       return view('totalsit.index-view',['data'=>$data,'totalsits'=>$totalsits,'add'=>'active','totalsit'=>'active']);  
    }
    public function store(Request $request)
    {
    	$this->validate($request,
    		['session_name'=>'required',
    		 'class_name'=>'required',
    		 'category'=>'required',
    		 'number_of_sits'=>'required|numeric'
    	    ]);
    	$count = Totalsit::where('session_name',$request->session_name)
    	                   ->where('class_name',$request->class_name)
    	                   ->where('category_name',$request->category)
                           ->where('status',1)
    	                   ->count();
    	if($count == 0)
    	{
           Totalsit::create(['session_name'=>$request->input('session_name'),
                             'class_name'=>$request->input('class_name'),
                             'category_name'=>$request->input('category'),
                             'number_of_sits'=>$request->input('number_of_sits')
                         ]);
           return redirect()->back()->withSuccess('Inserted successfully');
    	}
    	else
    	{
           session()->flash('message','This is Already Exist');
           return redirect()->back();
    	}                   
    }

    public function edit($id)
    {
    	$details = Totalsit::find($id);
    	$data['session'] = $this->getSession();
    	$data['classes'] = $this->getClasses();
    	$totalsits = Totalsit::where('status',1)->get();
    	return view('totalsit.index-view',['data'=>$data,'totalsits'=>$totalsits,'add'=>'active','totalsit'=>'active','edit'=>'success','details'=>$details]);  
    }

    public function update(Request $request,$id)
    {
       $details = Totalsit::find($id);
       $this->validate($request,
    		['session_name'=>'required',
    		 'class_name'=>'required',
    		 'category'=>'required',
    		 'number_of_sits'=>'required|numeric'
    	    ]);
       $details->update(['session_name'=>$request->input('session_name'),
                             'class_name'=>$request->input('class_name'),
                             'category_name'=>$request->input('category'),
                             'number_of_sits'=>$request->input('number_of_sits')
                         ]);
       return redirect()->route('totalsit.index')->withSuccess('Detail has been updated');

    }

    public function delete_totalsit(Request $request)
    {
    	$id = $request->id;
    	$details = Totalsit::find($id);
    	$details->status=0;
    	$details->save();
    	$response = array('status'=>true,
                          'msg'=>'deleted successfully');
    	echo json_encode($response);
    }
    private function getSession()
    {
    	$session = Classes::distinct()->get(['ClassSession']);
    	return $session;
    }

    private function getClasses()
    {
    	$classes = Classes::distinct()->get(['ClassNo']);
    	return $classes;
    }
}
