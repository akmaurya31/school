@extends('layouts.admin_header')
@section('title', 'Room')
@section('content')
<section id="content">

<div class="page page-dashboard">

<div class="pageheader">


<div class="page-bar">

<ul class="page-breadcrumb">
<li>
<a href="{{ route('admin-dashboard') }}"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="#">Rooms</a>
</li>
</ul>

<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>

</div>

</div>
 <div class="akform_holder new_admision">
     <div class="row">
 
         <div class="col-md-12">
               @if (count($errors))
                  @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          {{ $error }}
                        </div>
                  @endforeach
                @endif 
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          {{ Session::get('message') }}
                    </div>
                @endif 
                </div>
                <div class="clerfix"></div>
                <div class="col-md-12">
                <!-- tile -->
                <section class="tile">

                    <!-- tile header -->
                    <div class="tile-header bg-blue dvd dvd-btm">
                        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Add </strong>New Hostel</h1>
                       <ul class="controls">
    <li>
        <a role="button" tabindex="0" class="tile-toggle">
            <span class="minimize"><i class="fa fa-minus"></i></span>
            <span class="expand"><i class="fa fa-plus"></i></span>
        </a>
    </li>
   
</ul>
                    </div>
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body">
                       <form role="form" method='post' action="{{ route('room.update', $roomDetail->RoomId) }}" onsubmit="return confirm('Are you sure you want to submit?');">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="catname">Room Name *</label>
                                            <input type="text" class="form-control" name='RoomName' value="{{ $roomDetail->RoomName }}" placeholder='Room Name'>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Room Status *</label>
                                            <input type="text" class="form-control" name='RoomStatus' value="{{ $roomDetail->RoomStatus }}" placeholder='Room Status'>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Hostel *</label>
                                           <select name='HostelName' class='form-control'>
                                             @foreach($hostel as $cat)
                                             @if($cat->HostelId == $roomDetail->HostelId)
                                             <option value='{{$cat->HostelId }}' selected>{{ $cat->HostelName }}</option>
                                             @else
                                              <option value='{{$cat->HostelId }}'>{{ $cat->HostelName }}</option>
                                             @endif
                                             @endforeach    
                                           </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Category *</label>
                                           <select name='CategoryId' class='form-control'>
                                             @foreach($category as $cat)
                                             @if($cat->CategoryId == $roomDetail->CategoryId)
                                             <option value='{{$cat->CategoryId }}' selected>{{ $cat->CategoryName }}</option>
                                             @else
                                              <option value='{{$cat->CategoryId }}'>{{ $cat->CategoryName }}</option>
                                             @endif
                                             @endforeach    
                                           </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Number Bed *</label>
                                            <input type="number" class="form-control" name='NumberBed' value="{{ $roomDetail->NumberBed }}" placeholder='NumberBed'>
                                    </div>
                                     <div class="form-group col-md-4">
                                        <label for="catname">Cost Bed *</label>
                                            <input type="number" class="form-control" name='CostBed' value="{{ $roomDetail->CostBed }}" placeholder='CostBed'>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <label for="catname">Remarks *</label>
                                            <textarea name='Remarks' cols='25' rows="4" class='form-control'>{{ $roomDetail->Remarks }}</textarea>
                                    </div>

                    <div class="submit-holder form-group col-sm-12"> 
                        <button type="submit" class="btn btn-blue">Submit</button> 
                    </div>
                </div>           
                            </form>
                        
                            </div>                        
                    <!-- /tile body -->
                    </section>
                <!-- /tile -->
            </div>
                
         </div>
     </div>
                  
 </div>
@endsection 