@extends('layouts.admin_header')
@section('title', 'Transport Detail')
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
<a href="#">Transport</a>
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
             {{--  @if (count($errors))
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
                @endif --}}
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
                <!-- tile -->
                <section class="tile">

                    <!-- tile header -->
                    <div class="tile-header bg-blue dvd dvd-btm">
                        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Add </strong>New Route</h1>
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
                        <form role="form" method='post' action="{{ route('transport.store') }}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="catname">Vehicle No *</label>
                                            <input type="text" class="form-control" name='vehicle_number' value="{{ old('vehicle_number') }}" placeholder='Ex.HR-XXXX'>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Route Name *</label>
                                            <input type="text" class="form-control" name='route_name'value="{{ old('route_name') }}" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">Start Point *</label>
                                            <input type="text" class="form-control" id="catname" name='start_point' value="{{ old('start_point') }} ">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="catname">End Point *</label>
                                            <input type="text" class="form-control" id="catname" name='end_point' value="{{ old('end_point') }} ">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="catname">Distance *</label>
                                            <input type="text" class="form-control" id="catname" name='Distance' value="{{ old('Distance') }} ">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="catname">Fare *</label>
                                            <input type="text" class="form-control" id="catname" name='Fare' value="{{ old('Fare') }} ">
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
                    <h1 class="custom-font"><i class="fa fa-list"></i> <strong>Classes </strong>List</h1>
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
                <div class="tile-body ak_table ak_table2 transp_classlist act_w100">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Vehicle No</th>
                                <th>Route Name</th>
                                <th>Start Point</th>
                                <th>End Point</th>
                                <th>Distance</th>
                                <th>Fare</th>
                                <th class="action_icons_th">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transport as $key)
                            <tr>
                                <td>{{ $key->VehicleSlNo }}</td>
                                <td>{{ $key->RouteName }}</td> 
                                <td>{{ $key->VehicleStartPoint }}</td> 
                                <td>{{ $key->VehicleStopPoint }}</td> 
                                <td>{{ $key->Distance }}</td> 
                                <td>{{ $key->Fare }}</td> 
                                <td>
                                    <div class="ak_actionbtns">
<a href="{{route('transport.edit',$key)}}" class="action_icons edt" ><i class="fa fa-pencil"></i></a> 
<a href="#" onclick="return delete_transport({{$key->TrasportRoutId}})" class="action_icons del" ><i class="fa fa-trash-o"></i></a>

</div>
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


 <script type="text/javascript">
 function limit(element,limit)
{
    var max_chars = limit;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}

@if(Session::has('message'))

swal({
  icon: "success",
  title: '{{ Session::get('message') }}',
});

@endif

     function delete_transport(i)
     {
        if(confirm('Are you sure you want to delete this route Name'))
        {
            $.ajax({                        
                url: '{{ route("transport.delete_transport")}}',                      
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