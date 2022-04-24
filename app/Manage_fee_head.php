<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage_fee_head extends Model
{
    //
    protected $table = 'manage_fee_head';
	
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
        'fee_heading',
        'frequency',
        'from_date',
        'to_date',
        'due_date',
        'refundable',
        'class',
        'value',
        'quater'
  ];

  protected $caste = [
       'created_at' => 'datetime',
       'update_at' => 'datetime',
  ];
 
}
