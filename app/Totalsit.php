<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Totalsit extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'totalsits';

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

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
