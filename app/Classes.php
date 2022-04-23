<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //

    protected $table = 'classmaster';
	
	  protected $primaryKey = 'Classid';

    public $timestamps = false;


    protected $fillable = [
          'SchoolId',
          'ClassNo',
          'ClassSection',
          'UpdtBy',
          'ClassSession',
          'ClassStatus'
    ];
}
