<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
	
	protected $primaryKey = 's_id';

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
    protected $guarded = [];
   
    protected $caste = [
         'created_at' => 'datetime',
         'update_at' => 'datetime',
    ];
}
