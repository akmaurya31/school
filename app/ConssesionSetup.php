<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConssesionSetup extends Model
{

    protected $table = 'concession_setups';

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

    public function savedata($data,$count)
    {
     for($i=0;$i<$count; $i++){
// echo "<pre>";
// print_r($data);
// exit;
       $arr= array(
            'fee_heading'=>$data['concessTxt'],
            'head_name'=>$data['head_name'.$i],
            // 'pecentage'=>$data['per'.$i],
            'type'=>$data['type'.$i],
            'value'=>$data['number'.$i],
            'quater'=>$data['quater'.$i] ,
            
        ); 
       

        ConssesionSetup::create($arr);
    }
    
    }
    public function get_student_data($id)
    {
        $result= \DB::table('students')->select('students.*')->where('students.s_rollnumber',$id)->get();
        return $result[0];
    }
}
