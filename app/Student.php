<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';
	
	protected $primaryKey = 's_id';

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
    protected $guarded = [];
   
    protected $caste = [
         'created_at' => 'datetime',
         'update_at' => 'datetime',
    ];
    public function get_studen_data()
    {
        return \DB::table('students')->select('students.*','classmaster.classNo')->leftjoin('classmaster','classmaster.Classid','=','students.s_class_id')->get();
    }

    public static function searchStudents($filters = array()) {

        $where = '1';

        $where .= isset($filters['id_session']) ? ' AND sci.`si_session_id`='.(int) $filters['id_session'] : '';
        $where .= isset($filters['id_class']) ? ' AND sci.`si_class_id`='.(int) $filters['id_class'] : '';
        $where .= isset($filters['id_section']) ? ' AND sci.`si_section_id`='.(int) $filters['id_section'] : '';
        $where .= isset($filters['semester']) ? ' AND sci.`si_semester`="'.$filters['semester'].'"' : '';

        return \DB::select('SELECT s.*, 
            sci.`si_student_rollnumber` AS `s_roll_number`, 
            sci.`marks` AS `s_highest_marks`,
            sci.`si_semester` AS `s_semester`,   
            class.`ClassNo` AS `s_class`,   
            section.`ClassSection` AS `s_section`,   
            session.`ClassSession` AS `s_session`    
            FROM students s 
            INNER JOIN `studentclassinfo` sci ON sci.`si_student_id`=s.`s_id` 
            INNER JOIN `classmaster` class ON class.`Classid`=sci.`si_class_id`  
            INNER JOIN `classmaster` section ON section.`Classid`=sci.`si_section_id`  
            INNER JOIN `classmaster` session ON session.`Classid`=sci.`si_session_id` 
            WHERE '.$where.'   
        ');

    }

    
}
