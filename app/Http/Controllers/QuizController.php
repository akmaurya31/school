<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes;
use App\Department;
use App\Quiz;
use App\Designation;
use App\Education;

class QuizController extends Controller
{
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
        // $designations = Designation::select('designationmaster.*','departmentmaster.d_name AS department_name')
        //           ->join('departmentmaster', 'departmentmaster.d_id', '=', 'designationmaster.d_id')
        //           ->get();
        
    	return view('quiz.index',['quiz'=>'active','desig'=>'active','data'=>'', 'departments' => Quiz::get()]);
    }


    public function list()
    {
    	$data = Quiz::select('quizmaster.*')->get();   
        $departments = $this->get_department();                    
        return view('quiz.list',['data'=>$data,'emp_list'=>'active','desig'=>'active','departments'=>$departments]);                     
    }


    public function create()
    {
        // $designations = Designation::select('designationmaster.*','departmentmaster.d_name AS department_name')
        //           ->join('departmentmaster', 'departmentmaster.d_id', '=', 'designationmaster.d_id')
        //           ->get();

        $departments = $this->get_department();
        $designations = $this->get_designation();
        $education = $this->get_education();
        return view('quiz.create');

      //  return view('quiz.create',['departments'=>$departments,'designations'=>$designations,'emp_list'=>'active','education'=>$education]);
        
    	//return view('quiz.create',['quiz'=>'active','desig'=>'active','data'=>$designations, 'departments' => Quiz::get()]);
    }


    private function get_department()
    {
    	$departments = Department::get();
    	return $departments;
    }

    private function get_designation()
    {
    	$designations = Designation::get();
    	return $designations;
    }

    
    private function get_education()
    {
        $details = "App\Education"::where('status',1)->orderBy('education_name','ASC')->get();
        return $details;
    }




    public function store(Request $request)
    {
    	// $this->validate($request, [
		// 	'ds_name' => 'required|unique:designationmaster'
        // ],
        // ['unique' =>'This Designation is Already Exist',
        //  'required'=>'Designation field is required'
        // ]);  


       // $enter_question=$request->input('enter_question');
        //$txt_opt_a=$request->input('txt_opt_a'); 

        if($request->input('enter_question')!=''){
            $enter_question=$request->input('enter_question');
        }else{
            $enter_question=$request->input('en_question');
        }

        if($request->input('explination')!=''){
            $explination=$request->input('explination');
        }else{
            $explination=$request->input('tr_expalination');
        } 
         
        if($request->input('txt_opt_a')){
            $txt_opt_a=$request->input('txt_opt_a'); 
        }else{
            $txt_opt_a='True';
        } 

        if($request->input('txt_opt_b')){
            $txt_opt_b=$request->input('txt_opt_b');
        }else{
            $txt_opt_b='False';
        }

        // if($request->input('opt_a')){
        //     $opt_a=$request->input('opt_a');
        // }else{
        //     $opt_a='on';
        // }

        // if($request->input('opt_b')){
        //     $opt_b=$request->input('opt_b');
        // }else{
        //     $opt_b='on';
        // }



 
        if($request->input('opt_tr_a')){
            $opt_tr_a=$request->input('opt_tr_a');
        }else{
            $opt_tr_a='on';
        }

        if($request->input('opt_tr_b')){
            $opt_tr_b=$request->input('opt_tr_b');
        }else{
            $opt_tr_b='on';
        } 

        Quiz::create([
            'quiz_name' => 'A',
            'drop_subject' => $request->input('drop_subject'),
            'drop_class' => $request->input('drop_class'),
            'drop_section' => $request->input('drop_section'), 
            'enter_question' => $enter_question,
            'explination' => $explination, 
            'txt_opt_a' => $txt_opt_a,
            'txt_opt_b' => $txt_opt_b, 
            'txt_opt_c' => $request->input('txt_opt_c'), 
            'txt_opt_d' => $request->input('txt_opt_d'),  
            'opt_a' => $opt_a, 
            'opt_b' => $opt_b, 
            'opt_c' => $request->input('opt_c'), 
            'opt_d' => $request->input('opt_d')

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
