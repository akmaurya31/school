<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeGroup extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fee_groups';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    protected $fillable=['group_name','frequency','transport_fee','tution_fee','annual_fee','created_by','updated_by'];

    /**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	// protected $fillable = ['education_name'];

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public function get_groups_data()
    {
        return FeeGroup::get();
    }

    public function index()
    {
        $departments = Department::get();
    	return view('department.index-view',['staff'=>'active','dept'=>'active','data'=>$departments]);
    }

    
    public function save_data($arr)
    {
        FeeGroup::create($arr);
    }
    public function update_data($arr,$id)
    {
        FeeGroup::where('id',$id)->update($arr);
    }
}
