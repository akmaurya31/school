<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //AdminLogin Panel
    public function admin_login()
    {
    	if(Auth::check() == false){
    	    return view('login.admin_login');
    	}else
    	{
    	    return redirect()->route('admin-dashboard');
        }  
        
        if(Auth::check() == false){
    	    return view('login.admin_login');
    	}else
    	{
    	    if(Auth::user()->role_name == 'Admin'){
    	         return redirect()->route('admin-dashboard');
    	    }
    	    else
    	    {
               return redirect()->route('admin-logout');
    	    }     
    	}  
    }

    public function admin_login_request(Request $request)
    {
    	$this->validate($request,[
		    'email'  => 'required|email',
			'password' => 'required|min:6'
			
		]);
		$remember = true;
		$user_data = array(
		    'email' => $request->get('email'),
			'password'=> $request->get('password')
		);
		if(Auth::attempt($user_data, $remember)){
			return redirect()->route('admin-dashboard');
		}else{
			return back()->with('error','Wrong Login Details');
		}
    }
    #Parent Login
    public function parent_login()
    {
    	if(Auth::check() == false){
    	    return view('login.parent_login');
    	}else
    	{
    	    if(Auth::user()->role_name == 'Parent'){
    	         return redirect()->route('parent-dashboard');
    	    }
    	    else
    	    {
               return redirect()->route('parents.logout');
    	    }     
    	}    
    }

    public function parent_login_request(Request $request)
    {
    	$this->validate($request,[
		    'email'  => 'required|email',
			'password' => 'required|min:6'
			
		]);
		$remember = true;
		$user_data = array(
		    'email' => $request->get('email'),
			'password'=> $request->get('password'),
			'role_name' => 'Parent'
		);
		if(Auth::attempt($user_data, $remember)){
			return redirect()->route('parent-dashboard');
		}else{
			return back()->with('error','Wrong Login Details');
		}
    }

    #Teacher Login
    public function teacher_login()
    {
        if(Auth::check() == false){
            return view('login.teacher_login');
        }else
        {
            if(Auth::user()->role_name == 'Employee'){
                 return redirect()->route('parent-dashboard');
            }
            else
            {
               return redirect()->route('parent-logout');
            }     
        }    
    }

    public function teacher_login_request(Request $request)
    {
        $this->validate($request,[
            'email'  => 'required|email',
            'password' => 'required|min:6'
            
        ]);
        $remember = true;
        $user_data = array(
            'email' => $request->get('email'),
            'password'=> $request->get('password'),
            'role_name' => 'Teaching'
        );
        if(Auth::attempt($user_data, $remember)){
            //return "teacher";
            return redirect()->route('teacher-dashboard');
        }else{
            return back()->with('error','Wrong Login Details');
        }
    }

    #Student Login
    public function student_login()
    {
        if(Auth::check() == false){
            return view('login.student_login');
        }else
        {
            if(Auth::user()->role_name == 'Student'){
                 return redirect()->route('student-dashboard');
            }
            else
            {
               return redirect()->route('students.logout');
            }     
        }    
    }

    public function student_login_request(Request $request)
    {
        $this->validate($request,[
            'email'  => 'required',
            'password' => 'required|min:6'
            
        ]);
        $remember = true;
        $user_data = array(
            'email' => $request->get('email'),
            'password'=> $request->get('password'),
            'role_name' => 'Student'
        );
        if(Auth::attempt($user_data, $remember)){
            return redirect()->route('student-dashboard');
        }else{
            return back()->with('error','Wrong Login Details');
        }
    }
    
        #Receptionist Login
    public function reception_login()
    {
        if(Auth::check() == false){
            return view('login.reception_login');
        }else
        {
            if(Auth::user()->role_name == 'Reception'){
                 return redirect()->route('reception-dashboard');
            }
            else
            {
               return redirect()->route('reception.logout');
            }     
        }    
    }
    public function reception_login_request(Request $request)
    {
        //return "accounts";
        $this->validate($request,[
            'email'  => 'required|email',
            'password' => 'required|min:6'
            
        ]);
        $remember = true;
        $user_data = array(
            'email' => $request->get('email'),
            'password'=> $request->get('password'),
            'role_name' => 'Receptionist'
        );
        if(Auth::attempt($user_data, $remember)){
            return redirect()->route('reception-dashboard');
        }else{
            return back()->with('error','Wrong Login Details');
        }
    }
     #Accounts Login
    public function accounts_login()
    {
        
        if(Auth::check() == false){
            return view('login.accounts_login');
        }else
        {
            if(Auth::user()->role_name == 'Accounts'){
                 return redirect()->route('accounts-dashboard');
            }
            else
            {
               return redirect()->route('accounts.logout');
            }     
        }    
    }
    public function accounts_login_request(Request $request)
    {
        //return "accounts";
        $this->validate($request,[
            'email'  => 'required|email',
            'password' => 'required|min:6'
            
        ]);
        $remember = true;
        $user_data = array(
            'email' => $request->get('email'),
            'password'=> $request->get('password'),
            'role_name' => 'Accountant'
        );
        if(Auth::attempt($user_data, $remember)){
            return redirect()->route('accounts-dashboard');
        }else{
            return back()->with('error','Wrong Login Details');
        }
    }
    
}
