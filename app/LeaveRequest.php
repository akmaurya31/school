<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveRequest extends Model
{
    //
    protected $table = 'leave_request';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    protected $guarded = [];
    /**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
    // protected $fillable = ['mother_tongue_name'];
    

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function save_request_data($data)
    {
        LeaveRequest::create($data);
    }
    public function get_all_leaves()
    {
       return  LeaveRequest::get();
    }
    public function get_leave_data()
    {
        return  \DB::table('leave_request')->select('leave_request.*','add_employees.employee_name')->leftjoin('add_employees','add_employees.id','leave_request.created_by')->get(); 
    }
    
    public static function get_leave_history()
    {
        return \DB::table('leave_request')->select('leave_request.*','add_employees.employee_name','designationmaster.ds_name')->leftjoin('add_employees','add_employees.id','=','leave_request.created_by')->leftjoin('designationmaster','designationmaster.ds_id','add_employees.job_title')->get();
    }


}
