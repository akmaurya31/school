<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignLeave extends Model
{
    //
      
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assign_leave';

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
	// protected $fillable = ['education_name'];

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function save_leave($ar)
    {
        AssignLeave::create($ar);
    }
    public function get_all_leave()
    {
        return AssignLeave::get();
    }
}
