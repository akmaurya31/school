<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSubjects extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_subject_assign';

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
