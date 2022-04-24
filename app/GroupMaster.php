<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMaster extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'group_master';

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
          'group_name' 
    ];


	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function get_data()
    {
         return GroupMaster::get();
    }


}
