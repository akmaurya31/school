<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'departmentmaster';

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

    public function get_data()
    {
         return Department::get();
    }
}
