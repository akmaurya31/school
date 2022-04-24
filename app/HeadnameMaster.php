<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeadnameMaster extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'headname_master';

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
          'head_name' 
    ];

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function get_data()
    {
         return HeadnameMaster::get();
    }
}
