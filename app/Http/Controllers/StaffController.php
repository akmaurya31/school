<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Staff;
use App\Classes;
use App\Department;
use App\Designation;
use App\ClassSubjects;
use App\EmployeeClasses;
use App\User;
use App\ClassPeriod; 
use App\Subjects;
use App\EmployeeTimetable;
use Auth;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public $errors = []; 
    //
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
    	$data = Staff::select('employeesmaster.*','departmentmaster.d_name','designationmaster.ds_name')
                            ->join('departmentmaster', 'employeesmaster.t_dept_id', '=', 'departmentmaster.d_id')
                            ->join('designationmaster', 'employeesmaster.t_desgnation_id', '=', 'designationmaster.ds_id')
                            ->where('employeesmaster.t_status', 1)
                            ->where('employeesmaster.t_acc_status', 1)
                            ->get(); 
        $departments = $this->get_department();                    
        return view('staff.index',['data'=>$data,'emp_list'=>'active','departments'=>$departments]);                     
    }
    
    public function staff_filter(Request $request)
    {
        $dept_id = $request->input('department');
        $data = Staff::select('employeesmaster.*','departmentmaster.d_name','designationmaster.ds_name')
                            ->join('departmentmaster', 'employeesmaster.t_dept_id', '=', 'departmentmaster.d_id')
                            ->join('designationmaster', 'employeesmaster.t_desgnation_id', '=', 'designationmaster.ds_id')
                            ->where('employeesmaster.t_status', 1)
                            ->where('employeesmaster.t_acc_status', 1)
                            ->where('t_dept_id',$dept_id)
                            ->get(); 
        $departments = $this->get_department();                    
        return view('staff.index',['data'=>$data,'emp_list'=>'active','departments'=>$departments]); 
    }

    public function create()
    {
    	$departments = $this->get_department();
    	$designations = []; // $this->get_designation();
    	$education = $this->get_education();
    	return view('staff.create',['emp'=>'active','departments'=>$departments,'designations'=>$designations,'education'=>$education]);
    }
    
    public function edit($id)
    {
      $departments = $this->get_department();
      $designations = $this->get_designation();
      $education = $this->get_education();
      $staff_details = Staff::find($id);
      return view('staff.edit',['departments'=>$departments,'designations'=>$designations,'staff_details'=>$staff_details,'emp_list'=>'active','education'=>$education]);
    }
    
    public function show($id)
    {
        $staff_details = Staff::find($id);
        $departments = $this->get_department();
        $designations = $this->get_designation();
        $education = $this->get_education();
        return view('staff.show',['departments'=>$departments,'designations'=>$designations,'staff_details'=>$staff_details,'emp_list'=>'active','education'=>$education]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'role_name' => 'required',
            'joinig_date' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'qualification'=>'required',
            'experiance'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'blood_group'=>'required',
            'date_of_birth'=>'required',
            'mobile_number'=>'required|max:10|min:10',
            'email'=>'required|email',
            'present_address'=>'required',
            'permanent_address'=>'required',
            'myFile' =>'required|image|mimes:jpeg,png,jpg|max:600',
            'password'=>'required|min:8',
            'account_holder'=>'required',
            'bank_branch'=>'required',
            'bank_address'=>'required',
            'ifsc_code'=>'required',
            'account_number'=>'required',
            'pan'=>'required'
        ]);

        $path = public_path('staff');
        $ImagePath = $this->makeDirectory($path);
        $profile = uniqid().".".$request->myFile->extension(); 
        $request->myFile->move($ImagePath, $profile);

        $InsertId = Staff::create(['t_role_name'=>$request->input('role_name'),
                       't_join_date'=>date('Y-m-d',strtotime($request->input('joinig_date'))),
                       't_dept_id'=>$request->input('department'),
                       't_desgnation_id'=>$request->input('designation'),
                       't_qualification'=>$request->input('qualification'),
                       't_experiance'=>$request->input('experiance'),
                       't_name'=>$request->input('name'),
                       't_gender'=>$request->input('gender'),
                       't_religion'=>$request->input('religion'),
                       't_mobile_number'=>$request->input('mobile_number'),
                       't_email'=>$request->input('email'),
                       't_present_address'=>$request->input('present_address'),
                       't_permanent_address'=>$request->input('permanent_address'),
                       't_profile_image'=> $profile,
                       't_facebook'=>$request->input('facebook_link'),
                       't_twitter'=>$request->input('twitter'),
                       't_linkdin'=>$request->input('linkdin'),
                       't_account_holder'=>$request->input('account_holder'),
                       't_account_number'=>$request->input('account_number'),
                       't_branch'=>$request->input('bank_branch'),
                       't_branch_address'=>$request->input('bank_address'),
                       't_ifsc_code'=>$request->input('ifsc_code'),
                       't_update_by' => Auth::user()->id,
                       't_pan'=>$request->input('pan'),
                       't_dob'=>$request->input('date_of_birth'),
                       't_reg_no'=>$this->create_unique($request->input('department')),
                       't_blood_group' => $request->input('blood_group')
                   ])->t_id;
        User::create(['name'=>$request->input('name'),
                      'email'=>$request->input('email'),
                      'password'=>Hash::make($request->input('password')),
                      'user_id'=>$InsertId,
                      'role_name'=>$this->getUserRole($request->input('department')),
                  ]);
        return redirect()->back()->withSuccess('Data inserted Successfully');
    }
    
    public function getUserRole($id_department) {
        $departmentObj = Department::find((int) $id_department);
        return $departmentObj->d_name; 
    }
    
    private function create_unique($dept){
        if($dept == 10){
            $uniqueId = "HR-".substr(time(),-4);
        }elseif($dept == 11){
           $uniqueId = "TS-".substr(time(),-4);
        }elseif($dept == 12){
           $uniqueId = "CK-".substr(time(),-4);
        }elseif($dept == 13){
           $uniqueId = "SS-".substr(time(),-4);
        }elseif($dept == 14){
           $uniqueId = "AC-".substr(time(),-4);
        }elseif($dept == 15){
           $uniqueId = "LB-".substr(time(),-4);
        }else{
           $uniqueId = "DD-".substr(time(),-4); 
        }
        
        return $uniqueId;
    }

    public function update(Request $request,$id)
    {
      $staff = Staff::find($id);
      $this->validate($request, [
            'role_name' => 'required',
            'joinig_date' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'qualification'=>'required',
            'experiance'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'blood_group'=>'required',
            'date_of_birth'=>'required',
            'mobile_number'=>'required|max:10|min:10',
            'email'=>'required|email',
            'present_address'=>'required',
            'permanent_address'=>'required',
            'account_holder'=>'required',
            'bank_branch'=>'required',
            'bank_address'=>'required',
            'ifsc_code'=>'required',
            'account_number'=>'required',
            'pan'=>'required'
        ]);

        $path = public_path('staff');
        if($request->myFile != ''){
            $ImagePath = $this->makeDirectory($path);
            $profile = uniqid().".".$request->myFile->extension(); 
            $request->myFile->move($ImagePath, $profile);
        }else{
          $profile = "";
        }    
        $updateData['t_join_date'] = date('Y-m-d',strtotime($request->input('joinig_date')));
        $updateData['t_role_name'] = $request->input('role_name');
        $updateData['t_dept_id'] = $request->input('department');
        $updateData['t_desgnation_id'] = $request->input('designation');
        $updateData['t_qualification'] = $request->input('qualification');
        $updateData['t_experiance'] = $request->input('experiance');
        $updateData['t_name'] = $request->input('name');
        $updateData['t_gender'] = $request->input('gender');
        $updateData['t_religion'] = $request->input('religion');
        $updateData['t_mobile_number'] = $request->input('mobile_number');
        $updateData['t_email'] = $request->input('email');
        $updateData['t_present_address'] = $request->input('present_address');
        $updateData['t_permanent_address'] = $request->input('permanent_address');
        $updateData['t_facebook'] = $request->input('facebook_link');
        $updateData['t_twitter'] = $request->input('twitter');
        $updateData['t_linkdin'] = $request->input('linkdin');
        $updateData['t_account_holder'] = $request->input('account_holder');
        $updateData['t_account_number'] = $request->input('account_number');
        $updateData['t_branch'] = $request->input('bank_branch');
        $updateData['t_branch_address'] = $request->input('bank_address');
        $updateData['t_ifsc_code'] = $request->input('ifsc_code');
        $updateData['t_pan'] = $request->input('pan');
        $updateData['t_dob'] = $request->input('date_of_birth');
        $updateData['t_blood_group'] = $request->input('blood_group');
      
        if($profile != ''){
          $updateData['t_profile_image'] = $profile;
        }
        $staff->update($updateData);
        unset($updateData);
        return redirect()->back()->withSuccess('Data updated Successfully');
    }

    private function makeDirectory($FilePath)
	{
	    if(is_dir($FilePath)){
	      $ImageFolder = $FilePath;
	    }else{
	      mkdir($FilePath,0777,true);
	      $ImageFolder = $FilePath;
	    }
	    return $ImageFolder;
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

    public function get_designation_drop(Request $request)
    {
      $role = $request->id_dept;
      if($role == 'Teaching'){
        $ds = Designation::where('ds_status',1)
                           ->where('ds_name','Teacher')
                           ->get();
      }else{
        $ds = Designation::where('d_id',$role)->get();
      }
      $option = "";
      foreach($ds as $d){
        $option .= "<option value='".$d->ds_id."'>".$d->ds_name."</option>";
      }
      echo $option;
    }

    public function delete_staff(Request $request){
     $Id = $request->id;
     $student = Staff::find($Id);
     $student->t_status = 0;
     $student->save();
     $data['status'] = true;
     $data['msg'] = 'staff deleted';
     echo json_encode($data);
     exit;
    }
    
    private function get_education()
    {
        $details = "App\Education"::where('status',1)->orderBy('education_name','ASC')->get();
        return $details;
    }
    
    public function delete_bulk(Request $request)
    {
        $bulk_details = $request->bulk_value;
        $explodeData = explode("#",$bulk_details);
        foreach($explodeData as $key=>$value){
            $staff = Staff::find($value);
            $staff->t_status = 0;
            $staff->save();
        } 
        $response = array('status'=>true,
                          'msg'=>"deleted successfully");
        echo json_encode($response);
        exit;
    }
    
    public function reset_password(Request $request)
    {
        $id = $request->input('id');
        $pass = Hash::make($request->input('password'));
        User::where('user_id',$id)
              ->where('role_name','Employee')
              ->update(['password'=>$pass]);
        return response()->json(['status'=>true,'msg'=>'password changed successfully']);
    }
    
    public function staff_detail(Request $request)
    {
        $id = $request->input('id');
        $staff_detail = Staff::find($id);
        $dept_name = \App\Department::find($staff_detail['t_dept_id']);
        $designation = \App\Designation::find($staff_detail['t_desgnation_id']);
        $staff_detail['dept_name'] = $dept_name['d_name'];
        $staff_detail['designation_name'] = $designation['ds_name'];
        $staff_detail['profile_url'] = asset('public/staff/'.$staff_detail['t_profile_image']);
        $staff_detail['view_url'] = route('staff.show',$staff_detail->t_id);
        
        return response()->json(['staff_detail' => $staff_detail]);
        
    }
    
    public function deactivate(Request $request)
    {
        $id = $request->input('id');
        $status = $request->input('status');
        $staff = Staff::find($id);
        $staff->t_acc_status = $status;
        $staff->save();
        \App\User::where('user_id',$id)->where('role_name','Employee')->update(['status' => $status]);
        $msg = $status == 1 ? 'account activate' : 'account deactivate';
        return response()->json(['status' => true,'msg' => $msg]);
    }
    
    public function deactive_list()
    {
        $data = Staff::select('employeesmaster.*','departmentmaster.d_name','designationmaster.ds_name')
                            ->join('departmentmaster', 'employeesmaster.t_dept_id', '=', 'departmentmaster.d_id')
                            ->join('designationmaster', 'employeesmaster.t_desgnation_id', '=', 'designationmaster.ds_id')
                            ->where('employeesmaster.t_status', 1)
                            ->where('employeesmaster.t_acc_status', 0)
                            ->get(); 
        return view('staff.deactive_list',['data'=>$data,'staff_deactive'=>'active']);
    }
    
    
    public function employee_subjects_assign(Request $request) {
        $edited_subject = $edited_clssubject = $edited_clsemp = $edited_empclasses = false;
        
        
        if(Route::currentRouteName() == 'staff.emp-subject-edit') {
           $id_subject = (int) base64_decode($request->id);
           $edited_subject = Subjects::find($id_subject); 
        }

        if(Route::currentRouteName() == 'staff.emp-classsubject-edit') {
           $id_clssubject = (int) base64_decode($request->id);
           $edited_clssubject = ClassSubjects::find($id_clssubject); 
        }
    
        if(Route::currentRouteName() == 'staff.emp-classes-edit') {
           $id_empclasses = (int) base64_decode($request->id);
           $edited_empclasses = EmployeeClasses::find($id_empclasses); 
        }
    

        if($request->input('action_type') == 'add_subjectmaster') {

            Subjects::create([
                'title' => $request->input('title'),
            ]);

            session()->flash('message', 'Subject Saved Successfully!');
            return redirect(route('staff.emp-subject-add'));                
            
        }

        if($request->input('action_type') == 'edit_subjectmaster') {
            $subjectObj = Subjects::find($request->input('id_subject'));
            $subjectObj->update([
                'title' => $request->input('title'),
            ]);
            session()->flash('message', 'Subject Updated Successfully!');
            return redirect(route('staff.emp-subject-add'));                
            
        }

        if($request->input('action_type') == 'edit_subjects_to_class') {
            $clsSubjectObj = ClassSubjects::find($request->input('id_clssubject'));
            $clsSubjectObj->update([
                'id_class' => $request->input('id_class'), 
                'id_subjects' => serialize($request->input('id_subjects'))
            ]);
            session()->flash('message', 'Subject Updated Successfully!');
            return redirect(route('staff.emp-subject-add'));                
        }


        if($request->input('action_type') == 'edit_classes_to_employee') {
            $employeeClassesObj = EmployeeClasses::find($request->input('id_empclasses'));
            $employeeClassesObj->update([
                'id_employee' => $request->input('id_employee'), 
                'id_classes' => serialize($request->input('id_classes'))
            ]);
            session()->flash('message', 'Classes Updated Successfully!');
            return redirect(route('staff.emp-subject-add'));                
        }


        if($request->input('action_type') == 'assign_subjects_to_class') {
            
            $clsSubject = ClassSubjects::select('id')->where('id_class', $request->input('id_class'))->get()->first();
            if(isset($clsSubject->id)) {
                $clsSubjectObj = ClassSubjects::find((int) $clsSubject->id);
                if(!$clsSubjectObj->update([
                    'id_subjects' => serialize($request->input('id_subjects')), 
                    'is_deleted' => 0,
                ])) {
                    $this->errors[]=1; 
                }
            }else{
                if(!ClassSubjects::create([
                    'id_class' => $request->input('id_class'), 
                    'id_subjects' => serialize($request->input('id_subjects'))
                ])) {
                    $this->errors[]=1;
                }
            }
            
            if(count($this->errors) == 0) {
                session()->flash('message', 'Subjects Saved Successfully!');
                return redirect(route('staff.emp-subject-add'));                
            }
        }


        if($request->input('action_type') == 'assign_classes_to_employee') {
            $empClassesObj = EmployeeClasses::select('id')->where('id_employee', $request->input('id_employee'))->get()->first();
            if(isset($empClassesObj->id)) {
                $empClassesObj2 = EmployeeClasses::find((int) $empClassesObj->id);
                if(!$empClassesObj2->update([
                    'id_classes' => serialize($request->input('id_classes')), 
                    'is_deleted' => 0,
                ])) {
                    $this->errors[]=1; 
                }
            }else{
                if(!EmployeeClasses::create([
                    'id_employee' => $request->input('id_employee'), 
                    'id_classes' => serialize($request->input('id_classes'))
                ])) {
                    $this->errors[]=1;
                }
            }
            
            if(count($this->errors) == 0) {
                session()->flash('message', 'Classes Saved Successfully!');
                return redirect(route('staff.emp-subject-add'));                
            }
        }
        
        if($request->input('action_type') == 'add_periods_in_class_section') {
            ClassPeriod::where([
                'id_class' => (int) $request->input('id_class'),
                'id_section' => (int) $request->input('id_section'),
            ])->delete();
            
            if(!ClassPeriod::create([
                'id_class' => (int) $request->input('id_class'),
                'id_section' => (int) $request->input('id_section'),
                'periods' => (int) $request->input('period_num'),
            ])) {
                $this->errors[]=1; 
            }

            if(count($this->errors) == 0) {
                session()->flash('message', 'Period Saved Successfully!');
                return redirect(route('staff.emp-subject-add'));                
            }
    
        }

        $employeeList = Staff::select('t_id', 't_name', 't_qualification')->where(['t_dept_id'=>11])->get();
        $subjects = Subjects::select('id', 'title', 'duration')->where('is_deleted', 0)->get();
        $classes = Classes::select('Classid AS id_class', 'ClassNo AS class_name')->groupBy('ClassNo')->get();
        $sections = Classes::select('Classid AS id_section', 'ClassSection AS section_name')->where('ClassStatus',1)->groupBy('ClassSection')->get();
        $class_subjects = ClassSubjects::select('class_subject_assign.*','classmaster.ClassNo AS class_name')
                               ->join('classmaster', 'classmaster.Classid', '=', 'class_subject_assign.id_class')
                               ->where('class_subject_assign.is_deleted',0)->get();
                               
        $employee_classes = EmployeeClasses::select('employee_classes.*', 'employeesmaster.t_name AS employee_name')
                               ->join('employeesmaster', 'employeesmaster.t_id', '=', 'employee_classes.id_employee')
                               ->where('employee_classes.is_deleted',0)->get();
        if($employee_classes) {
            foreach($employee_classes as $key => $employee_class) {
                $employee_classes[$key]->classes = Classes::select('ClassNo AS class_name')->whereIn('Classid', unserialize($employee_class->id_classes))->get();
            }
        } 
        
                               
        if($class_subjects) {
            foreach($class_subjects as $key => $id_subjects) {
                $class_subjects[$key]->subjects = Subjects::select('title')->whereIn('id', unserialize($id_subjects->id_subjects))->get();
            }
        }  

        
        return view('subjets.employee-subjects-assign',[
            'subjectmaster'=>'active', 
            'employee_list'=>$employeeList, 
            'subjects' => $subjects, 
            'classes' => $classes, 
            'sections' => $sections, 
            'class_subjects' => $class_subjects, 
            'edited_subject' => $edited_subject, 
            'edited_clssubject' => $edited_clssubject, 
            'edited_clsemp' => $edited_clsemp, 
            'edited_empclasses' => $edited_empclasses, 
            'employee_classes' => $employee_classes,
        ]);
    }
    
    public function employee_set_timetable(Request $request) {
        $subjective_teacher = $employeeList = $get_teachers_for_periods = $get_periods = false; 
        
        if(request()->ajax()) {
            $id_classes = EmployeeClasses::select('id_classes')->where('id_employee', (int) $request->id_teacher)->get()->first();
            $_subjects = ClassSubjects::select('id_subjects')->whereIn('id_class', unserialize($id_classes->id_classes))->where('is_deleted', 0)->get();
            $uniqueue_id_subjects = [];
            if( $_subjects ) {
                foreach( $_subjects as $key => $id_subjects ) {
                    foreach(unserialize($id_subjects->id_subjects) as $id_subject) {
                        if(!in_array($id_subject, $uniqueue_id_subjects)) {
                            $uniqueue_id_subjects[]=$id_subject;
                        }
                    }
                }
            }
            
            return Subjects::whereIn('id', $uniqueue_id_subjects)->get();
            
        }
        
        $employeeList = Staff::select('t_id', 't_name', 't_qualification')->where(['t_dept_id'=>11])->get();
        $subjects = Subjects::select('id', 'title', 'duration')->where('is_deleted', 0)->get();
                            
        $classes = Classes::select('Classid AS id_class', 'ClassNo AS class_name')->groupBy('ClassNo')->get();
        $sections = Classes::select('Classid AS id_section', 'ClassSection AS section_name')->where('ClassStatus',1)->groupBy('ClassSection')->get();
        
        if($request->input('action_type') == 'get_selected_days_inputs') {
            $periods = ClassPeriod::select('periods')->where([
                'id_class' => (int) $request->input('id_class'),
                'id_section' => (int) $request->input('id_section'),
            ])->get()->first();
            
            if($periods) {
                $get_periods = [
                    'days' => (int) $request->input('days'), 
                    'periods' => (int) $periods->periods, 
                    'id_class' => (int) $request->input('id_class'),
                    'id_section' => (int) $request->input('id_section'),
                ];
            }
        }
        
        if($request->input('action_type') == 'set_periods_for_selected_days') {
            $get_periods = [
                'days' => (int) $request->input('days'), 
                'periods' => (int) $request->input('periods'), 
                'id_class' => (int) $request->input('id_class'),
                'id_section' => (int) $request->input('id_section'),
                'selected_periods' => $request->input('selected_periods')
            ];
            
            //return $request->input('selected_periods');
            

            
            $subjective_teacher = DB::table('employeesmaster')
                ->join('employee_classes', 'employee_classes.id_employee', '=', 'employeesmaster.t_id')
                ->select('employeesmaster.t_id AS id_emp', 'employeesmaster.t_name AS emp_name', 'employee_classes.id_classes')
                ->where('employee_classes.is_deleted',0)
                ->get();            
                
            
            $get_teachers_for_periods = true; 
        }
         
        if($request->input('action_type') == 'save_periods_history') {
            if($request->input('employees_info')) {
                foreach($request->input('employees_info') as $day => $employee_info) {
                    foreach($employee_info as $period => $id_employee) {
                        EmployeeTimetable::where([
                            'id_emp' => (int) $id_employee, 
                            'day' => (int) $day, 
                        ])->delete();
                        
                        if(!EmployeeTimetable::create([
                            'id_emp' => (int) $id_employee, 
                            'id_class' => (int) $request->input('id_class'), 
                            'id_section' => (int) $request->input('id_section'), 
                            'id_subject' => (int) $request->input('id_subject')[$day][$period],
                            'period' => (int) $period, 
                            'day' => (int) $day, 
                        ])) {
                            $this->errors[] = 1; 
                        }
                    }
                }
            }
            
            if(count($this->errors) == 0) {
                session()->flash('message', 'Time-table settings saved!');
                return redirect(route('staff.set-timetable'));                
            }
        }
        
        return view('staff.time-table',[
            'set_time_table'=>'active', 
            'employee_list'=>$employeeList, 
            'subjects' => $subjects, 
            'classes' => $classes, 
            'sections' => $sections,
            'get_periods' => $get_periods, 
            'get_teachers_for_periods' => $get_teachers_for_periods, 
            'employee_list' => $subjective_teacher, 
        ]);
        
    }
    
    public function employee_view_timetable(Request $request) {
        $dayWiseTimes = false; 
        
        $employeeList = Staff::select('t_id', 't_name', 't_qualification')->where(['t_dept_id'=>11])->get();
        $subjects = Subjects::select('id', 'title', 'duration')->where('is_deleted', 0)->get();
        
        $classes = Classes::select('Classid AS id_class', 'ClassNo AS class_name')->groupBy('ClassNo')->get();
        $sections = Classes::select('Classid AS id_section', 'ClassSection AS section_name')->where('ClassStatus',1)->groupBy('ClassSection')->get();
        
        if($request->input('action_type') == 'get_employee_timetable') {
            
            $filterArr = []; 
            
            if($request->input('id_class')) {
                $filterArr['employee_timetable.id_class'] = (int) $request->input('id_class'); 
            }
            
            if($request->input('id_employee')) {
                $filterArr['employee_timetable.id_emp'] = (int) $request->input('id_employee'); 
            }
            if($request->input('id_section')) {
                $filterArr['employee_timetable.id_section'] = (int) $request->input('id_section'); 
            }
            
            $dayWiseTimes = []; 
            $timeTableArr = DB::table('employee_timetable')
                ->join('employeesmaster', 'employeesmaster.t_id', '=', 'employee_timetable.id_emp')
                ->join('subjectsmaster', 'subjectsmaster.id', '=', 'employee_timetable.id_subject')
                ->join('classmaster', 'classmaster.Classid', '=', 'employee_timetable.id_class')
                ->select('employee_timetable.*', 'employeesmaster.t_name', 'subjectsmaster.title AS subject_name', 'classmaster.ClassNo AS class_name')
                ->where($filterArr)
                ->orderBy('employee_timetable.day', 'ASC')->get();
                
            if($timeTableArr) {
                foreach($timeTableArr as $key => $timetable) {
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
    
    public function deactivate_bulk(Request $request)
    {
        $bulk_details = $request->bulk_value;
        $explodeData = explode("#",$bulk_details);
        foreach($explodeData as $key=>$value){
            $id = $value;
            $status =0;
            $staff = Staff::find($id);
            $staff->t_acc_status = $status;
            $staff->save();
            \App\User::where('user_id',$id)->where('role_name','Employee')->update(['status' => $status]);
        }
        
        return response()->json(['status' => true,
                                 'msg' => 'deactivated successfully']);
    }
    
}
