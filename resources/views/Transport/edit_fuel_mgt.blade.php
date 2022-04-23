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
<a href="javascript:void(0)">Vehcile Fuel Management</a>
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
      <h1 class="custom-font"><i class="fa fa-car"></i><strong>Edit</strong> Fuel Details</h1>
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
        <form role="form" class="box"  method="post" action="{{route('admin.update_fuel_mgt',$editdetail->id)}}">
        {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="vehicleNo">Vehicle Number</label>
              <select class="form-control ak_select2" name="vehicle_no" id="vehicle_no" required>
              <option value="">{{$editdetail->vehicleno}}</option>
              @foreach($vehicle as $ds=>$vd)
                 <option value="{{$vd->registerNo}}">{{$vd->registerNo}}</option>
             @endforeach
            </select>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="vehicle_name">Vehicle Type</label>
              <select class="form-control ak_select2" name="vehicle_name" value="{{$editdetail->vehicle_name}}" id="vehicle_name" required>
              <option>{{$editdetail->vehicle_name}}</option>
              @foreach($vehicle as $key=>$vala)
                 <option value="{{$vala->vehicle_name}}">{{$vala->vehicle_name}}</option>
             @endforeach
            </select> 
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="fuelType">Fuel Type</label>
                <select class="form-control ak_select2" name="fuelType" required> 
                    <option>{{$editdetail->fuel_type}}</option>
                    <option>Petrol</option> 
                    <option>Diesel</option> 
                </select>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="tankCapacity">Tank Capacity</label>
                <select class="form-control ak_select2" name="tankCapacity" required> 
                    <option>{{$editdetail->tankcapacity}}</option>
                    <option>10 Lt</option> 
                    <option>20 Lt</option> 
                </select>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="liter">Average @ Litre</label>
                <select class="form-control ak_select2" name="liter" required> 
                    <option>{{$editdetail->liter}}</option>
                    <option>5</option> 
                    <option>10</option> 
                    <option>15</option> 
                </select>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="routeNo">Route Number</label>
                <select class="form-control ak_select2" name="routeNo" required> 
                    <option>{{$editdetail->route_no}}</option>
                    <option>Route 1</option> 
                    <option>Route 2</option> 
                    <option>Route 3</option> 
                    <option>Route 4</option>
                </select>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="routedis">Route Distance</label>
                <select class="form-control ak_select2" name="routedis" required> 
                    <option>{{$editdetail->route_dis}}</option>
                    <option>Dist 1</option> 
                    <option>Dist 2</option> 
                    <option>Dist 3</option> 
                    <option>Dist 4</option>
                </select>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="lastMtr">Last meter reading</label>
              <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" value="{{$editdetail->last_meter_reading}}" class="form-control" name="lastMtr" id="lastMtr" placeholder=" Ex: 1234567">  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="currentMtr">Current meter reading</label>
              <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" value="{{$editdetail->current_meter_reading}}" class="form-control" name="currentMtr" id="currentMtr" placeholder=" Ex: 456789">  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="totKmToday">Total km today</label>
              <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" value="{{$editdetail->total_km}}" class="form-control" name="totKmToday" id="totKmToday" placeholder=" Ex: 250">  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="fuelConsumed">Fuel Consumed</label>
              <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" value="{{$editdetail->fuel_consumed}}" class="form-control" name="fuelConsumed" id="fuelConsumed" placeholder=" Ex: =Km*Avg">  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="fuelTank">Fuel in Tank</label>
              <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" value="{{$editdetail->tank_fuel}}" class="form-control" name="fuelTank" id="fuelTank" placeholder=" Ex: =total capacity - consumed">  
            </div>
          </div>
          <div class="submit-holder">
            <div class="row">
            <div class="col-sm-12 form__button--action"> 
            <div>
            <button type="reset" class="btn btn-red">Reset</button>
            </div>
            <div>
            <button type="submit" data-value="New Vendor Added" class="btn btn-blue"><i class="fa fa-plus"></i>Save</button>
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
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
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

$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});

/* $(function(){
  $("#modalClick").on('click',function(){
    /* $("#formModal").modal('show'); 
    var formTemplate = $('#form-template form').clone()[0];
    swal({
      title: "Add Asset",
      className: 'swal--addAssets',  
      content: formTemplate,
      buttons: {
        reject : {
          text : "Close",
          className : 'btn btn-danger',
          closeModal:true
        },
        confirm: {
          text : 'Save',
          className : 'btn btn-success'
        }
      } 
    });
  });
});
 */

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
<script src="assets/js/vendor/datatable_net/buttons.print.min.js"></script> -->
<!-- cutom js for data table  -->
<!--<script src="assets/js/vendor/datatable_net/dataTables.options.js"></script> -->

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