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
<a href="javascript:void(0)">Trip Details</a>
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

@endif  --}}
    <!-- tile -->
    <section class="tile ">
    
    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
    <h1 class="custom-font"><i class="fa fa-car"></i><strong>Edit Vehicle Detail</strong></h1>
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
    <div class="tile-body ">
      <form role="form" method="post" action="{{route('admin.update_accident_details',$editaccident->id)}}" class="box">
      {{ csrf_field() }}
      <div class="row">
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleName">Vehicle Name</label>
            <select class="form-control ak_select2" name="vehicle_name" id="vehicle_name" required>
              <option>{{$editaccident->vehicle_name}}</option>
              @foreach($vehicle as $key=>$vala)
                 <option value="{{$vala->vehicle_name}}">{{$vala->vehicle_name}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleNo">Vehicle Number</label>
            <select class="form-control ak_select2" name="vehicle_no" id="vehicle_no" required>
              <option value="">{{$editaccident->vehicle_no}}</option>
              @foreach($vehicle as $ds=>$vd)
                 <option value="{{$vd->registerNo}}">{{$vd->registerNo}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="driverName">Driver Name</label>
            <select class="form-control ak_select2" name="driver_name" id="driver_name" required>
              <option>Select Driver</option>
              @foreach($driver as $key=>$val)
                <option @if($val->driver_name == $editaccident->driver_name) selected @endif value="{{$val->driver_name}}">{{$val->driver_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleNo">Accident Place</label>
            <input type="text" class="form-control" name="accident_place" value="{{$editaccident->accident_place}}" id="accident_place" placeholder="Accident Place">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accidentDate">Accident Date</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="accident_date" name="accident_date" value="{{$editaccident->accident_date}}" autocomplete="off" class="form-control"  />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDetails">Accident Collision Details</label>
            <input type="text" class="form-control" name="accident_Collision_details" value="{{$editaccident->accident_Collision_details}}" id="accident_Collision_details" placeholder="Accident Collision Details">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accInjuries">Accident Injuries</label>
            <input type="text" class="form-control" name="accident_injuries" value="{{$editaccident->accident_injuries}}" id="accident_injuries" placeholder="Accident Injuries">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDetails">Accident Details</label>
            <input type="text" class="form-control" name="accident_Details" value="{{$editaccident->accident_Details}}" id="accident_Details" placeholder="Accident Deatils">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDetails">DiAccident Collision Typescript</label>
            <input type="text" class="form-control" name="di_accident" value="{{$editaccident->di_accident}}" id="di_accident" placeholder="">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Accident Death</label>
            <input type="text" class="form-control" name="accident_death" value="{{$editaccident->accident_death}}" id="accident_death" placeholder="Accident Death">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Insurance Claim</label>
            <input type="text" class="form-control" name="insurance_claim" value="{{$editaccident->insurance_claim}}" id="insurance_claim" placeholder="Yes/No">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Insurance Claim Amount</label>
            <input type="number" class="form-control" name="insurance_claim_amt"  onkeydown="limit(this,13);" onkeyup="limit(this,13);" value="{{$editaccident->insurance_claim_amt}}" id="insurance_claim_amt" placeholder="Insurance Claim Amount">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Applied Claim Amount</label>
            <input type="number" class="form-control" name="applied_claim_amt"  onkeydown="limit(this,13);" onkeyup="limit(this,13);" value="{{$editaccident->applied_claim_amt}}" id="applied_claim_amt" placeholder="Applied Claim Amount">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="claimDate">Claim Applied On</label>
            <div class='input-group datepicker' data-format="L">
              <input type='text' id="claim_date" value="{{$editaccident->claim_date}}" name="claim_date" autocomplete="off" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="settleClaim">Settled Claim Amount</label>
            <input type="number" class="form-control" name="settle_claim"  onkeydown="limit(this,13);" onkeyup="limit(this,13);" value="{{$editaccident->settle_claim}}" id="settle_claim" placeholder="Applied Claim Amount">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="claimSettle">Claim Settled On</label>
            <div class='input-group datepicker' data-format="L">
              <input type='text' id="claim_settle_date" value="{{$editaccident->claim_settle_date}}" autocomplete="off" name="claim_settle_date" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="medicalExpense">Medical Expenses</label>
            <input type="number" class="form-control" name="medical_expense"  onkeydown="limit(this,13);" onkeyup="limit(this,13);" value="{{$editaccident->medical_expense}}" id="medical_expense" placeholder="Hospital name">
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="hospitalName">Hospital Name</label>
            <input type="text" class="form-control" name="hospital_name" value="{{$editaccident->hospital_name}}" id="hospital_name" placeholder="Hospital name">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="doctorName">Doctor Name</label>
            <input type="text" class="form-control" name="doctor_name" value="{{$editaccident->doctor_name}}" id="doctor_name" placeholder="Doctor name">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="claimResolve">Claim Resolved Through</label>
            <input type="text" class="form-control" name="claim_resolve" value="{{$editaccident->claim_resolve}}" id="claim_resolve" placeholder="Claim resolved through">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="legalRespresentation">Legaly Represented By</label>
            <input type="text" class="form-control" name="legal_respresentation" value="{{$editaccident->legal_respresentation}}" id="legal_respresentation" placeholder="Legally Representation By">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="repairCost">Repair Cost</label>
            <input type="number" class="form-control" name="repair_cost" value="{{$editaccident->repair_cost}}" id="repair_cost" placeholder="Cost">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="policeStn">Nearest Police Station</label>
            <input type="text" class="form-control" name="police_station" value="{{$editaccident->police_station}}"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" id="police_station" placeholder="Nearest Police Station">
          </div>
        </div>
        <div class="submit-holder">
          <div class="row">
          <div class="col-sm-12 form__button--action"> 
          <!-- <div>
          <button type="reset" class="btn btn-red">Reset</button>
          </div> -->
          <div>
          <button type="submit" data-value="New detail is added" class="btn btn-blue"><i class="fa fa-floppy-o"></i>Save</button>
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
                      <li class="qi-item id-1"><b>Vehicle Name:</b> <span id="vehicleName_qv"></span></li>
                      <li class="qi-item id-2"><b>Vehicle Number:</b> <span id="vehicleNo_qv"></span></li>
                      <li class="qi-item id-3"><b>Registered On:</b> <span id="regOn_qv"></span></li>
                      <li class="qi-item id-4"><b>Owner Address</b> <span id="typescript_qv"></span></li>
                      <li class="qi-item id-5"><b>Owner C/O:</b> <span id="ownCo_qv"></span></li>
                      <li class="qi-item id-6"><b>Tax Number:</b> <span id="taxNo_qv"></span></li>
                      <li class="qi-item id-7"><b>Tax Amount:</b> <span id="taxAmt_qv"></span></li>
                      <li class="qi-item id-8"><b>Tax Pay On:</b> <span id="taxPayon_qv"></span></li>
                      <li class="qi-item id-9"><b>Tax Pay To:</b> <span id="taxPayto_qv"></span></li>
                      <li class="qi-item id-10"><b>Tax Type:</b> <span id="TaxType_qv"></span></li>
                      <li class="qi-item id-11"><b>Insurance Company:</b> <span id="insuranceCo_qv"></span></li>
                      <li class="qi-item id-12"><b>Insured Amount:</b> <span id="insuredAmt_qv"></span></li>
                      <!-- <li class="qi-item id-13"><b>Policy Number:</b> <span id="policyNo_qv">123/ABC 456</span></li> -->
                      <li class="qi-item id-14"><b>Insured Date</b> <span id="insureDate_qv">  </span></li>
                      <li class="qi-item id-15"><b>Insured From:</b> <span id="insuredFrom_qv">  </span></li>
                      <li class="qi-item id-16"><b>Insured To:</b> <span id="insuredTo_qv">  </span></li>
                      <li class="qi-item id-17"><b>Insured Period:</b> <span id="insPeriod_qv"></span></li>
                      <li class="qi-item id-18"><b>Claim Amount:</b> <span id="claimAmt_qv"></span></li>
                      <li class="qi-item id-18"><b>Vehicle Average:</b> <span id="vehicleAvg_qv"></span></li>
                      <li class="qi-item id-18"><b>Fuel :</b> <span id="fuel_qv"></span></li>
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

$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});
$(function () {
   
    $("#claim_settle_date").datepicker({
       numberOfMonths: 1,
       onSelect: function (selected) {
           var dt = new Date(selected);
           dt.setDate(dt.getDate() - 1);
           $("#insuredFrom").datepicker("option", "maxDate", dt);
       }
   });

   $("#accident_date").datepicker({
       numberOfMonths: 1,
       onSelect: function (selected) {
           var dt = new Date(selected);
           dt.setDate(dt.getDate() + 1);
           $("#next_service_date").datepicker("option", "minDate", dt);
       }
   });
    $("#claim_date").datepicker({
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
					url: '{{ route("admin.show_vehicle_details") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (data) { 
       
					    $("#vehicleName_qv").html(data.data['vehicleName']);
					    $("#vehicleNo_qv").html(data.data['registerNo']);
					    $("#regOn_qv").html(data.data['registerDate']);
					    $("#typescript_qv").html(data.data['ownerAddr']);
					    $("#ownCo_qv").html(data.data['ownerCo']);
					    $("#taxNo_qv").html(data.data['taxNo']);
					    $("#taxAmt_qv").html(data.data['taxAmount']);
					    $("#taxPayon_qv").html(data.data['taxPayOn']);
					    $("#taxPayto_qv").html(data.data['taxPayTo']);
					    $("#TaxType_qv").html(data.data['taxType']);
					    $("#insuranceCo_qv").html(data.data['insuranceCompany']);
					    $("#insuredAmt_qv").html(data.data['insuredAmount']);
					    $("#insureDate_qv").html(data.data['insuredDate']);
					    $("#insuredFrom_qv").html(data.data['insuredFrom']);
              $("#insuredTo_qv").html(data.data['insuredTo']);
					    $("#insPeriod_qv").html(data.data['insuredPd']);
					    $("#claimAmt_qv").html(data.data['claimAmount']);
					    $("#fuel_qv").html(data.data['fuel']);
					  
					 
		
					   
					 
					    $("#viewModal").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
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
<!--
<script src="assets/js/vendor/datatable_net/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.autoFill.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.select.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.buttons.min.js"></script>
<script src="assets/js/vendor/datatable_net/jszip.min.js"></script>
<script src="assets/js/vendor/datatable_net/pdfmake.min.js"></script>
<script src="assets/js/vendor/datatable_net/vfs_fonts.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.html5.min.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.colVis.min.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.print.min.js"></script>
<!-- cutom js for data table  -->
 <!--<script src="assets/js/vendor/datatable_net/dataTables.options.js"></script>  -->

<!-- datatable-script ends-->

<!--<script src="assets/js/fullscreen.js"></script>-->
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