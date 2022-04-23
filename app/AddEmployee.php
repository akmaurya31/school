<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddEmployee extends Model
{
    
    protected $table = 'add_employees';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'd_id';

    /**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function get_employee_data($emp_type)
    {
        return \DB::table('add_employees')->select('add_employees.*','departmentmaster.d_name','designationmaster.ds_name')->leftjoin('designationmaster','designationmaster.ds_id','=','add_employees.job_title')->leftjoin('departmentmaster','departmentmaster.d_id','=','add_employees.department')->where('add_employees.department',$emp_type)->get();         
      
    }
    public function get_employee()
    {
        return \DB::table('add_employees')->select('add_employees.*','employee_salaries.basic','departmentmaster.d_name','designationmaster.ds_name')->leftjoin('designationmaster','designationmaster.ds_id','=','add_employees.job_title')->leftjoin('departmentmaster','departmentmaster.d_id','=','add_employees.department')->leftjoin('employee_salaries','employee_salaries.department','=','designationmaster.ds_name')->get();         
      
    }
    public function get_employee_name()
    {
        return AddEmployee::get();
    }
    public function get_employee_datas($id)
    {
        return \DB::table('add_employees')->select('add_employees.*','employee_salaries.basic','employee_salaries.ctc','employee_salaries.total_deduction','employee_salaries.advance_salary','employee_salaries.total_allowance','employee_salaries.special_allowance','employee_salaries.hra','employee_salaries.esic','employee_salaries.pf','departmentmaster.d_name','designationmaster.ds_name')->leftjoin('designationmaster','designationmaster.ds_id','=','add_employees.job_title')->leftjoin('departmentmaster','departmentmaster.d_id','=','designationmaster.d_id')->leftjoin('employee_salaries','employee_salaries.department','=','designationmaster.ds_name')->where('add_employees.id',$id)->get();         
    }
    public function  get_employee_dataa()
    {
        return AddEmployee::get();
    }
    public function get_employee_datasearch($department,$designation)
    {
        return AddEmployee::where('department',$department)->where('job_title',$designation)->get();

    }
  
}
