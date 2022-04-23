<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subjectsmaster';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [];
	
    public $timestamps = false;
}
