<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feemanagement;
use App\FeeGroup;
use App\Classes;
use App\ManageFeeHead;
use App\Department;
use App\GroupMaster;
use App\HeadnameMaster;
use App\HeadMaster;
use Auth;
use App\FineSetup;
use App\Invoice;
use App\ConssesionSetup;
use App\MasterHead;
use App\Student;
use App\Fee_allocation_tbl;
use Illuminate\Support\Facades\DB;

class FeemanagementController extends Controller
{
    public function __construct()
    {
        $this->group=new FeeGroup;
        $this->feehead=new ManageFeeHead; 
        $this->fine_setup = new FineSetup;
        $this->invoice=new Invoice;
        $this->conssesion=new ConssesionSetup;
        $this->head=new MasterHead;
        $this->student=new Student;
    } 
    
    public function fee_group()
    {
        $GroupMaster = GroupMaster::get();
        $HeadnameMaster = HeadnameMaster::get();
        $HeadMaster = DB::table('head_master')
        ->join('headname_master', 'headname_master.id', '=', 'head_master.headname_id')  
        ->get();  
    	return view('Fee_management/fee_group',['staff'=>'active','dept'=>'active','GroupMaster'=>$GroupMaster,'HeadnameMaster'=>$HeadnameMaster,'HeadMaster'=>$HeadMaster]);  
    }
    
    public function fee_allocation()
    {
        $GroupMaster = GroupMaster::get();
        $HeadnameMaster = HeadnameMaster::get();
        //$HeadMaster = HeadMaster::get();

        $HeadMaster = DB::table('head_master')
        ->join('headname_master', 'headname_master.id', '=', 'head_master.headname_id')  
        ->get();
        
        $classes = Classes::where('Status',1)->get();


        $groups=$this->group->get_groups_data();
        return view('Fee_management/fee_allocation',compact('groups'),['GroupMaster'=>$GroupMaster,'HeadnameMaster'=>$HeadnameMaster,'HeadMaster'=>$HeadMaster,'classes'=>$classes]);
        
    }

    public function alc_store(Request $request)
    { 
        $InsertData['group_id'] = $request->group_id; 
        //$InsertData['fee_for'] = $request->fee_for;  //class_id aur fee_for both same
        $InsertData['frequency'] = $request->frequency; 
        $InsertData['fee_allocation_ids'] = '';         
        $InsertData['class_id'] = $request->fee_for;    

        
        Fee_allocation_tbl::create($InsertData); 
        
        return redirect()->route('admin.fee_allocation')->withSuccess('Data inserted Successfully'); 
    }

    public function getname()
    {
        $GroupMaster = GroupMaster::get();
        $HeadnameMaster = HeadnameMaster::get();
        $HeadMaster = HeadMaster::get();  
    	return view('Fee_management/fee_group',['staff'=>'active','dept'=>'active','GroupMaster'=>$GroupMaster,'HeadnameMaster'=>$HeadnameMaster,'HeadMaster'=>$HeadMaster]);  
    }

    public function store(Request $request)
    {
    	// $this->validate($request, [
		// 	'd_name' => 'required|unique:departmentmaster'
        // ],
        // ['unique' =>'This Department name is Already exist',
        //  'required' =>'Department name is required' 
        // ]);
        
        Department::create(['d_name'=>$request->input('d_name')]);
        session()->flash('message','Department has been created successfully');
        return redirect()->back();
    }


    public function storexxxx(Request $request)
    {
    	  print_r($request->input());

        Quiz::create([
            'quiz_name' => 'A',
            'drop_subject' => $request->input('drop_subject'),
            'drop_class' => $request->input('drop_class'),
            'drop_section' => $request->input('drop_section'), 
            'enter_question' => $enter_question,
            'explination' => $explination, 
            'txt_opt_a' => $txt_opt_a,
            'txt_opt_b' => $txt_opt_b, 
            'txt_opt_c' => $request->input('txt_opt_c'), 
            'txt_opt_d' => $request->input('txt_opt_d'),  
            'opt_a' => $opt_a, 
            'opt_b' => $opt_b, 
            'opt_c' => $request->input('opt_c'), 
            'opt_d' => $request->input('opt_d')

        ]);
        
        session()->flash('message','Designation has been created successfully');
        return redirect()->back();
    }



    public function update_group_data(Request $request)
    {
        $arr=array(
            'group_name'=>$request->grpName,
            'frequency'=>$request->selectSel,
            'transport_fee'=>$request->transportTxt,
            'tution_fee'=>$request->tutionTxt,
            'annual_fee'=>$request->annualTxt,
            'created_by'=>Auth::user()->id
        );
        $this->group->update_data($arr,$request->id);
        return redirect()->back();

    }
    public function delete_data(Request $request)
    {
        FeeGroup::where('id',$request->id)->delete();
        return redirect()->back();
    }
    public function save_fee_allowacation_data(Request $request)

    {
        echo "<pre>";
        print_r($request->all());

    }
    public function save_group_data(Request $request)
    {
        $arr=array(
            'group_name'=>$request->grpName,
            'frequency'=>$request->selectSel,
            'transport_fee'=>$request->transportTxt,
            'tution_fee'=>$request->tutionTxt,
            'annual_fee'=>$request->annualTxt,
            'created_by'=>Auth::user()->id
        );
        $this->group->save_data($arr);
        return redirect()->back()->withsuccess('Fee group created successfully');
    } 
    
    public function feeconcession_setup()
    {
        $students=$this->student->get_studen_data();
        // $array = json_decode( json_encode($array), true);
        // echo "<pre>";
        // print_r($students);
        // exit;
        $heads=$this->feehead->get_heads();
    	return view('Fee_management/feeconcession_setup',compact('heads','students'));
    }
    
    // public function feefine_setup()
    // {
    // 	return view('Fee_management/feefine_setup');
    // }
    public function feefine_setup()
    {
        $finedata = FineSetup::All();

    	return view('Fee_management/feefine_setup',compact('finedata'));
    }

    public function feefine_save(Request $request){

        
        $arr=array(
           'head'=>$request->headSel,
           'fine_type'=>$request->fineType,
           'fine_value'=>$request->fineVAl,
           'on_everyday'=>$request->onEveryDay,
           'up_to'=>$request->onUpto,
           'fee_type'=>$request->feeTypeSel,
           'amount_percent'=>$request->amtPerTxt,
           'fine_month'=>$request->batch,
           
       );
       
       
         $this->fine_setup->save_feefine_data($arr);
         $finedata = FineSetup::All();
          return redirect()->back();
        
   }

   public function feefine_delete($id){
       FineSetup::where('id',$id)->delete();
       $finedata = FineSetup::All();

        return redirect()->back();
   }
    
    public function feeheads_setup()
    {
        $fee_heads=$this->feehead->get_head_data();
      
      
    	return view('Fee_management/feeheads_setup',compact('fee_heads'));
    }
    public function save_conssesion_form_data(Request $request)
    {
        
        $this->conssesion->savedata($request->all(),$request->count);
        return redirect()->to('admin/Fee_management/feeconcession_setup');
       
      
       
    }
    public function get_student_data(Request $request)
    {
        return json_encode($this->conssesion->get_student_data($request->student_id));
    }
    public function save_fee_heads_data(Request $request)
    {
        

        $this->feehead->save_data($request->all());
        return redirect()->back();
    }

    public function save_invoice_data(Request $request)
    {
        $arr=[
            'term'=>$request->selTerm,
            'installment'=>$request->installment,
            'status'=>$request->status,
            'sort'=>$request->sort,
            'course'=>$request->course,
            'section'=>$request->selSection,
            'created_by'=>Auth::user()->id       
        ];
        $this->invoice->save_data($arr);
        return redirect()->back();
    }
    public function update_invoice_data(Request $request)
    {
        $arr=[
            'term'=>$request->selTerm,
            'installment'=>$request->installment,
            'status'=>$request->status,
            'sort'=>$request->sort,
            'course'=>$request->course,
            'section'=>$request->selSection,
            'created_by'=>Auth::user()->id       
        ];
        $this->invoice->update_data($arr,$request->id);
        return redirect()->back();
        // echo "<pre>";print_r($request->All());
    }
    
    public function feedue_summary()
    {
    	return view('Fee_management/feedue_summary');
    }
    
    public function feedue_report()
    {
    	return view('Fee_management/feedue_report');
    }
    
    public function feerefund()
    {
    	return view('Fee_management/feerefund');
    }
    
    public function feecheque_summary()
    {
    	return view('Fee_management/feecheque_summary');
    }
    
    public function fee_dailycollect()
    {
    	return view('Fee_management/fee_dailycollect');
    }
    
    public function fee_invoice()
    {
        $invoices=$this->invoice->get_all_data();
        return view('Fee_management/fee_invoice',compact('invoices'));
        // return view('insert');
    }
   
    
    public function feedue_list()
    {
    	return view('Fee_management/feedue_list');
    }
    
     public function fee_paymenthistory()
    {
    	return view('Fee_management/fee_paymenthistory');
    }
    
    public function fee_reciepts()
    {
    	return view('Fee_management/fee_reciepts');
    }

    public function getHeadName(Request $request){
        $id=$request->id;
        $subjective_teacher = DB::table('headname_master') 
        ->where('id',1)
        ->get();  
    }

}
