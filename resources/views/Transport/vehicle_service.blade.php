    @extends('layouts.admin_header')
    @section('title', 'Add Vendor')
    @section('content')
<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">
<div class="page page-dashboard">
<div class="pageheader">
<div class="page-bar">
<ul class="page-breadcrumb">
<li>
<a href="index.html"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="javascript:void(0)">Vehicle Service</a>
</li>
</ul>
<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>
</div>
</div>
<div class="akform_holder ">
<div class="row">
  <div class="col-md-12">

  {{-- @if (count($errors))

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
--}}

    <!-- tile -->
    <section class="tile collapsed">
    


    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
    <h1 class="custom-font"><i class="fa fa-car"></i><strong>Create new service</strong></h1>
    <ul class="controls">
        <li>
            <a role="button" tabindex="0">
                <span class="minimize"><i class="fa fa-minus"></i></span>
                <span class="expand"><i class="fa fa-plus"></i></span>
            </a>
        </li>
    </ul>
    </div>
    <!-- /tile header -->
    
    <!-- tile body -->
    <div class="tile-body collapse">
      <form role="form" method="post" action="{{route('add_vehicle_service')}}" class="box">
      {{ csrf_field()}}
        <div class="row">
         
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleName">Vehicle Number</label>
            <select class="form-control ak_select2" name="vehicle_no" id="vehicle_no" required>
              <option value="">Select Vehicle Number</option>
              @foreach($vehicle as $ds=>$vd)
                 <option value="{{$vd->registerNo}}">{{$vd->registerNo}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleName">Vehicle Name</label>
            <select class="form-control ak_select2" name="vehicle_name" id="vehicle_name" required>
              <option>Select Vehicle</option>
              @foreach($vehicle as $key=>$vala)
                 <option value="{{$vala->vehicle_name}}">{{$vala->vehicle_name}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="serviceDate">Service Date</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="service_date" autocomplete="off" name="service_date" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="nxtServiceDate">Next Service Date</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="next_service_date" autocomplete="off" name="next_service_date" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="serviceType">Service Type</label>
            <select class="form-control ak_select2" name="service_type" id="service_type" required>
              <option value="">Select Service Type</option>
              <option value="Service 1">Free</option>
              <option value="Service 2">Normal</option>
              <option value="Service 3">Arrgent</option>
              <option value="Service 4">Accident</option>
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="serviceDesc">Service Description</label>
            <textarea class="form-control" name="service_desc" id="service_desc" cols="30" rows="1"></textarea>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="serviceAmt">Service Amount</label>
            <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="service_amount" id="service_amount" placeholder="0" required>  
          </div>
        <!--</div>-->
        <!--<div class="row">  -->
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="address">Address</label>
            <input class="form-control" name="address" id="address" placeholder="Owner Address" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="city">City</label>
            <input class="form-control" type="text" name="city" id="city" placeholder="City" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="district">District</label>
            <input class="form-control" type="text" name="district" id="district" placeholder="District" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="pincode">Pin Code</label>
            <input class="form-control" type="number"  onkeydown="limit(this,6);" onkeyup="limit(this,6);" name="pincode" id="pincode" placeholder="Pin Code" required >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="phoneNo">Phone Number</label>
            <input class="form-control" type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" name="phone_no" id="phone_no" placeholder="eg. 784688765" maxlength="13" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="emailId">Email Id</label>
            <input class="form-control" type="email" name="email_id" pattern="^([\w]*[\w\.]*(?!\.)@gmail.com)"  id="email_id" placeholder="eg: vikas@gmail.com" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="helpline">HelpLine Number</label>
            <input class="form-control" type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" name="helpline" id="helpline" placeholder="eg: 500" maxlength="13" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="contactPerson">Contact Person Details</label>
            <input class="form-control" type="text" name="contact_person" id="contact_person" placeholder="Person Details" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="ctPersonName">Contact Person Name</label>
            <input class="form-control" type="text" name="contact_person_name" id="contact_person_name" placeholder="Person Name" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="ctPersonDesign">Contact Person Designation</label>
            <input class="form-control" type="text" name="contact_person_designation" id="contact_person_designation" placeholder="Person Designation" required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="ctPersonMob">Contact Person Mobile No</label>
            <input class="form-control" type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" name="contact_person_no" id="contact_person_no" placeholder="Person Mobile No" maxlength="13" pattern='(\+91[ -])?(\d{3})[ -]?(\d{3})[ -]?(\d{4})' required>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="ctPersonEmailID">Contact Person Email ID</label>
            <input class="form-control" type="email" name="contact_person_email"  pattern="^([\w]*[\w\.]*(?!\.)@gmail.com)"  id="contact_person_email" placeholder="Person Email Id" required>
          </div>
        </div>  
        <div class="submit-holder">
          <div class="row">
          <div class="col-sm-12 form__button--action"> 
          <div>
          <button type="reset" class="btn btn-red">Reset</button>
          </div>
          <div>
          <button type="submit" data-value="New service detail is added" class="btn btn-blue"><i class="fa fa-floppy-o"></i>Save</button>
          </div>
          </div> 
          </div>
          </div>
      </form>
    </div>                        
    <!-- /tile body -->
    </section>
    <!-- /tile -->
    </div>
  <div class="col-md-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font">
    <i class="fas fa-list"></i>
    <strong>Vehicle</strong> Service List</h1>
    </div>
    <!-- /tile header -->
      <!-- tile body-->
    <div class="tile-body ak_table ak_table2 ak_dtablestyle">
    <div class="table_ws_nowrap">
       <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
        <thead>
          <tr>
            <th class="stl_th1"></th>
            <th class="stl_th2">SL</th>
            <th class="stl_th3">Vehicle Name</th>
            <th class="stl_th3">Vehicle No</th>
            <th class="stl_th4">Service Date</th>
            <!-- <th class="stl_th5">Next Service Date</th> -->
            <th class="stl_th6">Service Amount</th>
            <th class="stl_th7 action_icons_th">Actions</th>
            <th class="stl_th8">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($vehicleService as $key=>$val)
            <tr>
              <td></td>
              <td>{{$key+1}}</td>
              <td>{{$val->vehicle_name}}</td>
              <td>{{$val->vehicle_no}}</td>
              <td>{{$val->service_date}}</td>
              <td>{{$val->service_amount}}</td>
              <td>
                <a  href="{{route('admin.edit_vehicle_service',$val->id)}}" class="btn badge badge-warning" data-toggle="tooltip"  title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                <button class="btn badge badge-warning" onclick="return view_details({{ $val->id}});" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                <button class="btn badge badge-warning" onclick="return delete_vehicle_services({{$val->id}});" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
              </td>
              <!-- <td><span class="status badge badge-success">Active</span></td> -->
              <td> <a href="javascript:void(0);" onclick="return statusupdatevehicle({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>

            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
    <!-- /tile body-->
    </section>
  </div>
</div>
</div>
</div>
</div>
<p class="cright">&copy; Copyright 2020, All Right Reserved</p>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<div id="viewModal" class="modal fade ak_modal-style">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
          <h3 class="modal-title custom-font">Quick View</h3>
          <a class="modal-close" href="" data-dismiss="modal"><i class="fa fa-close"></i></a>
      </div>
      <div class="modal-body">
        <div class="quickvie-holder">             
              <div class="quick_info">
                  <ul>
                      <li class="qi-item id-2"><b>Vehicle Number:</b> <span id="vehicleNo_qv">DL 04 JC 6789</span></li>
                      <li class="qi-item id-3"><b>Service Type:</b> <span id="serviceType_qv">Option 1</span></li>
                      <li class="qi-item id-4"><b>Service Description:</b> <span id="servDesc_qv">lorem ipsum is a dummy text to fill html</span></li>
                      <li class="qi-item id-5"><b>Address:</b> <span id="add_qv">20/22 Kidwai Nagar</span></li>
                      <li class="qi-item id-6"><b>City:</b> <span id="city_qv">Pune</span></li>
                      <li class="qi-item id-7"><b>District:</b> <span id="taxAmt_qv">Tathawade</span></li>
                      <li class="qi-item id-8"><b>Pincode:</b> <span id="pincode_qv">208001</span></li>
                      <li class="qi-item id-9"><b>Phone Number:</b> <span id="phone_qv">+91532254668</span></li>
                      <li class="qi-item id-10"><b>Email Id:</b> <span id="email_qv">djmerrit45@gmail.com</span></li>
                      <li class="qi-item id-11"><b>HelpLine Number:</b> <span id="helpline_qv">18002324500</span></li>
                      <li class="qi-item id-12"><b>Contact Person Details:</b> <span id="details_qv">Administrator</span></li>
                      <li class="qi-item id-13"><b>Contact Person Name:</b> <span id="cName_qv">Saurabh Singh</span></li>
                      <li class="qi-item id-14"><b>Contact Person Designation:</b> <span id="cDesign_qv">Senior Software Engineer</span></li>
                      <li class="qi-item id-15"><b>Contact Person Mobile No:</b> <span id="cPMob_qv">22 Aug 2020</span></li>
                      <li class="qi-item id-16"><b>Contact Person Email ID:</b> <span id="cPEmail_qv">djmerrit45@gmailc.om</span></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="modal-footer">
          <!-- <a role="button" href="http://oracleinfotech.in/demoschool/schoolmgt/admin/staff/6" class="btn btn-blue" target="_blank" id="view_url">View Full Details</a> -->
          <a role="button" class="btn btn-danger" data-dismiss="modal">Close</a>
      </div>
    </div>
      <!-- modal content -->
    </div>
</div>
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
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


function statusupdatevehicle(i){

if(confirm('Are you sure you want to change status '))
{

    $.ajax({                        

        url: '{{ route("admin.statusupdate_vehicle_service") }}',                      

        type: 'GET',                       

        data: {id:i},      

        dataType: 'json',                       

        success: function (argument) {  
                alert(argument['message']);

                location.reload();
        },  
        error: function (hrx, ajaxOption, errorThrow) {     

            console.log(ajaxOption);                        

            console.log(errorThrow);                        

                }                   
    });             

}
}


$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});

$(function () {
   
    $("#service_date").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#next_service_date").datepicker("option", "minDate", dt);
        }
    });
     $("#next_service_date").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#next_service_date").datepicker("option", "minDate", dt);
        }
    });
});


function view_details(i){
	    	$.ajax({                        
					url: '{{ route("admin.show_vehicle_service") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (data) { 
       
					    $("#vehicleNo_qv").html(data.data['vehicle_no']);
					    $("#vehicleNo_qv").html(data.data['vehicle_name']);
					    $("#regOn_qv").html(data.data['service_date']);
					    $("#typescript_qv").html(data.data['next_service_date']);
					    $("#serviceType_qv").html(data.data['service_type']);
					    $("#servDesc_qv").html(data.data['service_desc']);
					    $("#taxAmt_qv").html(data.data['service_amount']);
					    $("#add_qv").html(data.data['address']);
					    $("#city_qv").html(data.data['city']);
					    $("#TaxType_qv").html(data.data['district']);
					    $("#pincode_qv").html(data.data['pincode']);
					    $("#phone_qv").html(data.data['phone_no']);
					    $("#email_qv").html(data.data['email_id']);
					    $("#helpline_qv").html(data.data['helpline']);
              $("#details_qv").html(data.data['contact_person']);
					    $("#cName_qv").html(data.data['contact_person_name']);
					    $("#cDesign_qv").html(data.data['contact_person_designation']);
					    $("#cPMob_qv").html(data.data['contact_person_no']);
					    $("#cPEmail_qv").html(data.data['contact_person_email']);
					  
					 
					    $("#viewModal").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
}
// function delete_vehicle_services(i){

//           if(confirm('Are you sure you want to delete this service '))
//           {

//               $.ajax({                        

//                   url: '{{ route("admin.delete_vehicle_service") }}',                      

//                   type: 'GET',                       

//                   data: {id:i},      

//                   dataType: 'json',                       

//                   success: function (argument) {  
//                           alert(argument['message']);

//                           location.reload();
//                   },  
//                   error: function (hrx, ajaxOption, errorThrow) {     

//                       console.log(ajaxOption);                        

//                       console.log(errorThrow);                        

//                           }                   
//               });             

//       }
// }
function delete_vehicle_services(i){

if(confirm)
{

    $.ajax({                        

        url: '{{ route("admin.delete_vehicle_service") }}',                      

        type: 'GET',                       

        data: {id:i},      

        dataType: 'json',                       

        success: function (argument) {  
                // alert(argument['message']);
                swal('success','This Vehicle service deleted successfully','success').then((value)=>{
                  location.reload();
                    });
                
        },  
        error: function (hrx, ajaxOption, errorThrow) {     

            console.log(ajaxOption);                        

            console.log(errorThrow);                        

                }                   
    });             

}
}
</script>
<!--
<script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/vendor/jRespond/jRespond.min.js"></script>
<script src="assets/js/vendor/d3/d3.min.js"></script>
<script src="assets/js/vendor/d3/d3.layout.min.js"></script>
<script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>
<script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
<script src="assets/js/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/js/vendor/daterangepicker/daterangepicker.js"></script>
<script src="assets/js/vendor/screenfull/screenfull.min.js"></script>
<script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
<script src="assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>
<script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>
<script src="assets/js/vendor/raphael/raphael-min.js"></script>
<script src="assets/js/vendor/morris/morris.min.js"></script>
<script src="assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="assets/js/vendor/summernote/summernote.min.js"></script>
<script src="assets/js/vendor/coolclock/coolclock.js"></script>
<script src="assets/js/vendor/coolclock/excanvas.js"></script>
<script src="assets/js/select2.js"></script> 
<script src="assets/js/main.js"></script> -->
<!--/ Page Specific Scripts -->
<!-- Datatable scripts -->
<!-- <script src="assets/js/vendor/datatable_net/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.autoFill.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.select.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.buttons.min.js"></script>
<script src="assets/js/vendor/datatable_net/jszip.min.js"></script>
<script src="assets/js/vendor/datatable_net/pdfmake.min.js"></script>
<script src="assets/js/vendor/datatable_net/vfs_fonts.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.html5.min.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.colVis.min.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.print.min.js"></script> -->
<!-- cutom js for data table  -->
<!-- <script src="assets/js/vendor/datatable_net/dataTables.options.js"></script>  -->

<!-- datatable-script ends-->

<!-- <script src="assets/js/fullscreen.js"></script> -->
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
@endsection 