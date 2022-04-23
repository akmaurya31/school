    @extends('layouts.admin_header')
    @section('title', 'Add Vendor')
    @section('content')
<!--/ CONTROLS Content -->
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
<a href="javascript:void(0)">Vehicle Accident Details</a>
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
    <section class="tile collapsed">
    
    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
    <h1 class="custom-font"><i class="fa fa-car"></i><strong>Create</strong> Accident Details</h1>
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
      <form role="form" method="post" action="{{route('add_accident_details')}}" class="box">
        {{csrf_field()}}
        <div class="row">
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
            <label for="vehicleNo">Vehicle Number</label>
            <select class="form-control ak_select2" name="vehicle_no" id="vehicle_no" required>
              <option value="">Select Vehicle Number</option>
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
                <option value="{{$val->driver_name}}">{{$val->driver_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleNo">Accident Place</label>
            <input type="text" class="form-control" name="accident_place" id="accident_place" placeholder="Accident Place">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accidentDate">Accident Date</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="accident_date" name="accident_date" autocomplete="off" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDetails">Accident Collision Details</label>
            <input type="text" class="form-control" name="accident_Collision_details" id="accident_Collision_details" placeholder="Accident Collision Details">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accInjuries">Accident Injuries</label>
            <input type="text" class="form-control" name="accident_injuries" id="accident_injuries" placeholder="Accident Injuries">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDetails">Accident Details</label>
            <input type="text" class="form-control" name="accident_Details" id="accident_Details" placeholder="Accident Deatils">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDetails">DiAccident Collision Typescript</label>
            <input type="text" class="form-control" name="di_accident" id="di_accident" placeholder="">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Accident Death</label>
            <input type="text" class="form-control" name="accident_death" id="accident_death" placeholder="Accident Death">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Insurance Claim</label>
            <input type="text" class="form-control" name="insurance_claim" id="insurance_claim" placeholder="Yes/No">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Insurance Claim Amount</label>
            <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="insurance_claim_amt" id="insurance_claim_amt" placeholder="Insurance Claim Amount">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="accDeath">Applied Claim Amount</label>
            <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="applied_claim_amt" id="applied_claim_amt" placeholder="Applied Claim Amount">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="claimDate">Claim Applied On</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="claim_date" autocomplete="off" name="claim_date" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="settleClaim">Settled Claim Amount</label>
            <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="settle_claim" id="settle_claim" placeholder="Applied Claim Amount">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="claimSettle">Claim Settled On</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="claim_settle_date" autocomplete="off" name="claim_settle_date" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="medicalExpense">Medical Expenses</label>
            <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="medical_expense" id="medical_expense" placeholder="Hospital name">
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="hospitalName">Hospital Name</label>
            <input type="text" class="form-control" name="hospital_name" id="hospital_name" placeholder="Hospital name">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="doctorName">Doctor Name</label>
            <input type="text" class="form-control" name="doctor_name" id="doctor_name" placeholder="Doctor name">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="claimResolve">Claim Resolved Through</label>
            <input type="text" class="form-control" name="claim_resolve" id="claim_resolve" placeholder="Claim resolved through">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="legalRespresentation">Legaly Represented By</label>
            <input type="text" class="form-control" name="legal_respresentation" id="legal_respresentation" placeholder="Legally Representation By">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="repairCost">Repair Cost</label>
            <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="repair_cost" id="repair_cost" placeholder="Cost">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="policeStn">Nearest Police Station</label>
            <input type="text" class="form-control" name="police_station" id="police_station" placeholder="Nearest Police Station">
          </div>
        </div>
        <div class="submit-holder">
          <div class="row">
          <div class="col-sm-12 form__button--action"> 
          <div>
          <button type="reset" class="btn btn-red">Reset</button>
          </div>
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
  <div class="col-md-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font">
    <i class="fas fa-list"></i>
    <strong>Vehicle</strong> Accident List</h1>
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
            <th class="stl_th4">Driver Name</th>
            <th class="stl_th5">Accident Place</th>
            <th class="stl_th6">Accident Date</th>
            <th class="stl_th9 action_icons_th">Actions</th>
            <th class="stl_th10">Status</th>
          </tr>
        </thead>
        <tbody>
        @foreach($accidentdetail as $key=>$val)
            <tr>
              <td></td>
              <td>{{++$key}}</td>
              <td>{{$val->vehicle_name}}</td>
              <td>{{$val->driver_name}}</td>
              <td>{{$val->accident_place}}</td>
              <td>{{$val->accident_date}}</td>
           
              <td>
                <a href="{{route('admin.edit_accident_details',$val->id)}}" class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                <button class="btn badge badge-warning" data-toggle="tooltip" onclick="return view_accidentdetail({{ $val->id}});" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                <button class="btn badge badge-warning" data-toggle="tooltip"  onclick="return delete_accidentdetail({{$val->id}});" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
              </td>
              <!-- <td><span class="status badge badge-danger">Inactive</span></td> -->
              <td> <a href="javascript:void(0);" onclick="return statusupdate_accident_details({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>

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
                      <li class="qi-item id-1"><b>Vehicle Name:</b> <span id="vehicleName_qv">Tata Bus</span></li>
                      <li class="qi-item id-2"><b>Vehicle Number:</b> <span id="vehicleNo_qv">DL 04 JC 6789</span></li>
                      <li class="qi-item id-3"><b>Accident Place:</b> <span id="accPlace_qv"></span></li>
                      <li class="qi-item id-3"><b>Accident Date:</b> <span id="accDate_qv"></span></li>
                      <li class="qi-item id-3"><b>Accident Collision Detail:</b> <span id="accColision"></span></li>
                      <li class="qi-item id-3"><b>Accident Injuries:</b> <span id="accInjurie"></span></li>
                      <li class="qi-item id-3"><b>Accident Details:</b> <span id="accDetail_qv"></span></li>
                      <li class="qi-item id-4"><b>DiAccident Collision Typescript:</b> <span id="typescript_qv">DiAccident Collision Typescript details</span></li>
                      <li class="qi-item id-5"><b>Accident Death:</b> <span id="accDeath_qv">0</span></li>
                      <li class="qi-item id-6"><b>Insurance Claim:</b> <span id="insClaim_qv">No</span></li>
                      <li class="qi-item id-7"><b>Insurance Claim Amount:</b> <span id="claimAmt_qv">5000</span></li>
                      <li class="qi-item id-8"><b>Applied Claim Amount:</b> <span id="appClaimAmt_qv">10000</span></li>
                      <li class="qi-item id-9"><b>Claim Applied On:</b> <span id="claiimAppliedOn_qv">25 Apr 2020</span></li>
                      <li class="qi-item id-10"><b>Settled Claim Amount:</b> <span id="settle_qv">7000</span></li>
                      <li class="qi-item id-11"><b>Claim Settled On:</b> <span id="settleOn_qv">25 Aug 2020</span></li>
                      <li class="qi-item id-12"><b>Medical Expenses:</b> <span id="medExpense_qv">7000</span></li>
                      <li class="qi-item id-13"><b>Hospital Name:</b> <span id="hospitalName_qv">Center Point Hospital</span></li>
                      <li class="qi-item id-14"><b>Doctor Name:</b> <span id="dr_qv">Dr Singh</span></li>
                      <li class="qi-item id-15"><b>Claim Resolved Through:</b> <span id="claimResolve_qv">2000</span></li>
                      <li class="qi-item id-16"><b>Legally Represented By:</b> <span id="legal_qv">2000</span></li>
                      <li class="qi-item id-17"><b>Repair Cost:</b> <span id="reapir_cost">15000</span></li>
                      <li class="qi-item id-18"><b>Nearest Police Station:</b> <span id="police_stn">Railway lines</span></li>
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
<script>
  function limit(element,limit)
{
    var max_chars = limit;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}

$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});


// success: function (argument) {  
//                   swal({
//                           title: 'Are you sure?',
//                           text: "You won't be able to revert this!",
//                           type: 'warning',
//                           showCancelButton: true,
//                           confirmButtonColor: '#3085d6',
//                           cancelButtonColor: '#d33',
//                           confirmButtonText: 'Yes, delete it!'
//                         }).then(function () {
//                           swal(
//                             'Deleted!',
//                             'Your file has been deleted.',
//                             'success'
//                           )
//                         }).then((value)=>{
//                                  location.reload();
//                   });


function statusupdate_accident_details(i){

if(confirm('Are you sure you want to change status '))
{

    $.ajax({                        

        url: '{{ route("admin.status_accident_details") }}',                      

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



function delete_accidentdetail(i){

if(confirm)
{

    $.ajax({                        

        url: '{{ route("admin.delete_accident_details") }}',                      

        type: 'GET',                       

        data: {id:i},      

        dataType: 'json',                       

        success: function (argument) {  
          swal('success','This Vehicle accident deleted successfully','success').then((value)=>{
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



function view_accidentdetail(i){
$.ajax({                        
  url: '{{ route("admin.show_accident_details") }}',                      
  type: 'GET',                       
  data: {id:i},      
  dataType: 'json',                       
  success: function(data) { 
      $("#vehicleName_qv").html(data.data['vehicle_name']);
      $("#vehicleNo_qv").html(data.data['vehicle_no']);
      $("#accPlace_qv").html(data.data['accident_place']);
      $("#accDate_qv").html(data.data['accident_date']);
      $("#accColision").html(data.data['accident_Collision_details']);
      $("#accInjurie").html(data.data['accident_injuries']);
      $("#accDetail_qv").html(data.data['accident_Details']);
      $("#typescript_qv").html(data.data['di_accident']);
      $("#accDeath_qv").html(data.data['accident_death']);
      $("#insClaim_qv").html(data.data['insurance_claim']);
      $("#claimAmt_qv").html(data.data['insurance_claim_amt']);
      $("#appClaimAmt_qv").html(data.data['applied_claim_amt']);
      $("#claiimAppliedOn_qv").html(data.data['claim_date']);
      $("#settle_qv").html(data.data['settle_claim']);
      $("#settleOn_qv").html(data.data['claim_settle_date']);
      $("#medExpense_qv").html(data.data['medical_expense']);
      $("#hospitalName_qv").html(data.data['hospital_name']);
      $("#dr_qv").html(data.data['dr_qv']);
      $("#claimResolve_qv").html(data.data['claim_resolve']);
      $("#legal_qv").html(data.data['legal_respresentation']);
      $("#reapir_cost").html(data.data['repair_cost']);
      $("#police_stn").html(data.data['police_station']);
     
    
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
<script>
$(window).load(function(){
// Initialize Statistics chart
var data = [{
data: [[1,15],[2,40],[3,35],[4,39],[5,42],[6,50],[7,46],[8,49],[9,59],[10,60],[11,58],[12,74]],
label: 'Unique Visits',
points: {
show: true,
radius: 4
},
splines: {
show: true,
tension: 0.45,
lineWidth: 4,
fill: 0
}
}, {
data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
label: 'Page Views',
bars: {
show: true,
barWidth: 0.6,
lineWidth: 0,
fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
}
}];
var options = {
colors: ['#e05d6f','#61c8b8'],
series: {
shadowSize: 0
},
legend: {
backgroundOpacity: 0,
margin: -7,
position: 'ne',
noColumns: 2
},
xaxis: {
tickLength: 0,
font: {
color: '#fff'
},
position: 'bottom',
ticks: [
[ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
]
},
yaxis: {
tickLength: 0,
font: {
color: '#fff'
}
},
grid: {
borderWidth: {
top: 0,
right: 0,
bottom: 1,
left: 1
},
borderColor: 'rgba(255,255,255,.3)',
margin:0,
minBorderMargin:0,
labelMargin:20,
hoverable: true,
clickable: true,
mouseActiveRadius:6
},
tooltip: true,
tooltipOpts: {
content: '%s: %y',
defaultTheme: false,
shifts: {
x: 0,
y: 20
}
}
};
var plot = $.plot($("#statistics-chart"), data, options);
$(window).resize(function() {
// redraw the graph in the correctly sized div
plot.resize();
plot.setupGrid();
plot.draw();
});
// * Initialize Statistics chart
//Initialize morris chart
Morris.Donut({
element: 'browser-usage',
data: [
{label: 'Income', value: 25000, color: '#00a3d8'},
{label: 'Expenditure', value: 20000, color: '#2fbbe8'},
{label: 'Admission', value: 15000, color: '#72cae7'},
{label: 'Result', value: 5000, color: '#d9544f'},
{label: 'Transfer Certificates', value: 10000, color: '#ffc100'},
{label: 'Other', value: 25000, color: '#1693A5'}
],
resize: true
});
//*Initialize morris chart
// Initialize owl carousels
$('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
autoPlay: 5000,
stopOnHover: true,
slideSpeed : 300,
paginationSpeed : 400,
singleItem : true,
responsive: true
});
$('#appointments-carousel').owlCarousel({
autoPlay: 5000,
stopOnHover: true,
slideSpeed : 300,
paginationSpeed : 400,
navigation: true,
navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
singleItem : true
});
//* Initialize owl carousels
// Initialize rickshaw chart
var graph;
var seriesData = [ [], []];
var random = new Rickshaw.Fixtures.RandomData(50);
for (var i = 0; i < 50; i++) {
random.addData(seriesData);
}
graph = new Rickshaw.Graph( {
element: document.querySelector("#realtime-rickshaw"),
renderer: 'area',
height: 133,
series: [{
name: 'Series 1',
color: 'steelblue',
data: seriesData[0]
}, {
name: 'Series 2',
color: 'lightblue',
data: seriesData[1]
}]
});
var hoverDetail = new Rickshaw.Graph.HoverDetail( {
graph: graph,
});
graph.render();
setInterval( function() {
random.removeData(seriesData);
random.addData(seriesData);
graph.update();
},1000);
//* Initialize rickshaw chart
//Initialize mini calendar datepicker
$('#mini-calendar').datetimepicker({
inline: true
});
//*Initialize mini calendar datepicker
//todo's
$('.widget-todo .todo-list li .checkbox').on('change', function() {
var todo = $(this).parents('li');
if (todo.hasClass('completed')) {
todo.removeClass('completed');
} else {
todo.addClass('completed');
}
});
//* todo's
//initialize datatable
$('#project-progress').DataTable({
"aoColumnDefs": [
{ 'bSortable': false, 'aTargets': [ "no-sort" ] }
],
});
//*initialize datatable
//load wysiwyg editor
$('#summernote').summernote({
toolbar: [
//['style', ['style']], // no style button
['style', ['bold', 'italic', 'underline', 'clear']],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
['height', ['height']],
//['insert', ['picture', 'link']], // no insert buttons
//['table', ['table']], // no table button
//['help', ['help']] //no help button
],
height: 143   //set editable area's height
});
//*load wysiwyg editor
});
</script>
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
<script src="assets/js/vendor/datatable_net/dataTables.options.js"></script> 

<script src="assets/js/fullscreen.js"></script> -->
<!-- datatable-script ends-->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

@if(Session::has('message'))

swal({
  icon: "success",
  title: '{{ Session::get('message') }}',
});

@endif
</script>

@endsection 