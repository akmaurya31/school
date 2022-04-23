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
                <div class="clearfix"></div>
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
                        <form role="form" method='post' action="{{ route('room.store') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="catname">Room Name *</label>
                                            <input type="text" class="form-control" name='RoomName' value="{{ old('RoomName') }}" placeholder='Room Name'>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Room Status *</label>
                                            <input type="text" class="form-control" name='RoomStatus' value="{{ old('RoomStatus') }}" placeholder='Room Status'>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Hostel *</label>
                                           <select name='HostelName' class='form-control'>
                                             @foreach($hostel as $cat)
                                             <option value='{{$cat->HostelId }}'>{{ $cat->HostelName }}</option>
                                             @endforeach    
                                           </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Category *</label>
                                           <select name='CategoryId' class='form-control'>
                                             @foreach($category as $cat)
                                             <option value='{{$cat->CategoryId }}'>{{ $cat->CategoryName }}</option>
                                             @endforeach    
                                           </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Number Bed *</label>
                                            <input type="number" class="form-control" name='NumberBed' value="{{ old('NumberBed') }}" placeholder='NumberBed'>
                                    </div>
                                     <div class="form-group col-md-4">
                                        <label for="catname">Cost Bed *</label>
                                            <input type="number" class="form-control" name='CostBed' value="{{ old('CostBed') }}" placeholder='CostBed'>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <label for="catname">Remarks *</label>
                                            <textarea name='Remarks' cols='25' rows="4" class='form-control'>{{ old('Remarks') }}</textarea>
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
            <div class="col-md-12">
               <!-- tile -->
               <section class="tile">

                <!-- tile header -->
                <div class="tile-header bg-blue dvd dvd-btm">
                    <h1 class="custom-font"><i class="fa fa-list"></i> <strong>Hostel </strong>List</h1>
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
                <div class="tile-body ak_table ak_table2 room_table act_w100">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Room Name</th>
                                <th>Room Status</th>
                                <th>Hostel Name</th>
                                <th>Category Name</th>
                                <th>NumberBed</th>
                                <th>CostBed</th>
                                <th>Remarks</th>
                                <th class="action_icons_th">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $key)
                            <tr>
                                <td>{{ $key->RoomName }}</td>
                                <td>{{ $key->RoomStatus }}</td>
                                <td>{{ $key->HostelName }}</td>
                                <td>{{ $key->CategoryName }}</td>
                                <td>{{ $key->NumberBed }}</td> 
                                <td>{{ $key->CostBed }}</td> 
                                <td>{{ $key->Remarks }}</td> 
                                <td>
                            <div class="ak_actionbtns">
                                <a href="{{route('room.edit',$key)}}" class="action_icons edt" ><i class="fa fa-pencil"></i></a> 
    <a href="#" onclick="return delete_room({{$key->RoomId}})" class="action_icons del" ><i class="fa fa-trash-o"></i></a>
    </td>
                            </tr>     
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /tile body -->

            </section>
            <!-- /tile -->
            </div>
                
         </div>
     </div>
                  
 </div>
 <script type="text/javascript">
     function delete_room(i)
     {
        if(confirm('Are you sure you want to delete this room Name'))
        {
            $.ajax({                        
                url: '{{ route("room.delete_room")}}',                      
                type: 'GET',                       
                data: {id:i},      
                dataType: 'json',                       
                success: function (argument) {  
                    if(argument['status'])
                    {
                        alert(argument['msg']);
                        location.reload();
                    }else
                    {
                        alert('not updated');
                    }
                },  
                error: function (hrx, ajaxOption, errorThrow) {     
                    console.log(ajaxOption);                        
                    console.log(errorThrow);                        
                        }                   
            });             
        }
     }
 </script>
@endsection 