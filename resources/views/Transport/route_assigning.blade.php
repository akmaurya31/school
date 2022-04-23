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
<a href="javascript:void(0)">Route Assigning</a>
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
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <i class="fas fa-list"></i>
    <strong>Route</strong> Assigning</h1>
      <a role="button" id="modalClick" tabindex="0" class="modal-popup-link">
        <i class="fa fa-map" aria-hidden="true"></i> Create
      </a>
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
            <th class="stl_th3">Route</th>
            <th class="stl_th4">Vehicle</th>
            <th class="stl_th5">Student</th>
            <th class="stl_th6 action_icons_th">Actions</th>
            <th class="stl_th7">Status</th>
          </tr>
        </thead>
        <tbody>
            @foreach($assign as $key=>$val)
              <tr>
                <td></td>
                <td class="visible">{{++$key}}</td>
                <td class="visible">{{$val->routename}}</td>
                <td>{{$val->vehicle}}</td>
                <td>{{$val->student}}</td>

                <td>
                  <button class="btn badge badge-warning" onclick="return edit_details({{ $val->id}});" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning"  onclick="return view_details({{ $val->id}});" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" onclick="return delete_route_assign({{ $val->id}});" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                </td>
           <td> <a href="javascript:void(0);" onclick=" route_assigning_status({{ $val->id}});">@if($val->status == 1)<span class="status badge badge-success">Active</span>@else <span class="status badge badge-danger">Inactive</span>@endif</a></td>
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
<!-- create route assign -->
<div id="formModal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <div class="ak_tile_subhead"> <h2> Create Route Assigning</h2></div>
      </div>
      <form role="form"  method="post" action="{{route('admin.add_route_assigning')}}" class="box">
           {{ csrf_field() }}
        <div class="modal-body row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="class">Class</label>
            <select class="form-control ak_select2" name="class" id="class" required="" >
              <option value="">Select Class</option>
              <option value="Class 2">Class 2</option>
              <option value="Class 3">Class 3</option>
              <option value="Class 4">Class 4</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="division">Division</label>
            <select class="form-control ak_select2" name="division" id="division" required>
              <option value="">Select Division</option>
              <option value="Division 1">Division 1</option>
              <option value="Division 2">Division 2</option>
              <option value="Division 3">Division 3</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="studentSel">Student</label>
            <select class="form-control ak_select2" name="studentSel" id="studentSel" required>
              <option value="">Select Student</option>
              <option value="Advika Menon">Advika Menon</option>
              <option value="Student 2">Student 2</option>
              <option value="Student 3">Student 3</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="stop">Stop</label>
            <select class="form-control ak_select2" name="stop" id="stop" required>
              <option value="">Select Stop</option>
              @foreach($stop as $key=>$vala)
                 <option value="{{$vala->stop}}">{{$vala->stop}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="route_name">Route Name</label>
            <select class="form-control ak_select2" name="route_name" id="route_name" required>
              <option value="">Select Route</option>
              @foreach($route as $key=>$vala)
                 <option value="{{$vala->route_name}}">{{$vala->route_name}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="timeSel">Time</label>
            <select class="form-control ak_select2" name="timeSel" id="timeSel" required>
              <option value="">Select Time</option>
              <option value="Morning">Morning</option>
              <option value="Evening">Evening</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="vehicle_name">Vehicle</label>
            <select class="form-control ak_select2" name="vehicle_name" id="vehicle_name" required>
              <option value="">Select Vehicle</option>
              @foreach($vehicle as $key=>$vala)
                 <option value="{{$vala->vehicle_name}}">{{$vala->vehicle_name}}</option>
             @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-red">Reset</button>
          <button type="submit" class="btn btn-blue">Create<i class="fa fa-floppy-o"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /create route assign -->

<div id="formModal2" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <div class="ak_tile_subhead"> <h2> Edit Route Assigning</h2></div>
      </div>
      <form role="form"  method="post" action="{{route('admin.update_route_assigning')}}" class="box">
           {{ csrf_field() }}
        <div class="modal-body row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="class">Class</label>
            <select class="form-control ak_select2" name="class" id="class" required>
              <option>Select Class</option>
              <option>Class 2</option>
              <option>Class 3</option>
              <option>Class 4</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="division">Division</label>
            <select class="form-control ak_select2" name="division" id="division" required>
              <option>Select Division</option>
              <option>Division 1</option>
              <option>Division 2</option>
              <option>Division 3</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="studentSel">Student</label>
            <select class="form-control ak_select2" name="studentSel" id="studentSel" required>
              <option>Select Student</option>
              <option>Advika Menon</option>
              <option>Student 2</option>
              <option>Student 3</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="stop">Stop</label>
            <select class="form-control ak_select2" name="stop" id="stop" required>
              <option>Select Stop</option>
              @foreach($stop as $key=>$vala)
                 <option value="{{$vala->stop}}">{{$vala->stop}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="route_name">Route Name</label>
            <select class="form-control ak_select2" name="route_name" id="route_name" required>
              <option>Select Route</option>
              @foreach($route as $key=>$vala)
                 <option value="{{$vala->route_name}}">{{$vala->route_name}}</option>
             @endforeach
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="timeSel">Time</label>
            <select class="form-control ak_select2" name="timeSel" id="timeSel" required>
              <option>Select Time</option>
              <option>Morning</option>
              <option>Evening</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="vehicle_name">Vehicle</label>
            <select class="form-control ak_select2" name="vehicle_name" id="vehicle_name" required>
              <option>Select Vehicle</option>
              @foreach($vehicle as $key=>$vala)
                 <option value="{{$vala->vehicle_name}}">{{$vala->vehicle_name}}</option>
             @endforeach
            </select>
          </div>
          <input type="hidden" name="product_id" id="product_id" />

        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-red">Reset</button>
          <button type="submit" class="btn btn-blue">Save<i class="fa fa-floppy-o"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="viewRouteAssignedModal" class="modal fade ak_modal-style">
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
                      <li class="qi-item id-3"><b>Class:</b> <span id="class_qv">lorem ipsum</span></li>
                      <li class="qi-item id-4"><b>Division:</b> <span id="division_qv">lorem ispum division</span></li>
                      <li class="qi-item id-5"><b>Stop:</b> <span id="stop_qv">Kidwai Nagar</span></li>
                      <li class="qi-item id-6"><b>Time:</b> <span id="time_qv">Pune</span></li>
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

@if(Session::has('message'))

swal({
  icon: "success",
  title: '{{ Session::get('message') }}',
});
@endif

  function limit(element,limit)
{
    var max_chars = limit;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}

function delete_route_assign(i){

if(confirm)
{

    $.ajax({                        

        url: '{{ route("delete_route_assigning") }}',                      

        type: 'GET',                       

        data: {id:i},      

        dataType: 'json',                       

        success: function (argument) {  
          swal('success','This assigned route deleted successfully','success').then((value)=>{
                  location.reload();
                    });

                // location.reload();
        },  
        error: function (hrx, ajaxOption, errorThrow) {     

            console.log(ajaxOption);                        

            console.log(errorThrow);                        

                }                   
    });             

}
}

function view_details(i){
        $.ajax({                        
          url: '{{ route("admin.show_route_assigning")}}',                      
          type: 'GET',                       
          data: {id:i},      
          dataType: 'json',                       
          success: function (data) { 
              console.log(data.data.routename);
              $("#vehicleNo_qv").html(data.data.routename);
              $("#class_qv").html(data.data.class);
              $("#division_qv").html(data.data.division);
              $("#stop_qv").html(data.data.stop);
              $("#time_qv").html(data.data.time);
            
              $("#viewRouteAssignedModal").modal('show');
              
          },  
          error: function (hrx, ajaxOption, errorThrow) {     
            console.log(ajaxOption);                        
            console.log(errorThrow);                        
          }                   
    });
      return false;
}

function edit_details(i){
	    	$.ajax({                        
					url: '{{ route("admin.edit_route_assigning") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (data) {    
          

            $("#formModal2 #vehicle_name").empty();

            $("#formModal2 #vehicle_name").append(data.vehicle_name);

            $("#formModal2 #route_name").empty();

            $("#formModal2 #route_name").append(data.route_name);

            $("#formModal2 #stop").empty();

            $("#formModal2 #stop").append(data.stop);

					    $("#formModal2 #class").val(data.data['class']);
					    $("#formModal2 #division").val(data.data['division']);
					    $("#formModal2 #studentSel").val(data.data['student']);
					    $("#formModal2 #stop").val(data.data['stop']);
					    $("#formModal2 #route_name").val(data.data['routename']);
					    $("#formModal2 #timeSel").val(data.data['time']);
					    $("#formModal2 #vehicle_name").val(data.data['vehicle']);

              $("#formModal2 #product_id").val(i);

					    $("#formModal2").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
}


function route_assigning_status(i){

if(confirm('Are you sure you want to change status '))
{

    $.ajax({                        

        url: '{{ route("route_assigning_status") }}',                      

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


$(".editRouteAssign").on('click', function(){
  $("#formModal .ak_tile_subhead h2").html('Edit Route Mapping');
  $("#formModal").modal('show');
});

$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal .ak_tile_subhead h2").html('Create Route Mapping');
    $("#formModal").modal('show');
  });
});

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
@endsection 