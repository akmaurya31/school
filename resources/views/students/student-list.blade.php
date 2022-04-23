@extends('layouts.admin_header')

@section('title', 'Student List')

@section('content')
@php($total=0)
@php($deactive_total=0)
<section id="content">



<div class="page page-dashboard">



<div class="pageheader">





<div class="page-bar">



<ul class="page-breadcrumb">

<li>

<a href="index.html"><i class="fa fa-home"></i> HOME</a>

</li>

<li>

<a href="index.html">Student List</a>

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
            @include('_partials.student-master-filter')
        </div>                        

        <!-- /tile body -->

        </section>

        <!-- /tile -->

        </div>
@if(isset($students))
<div class="col-md-12">

<!-- tile -->

<section class="tile">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font"><i class="fas fa5-user-graduate"></i> <strong>Student </strong>List</h1>



</div>

<!-- /tile header -->

<!-- tile body -->

<div class="tile-body ak_table ak_table2 ak_dtablestyle student_list_page">

<div class="pull-right bttn-wrap-bulk">
   <button type='button' class='tblact btn btn-danger btn-flat' onclick="return delete_bulk();">Bulk Delete</button>
	<button type='button' class='tblact btn btn-primary btn-flat bulk_deactivate' onclick="return deactivate_bulk();">Bulk Deactive</button>
      </div>
	  
  <div class="">

    <div class="table_ws_nowrap">

      <table class="table table-bordered table-responsive" id="datatable1">

<thead>

<tr>

    <th><input type="checkbox" id="basic_checkbox_2" class="filled-in"/>
                                                <label for="basic_checkbox_2"></label></th>
                                                

    <th>S.No</th>
    
    <th class="stl_th7">Register No</th>
    
    <th class="stl_th6">Roll Number</th>

    <th class="stl_th3">Name</th>

    <th class="stl_th4">Class</th>

    <th class="stl_th5">Section</th>

    <th class="stl_th10">Gender</th>

    <!--<th class="stl_th12">Date of Birth</th>

    <th class="stl_th13">Religion</th>-->

    <th class="stl_th15">Mobile</th>
    
    <th class="stl_th23">Father Name</th>
    
    <th class="stl_th26">Father Mobile</th>
    
    <th class="stl_th18">Address</th>

    <th class="stl_th20 action_icons_th">Action</th>

</tr>

</thead>

<tbody>
  @php($total = 0)
  @php($deactive_total = 0);
  @foreach($students as $key)
  
  @php($total++)
  
  <tr style="background-color:{{ $key->s_acc_status == '0' ? 'FFCCCB' : '' }}">
     <td><input type="checkbox" name="basic_checkbox[<?=$key->s_id?>]" class="checkAll" value="<?=$key->s_id?>"/></td>
     
    <td>{{ $loop->iteration }}</td>
    
    <td>{{ $key->s_registered }}</td>
    
    <td>{{ $key->s_roll_number }}</td>

    <td>{{ $key->s_first_name }} {{ $key->s_last_name}}</td>

    <td>{{ $key->s_class}}</td>

    <td>{{ $key->s_section }}</td>

    <td>{{ $key->s_gender }}</td>

    <!--<td>{{ date('d-m-Y',strtotime($key->s_dob)) }}</td>

    <td>{{ $key->s_religion }}</td>-->

    <td>{{ $key->s_mobile }}</td>
    
    <td>{{ $key->s_father_name }}</td>
    
    <td>{{ $key->s_father_mobile }}</td>

    <td>{{ $key->s_present_address }}</td>


    <td>

        <div class="ak_actionbtns">

            
             @if($key->s_acc_status == 1)
            
            <a href="#" onclick="return deactive_student({{$key->s_id}})"  class="action_icons del" title='Deactive'><i class="fa fa-power-off"></i></a>

            @else
            
            @php($deactive_total++)
            
            <a href="#" onclick="return active_student({{$key->s_id}})"  class="action_icons opt" title='Active'><i class="fa fa-toggle-on "></i></a>
            
            @endif
            
            <a href="#" onclick="return view_details({{ $key->s_id}});" class="action_icons opt"><i class="fa fa-eye"></i></a>


            <a href="{{route('student.edit',$key->s_id)}}" class="action_icons edt"><i class="fa fa-pencil"></i></a>  
            
           
            
            <a href="#" onclick="return delete_student({{$key->s_id}})"  class="action_icons del"><i class="fa fa-trash-o"></i></a>
            
             <a href="#" onclick="return view_model({{$key->s_id}})" class="action_icons del" title="Reset Password"><i class="fas fa-lock"></i></a>
        

        </td>

  </tr>

  @endforeach
  
  

</tbody>

</table>

</div>

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
                    <img alt="" id='my_image' class="user-img-circle" src="" width="" height="">
                    <p class="username" id='name'></p>
                    <p class="user_desig"><span>Student </span> / <span class="user_category">General</span></p>
                    </div>
                    <div class="quick_info">
                        <ul>
                            <li class="qi-item id-1"><b>Register No:</b> <span id='regno'></span></li>
                            <li class="qi-item id-2"><b>Roll:</b> <span id='roll'>23</span></li>
                            <li class="qi-item id-3"><b>Admission Date:</b> <span id='adm_date'></span></li>
                            <li class="qi-item id-4"><b>Blood group:</b> <span id='blood'></span></li>
                            <li class="qi-item id-5"><b>Email:</b> <span id='email'></span></li>
                            <li class="qi-item id-6"><b>Date Of Birth:</b> <span id='dob'></span></li>
                            <li class="qi-item id-7"><b>Religion:</b> <span id='religion'></span></li>
                            
                            <li class="qi-item id-9"><b>Mobile No:</b> <span id='mobile'></span></li>
                            <li class="qi-item id-10"><b>State:</b> <span id='state'></span></li>
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
<!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Admin Password</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class='col-md-12'>
                      <input type='hidden' id='ids'>
                      <input type='password' id='admin_password' required placeholder='Enter Admin Password' class='form-control'>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" onclick="return deletewithpassword();">Submit</button>
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


   @section('footer_scripts')
   <script type="text/javascript">

   $(document).ready(function() { 
       
       var total = "{{ $total }}";
       var deactivate_total = "{{ $deactive_total }}";
       
       if(total == deactivate_total){
           $(".bulk_deactivate").prop('disabled', true);
       }
   });

    function deactive_student(i){
        if(confirm('Are you sure you want to deactive'))
        {

            $.ajax({                        

                url: '{{ route("student.active-account") }}',                      

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
    
     function active_student(i){
        if(confirm('Are you sure you want to active'))
        {

            $.ajax({                        

                url: '{{ route("student.active-account") }}',                      

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

    function delete_student(i){

        if(confirm('Are you sure you want to delete this student Name'))

        {

            $.ajax({                        

                url: '{{ route("student.delete-student") }}',                      

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
		    var res= val.join('#');
		    $("#ids").val(res);
		    $("#myModal").modal('show');
		}else{
			alert('select student name firstly');
		}
		return false;
	}
	
	function deactivate_bulk(){
	    var student_id = '';
		var val = [];
        $('.checkAll:checked').each(function(i){
          val[i] = $(this).val();
        });
		if(val.length>0){
			if(confirm('Are you sure you want to deactive bulk students')){
				var res= val.join('#');
				$.ajax({                        
					url: '{{ route("student.deactive-bulk") }}',                      
					type: 'GET',                   
					data: {bulk_value:res,status:0},      
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
			alert('select student name firstly');
		}
		return false;
	}
	
	function view_details(i){
	    	$.ajax({                        
					url: '{{ route("student.student-detail") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (argument) { 
					    var name = argument['s_first_name'] + " " + argument['s_last_name'];
					    $("#name").html(name);
					    $("#regno").html(argument['s_registered']);
					    $("#roll").html(argument['s_rollnumber']);
					    $("#adm_date").html(argument['s_adm_date']);
					    $("#blood").html(argument['s_blood_group']);
					    $("#email").html(argument['s_father_email']);
					    $("#dob").html(argument['s_dob']);
					    $("#religion").html(argument['s_religion']);
					    $("#mobile").html(argument['s_mobile']);
					    $("#state").html(argument['s_state']);
					    var src_url = argument['profile_url'];
					    $("#my_image").attr("src",src_url);
					    $("#view_url").attr("href", argument['view_url']);
					    $("#modelView").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
	}
	
	function deletewithpassword(){
	    var res = $("#ids").val();
	    var pass = $("#admin_password").val();
	    if(confirm('Are you sure you want to delete bulk students')){
				$.ajax({                        
					url: '{{ route("student.delete-bulk") }}',                      
					type: 'GET',                       
					data: {bulk_value:res,admin_password:pass},      
					dataType: 'json',                       
					success: function (argument) {  
						if(argument['status'])
						{
							alert(argument['msg']);
							location.reload();
						}else{
						    alert(argument['msg']);
						}
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
							}                   
				});
        }
        return false;
	}
	
	function view_model(i)
	{
	    $("#id").val(i);
	    $("#myModal1").modal('show');
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
            			url: '{{ url("student/reset_password") }}',                      
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

</script>
@endsection

@endsection