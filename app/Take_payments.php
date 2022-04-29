<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Take_payments extends Model
{
    //
    protected $table = 'take_payments';
	
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
        'fine',
        'concession',
        'wave',
        'totalfee',
        'payment',
        'balance',
        'remarks',
        'chequeInp',
        'utrNoInp',
        'cardNoInp',
        'cardType',
        'bankNameSel',
        'onDateSel',
        'takepay_ids'
    ];

  protected $caste = [
       'created_at' => 'datetime',
       'update_at' => 'datetime',
  ];
 
}
