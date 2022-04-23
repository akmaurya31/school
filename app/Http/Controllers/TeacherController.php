<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Staff;
use App\Classes;
use App\Department;
use App\EmployeeSubjects;
use App\ClassPeriod; 
use App\Subjects;
use App\EmployeeTimetable;
use App\Designation;
use App\AppModules;
use App\EmpModuleAccessLevels;
use App\User;

class TeacherController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_teacher');
    }

    public function index()
    {
    	return view('teacher.index-view',['dash'=>'active']);
    }

    public function setting()
    {
    	return view('teacher.setting',['dash'=>'active']);
    }

    public function update_password(Request $request)
    {
    	$this->validate($request, [
			'oldpassword' => 'required',
			'newpassword' => 'required|min:6',
            'confirmpassword' => 'required|min:6'
        ]);
		
		$hashedPassword = Auth::user()->password;
    if($request->newpassword == $request->confirmpassword){
		if (\Hash::check($request->oldpassword , $hashedPassword )) {
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
              $users =User::find(Auth::user()->id);
              $users->password = Hash::make($request->newpassword);
              $ipAddress = $this->getRealIpAddress();
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password,'last_ip'=>$ipAddress));
              session()->flash('message','password updated successfully');
              return redirect()->route('teacher.logout');
            }else{
                  session()->flash('message','new password can not be the old password!');
                  return redirect()->back();
            }
 
         }else{
               session()->flash('message','old password doesnt matched ');
               return redirect()->back();
        }
      }else{
        session()->flash('message','New password and confirm password does not match');
        return redirect()->back();
      }  
    }
    
    public function employee_view_timetable(Request $request) {
        $dayWiseTimes = false; 
        
        $employeeList = Staff::select('t_id', 't_name', 't_qualification')->where(['t_dept_id'=>11])->get();
        $subjects = Subjects::select('id', 'title', 'duration')->where('status', 1)->get();
        $classes = Classes::select('Classid AS id_class', 'ClassNo AS class_name')->groupBy('ClassNo')->get();
        $sections = Classes::select('Classid AS id_section', 'ClassSection AS section_name')->where('ClassStatus',1)->groupBy('ClassSection')->get();
        
        if($request->input('action_type') == 'get_employee_timetable') {
            
            $filterArr = [
                'id_class' => (int) $request->input('id_class')
            ]; 
            
            if($request->input('id_employee')) {
                $filterArr['id_emp'] = (int) $request->input('id_employee'); 
            }
            if($request->input('id_section')) {
                $filterArr['id_section'] = (int) $request->input('id_section'); 
            }
            
            $dayWiseTimes = []; 
            $timeTableArr = DB::table('employee_timetable')
                ->join('employeesmaster', 'employeesmaster.t_id', '=', 'employee_timetable.id_emp')
                ->join('employee_subject_assign', 'employee_subject_assign.id_employee', '=', 'employee_timetable.id_emp')
                ->select('employee_timetable.*', 'employeesmaster.t_name', 'employee_subject_assign.id_subjects')
                ->where($filterArr)
                ->orderBy('employee_timetable.day', 'ASC')->get();
                
            if($timeTableArr) {
                foreach($timeTableArr as $key => $timetable) {
                    $id_subjects = unserialize($timetable->id_subjects);
                    $subjectsArr = []; 
                    if($id_subjects) {
                        foreach($id_subjects as $key => $id_subject) {
                            $subjectObj = Subjects::find((int) $id_subject);
                            $subjectsArr[] = $subjectObj->title; 
                        }
                    }
                    $timetable->id_subjects = !empty($subjectsArr) ? implode(' | ', $subjectsArr): ''; 
                    $dayWiseTimes[$timetable->day][]=$timetable; 
                }
            }

        }

        return view('staff.view-time-table',[
            'view_time_table'=>'active', 
            'classes' => $classes, 
            'sections' => $sections,
            'subjects' => $subjects, 
            'nb_days' => 6, 
            'nb_periods' => 7, 
            'employee_list' => $employeeList, 
            'day_wise_times' => $dayWiseTimes
        ]);
        
    }
    

    private function getRealIpAddress()
    {
       $client  = @$_SERVER['HTTP_CLIENT_IP'];
       $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
       $remote  = $_SERVER['REMOTE_ADDR'];

       if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('teacher-login');
    }
}
