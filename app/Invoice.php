<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invoices';

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
    public function save_data($arr)
    {
        Invoice::create($arr);
    }
    public function get_all_data()
    {
        return Invoice::get();
    }
    public function update_data($arr,$id)
    {
        Invoice::where('id',$id)->update($arr);
    }
}
