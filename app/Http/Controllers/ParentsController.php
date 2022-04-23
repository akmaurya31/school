<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\Classes;
use App\User;
use App\StudentInfo;
use Auth;

class ParentsController extends Controller
{
    //

    /* function __construct()
    {
        $this->middleware('is_admin');
    } */

    public function index()
    {
        $session = $this->getSession(); 
        $classes = $this->getClasses(); 
        $section = Classes::where('ClassStatus',1)->distinct()->get(['ClassSection']);
        return view('parent_list.index',['student'=>'active','parent_list'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section]);                      
    }
    
    public function parent_list(Request $request)
    {
        $session_year = $request->session_year;
        $c = $request->class;
        $s = $request->section;
        $class = Classes::where('ClassSession',$session_year)
                            ->where('ClassNo',$c)
                            ->where('ClassSection',$s)
                            ->first();
        $students = Student::select('s_father_adhar')->where('s_acc_status',1)->where('s_status',1)->groupBy('s_father_adhar')->get();
        if($students)
        {
            $data = $students;
            $session = $this->getSession(); 
            $classes = $this->getClasses(); 
            $section = Classes::where('ClassStatus',1)->distinct()->get(['ClassSection']);
            return view('parent_list.index',['student'=>'active','parent_list'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section,'data'=>$data]);
        }
        else{
            session()->flash('error','no record found');
            return redirect()->route('admin.parent_list');
        }    
    }
    
    public static function get_student_info($id)
    {
        $details = Student::where('s_father_adhar',$id)->where('s_status',1)->first();
        return $details;
    }
    
    public static function get_user_info($id)
    {
        $details = \App\User::where('user_id',$id)->where('role_name','Parent')->first();
        return $details;
    }
    
    public function reset_password(Request $request)
    {
        $id = $request->input('id');
        $pass = Hash::make($request->input('password'));
        User::where('user_id',$id)
              ->where('role_name','Parent')
              ->update(['password'=>$pass]);
        return response()->json(['status'=>true,'msg'=>'password changed successfully']);
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
    
    public function deactivate(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        \App\User::where('user_id',$id)->where('role_name','Parent')->update(['status' => $status]);
        $msg = $status == 0 ? 'account deactivate' : 'account activate';
        return response()->json(['status' => true, 'msg' => $msg]);
    }
    
    public function detail(Request $request)
    {
        $details = \App\Student::find($request->input('id'));
        $details['view_url'] = url('admin/parent/show/'.$details['s_id']);
        return response()->json(['details' => $details]);
    }
    
    public function show($id)
    {
        $details = \App\Student::find($id);
        return view('parent_list.show',['student_details' => $details]);
    }
    
    public function deactive_list()
    {
        $session = $this->getSession(); 
        $classes = $this->getClasses(); 
        $section = Classes::where('ClassStatus',1)->distinct()->get(['ClassSection']);
        return view('parent_list.deactive_list',['student'=>'active','parent_deactive'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section]);
    }
    
    public function get_deactive_list(Request $request)
    {
        $session_year = $request->session_year;
        $c = $request->class;
        $s = $request->section;
        $class = Classes::where('ClassSession',$session_year)
                            ->where('ClassNo',$c)
                            ->where('ClassSection',$s)
                            ->first();
        $classId = $class->Classid;
        $students = Student::select('s_father_adhar')->where('s_status',1)->where('s_class_id',$classId)->groupBy('s_father_adhar')->get();
        if($students)
        {
            $data = $students;
            $session = $this->getSession(); 
            $classes = $this->getClasses(); 
            $section = Classes::where('ClassStatus',1)->distinct()->get(['ClassSection']);
            return view('parent_list.deactive_list',['student'=>'active','parent_deactive'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section,'data'=>$data]);
        }
        else{
            session()->flash('error','no record found');
            return redirect()->url('admin/parent/deactive_list');
        }    
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('parent-login');
    }
}    