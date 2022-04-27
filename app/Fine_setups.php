<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fine_setups extends Model
{
    //
    protected $table = 'fine_setups';
	
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
        'fine_type',
        'fine_value',
        'on_everyday',
        'up_to',
        'fee_type',
        'amount_percent',
        'fine_month' 
  ];

  protected $caste = [
       'created_at' => 'datetime',
       'update_at' => 'datetime',
  ];
 
}
