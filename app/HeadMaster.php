<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeadMaster extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'head_master';

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

     protected $fillable = [
          'frequency',
          'headname_id',
          'rate',
          'group_id',
          'class_id'
    ];

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function get_data()
    {
         return HeadMaster::get();
    }
}
