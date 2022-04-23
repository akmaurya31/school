<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManageFeeHead extends Model
{
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manage_fee_head';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    protected $guarded = [];
    // protected $fillable=['group_name','frequency','transport_fee','tution_fee','annual_fee','created_by','updated_by'];

    /**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	// protected $fillable = ['education_name'];

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    public function save_data($arr)
    {
         ManageFeeHead::create($arr);
    }
    public function get_head_data()
    {
         return ManageFeeHead::get();
    }
    public function get_heads()
    {
     return ManageFeeHead::get();
    }
    
}
