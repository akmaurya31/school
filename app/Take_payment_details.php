<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Take_payment_details extends Model
{
    //
    protected $table = 'take_payment_details';
	
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
        'head_id',
        'month1',
        'month2',
        'month3',
        'month4',
        'month5',
        'month6',
        'month7',
        'month8',
        'month9',
        'month10',
        'month11',
        'month12',
  ];

  protected $caste = [
       'created_at' => 'datetime',
       'update_at' => 'datetime',
  ];
 
}
