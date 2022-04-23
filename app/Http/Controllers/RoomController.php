<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HostelCategory;
use App\Hostel;
use App\Room;
use Auth;

class RoomController extends Controller
{
    function __construct()
    {
    	$this->middleware('is_admin');
    }

    public function index()
    {
    	$category = HostelCategory::get();
    	$hostel = Hostel::get();
    	$rooms = Room::select('hostelmaster.HostelName','hostelcategory.CategoryName','hostelroom.*')
    	                ->join('hostelmaster', 'hostelroom.HostelId', '=', 'hostelmaster.HostelId')
                        ->join('hostelcategory', 'hostelcategory.CategoryId', '=', 'hostelroom.CategoryId')
    	                ->get();
    	return view('room.index-view',['category'=>$category,'hostel'=>$hostel,'rooms'=>$rooms]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
			'RoomName' => 'required',
			'RoomStatus' => 'required',
			'HostelName' => 'required',
			'CategoryId' => 'required',
			'NumberBed'=>'required',
			'CostBed'=>'required',
			'Remarks' => 'required',
        ]);

        Room::create(['RoomName'=>$request->input('RoomName'),
                         'RoomStatus'=>$request->input('RoomStatus'),
                         'HostelId'=>$request->input('HostelName'),
                         'CategoryId'=>$request->input('CategoryId'),
                         'NumberBed'=>$request->input('NumberBed'),
                         'CostBed'=>$request->input('CostBed'),
                         'Remarks'=>$request->input('Remarks'),
                         'UpdtBy' => Auth::user()->id]);
        session()->flash('message','New Room has been created successfully');
        return redirect()->back();
    }

    public function edit($id)
    {
    	$category = HostelCategory::get();
    	$hostel = Hostel::get();
    	$roomDetail = Room::find($id);
    	return view('room.edit',['category'=>$category,'hostel'=>$hostel,'roomDetail'=>$roomDetail]);
    }

    public function update(Request $request,$id)
    {
    	$room = Room::find($id);
    	$this->validate($request, [
			'RoomName' => 'required',
			'RoomStatus' => 'required',
			'HostelName' => 'required',
			'CategoryId' => 'required',
			'NumberBed'=>'required',
			'CostBed'=>'required',
			'Remarks' => 'required',
        ]);

        $room->update(['RoomName'=>$request->input('RoomName'),
                         'RoomStatus'=>$request->input('RoomStatus'),
                         'HostelId'=>$request->input('HostelName'),
                         'CategoryId'=>$request->input('CategoryId'),
                         'NumberBed'=>$request->input('NumberBed'),
                         'CostBed'=>$request->input('CostBed'),
                         'Remarks'=>$request->input('Remarks'),
                         'UpdtBy' => Auth::user()->id]);
        session()->flash('message','New Room has been updated successfully');
        return redirect()->route('room.index');
    }


}
