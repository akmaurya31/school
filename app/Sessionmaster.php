<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessionmaster extends Model
{    
    protected $table = 'sessionmaster';
	
	protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [];
}
