<?php
//SS0904 4
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Staff;
use App\Department;
use App\Designation;
use App\Quiz;
use App\AppModules;
use App\EmpModuleAccessLevels;
use App\User;

class AdminController extends Controller
{
    //
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {

//               $users =User::find(Auth::user()->id);
//               $users->password = Hash::make('livelession@app2022');
// $users->save();
    	return view('admin.index',['dash'=>'active']);
    }

    public function setting()
    {
    	return view('admin.setting');
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
              return redirect()->route('admin-logout');
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
    	return redirect()->route('admin-login');
    }

    public function appCtrl(Request $request)
    {
        $users = []; 
        $errors = []; 
        
        if($request->input('action_type') == 'get_employer_info') {
            $id_department = (int) $request->input('id_department');
            $users = DB::table('users')
                        ->join('employeesmaster', 'users.user_id', '=', 'employeesmaster.t_id')->where('employeesmaster.t_dept_id', $id_department)
                        ->select('users.*', 'employeesmaster.t_mobile_number')
                        ->get();
        }

        if($request->input('action_type') == 'save_employer_app_permission_info') {
            $access_values = $request->input('access');
            if($access_values) {
                foreach($access_values as $id_module => $accesses) {
                    if($id_emp_access = EmpModuleAccessLevels::select('id')->where([
                        'id_emp'=>$request->input('id_employee'), 
                        'id_module'=>(int) $id_module,                 
                    ])->get()->first()) {
                        $empModuleAccessLev = EmpModuleAccessLevels::find((int)$id_emp_access->id);
                        if(!$empModuleAccessLev->update([
                            'accesses' => serialize($accesses)
                        ])) {
                            $errors[] = 1; 
                        }
                    } elseif (!EmpModuleAccessLevels::insert([
                        'id_emp' => $request->input('id_employee'), 
                        'id_module' => (int) $id_module, 
                        'accesses' => serialize($accesses)
                    ])) {
                        $errors[] = 1; 
                    }
                }
                
                if(count($errors)  == 0 ) {
                    session()->flash('message', 'Modules permissions saved for employee!');
                    return redirect(route('appControl.control-settings'));
                }
            }
        }
        
        if(isset($_REQUEST['from_ajax']) && isset($_REQUEST['id_user'])){
            $user = User::select('users.*', 'employeesmaster.t_mobile_number AS phone')
                        ->join('employeesmaster', 'users.user_id', '=', 'employeesmaster.t_id')
                        ->where('users.id', $_REQUEST['id_user'])
                        ->get()->first()->toArray();
            $mod_access = EmpModuleAccessLevels::select('id_module', 'accesses')->where(['id_emp'=>(int) $_REQUEST['id_user']])->get()->toArray();
            if($mod_access) {
                foreach($mod_access as $key => $access) {
                    $mod_access[$key]['accesses'] = unserialize($access['accesses']);
                }
            }
            return response()->json(['user'=>$user,'mod_access'=>$mod_access]);
        }
        
        return view('Appcontrol.app_Control', [
            'control_settings'=> 'active', 
            'departments' => Department::get(),
            'app_modules' => AppModules::get(), 
            'users' => $users
        ]);
    }

    public function modCtrl(Request $request)
    {
        if($request->input('action_type') == 'update_module_status') {
            $modObj = AppModules::find($request->input('id_module'));
            if($modObj->update([
                'title' => $request->input('module_name'), 
                'status' => (int) $request->input('module_status')  
            ])) {
                session()->flash('message', 'Details Saved!');
                return redirect(route('appControl.module-settings'));
            }
        }
        return view('Appcontrol.moduleSettings', [
            'module_settings'=> 'active', 
            'departments' => Department::get(),
            'app_modules' => AppModules::get() 
        ]);
    }
}
