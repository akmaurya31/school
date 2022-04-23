 @extends('layouts.admin_header')
    @section('title', 'Create Hostel Fee')
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
<a href="">Fees Invoice</a>
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
        <li role="tab" data-toggle="tab" class="active"><a href="#tab-pane--content1">Generate</a></li>
        <li role="tab" data-toggle="tab"><a href="#tab-pane--content2">Print</a></li>
        <li role="tab" data-toggle="tab"><a href="#tab-pane--content3">Invoice Status</a></li>
      </ul>
    </div>                     
    <!-- /tile body -->
  </section>
  <div class="form-tab-content">
  <!-- assets master -->
  <div class="tab-pane active" id="tab-pane--content1">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile collapsed">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i><strong>Generate</strong> Fee</h1>
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
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="selTerm">Select Term</label>
                <select class="form-control ak_select2" name="selTerm" id="selTerm" required>
                  <option>Select Category</option>
                  <option>term 1</option>
                  <option>term 2</option>
                  <option>term 3</option>
                  <option>term 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="installment">Installment</label>
                <select class="form-control ak_select2" name="installment" id="installment" required>
                  <option>Select Month</option>
                  <option>month 1</option>
                  <option>month 2</option>
                  <option>month 3</option>
                  <option>month 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="status">Status</label>
                <select class="form-control ak_select2" name="status" id="status" required>
                  <option>Select</option>
                  <option>Paid</option>
                  <option>Unpaid</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="sort">Sort</label>
                <select class="form-control ak_select2" name="sort" id="sort" required>
                  <option>Invoice No</option>
                  <option>option 2</option>
                  <option>option 3</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="course">Course</label>
                <select class="form-control ak_select2" name="course" id="course" required>
                  <option>Select</option>
                  <option>Prep</option>
                  <option>Nursery</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="selSection">Select Section</label>
                <select class="form-control ak_select2" name="selSection" id="selSection" required>
                  <option>Select</option>
                  <option>All</option>
                  <option>option 2</option>
                  <option>option 3</option>
                </select>
              </div>
            </div>
            <div class="submit-holder">
              <div class="row">
              <div class="col-sm-12 form__button--action"> 
              <div>
              <button type="reset" class="btn btn-blue">Generate</button>
              </div>
              <div>
              <button type="submit" data-value="Printing..." class="btn btn-blue btn-print"><i class="fa fa-print"></i>Print All</button>
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
        <strong>Fee</strong> List</h1>
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
                <th class="stl_th3">Select Term</th>
                <th class="stl_th4">Installment</th>
                <th class="stl_th5">Status</th>
                <th class="stl_th6">Sort</th>
                <th class="stl_th7">Course</th>
                <th class="stl_th8">Select Section</th>
                <th class="stl_th13 action_icons_th">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>1</td>
                <td>Monthly</td>
                <td>Jan</td>
                <td>Paid</td>
                <td>Invoice</td>
                <td>prep</td>
                <td>All</td>
                <td>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <!-- /tile body-->
        </section>
      </div>
    </div>
  </div>
  <!-- /assets master -->
  <!-- allotment -->
  <div class="tab-pane" id="tab-pane--content2">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile collapsed">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i><strong>Print</strong> Fee</h1>
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
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="txtSearchVal">Search By Admission Number Invoice Number</label>
                <input type="text" name="txtSearchVal" id="txtSearchVal" required>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <button type="submit" data-value="Searching.." class="btn btn-blue btn-print"><i class="fa fa-search"></i>Search</button>
              </div>
            </div>
          </form>
        </div>                        
        <!-- /tile body -->
        <!-- tile body -->
        <div class="tile-body collapse">
          
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
        <strong>Alloted</strong> List</h1>
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
                <th class="stl_th3">Item SL No</th>
                <th class="stl_th4">Category Type</th>
                <th class="stl_th5">Category Name</th>
                <th class="stl_th6">Item Name</th>
                <th class="stl_th7">Department</th>
                <th class="stl_th8">Holder Name</th>
                <th class="stl_th9">Issue Type</th>
                <th class="stl_th10">Issue By</th>
                <th class="stl_th11">Issue Date</th>
                <th class="stl_th12">Remarks</th>
                <th class="stl_th13 action_icons_th">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>1</td>
                <td>1234</td>
                <td>Chair</td>
                <td>Furniture</td>
                <td>Chair</td>
                <td>Library</td>
                <td>Admin</td>
                <td>Fresh</td>
                <td>Admin</td>
                <td>05/10/2020</td>
                <td>This item is not available</td>
                <td>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <!-- /tile body-->
        </section>
      </div>
    </div>
  </div>
  <!-- /allotment  -->
  <!-- revoke -->
  <div class="tab-pane" id="tab-pane--content3">
    <div class="row">
      <div class="col-md-12">
        <!-- tile -->
        <section class="tile collapsed">
        
        <!-- tile header -->
        <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i><strong>Withdraw</strong></h1>
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
          <form role="form" class="box">
            <div class="row">
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="selTerm__3">Select Term</label>
                <select class="form-control ak_select2" name="selTerm__3" id="selTerm__3" required>
                  <option>Select Category</option>
                  <option>term 1</option>
                  <option>term 2</option>
                  <option>term 3</option>
                  <option>term 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="installment__3">Installment</label>
                <select class="form-control ak_select2" name="installment__3" id="installment__3" required>
                  <option>Select Month</option>
                  <option>month 1</option>
                  <option>month 2</option>
                  <option>month 3</option>
                  <option>month 4</option>
                </select>
              </div>
              <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="status__3">Status</label>
                <select class="form-control ak_select2" name="status__3" id="status__3" required>
                  <option>Select</option>
                  <option>Paid</option>
                  <option>Unpaid</option>
                </select>
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
        <i class="fas fa-undo"></i>
        <strong>Withdraw</strong> List</h1>
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
                <th class="stl_th3">Item SL No</th>
                <th class="stl_th4">Category Type</th>
                <th class="stl_th5">Category Name</th>
                <th class="stl_th6">Item Name</th>
                <th class="stl_th7">Department</th>
                <th class="stl_th8">Holder Name</th>
                <th class="stl_th9">Revoke Type</th>
                <th class="stl_th10">Revoke By</th>
                <th class="stl_th11">Revoke Date</th>
                <th class="stl_th12">Remarks</th>
                <th class="stl_th13 action_icons_th">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>1</td>
                <td>1234</td>
                <td>Chair</td>
                <td>Furniture</td>
                <td>Chair</td>
                <td>Library</td>
                <td>Admin</td>
                <td>Fresh</td>
                <td>Admin</td>
                <td>05/10/2020</td>
                <td>This item is not available</td>
                <td>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
        <!-- /tile body-->
        </section>
      </div>
    </div>
  </div>
  <!-- /revoke -->
  <!-- re-issue -->
  <!-- /re-issue -->
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
<!-- modaladd category starts -->
<div id="formModal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <div class="ak_tile_subhead"> <h2> Add Category  </h2></div>
      </div>
      <form>
        <div class="modal-body row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="ctgName--mp1">Category Name *</label>
            <input class="form-control" type="text" name="ctgName--mp1" id="ctgName--mp1" placeholder="Eg: Microwave" required>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="ctgType--mp2">Category Type</label>
            <input class="form-control" type="text" name="ctgType--mp2" id="ctgType--mp2" placeholder="Eg: Grocery" required>
          </div>
          <div class="form-group col-xs-12">
            <label for="ctgRemarks">Remarks</label>
            <textarea class="form-control" rows="3" name="ctgRemarks" id="ctgRemarks" placeholder="" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-red">Reset</button>
          <button type="submit" class="btn btn-blue">Save<i class="fa fa-floppy-o"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- modal ends -->
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script> -->
<script>
$(function(){
  $("#modalClick").on('click',function(){
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