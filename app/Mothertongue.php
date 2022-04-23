<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mothertongue extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mothertonguemaster';

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
	protected $fillable = ['mother_tongue_name'];

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
