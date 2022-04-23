<?php
//SS0904 5
namespace App\Helpers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Staff;
use App\Quiz;
use App\Department;
use App\Designation;
use App\AppModules;
use App\EmpModuleAccessLevels;
use App\User;

class EmpAccess
{
    public function moduleAccess($idModule, $idEmp) {
        $userObj = User::find((int) $idEmp);
        if($userObj->role_name == 'Admin') {
            return 1;
        }
        
        $accessObj = EmpModuleAccessLevels::select('accesses')->where(['id_emp'=>$idEmp, 'id_module'=>$idModule])->get()->first();
        if(isset($accessObj->accesses)) {
            $empAccesses = unserialize($accessObj->accesses);
            $empAccesses = array_keys($empAccesses);
            if(in_array('view_access', $empAccesses)) {
                return 1;
            }
        }
        return 0;
    }
    
    public function getDaysName($day) {
        $day_name = ''; 
        switch ($day) {
        	case '1':
        		$day_name = 'Monday'; 
        		break;
        	
        	case '2':
        		$day_name = 'Tuesday'; 
        		break;
        	
        	case '3':
        		$day_name = 'Wednesday'; 
        		break;
        	
        	case '4':
        		$day_name = 'Thursday'; 
        		break;
        	
        	case '5':
        		$day_name = 'Friday'; 
        		break;
        	
        	case '6':
        		$day_name = 'Saturday'; 
        		break;
        	
        	default:
                $day_name = 'not-found'; 
        		break;
        }        
        
        return strtoupper($day_name);
    }

    public static function instance() {
         return new EmpAccess();
    }
}