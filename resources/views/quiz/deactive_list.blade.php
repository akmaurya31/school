@extends('layouts.admin_header')

@section('title', 'Quiz Deactivate List')

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

<a href="index.html">Quiz Deactivate List</a>

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
<button type='button' class='btn btn-danger btn-flat' onclick="return delete_bulk();">Bulk Delete</button>
<!-- tile -->

<section class="tile">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font"><i class="fas fa5-users"></i> <strong>Staff </strong>Deactivate List</h1>


</div>

<!-- /tile header -->

<!-- tile body -->

<div class="tile-body ak_table ak_table2 ak_dtablestyle staff_list_page">
<div class="table_ws_nowrap">

<table class="table mb-0" id="datatable1">

<thead>

<tr>
    <th class="stl_th1"><input type="checkbox" id="basic_checkbox_2" class="filled-in"/></th>
    <th></th>
    <th>S.No</th>

    <th class="stl_th3">Registered No</th>
    
     <th class="stl_th3">Name</th>

    <th class="stl_th4">Role Name</th>

    <th class="stl_th5">Joining Date</th>

    <th class="stl_th6">Department</th>

    <th class="stl_th7">Designation</th>

    <th class="stl_th8">Qualification</th>

    <th class="stl_th9">Experiance</th>

    <th class="stl_th11">Gender</th>

    <th class="stl_th12">Date of Birth</th>

    <th class="stl_th14">Mobile Number</th>

    <th class="stl_th15">Email Address</th>

    <th class="stl_th20 action_icons_th">Action</th>

</tr>

</thead>

<tbody>

  @foreach($data as $key)

  <tr>
    <td><input type="checkbox" name="basic_checkbox[<?=$key->t_id?>]" class="checkAll" value="<?=$key->t_id?>"/></td>
    <td>
     <div class="ak_actionbtns">    
     @if($key->t_acc_status == 1)
       <a href="#" onclick="return deactive_parents({{$key->t_id}})"  class="action_icons del" title='Deactive'><i class="fa fa-power-off"></i></a>
     @else
        <a href="#" onclick="return active_parents({{$key->t_id}})"  class="action_icons opt" title='Active'><i class="fa fa-toggle-on "></i></a>
     @endif
     </div>
    </td>
    <td>{{ $loop->iteration }}</td>
    
    <td>{{ $key->t_reg_no }}</td>

    <td>{{ $key->t_name }}</td>

    <td>{{ $key->t_role_name }}</td>

    <td>{{ date('d-m-Y',strtotime($key->t_join_date)) }}</td>

    <td>{{ $key->d_name }}</td>

    <td>{{ $key->ds_name }}</td>

    <td>{{ $key->t_qualification }}</td>

    <td>{{ $key->t_experiance }}</td>

    

    <td>{{ $key->t_gender }}</td>

    

    <td>{{ $key->t_dob }}</td>


    <td>{{ $key->t_mobile_number }}</td>

    <td>{{ $key->t_email }}</td>

    <td>
        <div class="ak_actionbtns">
            <!--<a href="{{route('staff.show',$key)}}" class="action_icons opt" target='_blank'><i class="fa fa-th-large"></i></a>-->
            <a href="#" onclick="return view_details({{ $key->t_id}});" class="action_icons opt"><i class="fa fa-eye"></i></a>
            <!--<a href="{{route('staff.edit',$key)}}" class="action_icons edt" target="_blank"><i class="fa fa-pencil"></i></a>--> 
            <a href="#" onclick="return delete_student({{$key->t_id}})" class="action_icons del" ><i class="fa fa-trash-o"></i></a>
            <!--<a href="#" onclick="return view_model({{$key->t_id}})" class="action_icons del" title="Reset Password"><i class="fas fa-lock"></i></i></a>-->
        
        </div>

    
</td>

  </tr>

  @endforeach

</tbody>

</table>

</div>



</div>



</section>

<!-- /tile -->

</div>
   <div class="modal fade" id="myModal" role="dialog">
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
                    <img alt="" id='my_image' class="user-img-circle" src="" width="" height="">
                    <p class="username" id='name'></p>
                    <p class="user_desig"><span>Staff </span> / <span class="user_category">General</span></p>
                    </div>
                    <div class="quick_info">
                        <ul>
                            <li class="qi-item id-1"><b>Register No:</b> <span id='regno'></span></li>
                            <li class="qi-item id-2"><b>Role:</b> <span id='role'></span></li>
                            <li class="qi-item id-3"><b>Joining Date:</b> <span id='join_date'></span></li>
                            <li class="qi-item id-4"><b>Department:</b> <span id='department'></span></li>
                            <li class="qi-item id-5"><b>Designation:</b> <span id='designation'></span></li>
                            <li class="qi-item id-6"><b>Date Of Birth:</b> <span id='dob'></span></li>
                            <li class="qi-item id-9"><b>Mobile No:</b> <span id='mobile'></span></li>
                            <li class="qi-item id-10"><b>Email:</b> <span id='email'></span></li>
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


</div>

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
<script type="text/javascript">

    function delete_student(i){

        if(confirm('Are you sure you want to delete this staff Name'))

        {

            $.ajax({                        

                url: '{{ route("staff.delete-staff") }}',                      

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
    
     $(function () {
		$('#basic_checkbox_2').click(function(){
				if($(this).prop("checked")) {
					$(".checkAll").prop("checked", true);
				} else {
					$(".checkAll").prop("checked", false);
				}                
		});
	});	
	
	function delete_bulk(){
		var student_id = '';
		var val = [];
        $('.checkAll:checked').each(function(i){
          val[i] = $(this).val();
        });
		if(val.length>0){
			if(confirm('Are you sure you want to delete bulk staff')){
				var res= val.join('#');
				$.ajax({                        
					url: '{{ route("staff.delete-bulk") }}',                      
					type: 'GET',                       
					data: {bulk_value:res},      
					dataType: 'json',                       
					success: function (argument) {  
						if(argument['status'])
						{
							alert(argument['msg']);
							location.reload();
						}
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
							}                   
				});
            }				
		}else{
			alert('select staff name firstly');
		}
		return false;
	}
	
	function view_model(i)
	{
	    $("#id").val(i);
	    $("#myModal").modal('show');
	}
	
	function reset_password()
	{
	    if(confirm('are you sure')){
    	    var id = $("#id").val();
    	    var password = $("#password").val();
    	    var confirm_pass = $("#confirm").val();
    	     if(password == '' || confirm_pass == ''){
    	        alert('Please enter password');
    	        return false;
    	    }else{
        	    if(password == confirm_pass){
            	    $.ajax({                        
            			url: '{{ url("staff/reset_password") }}',                      
            			type: 'GET',                       
            			data: {id:id, password:password},      
            			dataType: 'json',                       
            			success: function (argument) {  
            				if(argument['status'])
            				{
            					alert(argument['msg']);
            					location.reload();
            				}
            			},  
            			error: function (hrx, ajaxOption, errorThrow) {     
            				console.log(ajaxOption);                        
            				console.log(errorThrow);                        
            			}                   
            		});
        	    }else{
        	        alert('confirm password is not match');
        	        return false;
        	    }
    	    }   
	    }   
	}
	
	
	function view_details(i){
	    	$.ajax({                        
					url: '{{ url("staff/staff_detail") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (argument) { 
					    $("#name").text(argument['staff_detail']['t_name']);
					    $("#regno").text(argument['staff_detail']['t_reg_no']);
					    $("#role").html(argument['staff_detail']['t_role_name']);
					    $("#department").html(argument['staff_detail']['dept_name']);
					    $("#join_date").html(argument['staff_detail']['t_join_date']);
					    $("#designation").html(argument['staff_detail']['designation_name']);
					    $("#dob").html(argument['staff_detail']['t_dob']);
					    $("#mobile").html(argument['staff_detail']['t_mobile_number']);
					    $("#email").html(argument['staff_detail']['t_email']);
					    $("#my_image").attr("src",argument['staff_detail']['profile_url']);
					    $("#view_url").attr("href", argument['staff_detail']['view_url']);
					    $("#modelView").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
	}
	
	function deactive_parents(i){
        if(confirm('Are you sure you want to deactive'))
        {

            $.ajax({                        

                url: '{{ url("admin/staff/deactivate") }}',                      

                type: 'GET',                       

                data: {id:i, status:0},      

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
    
     function active_parents(i){
        if(confirm('Are you sure you want to active'))
        {

            $.ajax({                        

                url: '{{ url("admin/staff/deactivate") }}',                     

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