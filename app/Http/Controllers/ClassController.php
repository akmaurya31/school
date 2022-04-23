<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use Auth;

class ClassController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
    	$classes = Classes::where('ClassStatus',1)->get();
    	return view('classes.index',['classes'=>$classes,'class'=>'active']);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'classNo' => 'required',
			'section' => 'required',
			'session' => 'required'
        ]);
        $count =  Classes::where('ClassNo',$request->classNo)
                         ->where('ClassSection',$request->section)
                         ->where('ClassSession',$request->session)
                         ->where('ClassStatus',1)
                         ->count();
        if($count == 0){                 

            Classes::create(['ClassNo'=>$request->input('classNo'),
                             'ClassSection'=>$request->input('section'),
                             'ClassSession'=>$request->input('session'),
                             'UpdtBy' => Auth::user()->name]);
            session()->flash('message','New class has been created successfully');
            return redirect()->back();
        }else{
            session()->flash('message','This is Already Exist');
            return redirect()->back();
        }    
    }

    public function edit($id)
    {
    	$classDetails = Classes::find($id);
    	$classes = Classes::where('ClassStatus',1)->get();
    	return view('classes.edit',['classDetails'=>$classDetails,'classes'=>$classes]);
    }

    public function update(Request $request,$id)
    {
    	$class = Classes::findOrfail($id);
        $this->validate($request, [
			'classNo' => 'required',
			'section' => 'required',
			'session' => 'required'
        ]);
        $class->update(['ClassSession' => $request->input('session'),
                        'ClassNo' => $request->input('classNo'),
                        'ClassSection' => $request->input('section')]);
        session()->flash('message','class has been updated successfully');
        return redirect()->route('classes.index');
    }

    public function delete_class(Request $request)
    {
    	$class = Classes::find($request->id);
    	$class->ClassStatus = 0;
    	$class->save();
    	$data['status'] = true;
    	$data['msg'] = 'class has been deleted';
    	echo json_encode($data);

    }
}
