<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeemaster extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Employeemaster';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
}
