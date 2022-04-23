<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee_allocation_details extends Model
{
    //
    protected $table = 'fee_allocation_details';
	
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
