    @extends('layouts.admin_header')
    @section('title', 'Create Route')
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
<a href="javascript:void(0)">Route Details</a>
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
    <!-- tile -->
    <section class="tile collapsed">
    
    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
    <h1 class="custom-font"><i class="fa fa-map"></i><strong>Edit route</strong></h1>
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
      <form role="form" class="box" action="{{route('admin.update_route_details',$editroute->id)}}" method="post">
      {{ csrf_field() }}

        <div class="row">
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleNo">Vehicle No</label>
            <select class="form-control ak_select2" value="{{$editroute->vehicle_no}}"name="vehicle_no1" id="vehicle_no" required>
              <option>Select Vehicle</option>
              @foreach($vehicle as $key=>$vala)
                 <option value="{{$vala->vehicle_name}}">{{$vala->registerNo}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="routeName">Route Name</label>
            <input type="text" class="form-control" value="{{$editroute->route_name}}" name="route_name" id="route_name" placeholder="Route Name">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="routCode">Route Code</label>
            <input type="text" class="form-control" value="{{$editroute->route_code}}" name="route_code" id="route_code" placeholder="Route Code">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="routInfo">Route Information</label>
            <input type="text" class="form-control" value="{{$editroute->route_information}}" name="route_information" id="route_information" placeholder="Route Code">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleRoute">Select Vehicle to the route</label>
            <select class="form-control ak_select2" value="{{$editroute->vehicle_name}}" name="vehicle_name" id="vehicle_name" required>
              <option>Select Vehicle</option>
              @foreach($vehicle as $key=>$vala)
                 <option value="{{$vala->vehicle_name}}">{{$vala->vehicle_name}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="routStart">Route Starting Point</label>
            <input type="text" class="form-control" value="{{$editroute->starting_point}}" name="starting_point" id="starting_point" placeholder="Starting Point">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="routEnd">Route Ending Point</label>
            <input type="text" class="form-control" value="{{$editroute->ending_point}}" name="ending_point" id="ending_point" placeholder="Ending Point">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="distance">Apporximate Distance</label>
            <input type="number" class="form-control" value="{{$editroute->distance}}" name="distance" id="distance" placeholder="in KM">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="fare">Fare</label>
            <input type="text" class="form-control" value="{{$editroute->fare}}" name="fare" id="fare" placeholder="Priority">  
          </div>
        </div>  
        <div class="submit-holder">
          <div class="row">
          <div class="col-sm-12 form__button--action"> 
          <div>
          <button type="reset" class="btn btn-red">Reset</button>
          </div>
          <div>
          <button type="submit" data-value="New route detail is added" class="btn btn-blue"><i class="fa fa-floppy-o"></i>Save</button>
          </div>
          </div> 
          </div>
          </div>
         <div class="row">
          <div id="route-map"></div>
         </div> 
      </form>
    </div>                        
    <!-- /tile body -->
    </section>
    <!-- /tile -->
    </div>
  </div>
  </div>
  
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBColTxXJ_2aeTBOe1N6MvWakdM3mFTBfo"></script>
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


	// $(function init() {
  // 	navigator.geolocation.getCurrentPosition(function(response) {
  //   var mapOptions = {
  //     center: new google.maps.LatLng(response.coords.latitude, response.coords.longitude),
  //     zoom: 10,
  //     mapTypeId: google.maps.MapTypeId.HYBRID
  //   }

  //   var map = new google.maps.Map(document.getElementById("route-map"), mapOptions);
  //   });
  // }); 
</script>


<script>


function statusupdatevehicle(i){

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


$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});


function view_details(i){
	    	$.ajax({                        
					url: '{{ route("admin.show_route_details") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (data) { 
       
					    $("#vehicleNo_qv").html(data.data['vehicle_no']);
					    $("#routeName_qv").html(data.data['route_name']);
					    $("#routecode_qv").html(data.data['route_code']);
					    $("#info_qv").html(data.data['route_information']);
					    $("#vehiclename_qv").html(data.data['vehicle_name']);
					    $("#spoint_qv").html(data.data['starting_point']);
					    $("#epoint_qv").html(data.data['ending_point']);
					    $("#distance_qv").html(data.data['distance']);
					    $("#fare_qv").html(data.data['fare']);
					  
					 
					    $("#viewModal").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
}

function delete_route_details(i){

          if(confirm)
          {

              $.ajax({                        

                  url: '{{ route("admin.delete_route_details") }}',                      

                  type: 'GET',                       

                  data: {id:i},      

                  dataType: 'json',                       

                  success: function (argument) {  
                    swal('success','This Route deleted successfully','success').then((value)=>{
                          location.reload();
                            });

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