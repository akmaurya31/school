<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee_allocation_tbl extends Model
{
    //
    protected $table = 'fee_allocation_tbl';
	
	protected $primaryKey = 'id';

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      
    protected $fillable = [
        'group_id',
        'fee_for',
        'frequency',
        'fee_allocation_ids',
        'class_id' 
  ];

  protected $caste = [
       'created_at' => 'datetime',
       'update_at' => 'datetime',
  ];
 
}
