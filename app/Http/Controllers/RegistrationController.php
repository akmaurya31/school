<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\Classes;
use App\Marksmaster;
use App\Registration;
use App\StudentInfo;
use URL;
use Auth;

class RegistrationController extends Controller
{
    //

    function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        $session = $this->getSession(); 
        $classes = $this->getClasses(); 
        $section = Classes::distinct()->get(['ClassSection']);
        $data['session_year'] = '';
        $data['sem'] = '';
        $data['c'] = '';
        $data['s'] = '';                                   
       return view('registration.index_view',['reg'=>'active','view_list'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section,'data'=>$data]);
    }

    public function add_test_marks()
    {
        $classes = Classes::select('classmaster.ClassNo', 'classmaster.Classid', 'admin_marksmaster.marks')
                ->join('admin_marksmaster', 'admin_marksmaster.class', '=', 'classmaster.ClassNo')
                ->where('classmaster.ClassStatus',1)->groupBy('classmaster.ClassNo')
                ->get();  
                
        
        $sections = Classes::where('ClassStatus',1)->groupBy('ClassSection')->get();
        $sessions = Classes::select('ClassSession', 'Classid')->groupBy('ClassSession')->get();
        $data['session_year'] = '';
        $data['sem'] = '';
        $data['c'] = '';
        $data['s'] = '';                                   
       return view('registration.index_view',['test_new_reg'=>'active','view_list'=>'active','sessions'=>$sessions,'classes'=>$classes,'sections'=>$sections,'data'=>$data]);
    }


    public function create()
    {
    	$data['session'] = $this->getSession();
    	$data['classes'] = $this->getClasses();
    	$data['states'] = $this->get_states();
        $data['mothertongue'] = $this->get_mother_tongue();
        $data['educations'] = $this->get_education();
        $regNo = $this->get_registration();
    	return view('registration.create',['reg'=>'active','add_reg'=>'active','dropDown'=>$data,'regNo'=>$regNo]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            //'image' => 'required',
        ]);
        
        $data = $request->except(['_token']);
        $image_id = Registration::create($data);
        #upload pic
        $path = public_path('registration_images');
        $ImagePath = $this->makeDirectory($path);
        if($request->hasFile('image_url')){
            $profile = uniqid().".".$request->last_mark_certificate->extension(); 
            $request->image_url->move($ImagePath, $profile);
            Registration::where('id',$image_id->id)->update(['image_url'=>$profile]);
        }
        if($request->hasFile('last_mark_certificate')){
            $profile = uniqid().".".$request->last_mark_certificate->extension(); 
            $request->last_mark_certificate->move($ImagePath, $profile);
            Registration::where('id',$image_id->id)->update(['last_mark_certificate'=>$profile]);
        }
        return redirect('admin/registration/create')->withSuccess('Data inserted Successfully'); 
    }
    
    public function student_filter(Request $request)
    {
        $sessionId = $request->input('session_year');
        $semester = $request->input('type');
        $class = $request->input('class');
        $section = $request->input('section');
        $from = $request->input('from');
        $to = $request->input('to');
        $tab_active = 'reg';
        $out_off_marks = $request->input('get_marks_obt') ? $request->input('get_marks_obt') : 500;
        if ($request->input('action_type') && $request->input('action_type') == 'add_test_marks_step') {
          $tab_active = 'test_new_reg';
        }
        if ($request->input('action_type') && $request->input('action_type') == 'get_selected_student') {
          $tab_active = 'selected_student';
        }


      $students = StudentInfo::select('studentclassinfo.*','students.*','classmaster.*')
                              ->join('students', 'students.s_id', '=', 'studentclassinfo.si_student_id')
                              ->join('classmaster', 'classmaster.Classid', '=', 'studentclassinfo.si_class_id')
                              ->where('students.s_status', 1)
                              ->where('students.s_acc_status', 1)
                              ->where('students.registration_type', 1)
                              ->where('students.s_adm_date','>=',date('Y-m-d', strtotime($from)))
                              ->where('students.s_adm_date','<=',date('Y-m-d', strtotime($to)))
                              ->where('studentclassinfo.marks','<=',$out_off_marks)
                              ->get();  

        $classes = Classes::select('classmaster.ClassNo', 'classmaster.Classid', 'admin_marksmaster.marks')
                ->join('admin_marksmaster', 'admin_marksmaster.class', '=', 'classmaster.ClassNo')
                ->where('classmaster.ClassStatus',1)->groupBy('classmaster.ClassNo')
                ->get();  
                
        
        $sections = Classes::where('ClassStatus',1)->groupBy('ClassSection')->get();
        $sessions = Classes::select('ClassSession', 'Classid')->groupBy('ClassSession')->get();

        $data['session_year'] = $sessionId;
        $data['sem'] = $semester;
        $data['c'] =  $class;
        $data['s'] = $section;                                   
        $data['from'] = $from;                                   
        $data['to'] = $to;                                   
        $data['out_off_marks'] = $out_off_marks;                                   
        return view('registration.index_view',[$tab_active=>'active','view_list'=>'active','sessions'=>$sessions,'classes'=>$classes,'sections'=>$sections,'data'=>$data,'students'=>$students]);
                                  
    }
    
    public function destroy(Request $request)
    {
        $id=$request->id;
        Registration::where('id', $id)->update(['status'=>0]);
        $response = array('status'=>true,
                          'msg'=>'deleted succussfully');
        return response()->json($response);
        
    }
    
    public function edit($id)
    {
      //$details = Registration::find($id);

      $details = StudentInfo::select('studentclassinfo.*','students.*','classmaster.*')
                              ->join('students', 'students.s_id', '=', 'studentclassinfo.si_student_id')
                              ->join('classmaster', 'classmaster.Classid', '=', 'studentclassinfo.si_class_id')
                              ->where('students.s_status', 1)
                              ->where('students.s_acc_status', 1)
                              ->where('students.registration_type', 1)
                              ->where('students.s_id',$id)
                              // ->where('studentclassinfo.si_type',$sem)
                              ->get()->first();  


        $data['session'] = $this->getSession();
    	$data['classes'] = $this->getClasses();
    	$data['states'] = $this->get_states();
        $data['mothertongue'] = $this->get_mother_tongue();
        $data['educations'] = $this->get_education();
        $data['section'] = Classes::where('ClassSession',$details->s_session)->where('ClassNo',$details->ClassNo)->distinct()->get(['ClassSection']);
        
        return view('registration.update',['reg'=>'active','details'=>$details,'dropDown'=>$data]);
        
    }
    
    public function update(Request $request,$id)
    {
        $details = Registration::find($id);
        $data = $request->except(['_token','myFile']);
        $details->update($data);
        #upload pic
        if($request->hasFile('myFile')){
            $path = public_path('registration_images');
            $ImagePath = $this->makeDirectory($path);
            $profile = uniqid().".".$request->myFile->extension(); 
            $request->myFile->move($ImagePath, $profile);
            Registration::where('id',$id)->update(['image_url'=>$profile]);
        }
        
        if($request->hasFile('last_mark_certificate')){
            $path = public_path('registration_images');
            $ImagePath = $this->makeDirectory($path);
            $profile = uniqid().".".$request->last_mark_certificate->extension(); 
            $request->last_mark_certificate->move($ImagePath, $profile);
            Registration::where('id',$id)->update(['last_mark_certificate'=>$profile]);
        }
        
        return redirect('admin/registration/edit/'.$id)->withSuccess('Data updated Successfully'); 
        
    }
    
    public function show($id)
    {
      $student_details = Student::find($id);
      $student_details->classDetails = Classes::where('Classid',$student_details->s_class_id)
                                ->first();

      return   $student_details;
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
    
    private function getSession()
    {
    	$session = Classes::distinct()->where('ClassStatus',1)->get(['ClassSession']);
    	return $session;
    }

    private function getClasses()
    {
    	$classes = Classes::distinct()->where('ClassStatus',1)->get(['ClassNo']);
    	return $classes;
    }
    
    public function get_registration()
    {
        $details = Registration::count();
        if($details>0)
        {
            $detail = Registration::OrderBy('id','desc')->first();
            $number = $detail->id + 1;
            $reg_number = "DEMO-".$number;
        }
        else
        {
            $reg_number = "DEMO-1";
        }
        return $reg_number;
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
  
  private function get_education()
  {
        $details = "App\Education"::where('status',1)->orderBy('education_name','ASC')->get();
        return $details;
  }
  
  public function update_information(Request $request)
  {
    $requestArr = $request->input('studentArr');
    if ($requestArr) {
      foreach ($requestArr as $key => $data) {
        $dataArr = explode(',', $data);
        $student = StudentInfo::find($dataArr[0]);
        $student->present_status = $dataArr[1];
        $student->marks = $dataArr[2];
        $student->admission_date = date('Y-m-d', strtotime($dataArr[3]));
        $student->save();        
      }
    }    
    return response()->json(['status'=>true,'msg'=>'updated successfully']); 
  }
  
  public function save_selected(Request $request)
  {
      $explodeData = explode("#",$request->bulk_value);
      foreach($explodeData as $key => $value){
          $student =  Registration::find($value);
          $student->status = 2;
          $student->save();
      }
      return response()->json(['status' => true, 'msg' => 'updated successfully']);
  }
  
  public function selected_student()
  {
      

        $classes = Classes::select('classmaster.ClassNo', 'classmaster.Classid', 'admin_marksmaster.marks')
                ->join('admin_marksmaster', 'admin_marksmaster.class', '=', 'classmaster.ClassNo')
                ->where('classmaster.ClassStatus',1)->groupBy('classmaster.ClassNo')
                ->get();  
                
        
        $sections = Classes::where('ClassStatus',1)->groupBy('ClassSection')->get();
        $sessions = Classes::select('ClassSession', 'Classid')->groupBy('ClassSession')->get();
        $data['session_year'] = '';
        $data['sem'] = '';
        $data['c'] = '';
        $data['s'] = '';                                   
        return view('registration.index_view',['selected_student'=>'active','selected'=>'active','sessions'=>$sessions,'classes'=>$classes,'sections'=>$sections,'data'=>$data]);  
  }
  
  public function filter_selected_student(Request $request)
  {
        $sessionId = $request->input('session_year');
        $semester = $request->input('type');
        $class = $request->input('class');
        $section = $request->input('section');
        $students = Registration::where('session_name',$sessionId)
                                  ->where('class_name',$class)
                                  ->where('semester',$semester)
                                  ->where('status',2)
                                  ->orderBy('marks','desc')
                                  ->get();
        $session = $this->getSession(); 
        $classes = $this->getClasses(); 
        $section = Classes::distinct()->get(['ClassSection']);
        $data['session_year'] = $sessionId;
        $data['sem'] = $semester;
        $data['c'] =  $class;
        $data['s'] = $section;                                   
        return view('registration.selected_student',['selected_std'=>'active','selected'=>'active','session'=>$session,'classes'=>$classes,'sections'=>$section,'data'=>$data,'students'=>$students]);
  }

  public function configurations(Request $request)
  {
    $session = $this->getSession(); 
    $classes = $this->getClasses();
    $section = Classes::distinct()->get(['ClassSection']);
    $marks_row = false;

  	if (strpos(URL::current(), 'update') !== false) {
  		$urlArr = explode('update', URL::current());
  		$id = base64_decode(str_replace('/', '', $urlArr[1]));
  		$marks_row = Marksmaster::find($id);
  	}

  	if (strpos(URL::current(), 'remove') !== false) {
  		$urlArr = explode('remove', URL::current());
  		$id = base64_decode(str_replace('/', '', $urlArr[1]));
  		$marks_row = Marksmaster::find($id);
  		$marks_row->delete($marks_row->id);
        session()->flash('message', 'Record Deleted Successfully!');  		
  		return redirect()->back(); 
  	}

    if ($request->input('action_type') == 'save_marks_info') {
    	Marksmaster::create([
    		'class'=>$request->input('class'), 
    		'marks'=>$request->input('marks')
    	]);
        session()->flash('message', 'Record Saved Successfully!');
        return redirect('/admin/configurations');
    }

    if ($request->input('action_type') == 'update_marks_info') {
  		$marksmaster = Marksmaster::find($request->input('id_marks'));
    	$marksmaster->update([
    		'class'=>$request->input('class'), 
    		'marks'=>$request->input('marks')
    	]);
        session()->flash('message', 'Record Updated Successfully!');
        return redirect('/admin/configurations');
    }

    return view('registration.configurations',[
      'config_active'=>'active', 
      'session'=>$session, 
      'classes'=>$classes, 
      'sections'=>$section, 
      'marks_row'=>$marks_row, 
      'marksmaster'=>Marksmaster::get()
    ]);  
  }

  
}    
    
    
    
    