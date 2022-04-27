<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{    
    protected $table = 'students';
	
	protected $primaryKey = 's_id';

    public $timestamps = false;

    protected $fillable = [];
}
