<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Student;
use App\Classes;
use App\Marksmaster;
use App\Registration;
use App\StudentInfo;
use Carbon\Carbon;
use URL;
use Auth;
use DB;

class RegistrationController extends Controller {

  public function get_registrations(){
    return Student::get();
  }
   
  public function register_user(Request $request){
    $exists = DB::table('users')->where('email', $request->email)->first();
    if($exists){
      die('User already exists with same email address!');
    }
    if(DB::table('users')->insertGetId([
      'name'=>$request->f_name.' '.$request->l_name,
      'email'=>$request->email,
      'password'=>Hash::make($request->password),
      'created_at'=>Carbon::now(),
      'updated_at'=>Carbon::now(),
      'last_ip'=>$request->ip()
    ])){
      die('User registered successfully!');
    }  
  }

  public function list_users() {
    return DB::table('users')->orderBy('id', 'DESC')->get();
  }
}
