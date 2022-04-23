 @extends('layouts.admin_header')
    @section('title', 'Fuel Report')
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
<a href="javascript:void(0)">Vehcile Management Report</a>
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
  <section class="tile"> 
    <!-- tile body -->
    <div class="tile-body" id="content-tabs">
      <ul class="nav nav-pills">
        <li role="tab" data-toggle="tab" class="active"><a href="#tab-pane--content1">Vehicle Details</a></li>
        <li role="tab" data-toggle="tab"><a href="#tab-pane--content2">Accident Report</a></li>
        <li role="tab" data-toggle="tab"><a href="#tab-pane--content3">Insurance Report</a></li>
        <li role="tab" data-toggle="tab"><a href="#tab-pane--content4">Route Report</a></li>
        <li role="tab" data-toggle="tab"><a href="#tab-pane--content5">Stop Report</a></li>
      </ul>
    </div>                     
    <!-- /tile body -->
  </section>
  <div class="form-tab-content">
  <!-- vehicle report -->
  <div class="tab-pane active" id="tab-pane--content1">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm">
        <h1 class="custom-font"><i class="fa fa-search"></i><strong>Search</strong> Report</h1>
        </div>
        <!-- /tile header -->
        
        <!-- tile body -->
        <div class="tile-body">
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <select class="form-control ak_select2" name="searchSel--1" id="searchSel--1" required>
                  <option>Select Category</option>
                  <option>Active 1</option>
                  <option>Active 2</option>
                  <option>Active 3</option>
                  <option>Active 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <button type="submit" data-value="Fetching results..." class="btn btn-blue"><i class="fa fa-search"></i>Search</button>
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
        <strong>Vehcile</strong> Report Lists</h1>
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
                <th class="stl_th3">Vehicle Number</th>
                <th class="stl_th4">Vehicle Type</th>
                <th class="stl_th5">Fuel Type</th>
                <th class="stl_th6">Owner Name</th>
                <th class="stl_th7">Seat Capacity</th>
                <th class="stl_th8">Insurance Due Date</th>
                <th class="stl_th9">Tax Due Date</th>
                <th class="stl_th10">Pollution Due Date</th>
                <th class="stl_th12">Next Service Date</th>
                <th class="stl_th13">Service Due</th>
                <th class="stl_th14">Vehicle Status</th>
              </tr>
            </thead>
            <tbody>

             @foreach($vehicle as $key=>$val)
              <tr>
                <td></td>
                <td>{{++$key}}</td>
                <td>{{$val->registerNo}}</td>
                <td>{{$val->vehicle_name}}</td>
                <td>{{$val->fuel}}</td>
                <td>{{$val->ownerName}}</td>
                <td>{{$val->seatCapacity}}</td>
                <td>{{$val->insurancedate}}</td>
                <td>{{$val->taxPayTo}}</td>
                <td>{{$val->pollutionenddate}}</td>
                <td>{{$val->nextservicedate}}</td>
                <td>{{$val->servicedate}}</td>
                <td> <a href="javascript:void(0);" onclick="return vehicle_status({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>
              </tr>
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
  <!-- /vehicle report -->
  <!-- accident report -->
  <div class="tab-pane" id="tab-pane--content2">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm">
        <h1 class="custom-font"><i class="fa fa-search"></i><strong>Search</strong> Report</h1>
        </div>
        <!-- /tile header -->
        
        <!-- tile body -->
        <div class="tile-body">
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <select class="form-control ak_select2" name="searchSel--2" id="searchSel--2" required>
                  <option>Select Category</option>
                  <option>Active 1</option>
                  <option>Active 2</option>
                  <option>Active 3</option>
                  <option>Active 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <button type="submit" data-value="Fetching results..." class="btn btn-blue"><i class="fa fa-search"></i>Search</button>
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
        <strong>Accident</strong> Report Lists</h1>
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
                <th class="stl_th3">Vehicle Number</th>
                <th class="stl_th4">Vehicle Type</th>
                <th class="stl_th4">Accident Place</th>
                <th class="stl_th4">Date</th>
                <th class="stl_th4">Accident Details</th>
                <th class="stl_th4">Collision Details</th>
                <th class="stl_th5">Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach($accident as $key=>$val)
           
              <tr>
                <td></td>
                <td>{{++$key}}</td>
                <td>{{$val->vehicle_no}}</td>
                <td>{{$val->vehicle_name}}</td>
                <td>{{$val->accident_place}}</td>
                <td>{{$val->accident_date}}</td>
                <td>{{$val->accident_Details}}</td>
                <td>{{$val->accident_Collision_details}}</td>
                <td> <a href="javascript:void(0);" onclick="return accident_status({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>
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
  <!-- /accident report -->
  <!-- insurance report -->
  <div class="tab-pane" id="tab-pane--content3">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm">
        <h1 class="custom-font"><i class="fa fa-search"></i><strong>Search</strong> Report</h1>
        </div>
        <!-- /tile header -->
        
        <!-- tile body -->
        <div class="tile-body">
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <select class="form-control ak_select2" name="searchSel--3" id="searchSel--3" required>
                  <option>Select Category</option>
                  <option>Active 1</option>
                  <option>Active 2</option>
                  <option>Active 3</option>
                  <option>Active 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <button type="submit" data-value="Fetching results..." class="btn btn-blue"><i class="fa fa-search"></i>Search</button>
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
        <strong>Insurance</strong> Report Lists</h1>
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
                <th class="stl_th3">Vehicle Number</th>
                <th class="stl_th4">Vehicle Type</th>
                <th class="stl_th5">Insurance Company</th>
                <th class="stl_th6">Insured Amount</th>
                <th class="stl_th7">Insured Period</th>
                <th class="stl_th8">Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach($insurence as $key=>$val)
           
              <tr>
                <td></td>
                <td>{{++$key}}</td>
                <td>{{$val->vehicle_no}}</td>
                <td>{{$val->vehicle_name}}</td>
                <td>{{$val->insurance_company}}</td>
                <td>{{$val->insurance_amount}}</td>
                <td>{{$val->insurance_period}}</td>
                <td> <a href="javascript:void(0);" onclick="return insurence_status({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>
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
  <!-- /insurance report  -->
  <!-- route report -->
  <div class="tab-pane" id="tab-pane--content4">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm">
        <h1 class="custom-font"><i class="fa fa-search"></i><strong>Search</strong> Report</h1>
        </div>
        <!-- /tile header -->
        
        <!-- tile body -->
        <div class="tile-body">
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <select class="form-control ak_select2" name="searchSel--4" id="searchSel--4" required>
                  <option>Select Category</option>
                  <option>Active 1</option>
                  <option>Active 2</option>
                  <option>Active 3</option>
                  <option>Active 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <button type="submit" data-value="Fetching results..." class="btn btn-blue"><i class="fa fa-search"></i>Search</button>
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
        <strong>Route</strong> Report Lists</h1>
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
                <th class="stl_th3">Route Name</th>
                <th class="stl_th4">Starting Place</th>
                <th class="stl_th5">Ending Place</th>
                <th class="stl_th6">Distance KM</th>
                <th class="stl_th7">Created On</th>
                <th class="stl_th8">Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach($route as $key=>$val)
              <tr>
              <td></td>
                <td>{{++$key}}</td>
                <td>{{$val->route_name}}</td>
                <td>{{$val->starting_point}}</td>
                <td>{{$val->ending_point}}</td>
                <td>{{$val->distance}}</td>
                <td>{{$val->created_at}}</td>
               
                <td> <a href="javascript:void(0);" onclick="return route_status({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>
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
  <!-- /route report -->
  <!-- stop report -->
  <div class="tab-pane" id="tab-pane--content5">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm">
        <h1 class="custom-font"><i class="fa fa-search"></i><strong>Search</strong> Report</h1>
        </div>
        <!-- /tile header -->
        
        <!-- tile body -->
        <div class="tile-body">
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <select class="form-control ak_select2" name="searchSel--5" id="searchSel--5" required>
                  <option>Select Category</option>
                  <option>Active 1</option>
                  <option>Active 2</option>
                  <option>Active 3</option>
                  <option>Active 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <button type="submit" data-value="Fetching results..." class="btn btn-blue"><i class="fa fa-search"></i>Search</button>
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
        <strong>Stop</strong> Report Lists</h1>
        </div>
        <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body ak_table ak_table2 ak_dtablestyle">
          <div class="table_ws_nowrap">
             <!-- <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
              <thead>
                <tr>
                  <th class="stl_th1"></th>
                  <th class="stl_th2">SL</th>
                  <th class="stl_th3">Route Name</th>
                  <th class="stl_th4">Starting Place</th>
                  <th class="stl_th5">Ending Place</th>
                  <th class="stl_th6">Stop Name</th>
                  <th class="stl_th8">Status</th>
                </tr>
              </thead>
              <tbody>
               
                @foreach($route as $key=>$val)
            
              <tr>
                <td></td>
                <td>{{++$key}}</td>
                <td>DAV School - Gokul Sweet - Laal Chowk</td>
                <td>DAV School</td>
                <td>Laal Chowk</td>
                <td>{{$val->stop}}</td>
                <td><span class="status badge badge-success">Active</span></td>
              </tr>
           
            @endforeach
               
              </tbody>
            </table> -->
            <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
              <thead>
                <tr>
                  <th class="stl_th1"></th>
                  <th class="stl_th2">SL</th>
                  <th class="stl_th3">Stop Name</th>
                  <th class="stl_th4">Longitude</th>
                  <th class="stl_th5">Latitude</th>
                  <th class="stl_th8">Status</th>
                </tr>
              </thead>
              <tbody>
               
                @foreach($stop as $key=>$val)
            
              <tr>
                <td></td>
                <td>{{++$key}}</td>
                <td>{{$val->stop}}</td>
                <td>{{$val->longitude}}</td>
                <td>{{$val->latitude}}</td>
               
                <td> <a href="javascript:void(0);" onclick="return stop_status({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>

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
  <!-- /stop report -->
  <!-- /tile -->
  </div>
</div>
</div>
</div>
<p class="cright">&copy; Copyright 2020, All Right Reserved</p>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"></script>')</script>
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
   
function vehicle_status(i){

if(confirm('Are you sure you want to change status '))
{

    $.ajax({                        

        url: '{{ route("admin.statusupdate_vehicle_details") }}',                      

        type: 'GET',                       

        data: {id:i},      

        dataType: 'json',                       

        success: function (argument) {  
               swal(argument['message']).then((value)=>{ location.reload();
               });
        },  
        error: function (hrx, ajaxOption, errorThrow) {     

            console.log(ajaxOption);                        

            console.log(errorThrow);                        

                }                   
    });             

}
}


function accident_status(i){

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


function insurence_status(i){

if(confirm('Are you sure you want to change status '))
{

    $.ajax({                        

        url: '{{ route("insurance_status") }}',                      

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



function route_status(i){

if(confirm('Are you sure you want to change status '))
{

    $.ajax({                        

        url: '{{ route("admin.route_status") }}',                      

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


function stop_status(i){

if(confirm('Are you sure you want to change status '))
{

    $.ajax({                        

        url: '{{ route("stop_status") }}',                      

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

</script>
<script>
  function limit(element,limit)
{
    var max_chars = limit;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}


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
<script src="assets/js/vendor/datatable_net/buttons.print.min.js"></script> -->
<!-- cutom js for data table  -->
<!-- <script src="assets/js/vendor/datatable_net/dataTables.options.js"></script> -->

<!-- datatable-script ends-->

<!--<script src="assets/js/fullscreen.js"></script> -->
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