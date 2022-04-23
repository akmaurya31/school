<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeSalarySlip;
use Auth;
class EmployeeSalarySlipController extends Controller
{
    



    public function store(Request $request)
    {

     EmployeeSalarySlip::create([
       'ctc'=>$request->ctcInp,
       'basic'=>$request->basicInp,
       'hra'=>$request->hraInp,
       'special_allowance'=>$request->spcAllncInp,
       'special_allowance1'=>$request->spcAllncInp1,
       'special_allowance1'=>$request->spcAllncInp2,
       'total_allowance'=>$request->totAllncInp,
       'pf'=>$request->pfInp,
       'esic'=>$request->esicInp,
       'tax'=>$request->taxInp,
       'advance_salary'=>$request->advSalaryInp,
       'advance_salary1'=>$request->advSalaryInp1,
       'advance_salary2'=>$request->advSalaryInp2,
       'total_deduction'=>$request->totDeductionInp,
       'net_increament'=>$request->incrementSel,
       'payout_date'=>date("Y-m-d",strtotime($request->payoutDate)),
       'net_salary'=>$request->netSalInp,
       'department'=>$request->department,
       'created_by'=>Auth::user()->id,
       'updated_by'=>Auth::user()->id,
     ]);

     return redirect()->back();

    }
}
