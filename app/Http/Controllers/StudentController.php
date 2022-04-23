<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Student;
use App\Classes;
use App\User;
use App\StudentInfo;
use App\Transport;
use App\HostelCategory;
use App\Hostel;
use App\Room;
use Auth;

class StudentController extends Controller
{
    //

    function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {

    }

    public function create()
    {
        $currentPath= Route::getFacadeRoot()->current()->uri();
        if($currentPath == 'student/create-new'){
            $add_type='add_new_core';
            $blade_file = 'students.create-core';
        }else{
            die();
            $add_type="add_new";
            $blade_file = 'students.create';            
        }

        $data['session'] = $this->getSession();
        $data['sections'] = Classes::where('ClassStatus',1)->groupBy('ClassSection')->get();
        $data['classes'] = $this->getClasses();
        $data['transport'] = $this->getTransport();
        $data['hostels'] = $this->getHostel();
        $data['states'] = $this->get_states();
        $data['mothertongue'] = $this->get_mother_tongue();
        $data['educations'] = $this->get_education();
        $regNo = $this->get_registration();
        return view($blade_file,['add'=>'active',$add_type=>'active','dropDown'=>$data,'regNo'=>$regNo]);
    }

    public function edit($id)
    {
        $student_details = Student::find($id);
        $data['session'] = $this->getSession();
        $data['classes'] = $this->getClasses();
        $data['transport'] = $this->getTransport();
        $data['hostels'] = $this->getHostel();
        $data['educations'] = $this->get_education();
        $data['mothertongue'] = $this->get_mother_tongue();
        $data['states'] = $this->get_states();
        $data['classDetails'] = Classes::where('Classid',$student_details->s_class_id)
                                ->first();
        $classDetails = $data['classDetails'];                        
        $data['sections'] =   Classes::where('ClassNo',$classDetails->ClassNo)
                                ->where('ClassStatus',1)
                                ->where('ClassSession',$classDetails->ClassSession)
                                ->get();                      
        $data['room'] = Room::where('HostelId',$student_details->s_hostel_id)->get();
        $data['studentInfo'] = StudentInfo::where('si_session',$student_details->s_session)->where('si_student_id',$id)->first();
        return view('students.edit',['data'=>$data,'student_details'=>$student_details,'student'=>'active','list'=>'active']);
    }

    private function getSession()
    {
        return Classes::select('ClassSession', 'Classid')->groupBy('ClassSession')->get();        
    }

    private function getClasses()
    {
        return Classes::select('ClassNo', 'Classid')->groupBy('ClassNo')->get();
    }

    public function getsection(Request $request)
    {
        $Id = $request->class_id;
        $sessionId = $request->session;
        $classes = Classes::where('ClassSession',$sessionId)
                            ->where('ClassNo',$Id)
                            ->distinct()
                            ->get(['ClassSection']);
        $option = "<option value=''>Select Section</option>";
        foreach($classes as $key)
        {
            $option .= "<option value='".$key->ClassSection."'>".$key->ClassSection."</option>";
        }
        echo $option;
        exit;                    
    }

    private function getTransport()
    {
       $transport = Transport::get();
       return $transport;
    }

    public function getHostel()
    {
        $hostels = Hostel::get();
        return $hostels;
    }

    public function getvehicle(Request $request)
    {
        $id = $request->route_id;
        $vehicle_number = Transport::where('TrasportRoutId',$id)->first()->VehicleSlNo;
        echo $vehicle_number;
        exit;
    }

    public function getroom(Request $request)
    {
        $id = $request->route_id;
        $rooms = Room::where('HostelId',$id)->get();
        $option = "<option value='0'> Select Room</option>";
        foreach($rooms as $key)
        {
            $option .= "<option value='".$key->RoomId."''>".$key->RoomName."</option>";
        }
        echo $option;
        exit;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'id_session' => 'required',
            'id_class' =>'required',
            'id_section' =>'required',
            'category'=>'required',
            'fname' =>'required',
            'lname' =>'required',
            'gender'=>'required',
            'dob'=>'required',
            'mother_name'=>'required',
            'religion'=>'required',
            'mobile'=>'required',
            'city'=>'required',
            'state'=>'required',
            'birth_cer'=>'required|mimes:jpeg,png,jpg,gif,pdf|max:600'
        ]);
        
        #upload tc
        $path = public_path('documents');
        $ImagePath = $this->makeDirectory($path);
        if($request->tc != ''){
            $tc = uniqid().".".$request->tc->extension(); 
            $request->tc->move($ImagePath, $tc);
        }else{
            $tc = '';
        }    

        #birth certificate
        $birth = uniqid().".".$request->birth_cer->extension(); 
        $request->birth_cer->move($ImagePath, $birth);

        #character
        if($request->character_cer != ''){
            $character = uniqid().".".$request->character_cer->extension(); 
            $request->character_cer->move($ImagePath, $character);
        }else{
            $character='';
        }    

        #uplaod profile Pic
        if($request->myFile != ''){
            $profile = uniqid().".".$request->myFile->extension(); 
            $request->myFile->move($ImagePath, $profile);
        }else{
            $profile ='';
        }    
        
        #cast profile Pic
        if($request->cast_cer != ''){
            $cast = uniqid().".".$request->cast_cer->extension(); 
            $request->cast_cer->move($ImagePath, $cast);
        }else{
            $cast = '';
        }    

        #getsibling Details
        $siblingDetails = array();
        $name = $request->ss_name;
        $sclass = $request->ss_class;
        $sroll = $request->ss_roll_number;
        $sregistered = $request->ss_registration_number;

        if(empty($request->relation_id)){
            $sibling = '';
        }else{
            foreach($request->relation_id as $key=>$value)
            {
                $siblingDetails[] = $value."#$".$name[$key]."#$".$sclass[$key]."#$".$sroll[$key]."#$".$sregistered[$key];
            }
            $sibling = implode('#%',$siblingDetails);
        }    

        $reg_num = $this->random_reg_num();
    
        #Insert into student table
        $InsertData['s_registered'] = $reg_num;
        $InsertData['s_adm_date'] = date('Y-m-d');
        $InsertData['s_category_id'] = $request->input('category');
        $InsertData['s_first_name'] = $request->input('fname');
        $InsertData['s_last_name'] = $request->input('lname');
        $InsertData['s_gender'] = $request->input('gender');
        $InsertData['s_blood_group'] = $request->input('blood_group');
        $InsertData['s_dob'] = date('Y-m-d',strtotime($request->input('dob')));
        $InsertData['s_mother'] = $request->input('mother_tongue');
        $InsertData['s_religion'] = $request->input('religion');
        $InsertData['s_caste'] = $request->input('caste');
        $InsertData['s_mobile'] = $request->input('mobile');
        $InsertData['s_email'] = $request->input('s_email');
        $InsertData['s_city'] = $request->input('city');
        $InsertData['s_state'] = $request->input('state');
        $InsertData['s_tc'] = $tc;
        $InsertData['s_birth'] = $birth;
        $InsertData['s_char_cer'] = $character;
        $InsertData['s_sibling_detail'] = $sibling;
        $InsertData['s_image_url'] = $profile;
        $InsertData['s_father_name'] = $request->input('father_name');
        $InsertData['s_father_occupation'] = $request->input('father_occupation');
        $InsertData['s_father_income'] = $request->input('father_income');
        $InsertData['s_father_education'] = $request->input('father_education');
        $InsertData['s_father_mobile'] = $request->input('father_mobile');
        $InsertData['s_father_email'] = $request->input('father_email');
        $InsertData['s_father_adhar'] = $request->input('father_adhar');

        $InsertData['s_mother_name'] = $request->input('mother_name');
        $InsertData['s_mother_occupation'] = $request->input('mother_occupation');
        $InsertData['s_mother_income'] = $request->input('mother_income');
        $InsertData['s_mother_education'] = $request->input('mother_education');
        $InsertData['s_mother_mobile_number'] = $request->input('mother_mobile');
        $InsertData['s_mother_email'] = $request->input('mother_email');
        $InsertData['s_mother_adhar'] = $request->input('mother_adhar');

        $InsertData['s_city_1'] = $request->input('mother_city');
        $InsertData['s_state_1'] = $request->input('mother_state');
        $InsertData['s_address_1'] = $request->input('address_1');

        $InsertData['s_guardian_name'] = $request->input('gardian_name');
        $InsertData['s_guardian_occupation'] = $request->input('gardian_occupation');
        $InsertData['s_guardian_income'] = $request->input('gardian_income');
        $InsertData['s_guardian_education'] = $request->input('gardian_education');
        $InsertData['s_guardian_mobile_number'] = $request->input('gardian_mobile');
        $InsertData['s_guardian_email'] = $request->input('gardian_email');
        $InsertData['s_guardian_adhar'] = $request->input('gardian_adhar');
        $InsertData['s_guardian_city'] = $request->input('gardian_city');
        $InsertData['s_guardian_state'] = $request->input('gardian_state');

        $InsertData['s_hostel_id'] = $request->input('hostel_id');
        $InsertData['s_room_id'] = $request->input('room_id');

        $InsertData['s_transport_id'] = $request->input('transport_id');
        $InsertData['s_vehicle_id'] = $request->input('vehicle_number');

        $InsertData['s_previouse_school'] = $request->input('school_name');
        $InsertData['s_previouse_qualification'] = $request->input('qualification');
        $InsertData['s_previouse_remark'] = $request->input('remarks');

        $InsertData['s_present_address'] = $request->input('present_address');
        $InsertData['s_permanent_address'] = $request->input('permanent_address');
        $InsertData['s_adhar_card'] = $request->input('student_adhar');
        $InsertData['s_family_id'] = $request->input('family_id');
        $InsertData['s_member_id'] = $request->input('member_id');

        $InsertData['s_bloack_name'] = $request->input('block_name');
        $InsertData['s_floor_name'] = $request->input('floor_name');
        $InsertData['s_room_category'] = $request->input('room_category');
        $InsertData['s_room_type'] = $request->input('room_type');
        $InsertData['s_bed_name'] = $request->input('bed_name');
        $InsertData['s_cast_cer'] = $cast;

        if($request->input('registration_type')){
            $InsertData['registration_type'] = 1;
        }


        $InsertId = Student::create($InsertData)->s_id;
        unset($InsertData);
        
        #insert into class Info table
        $InsertData['si_student_id'] = $InsertId;
        $InsertData['si_student_rollnumber'] = $request->input('roll_number');;
        $InsertData['si_class_id'] = $request->input('id_class');
        $InsertData['si_section_id'] = $request->input('id_section');
        $InsertData['si_session_id'] = $request->input('id_session');
        $InsertData['si_semester'] = $request->input('semester');
        StudentInfo::create($InsertData);

        #user account
        $userData['name'] = $request->fname." ".$request->lname;
        $userData['email'] = $request->input('s_email');
        $userData['password'] = Hash::make($request->s_registered);
        $userData['role_name'] = 'Student';
        $userData['user_id'] = $InsertId;
        User::create($userData);
        unset($userData);
        #parents registration
        $count = User::where('user_id',$request->input('father_adhar'))->count();
        if($count == 0){
            #parent account
            $userData['name'] = $request->father_name;
            $userData['email'] = $request->father_email;
            if($request->parent_password != ''){
                $userData['password'] = Hash::make($request->parent_password);
            }else{
                $userData['password'] = Hash::make('123456');
            }    
            $userData['role_name'] = 'Parent';
            $userData['user_id'] = $request->father_adhar;
            User::create($userData);
        }
        if($request->input('registration_type')){
           session()->flash('message','Registration number is: '.$reg_num);                
           return redirect('student/create-new');  
        }           

        return redirect()->route('student.create')->withSuccess('Data inserted Successfully'); 


    }

    public function random_reg_num() {
      $number = "";
      for($i=0; $i<10; $i++) {
        $min = ($i == 0) ? 1:0;
        $number .= mt_rand($min,9);
      }
      return 'REG'.$number;
    }

    private function getsits($session,$class,$category)
    {
       $count =  'App\Totalsit'::where('session_name',$session)
                           ->where('class_name',$class)
                           ->where('category_name',$category)
                           ->where('status',1)
                           ->count();
        if($count>0)
        {
             $total =  'App\Totalsit'::where('session_name',$session)
                           ->where('class_name',$class)
                           ->where('category_name',$category)
                           ->where('status',1)
                           ->first()->number_of_sits;
        }
        else{
            $total = 0;
        } 
        
        return $total;
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

  private function getClassId($session,$className,$section)
  {
    $classId = Classes::where('ClassSession',$session)
                        ->where('ClassNo',$className)
                        ->where('ClassSection',$section)
                        ->value('Classid');
    return $classId;                    
  }

  public function student_list()
  {
    $students = StudentInfo::select('studentclassinfo.*','students.*','classmaster.*')
                            ->join('students', 'students.s_id', '=', 'studentclassinfo.si_student_id')
                            ->join('classmaster', 'classmaster.Classid', '=', 'studentclassinfo.si_class_id')
                            ->where('students.s_status', 1)
                            ->get();  
    $transports = $this->getTransportArray();
    $hostels = $this->getHostelArray();
    $rooms = $this->getRoomArray();  
    $classes = Classes::where('ClassStatus',1)->groupBy('ClassNo')->get();
    $sections = Classes::where('ClassStatus',1)->groupBy('ClassSection')->get();
    $sessions = Classes::select('ClassSession', 'Classid')->groupBy('ClassSession')->get();
    $data['session_year'] = '';
    $data['sem'] = '';
    $data['c'] = '';
    $data['s'] = '';                                   

    return view('students.student-list',[
        'transports'=>$transports,
        'hostels'=>$hostels,
        'rooms'=>$rooms,
        'student'=>'active',
        'list'=>'active',
        'classes'=>$classes,
        'sections'=>$sections,
        'sessions'=>$sessions,
        'data'=>$data, 
        'action_route'=>route('student.student-filter') 
    ]);                      
  }

  public function student_filter(Request $request)
  {

    $session_year = $request->session_year;
    $sem = $request->type;
    $c = $request->class;
    $s = $request->section;
    $data['session_year'] = $session_year;
    $data['sem'] = $sem;
    $data['c'] = $c;
    $data['s'] = $s;

    $class = Classes::where('ClassSession',$session_year)
                        ->where('ClassNo',$c)
                        ->where('ClassSection',$s)
                        ->first();
    
    $classId = $request->id_class;

    $students = Student::searchStudents([
        'id_session' => $request->input('id_session'), 
        'id_class' => $request->input('id_class'), 
        'id_section' => $request->input('id_section'), 
        'semester' => $request->input('semester')
    ]);

    $transports = $this->getTransportArray();
    $hostels = $this->getHostelArray();
    $rooms = $this->getRoomArray();  
    $classes = Classes::where('ClassStatus',1)->groupBy('ClassNo')->get();
    $sections = Classes::where('ClassStatus',1)->groupBy('ClassSection')->get();
    $sessions = Classes::select('ClassSession', 'Classid')->groupBy('ClassSession')->get();

    return view('students.student-list',[
        'students'=>$students,
        'transports'=>$transports,
        'hostels'=>$hostels,
        'rooms'=>$rooms,
        'student'=>'active',
        'list'=>'active',
        'classes'=>$classes,
        'sections'=>$sections,
        'sessions'=>$sessions,
        'data'=>$data, 
        'action_route'=>route('student.student-filter')         
    ]);
  }
  
  
  public function deactive_list()
  {
    $students = StudentInfo::select('studentclassinfo.*','students.*','classmaster.*')
                            ->join('students', 'students.s_id', '=', 'studentclassinfo.si_student_id')
                            ->join('classmaster', 'classmaster.Classid', '=', 'studentclassinfo.si_class_id')
                            ->where('students.s_status', 1)
                            ->get();  
    $transports = $this->getTransportArray();
    $hostels = $this->getHostelArray();
    $rooms = $this->getRoomArray();  
    $session = $this->getSession(); 
    $classes = $this->getClasses(); 
    $section = Classes::distinct()->get(['ClassSection']);
    $data['session_year'] = '';
    $data['sem'] = '';
    $data['c'] = '';
    $data['s'] = '';                                   
    return view('students.deactive-list',['transports'=>$transports,'hostels'=>$hostels,'rooms'=>$rooms,'student'=>'active','deactive_list'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section,'data'=>$data]);                      
  }

  public function deactive_filter(Request $request)
  {

    $session_year = $request->session_year;
    $sem = $request->type;
    $c = $request->class;
    $s = $request->section;
    $data['session_year'] = $session_year;
    $data['sem'] = $sem;
    $data['c'] = $c;
    $data['s'] = $s;  
    $class = Classes::where('ClassSession',$session_year)
                        ->where('ClassNo',$c)
                        ->where('ClassSection',$s)
                        ->first();
    $classId = $class->Classid;                    
    $students = StudentInfo::select('studentclassinfo.*','students.*','classmaster.*')
                            ->join('students', 'students.s_id', '=', 'studentclassinfo.si_student_id')
                            ->join('classmaster', 'classmaster.Classid', '=', 'studentclassinfo.si_class_id')
                            ->where('students.s_status', 1)
                             ->where('students.s_acc_status', 0)
                            ->where('studentclassinfo.si_class_id',$classId)
                            ->where('studentclassinfo.si_type',$sem)
                            ->get();  
    $transports = $this->getTransportArray();
    $hostels = $this->getHostelArray();
    $rooms = $this->getRoomArray();  
    $session = $this->getSession(); 
    $classes = $this->getClasses(); 
    $section = Classes::distinct()->get(['ClassSection']);                                   
    return view('students.deactive-list',['students'=>$students,'transports'=>$transports,'hostels'=>$hostels,'rooms'=>$rooms,'student'=>'active','deactive_list'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section,'data'=>$data]);
  }

  private function getTransportArray()
  {
    $res = $this->getTransport();
    $ArrayOption = array(0=>'No-Route');
    foreach($res as $key)
    {
        $ArrayOption[$key->TrasportRoutId] = $key->RouteName;
    }
    return $ArrayOption; 
  }

  private function getHostelArray()
  {
    $res = $this->getHostel();
    $ArrayOption = array(0=>'No-Hostel');
    foreach($res as $key)
    {
        $ArrayOption[$key->HostelId] = $key->HostelName;
    }
    return $ArrayOption; 
  }

  private function getRoomArray()
  {
    $res = Room::get();
    $ArrayOption = array(0=>'No-Room');
    foreach($res as $key)
    {
        $ArrayOption[$key->RoomId] = $key->RoomName;
    }
    return $ArrayOption; 
  }

  public function delete_student(Request $request)
  {
     $Id = $request->id;
     $student = Student::find($Id);
     $student->s_status = 0;
     $student->save();
     $data['status'] = true;
     $data['msg'] = 'student deleted';
     echo json_encode($data);
     exit;
  }
  
  public function active_account(Request $request){
     $Id = $request->id;
     $student = Student::find($Id);
     $student->s_acc_status = $request->status;
     $student->save();
     User::where('user_id',$Id)->where('role_name','Student')->update(['status'=>$request->status]);
     $data['status'] = true;
     if($request->status == 0){
        $data['msg'] = 'student deactivate';
     }else{
        $data['msg'] = 'student activate'; 
     }    
     echo json_encode($data);
     exit;
  }

  public function delete_bulk(Request $request)
  {
    $bulk_details = $request->bulk_value;
    if(Hash::check($request->admin_password, Auth::user()->password)){
        $explodeData = explode("#",$bulk_details);
        foreach($explodeData as $key=>$value){
            $student = Student::find($value);
            $student->s_status = 0;
            $student->save();
        } 
        $response = array('status'=>true,
                          'msg'=>"deleted successfully");
    }else{
       $response = array('status'=>false,
                          'msg'=>"your password is wrong"); 
    }                      
    echo json_encode($response);
    exit;
  }
  
  public function deactive_bulk(Request $request)
  {
    $bulk_details = $request->bulk_value;
    $status = $request->status;
    $explodeData = explode("#",$bulk_details);
    foreach($explodeData as $key=>$value){
        $student = Student::find($value);
        $student->s_acc_status = $status;
        $student->save();
        User::where('user_id',$value)->where('role_name','Student')->update(['status'=>$status]);
    }
    if($status == 0){
        $response = array('status'=>true,
                          'msg'=>"deactivate successfully");
    }else{
       $response = array('status'=>true,
                          'msg'=>"activate successfully"); 
    }                      
    echo json_encode($response);
    exit;
  }

  public function update(Request $request, $id)
  {
    $student = Student::find($id);
    $this->validate($request, [
            'session' => 'required',
            'class_name' =>'required',
            'category'=>'required',
            'fname' =>'required',
            'lname' =>'required',
            'gender'=>'required',
            'dob'=>'required',
            'mother_name'=>'required',
            'religion'=>'required',
            'mobile'=>'required',
            'city'=>'required',
            'state'=>'required',
        ]);


        #upload tc
        $path = public_path('documents');
        $ImagePath = $this->makeDirectory($path);
        if($request->tc != ''){
            $tc = uniqid().".".$request->tc->extension(); 
            $request->tc->move($ImagePath, $tc);
        }else{
            $tc = '';
        }    

        #birth certificate
        if($request->birth_cer != ''){
            $birth = uniqid().".".$request->birth_cer->extension(); 
            $request->birth_cer->move($ImagePath, $birth);
        }else{
            $birth='';
        }    

        #character
        if($request->character_cer != ''){
            $character = uniqid().".".$request->character_cer->extension(); 
            $request->character_cer->move($ImagePath, $character);
        }else{
            $character='';
        }    

        #uplaod profile Pic
        if($request->myFile != ''){
            $profile = uniqid().".".$request->myFile->extension(); 
            $request->myFile->move($ImagePath, $profile);
        }else{
            $profile ='';
        }    
        
        #cast profile Pic
        if($request->cast_cer != ''){
            $cast = uniqid().".".$request->cast_cer->extension(); 
            $request->cast_cer->move($ImagePath, $cast);
        }else{
            $cast = '';
        }    

        #get class Id
        $classId = $this->getClassId($request->session,$request->class_name,'All');

        #getsibling Details
        $siblingDetails = array();
        $name = $request->ss_name;
        $sclass = $request->ss_class;
        $sroll = $request->ss_roll_number;
        $sregistered = $request->ss_registration_number;

        if(!isset($request->relation_id)){
            $sibling = '';
        }else{
            foreach($request->relation_id as $key=>$value)
            {
                $siblingDetails[] = $value."#$".$name[$key]."#$".$sclass[$key]."#$".$sroll[$key]."#$".$sregistered[$key];
            }
            $sibling = implode('#%',$siblingDetails);
        }    
    
        #Insert into student table
        $InsertData['s_session'] = $request->input('session');
        $InsertData['s_registered'] = $request->input('s_registered');
        $InsertData['s_rollnumber'] = $request->input('roll');
        $InsertData['s_adm_date'] = date('Y-m-d',strtotime($request->input('adm_date')));
        $InsertData['s_class_id'] = $classId;
        $InsertData['s_category_id'] = $request->input('category');
        $InsertData['s_first_name'] = $request->input('fname');
        $InsertData['s_last_name'] = $request->input('lname');
        $InsertData['s_gender'] = $request->input('gender');
        $InsertData['s_blood_group'] = $request->input('blood_group');
        $InsertData['s_dob'] = date('Y-m-d',strtotime($request->input('dob')));
        $InsertData['s_mother'] = $request->input('mother_tongue');
        $InsertData['s_religion'] = $request->input('religion');
        $InsertData['s_caste'] = $request->input('caste');
        $InsertData['s_mobile'] = $request->input('mobile');
        $InsertData['s_email'] = $request->input('s_email');
        $InsertData['s_city'] = $request->input('city');
        $InsertData['s_state'] = $request->input('state');
        if($tc != ''){
           $InsertData['s_tc'] = $tc;
        }
        if($birth != ''){
            $InsertData['s_birth'] = $birth;
        }
        if($character != ''){
            $InsertData['s_char_cer'] = $character;
        }
        if($sibling != ''){
            $InsertData['s_sibling_detail'] = $sibling;
        }    
        if($profile != ''){
             $InsertData['s_image_url'] = $profile;
        }     
        $InsertData['s_father_name'] = $request->input('father_name');
        $InsertData['s_father_occupation'] = $request->input('father_occupation');
        $InsertData['s_father_income'] = $request->input('father_income');
        $InsertData['s_father_education'] = $request->input('father_education');
        $InsertData['s_father_mobile'] = $request->input('father_mobile');
        $InsertData['s_father_email'] = $request->input('father_email');
        $InsertData['s_father_adhar'] = $request->input('father_adhar');

        $InsertData['s_mother_name'] = $request->input('mother_name');
        $InsertData['s_mother_occupation'] = $request->input('mother_occupation');
        $InsertData['s_mother_income'] = $request->input('mother_income');
        $InsertData['s_mother_education'] = $request->input('mother_education');
        $InsertData['s_mother_mobile_number'] = $request->input('mother_mobile');
        $InsertData['s_mother_email'] = $request->input('mother_email');
        $InsertData['s_mother_adhar'] = $request->input('mother_adhar');

        $InsertData['s_city_1'] = $request->input('mother_city');
        $InsertData['s_state_1'] = $request->input('mother_state');
        $InsertData['s_address_1'] = $request->input('address_1');

        $InsertData['s_guardian_name'] = $request->input('gardian_name');
        $InsertData['s_guardian_occupation'] = $request->input('gardian_occupation');
        $InsertData['s_guardian_income'] = $request->input('gardian_income');
        $InsertData['s_guardian_education'] = $request->input('gardian_education');
        $InsertData['s_guardian_mobile_number'] = $request->input('gardian_mobile');
        $InsertData['s_guardian_email'] = $request->input('gardian_email');
        $InsertData['s_guardian_adhar'] = $request->input('gardian_adhar');
        $InsertData['s_guardian_city'] = $request->input('gardian_city');
        $InsertData['s_guardian_state'] = $request->input('gardian_state');

        $InsertData['s_hostel_id'] = $request->input('hostel_id');
        $InsertData['s_room_id'] = $request->input('room_id');

        $InsertData['s_transport_id'] = $request->input('transport_id');
        $InsertData['s_vehicle_id'] = $request->input('vehicle_number');

        $InsertData['s_previouse_school'] = $request->input('school_name');
        $InsertData['s_previouse_qualification'] = $request->input('qualification');
        $InsertData['s_previouse_remark'] = $request->input('remarks');

        $InsertData['s_present_address'] = $request->input('present_address');
        $InsertData['s_permanent_address'] = $request->input('permanent_address');
        $InsertData['s_adhar_card'] = $request->input('student_adhar');
        $InsertData['s_family_id'] = $request->input('family_id');
        $InsertData['s_member_id'] = $request->input('member_id');

        $InsertData['s_bloack_name'] = $request->input('block_name');
        $InsertData['s_floor_name'] = $request->input('floor_name');
        $InsertData['s_room_category'] = $request->input('room_category');
        $InsertData['s_room_type'] = $request->input('room_type');
        $InsertData['s_bed_name'] = $request->input('bed_name');
        if($cast != ''){
            $InsertData['s_cast_cer'] = $cast;
        }    

        $student->update($InsertData);
        unset($InsertData);
        #insert into class Info table
        $studentInfo = StudentInfo::find($id);
        $InsertData['si_class_id'] = $classId;
        $InsertData['si_student_rollnumber'] = $request->input('roll');
        $InsertData['si_session'] = $request->input('session');
        $InsertData['marks'] = $request->input('last_marks');
        $studentInfo->update($InsertData);
        session()->flash('message','Data Updated Successfully');

        return redirect()->back()->withSuccess('Data Updated Successfully');    
  }

  public function import_students()
  {
    $data['session'] = $this->getSession(); 
    $data['classes'] = $this->getClasses(); 
    $data['sections'] = Classes::distinct()->get(['ClassSection']);
    return view('students.import_students',['data'=>$data]);
  }

  public function insert_import(Request $request)
  {
    $sessionId = $request->session_year;
    $className = $request->class;
    $classSection = $request->section;
    $classId = Classes::where('ClassSession',$sessionId)
                        ->where('ClassNo',$className)
                        ->where('ClassSection',$classSection)
                        ->first()->Classid;

    $this->validate($request,
               ['session_year'=>'required',
                'class'=>'required',
                'section'=>'required',
                'myFile'=>'required'
            ]);
    $mimes = array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','text/plain','text/csv','text/tsv','application/excel','application/vnd.xls','text/comma-separated-values','application/vnd.ms-excel');
    if(in_array($_FILES["myFile"]['type'], $mimes)){
        $path = public_path('documents');
        $ImagePath = $this->makeDirectory($path);
        $tc = $_FILES["myFile"]['name'];
        $request->myFile->move($ImagePath, $tc);
        $filePath = public_path('documents/'.$tc);
        if (($handle = fopen($filePath, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
                  $dataArray[] = $data;
            }
            fclose($handle);
            $arrayIndex = $dataArray[0];
            //unset the first index which contains the details
            array_splice($dataArray, 0, 1);
            $indexedArray = array();
            //setting the index value to the above data array
            foreach($dataArray as $value){
                $indexedArray[] = array_combine($arrayIndex, $value);
            }
            foreach($indexedArray as $key)
            {
                if($key['s_registered'] !='' || $key['s_rollnumber'] != '' ||  $key['s_category_id'] != '' || $key['s_first_name'] != '' || $key['s_last_name'] != '' || $key['s_gender'] != '' || $key['s_blood_group'] != '' || $key['s_dob'] != '' || $key['s_mother'] != '' || $key['s_religion'] != '' || $key['s_caste'] != '' || $key['s_mobile'] != '' || $key['s_city'] != '' || $key['state'] != '' || $key['s_father_name'] != '' || $key['s_father_occupation'] != '' || $key['s_father_education'] != '' || $key['s_father_mobile'] != '' || $key['s_father_income'] != '' || $key['s_father_email'] != '' || $key['s_father_adhar'] != '' || $key['s_mother_name'] != '' || $key['s_mother_occupation'] != '' || $key['s_mother_education'] != '' || $key['s_father_mobile'] != '' || $key['s_mother_income'] != '' || $key['s_mother_email'] != '' || $key['s_mother_adhar'] != '' || $key['s_present_address'] != '' || $key['s_permanent_address'] != '' || $key['s_adhar_card'] != '' || $key['s_family_id'] != '' || $key['s_member_id'] != ''){
                    
                        #check duplicate registration 
                        //if($this->check_duplicate($key['s_registered'])){
                            #character validation
                            if($this->character_validation($key['s_first_name']) == true && $this->character_validation($key['s_last_name']) == true && $this->character_validation($key['s_mother']) == true && $this->character_validation($key['s_religion']) == true && $this->character_validation($key['s_caste']) == true && $this->character_validation($key['s_city']) == true && $this->character_validation($key['s_state']) == true && $this->character_validation($key['s_father_name']) == true && $this->character_validation($key['s_mother_name']) == true && $this->character_validation($key['s_father_occupation']) == true && $this->character_validation($key['s_mother_occupation']) == true){
                                    #mobile validation
                                    if($this->mobile_validation($key['s_mobile']) == true && $this->mobile_validation($key['s_father_mobile']) == true || $this->mobile_validation($key['s_mother_mobile_number']) == true){
                                        #adhar validation
                                        if($this->adhaar_validation($key['s_adhar_card']) == true && $this->adhaar_validation($key['s_father_adhar']) == true || $this->adhaar_validation($key['s_mother_adhar']) == true){
                                            #numeric validation 
                                            if($this->is_numeric($key['s_father_income']) == true && $this->is_numeric($key['s_mother_income']) == true){
                                                $InsertData['s_session'] = $sessionId;
                                                $InsertData['s_registered'] = $this->get_registration();
                                                $InsertData['s_rollnumber'] = $key['s_rollnumber'];
                                                $InsertData['s_adm_date'] = date('Y-m-d',strtotime($key['s_adm_date']));
                                                $InsertData['s_class_id'] = $classId;
                                                $InsertData['s_category_id'] = $key['s_category_id'];
                                                $InsertData['s_first_name'] = $key['s_first_name'];
                                                $InsertData['s_last_name'] = $key['s_last_name'];
                                                $InsertData['s_gender'] = $key['s_gender'];
                                                $InsertData['s_blood_group'] = $key['s_blood_group'];
                                                $InsertData['s_dob'] = date('Y-m-d',strtotime($key['s_dob']));
                                                $InsertData['s_mother'] = $key['s_mother'];
                                                $InsertData['s_religion'] = $key['s_religion'];
                                                $InsertData['s_caste'] =  $key['s_caste'];
                                                $InsertData['s_mobile'] = $key['s_mobile'];
                                                $InsertData['s_city'] = $key['s_city'];
                                                $InsertData['s_state'] = $key['s_state'];
                                                $InsertData['s_father_name'] = $key['s_father_name'];
                                                $InsertData['s_father_occupation'] = $key['s_father_occupation'];
                                                $InsertData['s_father_income'] = $key['s_father_income'];
                                                $InsertData['s_father_education'] = $key['s_father_education'];
                                                $InsertData['s_father_mobile'] = $key['s_father_mobile'];
                                                $InsertData['s_father_email'] = $key['s_father_email'];
                                                $InsertData['s_father_adhar'] = $key['s_father_adhar'];
                                
                                                $InsertData['s_mother_name'] = $key['s_mother_name'];
                                                $InsertData['s_mother_occupation'] = $key['s_mother_occupation'];
                                                $InsertData['s_mother_income'] = $key['s_mother_income'];
                                                $InsertData['s_mother_education'] = $key['s_mother_education'];
                                                $InsertData['s_mother_mobile_number'] = $key['s_mother_mobile_number'];
                                                $InsertData['s_mother_email'] = $key['s_mother_email'];
                                                $InsertData['s_mother_adhar'] = $key['s_mother_adhar'];
                                
                                                $InsertData['s_city_1'] =  $key['s_city_1'];
                                                $InsertData['s_state_1'] =  $key['s_state_1'];
                                                $InsertData['s_address_1'] =  $key['s_address_1'];
                                
                                                $InsertData['s_guardian_name'] = $key['s_guardian_name'];
                                                $InsertData['s_guardian_occupation'] = $key['s_guardian_occupation'];
                                                $InsertData['s_guardian_income'] = $key['s_guardian_income'];
                                                $InsertData['s_guardian_education'] =$key['s_guardian_income'];
                                                $InsertData['s_guardian_mobile_number'] = $key['s_guardian_mobile_number'];
                                                $InsertData['s_guardian_email'] = $key['s_guardian_email'];
                                                $InsertData['s_guardian_adhar'] = $key['s_guardian_adhar'];
                                                $InsertData['s_guardian_city'] = $key['s_guardian_city'];
                                                $InsertData['s_guardian_state'] = $key['s_guardian_state'];
                                
                                                $InsertData['s_previouse_school'] = $key['s_previouse_school'];
                                                $InsertData['s_previouse_qualification'] = $key['s_previouse_qualification'];
                                                $InsertData['s_previouse_remark'] = $key['s_previouse_remark'];
                                
                                                $InsertData['s_present_address'] = $key['s_present_address'];
                                                $InsertData['s_permanent_address'] = $key['s_permanent_address'];
                                                $InsertData['s_adhar_card'] = $key['s_adhar_card'];
                                                $InsertData['s_family_id'] = $key['s_family_id'];
                                                $InsertData['s_member_id'] = $key['s_member_id'];
                                                
                                                $InsertId = Student::create($InsertData)->s_id;
                                                unset($InsertData);
                                
                                                #insert into class Info table
                                                $InsertData1['si_student_id'] = $InsertId;
                                                $InsertData1['si_class_id'] = $classId;
                                                $InsertData1['si_student_rollnumber'] = $key['s_rollnumber'];
                                                $InsertData1['si_session'] = $sessionId;
                                                StudentInfo::create($InsertData1);
                                                
                                                
                                                #user account
                                                $userData['name'] = $key['s_first_name']." ".$key['s_last_name'];
                                                $userData['email'] = $this->get_registration();
                                                $userData['password'] = Hash::make('123456');
                                                $userData['role_name'] = 'Student';
                                                $userData['user_id'] = $InsertId;
                                                User::create($userData);
                                                unset($userData);
                                                #parents registration
                                                $count = User::where('user_id',$key['s_father_adhar'])->count();
                                                if($count == 0){
                                                    #parent account
                                                    $userData['name'] = $key['s_father_name'];
                                                    $userData['email'] = $key['s_father_email'];
                                                    $userData['password'] = Hash::make('123456');
                                                    $userData['role_name'] = 'Parent';
                                                    $userData['user_id'] = $key['s_father_adhar'];
                                                    User::create($userData);
                                                }
                                            }else{
                                                echo"update1";
                                            }        
                                    }       
                                }      
                        }    
                //}
                
                }
            }
            return redirect()->back()->withSuccess('Data imported Successfully');    

            
        }
    }else
    {
       return redirect()->back()->withSuccess('file type wrong'); 
    }            

  }

  public function show($id)
  {
        $student_details = Student::find($id);
        $data['session'] = $this->getSession();
        $data['classes'] = $this->getClasses();
        $data['transport'] = $this->getTransport();
        $data['hostels'] = $this->getHostel();
        $data['classDetails'] = Classes::where('Classid',$student_details->s_class_id)
                                ->first();
        $classDetails = $data['classDetails'];                        
        $data['sections'] =   Classes::where('ClassNo',$classDetails->ClassNo)
                                ->get();                      
        $data['room'] = Room::where('HostelId',$student_details->s_hostel_id)->get();
        $data['studentInfo'] = StudentInfo::where('si_session',$student_details->s_session)->where('si_student_id',$id)->first();
        return view('students.show',['data'=>$data,'student_details'=>$student_details,'student'=>'active','list'=>'active']);
  }
  
  public function student_detail(Request $request){
      $student_details = Student::find($request->id);
      $student_info = StudentInfo::where('si_session',$student_details->s_session)->where('si_student_id',$request->id)->first();
      $student_details['profile_url'] = asset('public/documents/'.$student_details['s_image_url']);
      $student_details['view_url'] = route('student.show',$student_details->s_id);
      $student_details = json_decode(json_encode($student_details),true) ;
      $student_details['roll_number'] = $student_info->si_student_rollnumber;
      echo json_encode($student_details);
      exit;
  } 
  
  private function get_states()
  {
      $states = array('Andhra Pradesh',
                      'Andaman and Nicobar Islands',
                      'Assam',
                      'Bihar',
                      'Chandigarh',
                      'Chhattisgarh',
                      'Dadar and Nagar Haveli',
                      'Daman and Diu',
                      'Delhi',
                      'Lakshadweep',
                      'Puducherry',
                      'Goa',
                      'Gujarat',
                      'Haryana',
                      'Himachal Pradesh',
                      'Jammu and Kashmir',
                      'Jharkhand',
                      'Karnataka',
                      'Kerala',
                      'Madhya Pradesh',
                      'Maharashtra',
                      'Manipur',
                      'Meghalaya',
                      'Mizoram',
                      'Nagaland',
                      'Odisha',
                      'Punjab',
                      'Rajasthan',
                      'Sikkim',
                      'Tamil Nadu',
                      'Telangana',
                      'Tripura',
                      'Uttar Pradesh',
                      'Uttarakhand',
                      'West Bengal');
        return $states ;             
  }
  
  private function get_mother_tongue()
  {
      $details = "App\Mothertongue"::where('status',1)->orderBy('mother_tongue_name', 'ASC')->get();
      return $details;
  }
  
  private function check_duplicate($regNo){
      $count = Student::where('s_registered',$regNo)->where('s_status',1)->count();
      if($count == 0){
          return true;
      }else{
          return false;
      }
  }
  
  private function character_validation($string){
        if (ctype_alpha(str_replace(' ', '', $string)) === false) {
          return false;
        }else{
            return true;
        }
  }
  
  private function check_mail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             return false;
        }else{
            return true;
        }
  }
  
  private function mobile_validation($mobile){
      $mobile = (int)$mobile;
      if(is_numeric($mobile)){
          if(strlen($mobile) == 10){
              return true;
          }else{
              return false;
          }
      }else{
          return false;
      }
  }
  
  private function adhaar_validation($adhar){
      $adhar = (int)$adhar; 
      if(is_numeric($adhar)){
          if(strlen($adhar) == 12){
              return true;
          }else{
              return false;
          }
      }else{
          return false;
      }
  }
  
  private function is_numeric($string){
      if(is_numeric($string)){
          return true;
      }else{
          return false;
      }
  }
  
  private function get_registration()
  {
      $count = Student::count();
      if($count>0){
          $lastId = Student::orderBy('s_id','desc')->first()->s_id;
          $regNo = "DEMO-".($lastId + 1);
      }else{
          $regNo = "DEMO-1";
      }
      return $regNo;
  }
  
    private function get_education()
    {
        $details = "App\Education"::where('status',1)->orderBy('education_name','ASC')->get();
        return $details;
    }
    
    public function reset_password(Request $request)
    {
        $id = $request->input('id');
        $pass = Hash::make($request->input('password'));
        User::where('user_id',$id)
              ->where('role_name','Student')
              ->update(['password'=>$pass]);
        return response()->json(['status'=>true,'msg'=>'password changed successfully']);
    }    

    public function student_profiler()
    {
        return view('students.student-profiler',['student_profiler'=>'active']);
    }

    public function student_feedback()
    {
        return view('students.student-feedback',['student_feedback'=>'active']);
    }

}
