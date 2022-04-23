<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripDetail extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trip_detail';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $fillable = [
        'vehicleMode',
        'vehicleNo',
        'routeSel',
        'vehicleSel',
        'driverSel',
        'timeSel',
        'fromTime',
        'toTime',
        'startingPlace',
        'endingPlace',
      
  ];
  
}
