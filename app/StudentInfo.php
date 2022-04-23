<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    //
    protected $table = 'studentclassinfo';
	
	protected $primaryKey = 'si_id';

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
          'si_student_id',
          'si_class_id',
          'si_section_id',
          'si_student_rollnumber',
          'si_session_id',
          'si_semester',
          'si_status',
    ];

    protected $caste = [
         'created_at' => 'datetime',
         'update_at' => 'datetime',
    ];
}
