<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignSalary extends Model
{
      protected $table = 'assign_salaries';

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

    public function save_data($data,$count)
    {
//     	 
    	// echo $count;exit;
     for($i=0;$i<$count; $i++){

       $arr= array(            
            'employee_id'=>$data['employee_id'.$i],
         
            'salary_grade'=>$data['designSel'.$i],
    
           
        ); 
     
      
       

        AssignSalary::create($arr);
    }
    
    }
    
}
