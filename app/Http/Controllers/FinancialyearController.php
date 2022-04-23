<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Financialyear;
use Auth;

class FinancialyearController extends Controller
{
  
  public function store(Request $request)
  {
  	Financialyear::create([
     'financial_year'=>$request->financialYear,
     'start_date'=>date("Y-m-d",strtotime($request->startDate)),
     'end_date'=>date("Y-m-d",strtotime($request->endDate)),
     'created_by'=>Auth::user()->id,
     'updated_by'=>Auth::user()->id,
  	]);
  	return redirect()->back();
  }

  public function update(Request $request)
   {
    Financialyear::where('id',$request->id)->update(['financial_year'=>$request->financialYear,
     'start_date'=>date("Y-m-d",strtotime($request->startDate)),
     'end_date'=>date("Y-m-d",strtotime($request->endDate)),
     'created_by'=>Auth::user()->id,
     'updated_by'=>Auth::user()->id,]);
    return redirect()->back();
   }

}
