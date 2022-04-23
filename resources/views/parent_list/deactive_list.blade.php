<?php use App\Http\Controllers\ParentsController; ?>
@extends('layouts.admin_header')

@section('title', 'Parents List')

@section('content')

<section id="content">



<div class="page page-dashboard">



<div class="pageheader">





<div class="page-bar">



<ul class="page-breadcrumb">

<li>

<a href="index.html"><i class="fa fa-home"></i> HOME</a>

</li>

<li>

<a href="index.html">Parent List</a>

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
    
    @if(\Session::has('error'))

    <div class="alert alert-danger background-danger">
    
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled text-white"></i> </button>
    
        {{\Session::get('error')}}
    
    </div>
    
    @endif

<div class="row">

    <div class="col-md-12">

        <!-- tile -->

        <section class="tile">

        

        <!-- tile header -->

        <div class="tile-header bg-blue dvd dvd-btm">

        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Select </strong>Ground</h1>

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

        <form role="form" action="{{ url('admin/parent/get_deactive_list') }}" method='post'>
        {{ @csrf_field() }}
        <div class="row">
            <div class="form-group col-md-3">
            <label for="cls">Academic Year</label>
            <select name='session_year' class='form-control' required>
                @foreach($session as $key)
                <option value='{{$key->ClassSession}}' {{ old('session_year') == $key->ClassSession ? 'selected' : ''}}>{{ $key->ClassSession }}</option>
                @endforeach
            </select> 
            </div>
            <div class="form-group col-md-3">
                <label for="cls">Class *</label>
                <select class="form-control ak_select2" name="class" required>
                   @foreach($classes as $class)
                    <option value='{{$class->ClassNo}}' {{ old('class') ==  $class->ClassNo ? 'selected' : '' }}>{{ $class->ClassNo }}</option>
                   @endforeach   
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="sec">Section *</label>
                <select class="form-control ak_select2" name="section" required>
                    @foreach($sections as $section)
                        <option value='{{$section->ClassSection}}' {{ old('section') ==  $section->ClassSection ? 'selected' : '' }}>{{ $section->ClassSection }}</option>
                    @endforeach   
                </select>
            </div>
            <div class="submit-holder form-group col-sm-12"> 
                 <button type="submit" class="btn btn-blue">Filters<i class="fa fa-filter"></i></button> 
            </div>

        </div>           

        </form>

        

        </div>                        

        <!-- /tile body -->

        </section>

        <!-- /tile -->

        </div>
@if(isset($data))
<div class="col-md-12">

<!-- tile -->

<section class="tile">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font"><i class="fas fa5-users"></i> <strong>Parent </strong>List</h1>
</div>

<!-- /tile header -->

<!-- tile body -->

<div class="tile-body ak_table ak_table2 ak_dtablestyle student_list_page">



<div class="table-responsive table_ws_nowrap">
<table class="table mb-0" id="datatable1" style="width:100%">

<thead>

<tr>

    <th>S.No</th>
    
    <th class="stl_th7">Father Name</th>
    
    <th class="stl_th6">Mother Name</th>

    <th class="stl_th3">Father email</th>

    <th class="stl_th4">Father mobile</th>

    <th class="stl_th5">Father adhar</th>

    <th class="stl_th10">Mother email</th>

    <th class="stl_th15">Mother Mobile</th>
    
    <th class="stl_th23">Mother Adhar</th>
    
    <th class="stl_th20 action_icons_th">Action</th>

</tr>

</thead>

<tbody>

  @foreach($data as $key)
  
  <?php $details = ParentsController::get_student_info($key->s_father_adhar);
       $user_detail = ParentsController::get_user_info($key->s_father_adhar); ?>
       
  @if($user_detail->status == 0)       
  
  <tr>
    
    <td>{{ $loop->iteration }}</td>
    
    <td>{{ $details->s_father_name }}</td>
    
    <td>{{ $details->s_mother_name }}</td>

    <td>{{ $details->s_father_email }}</td>

    <td>{{ $details->s_father_mobile }}</td>

    <td>{{ $details->s_father_adhar }}</td>

    <td>{{ $details->s_mother_email }}</td>

    <td>{{ $details->s_mother_mobile }}</td>
    
    <td>{{ $details->s_mother_adhar }}</td>
    
    <td>

        <div class="ak_actionbtns">

            <a href="#" onclick="return view_details({{ $details->s_id}});" class="action_icons opt"><i class="fa fa-eye"></i></a>
            
            <a href="#" onclick="return active_parents({{$key->s_father_adhar}})"  class="action_icons opt" title='Active'><i class="fa fa-toggle-on "></i></a>
            
        </td>

  </tr>
  
  @endif

  @endforeach
  
  

</tbody>

</table>

</div>



</div>



</section>

<!-- /tile -->

</div>

</div>
<!--- modals -->
<div class="modal fade ak_modal-style " id="modelView" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h3 class="modal-title custom-font">Quick View</h3>
                <a class="modal-close" href="" data-dismiss="modal"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
   <div class="quickvie-holder">             
                <div class="quick_image">
                    <p class="username" id='name'></p>
                    <p class="user_desig"><span>Parent </span> / <span class="user_category">General</span></p>
                    </div>
                    <div class="quick_info">
                        <ul>
                            <li class="qi-item id-1"><b>Father Mobile:</b> <span id='mobile'></span></li>
                            <li class="qi-item id-2"><b>Father adhar:</b> <span id='adhar'></span></li>
                            <li class="qi-item id-3"><b>Father Occupation:</b> <span id='occupation'></span></li>
                            <li class="qi-item id-4"><b>Father Income:</b> <span id='income'></span></li>
                            <li class="qi-item id-4"><b>Father Education:</b> <span id='education'></span></li>
                            <li class="qi-item id-5"><b>Email:</b> <span id='email'></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-blue" target="_blank" id='view_url'>View Full Details</a>
                <button class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

</div>
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Reset Password</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class='col-md-12'>
                      <input type='hidden' id='id'>
                      <input type='text' id='password' required placeholder='Enter New Password' class='form-control'>
                  </div>
                  <div class='col-md-12'>
                      <br/>
                      <input type='text' id='confirm' required placeholder='Enter Confirm Password' class='form-control'>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" onclick="return reset_password();">Submit</button>
            </div>
          </div>
          
        </div>
    </div> 
@endif
</div>
</div>
<style>
    .modal {
      text-align: center;
      position:fixed;
    }

    @media screen and (min-width: 768px) { 
      .modal:before {
        display: inline-block;
        vertical-align: middle;
        content: " ";
        height: 100%;
      }
    }

    .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
    function view_details(i){
	    	$.ajax({                        
					url: '{{ url("admin/parent/detail") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (argument) { 
					    $("#name").text(argument['details']['s_father_name']);
					    $("#mobile").text(argument['details']['s_father_mobile']);
					    $("#adhar").text(argument['details']['s_father_adhar']);
					    $("#occupation").text(argument['details']['s_father_occupation']);
					    $("#income").text(argument['details']['s_father_income']);
					    $("#education").text(argument['details']['s_father_education']);
					    $("#email").text(argument['details']['s_father_email']);
					    $("#view_url").attr("href", argument['details']['view_url']);
					    $("#modelView").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
    }
     function active_parents(i){
        if(confirm('Are you sure you want to active'))
        {

            $.ajax({                        

                url: '{{ url("admin/parent/deactivate") }}',                     

                type: 'GET',                       

                data: {id:i, status:1},      

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