<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employeesmaster';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 't_id';

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
    protected $caste = [
         'created_at' => 'datetime',
         'update_at' => 'datetime',
    ];
    public function fetch_data()
    {
         return \DB::table('employeesmaster')->select('employeesmaster.*','designationmaster.ds_name')->leftjoin('designationmaster','designationmaster.d_id','=','')->get();
    }
}
