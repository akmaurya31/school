<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;

class StudentPannelController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_student');
    }

    public function index()
    {
    	return view('student_panel.index-view',['dash'=>'active']);
    }

    public function setting()
    {
    	return view('student_panel.setting',['dash'=>'active']);
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
              return redirect()->route('students.logout');
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
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('student-login');
    }
}
