<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Student;
use App\User;
use App\ParentModel;
use App\StudentInfo;
use App\Transport;
use App\HostelCategory;
use App\Hostel;
use App\Room;
class ParentController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_parent');
    }

    public function index()
    {
    	return view('parents.index-view');
    }

     public function setting()
    {
    	return view('parents.setting',);
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
              return redirect()->route('parent-logout');
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

    public function student_list()
    {
    	$parentDetails = ParentModel::find(Auth::user()->user_id);
    	$students = ParentModel::select('studentclassinfo.*','students.*','classmaster.*','parentsmaster.*')
    	                   ->join('studentclassinfo', 'studentclassinfo.si_student_id', '=', 'parentsmaster.StudentId')
                            ->join('students', 'students.s_id', '=', 'studentclassinfo.si_student_id')
                            ->join('classmaster', 'classmaster.Classid', '=', 'studentclassinfo.si_class_id')
                            ->get();  
	    $transports = $this->getTransportArray();
	    $hostels = $this->getHostelArray();
	    $rooms = $this->getRoomArray();                                              
	    return view('parents.student-list',['students'=>$students,'transports'=>$transports,'hostels'=>$hostels,'rooms'=>$rooms,'student'=>'active','list'=>'active']);
    }

  private function getTransportArray()
  {
    $res = Transport::get();
    $ArrayOption = array(0=>'No-Route');
    foreach($res as $key)
    {
        $ArrayOption[$key->TrasportRoutId] = $key->RouteName;
    }
    return $ArrayOption; 
  }

  private function getHostelArray()
  {
    $res = Hostel::get();
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

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('parent-login');
    }
}
