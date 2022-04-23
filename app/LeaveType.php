<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'leave_type';

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
    public function get_data()
    {
        return LeaveType::get();
    }
    public function save_data($data)
    {
        LeaveType::Create($data);
    }
    public function update_leave_type($id,$arr)
    {
        LeaveType::where('id',$id)->update($arr);
    }
}
