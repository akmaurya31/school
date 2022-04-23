    @extends('layouts.admin_header')
    @section('title', 'Owner Details')
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
<a href="javascript:void(0)">Vehcile Owner</a>
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
      <h1 class="custom-font"><i class="fa fa-user"></i><strong>Vehicle</strong> Owner</h1>
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
        <form role="form" class="box" method="post" action="{{route('admin.add_vehicle_owner')}}">
        {{ csrf_field() }}
          <div class="ak_tile_subhead"> <h2> Company Details </h2></div>
          <div class="row">
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="cmpName">Company Name</label>
              <input type="text" class="form-control" name="cmpName" id="cmpName" placeholder="Company Name" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="panNumber">PAN Number</label>
              <input type="text" class="form-control" name="panNumber" id="panNumber" placeholder=" Ex: 1878AUB8798ZXY" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="cmpMobNo">Company Mobile Number</label>
              <input type="tel" class="form-control" name="cmpMobNo" id="cmpMobNo" placeholder=" Ex: 1878AUB8798ZXY" pattern='(\+91[ -])?(\d{3})[ -]?(\d{3})[ -]?(\d{4})' maxlength="13" required >  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="cmpLLNo">Company Landline Number</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder=" Ex: 1878AUB8798ZXY" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="cmpEmail">Company Email</label>
              <input type="email" class="form-control" name="cmpEmail" id="cmpEmail" placeholder=" Ex: 1878AUB8798ZXY" required>  
            </div>
            <div class="input-group form-group col-lg-9 col-md-12 col-sm-6 col-xs-12">
              <div class="form-group col-lg-4 col-xs-12">
                <label for="address">Address *</label>
                  <textarea class="form-control" rows="5" name="address" id="address" placeholder="Address" required></textarea>
              </div>
              <div class="col-lg-8 col-xs-12">
                  <div class="row">
                      <div class="form-group col-sm-6 col-xs-12">
                          <label for="country">Country *</label>
                              <select class="form-control ak_select2" name="country" required> 
                                  <option>India</option> 
                                  <option>United States Of America</option> 
                                  <option>UAE</option> 
                                  <option>UK</option> 
                                  <option>Poland</option> 
                              </select>
                          </div>
                          <div class="form-group col-sm-6 col-xs-12">
                          <label for="state">State *</label>
                          
                              <select class="form-control ak_select2" name="state" required> 
                                  <option>Uttar Pradesh</option> 
                                  <option>Karnataka</option> 
                                  <option>Kerala</option> 
                                  <option>Punjab</option> 
                                  <option>Delhi</option> 
                              </select>
                          </div>
                      <div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
                      <label for="prcity">City *</label>
                      <input type="text" class="form-control" name="prcity" id="prcity" required />    
                      </div>
                      <div class="form-group col-lg-6 col-md-12 col-sm-6 col-xs-12">
                      <label for="prPinCode">Pin Code *</label>
                      <input type="number" class="form-control"  onkeydown="limit(this,6);" name="prPinCode" onkeyup="limit(this,6);"id="prPinCode" required maxlength="6" />    
                      </div>
                  </div>
              </div>  
            </div>
          </div>
          <div class="ak_tile_subhead"> <h2> Contact Person Details </h2></div>
          <div class="row">
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="perName">Owner Name</label>
              <input type="text" class="form-control" name="perName" id="perName" placeholder="Company Name" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="vehicleType">Vehicle Type</label>
              <input type="text" class="form-control" name="vehicleType" id="vehicleType" placeholder="Company Name" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="fromDate">From Date</label>
              <div class='input-group datepicker ' data-format="L">
                <input type='text' id="fromDate" autocomplete="off" name="fromDate" class="form-control" required />
                <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
                </span>
              </div>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="adhaar">Adhaar Card</label>
              <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="adhaar" id="adhaar" placeholder="Eg: 12345678" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="ownerMob">Owner Mobile No</label>
              <input type="tel" class="form-control" name="ownerMob" id="ownerMob" placeholder="Eg: +917865435670" maxlength="13" pattern='(\+91[ -])?(\d{3})[ -]?(\d{3})[ -]?(\d{4})' required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="ownerEmail">Email ID</label>
              <input type="email" class="form-control" name="ownerEmail" id="ownerEmail" placeholder="Eg: djmerrit45@gmail.com" required>  
            </div>
          </div>
          <div class="ak_tile_subhead"> <h2> Bank Details </h2></div>
          <div class="row">
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="bankName">Bank Name</label>
              <input type="text" class="form-control" name="bankName" id="bankName" placeholder="Company Name" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="Branch Name">Branch Name</label>
              <input type="text" class="form-control" name="BranchName" id="BranchName" placeholder="Branch Name" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="banckAccount">Account Number *</label>
                <input type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" class="form-control" name="banckAccount" id="banckAccount" placeholder="Company Address" required></textarea>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <label for="ifscCode">IFSC Code</label>
                <input type="text" class="form-control" name="ifscCode" id="ifscCode" placeholder="Eg: 12345678" required>  
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
    <div class="col-md-12">
      <section class="tile">
        <!-- tile header -->
      <div class="tile-header bg-blue dvd dvd-btm modal-action">
      <h1 class="custom-font">
      <i class="fas fa-list"></i>
      <strong>Owners</strong> List</h1>
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
              <th class="stl_th3">Company Name</th>
              <th class="stl_th4">Pan Number</th>
              <th class="stl_th5">Mobile Number</th>
              <th class="stl_th6">Address</th>
              <th class="stl_th7">Contact Person</th>
              <th class="stl_th8">Phone No</th>
              <th class="stl_th9">Type of vehicle</th>
              <th class="stl_th10">A/C No</th>
              <th class="stl_th11">Email ID</th>
              <th class="stl_th12 action_icons_th">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($detail as $key=>$val)
              <tr>
                <td></td>
                <td>{{++$key}}</td>
                <td>{{$val->companyname}}</td>
                <td>{{$val->pan_no}}</td>
                <td>{{$val->mobile_no}}</td>
                <td>{{$val->address}}</td>
                <td>{{$val->owner_name}}</td>
                <td>{{$val->owner_mob_no}}</td>
                <td>{{$val->vehicle_type}}</td>
                <td>{{$val->acc_no}}</td>
                <td>{{$val->email_id}}</td>
                

                <td>
                <a class="btn badge badge-warning" href="{{route('admin.edit_vehicle_owner',$val->id)}}" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                  <button class="btn badge badge-warning" onclick="return view_details({{ $val->id}});" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                  <button class="btn badge badge-warning" onclick="return delete_owner({{ $val->id}});" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                </td>
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
                      <li class="qi-item id-1"><b>Company Name:</b> <span id="coname"></span></li>
                      <li class="qi-item id-2"><b>PAN Number:</b> <span id="pan_no"></span></li>
                      <li class="qi-item id-3"><b>Company Mobile Number:</b> <span id="co_mob_no"></span></li>
                      <li class="qi-item id-4"><b>Company Landline Number</b> <span id="co_lad_no"></span></li>
                      <li class="qi-item id-5"><b>Company Email:</b> <span id="co_email"></span></li>
                      <li class="qi-item id-6"><b>Address :</b> <span id="add"></span></li>
                      <li class="qi-item id-7"><b>Country :</b> <span id="country"></span></li>
                      <li class="qi-item id-8"><b>City  :</b> <span id="city"></span></li>
                      <li class="qi-item id-9"><b>Owner Name:</b> <span id="o_name"></span></li>
                      <li class="qi-item id-10"><b>Vehicle Type:</b> <span id="v_type"></span></li>
                      <li class="qi-item id-11"><b>Email ID:</b> <span id="o_email"></span></li>
                      <li class="qi-item id-12"><b>Owner Mobile No:</b> <span id="o_mob"></span></li>
                      <li class="qi-item id-9"><b>Bank Name:</b> <span id="bank_name"></span></li>
                      <li class="qi-item id-10"><b>Branch Name:</b> <span id="branch"></span></li>
                      <li class="qi-item id-11"><b>Account Number:</b> <span id="ac_no"></span></li>
                      <li class="qi-item id-12"><b>IFSC Code:</b> <span id="ifsc"></span></li>
                    
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

  function limit(element,limit)
{
    var max_chars = limit;

    if(element.value.length > max_chars) {
        element.value = element.value.substr(0, max_chars);
    }
}


function delete_owner(i){

if(confirm)
{

    $.ajax({                        

        url: '{{ route("delete_vehicle_owner") }}',                      

        type: 'GET',                       

        data: {id:i},      

        dataType: 'json',                       

        success: function (argument) {  
          swal('success','This Vehicle owner deleted successfully','success').then((value)=>{
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


function view_details(i){
	    	$.ajax({                        
					url: '{{ route("admin.show_vehicle_owner") }}',                      
					type: 'GET',                       
					data: {id:i},      
					dataType: 'json',                       
					success: function (data) { 
       
					    $("#coname").html(data.data['companyname']);
					    $("#pan_no").html(data.data['pan_no']);
					    $("#co_mob_no").html(data.data['mobile_no']);
					    $("#co_lad_no").html(data.data['ladline_no']);
					    $("#co_email").html(data.data['company_email']);
					    $("#add").html(data.data['address']);
					    $("#country").html(data.data['country']);
					    $("#city").html(data.data['city']);
					    $("#o_name").html(data.data['owner_name']);
					    $("#v_type").html(data.data['vehicle_type']);
					    $("#o_email").html(data.data['email_id']);
					    $("#o_mob").html(data.data['owner_mob_no']);
              $("#bank_name").html(data.data['bank_name']);
					    $("#branch").html(data.data['branch_name']);
					    $("#ac_no").html(data.data['acc_no']);
					    $("#ifsc").html(data.data['ifsc_code']);

					 
					    $("#viewModal").modal('show');
					    
					},  
					error: function (hrx, ajaxOption, errorThrow) {     
						console.log(ajaxOption);                        
						console.log(errorThrow);                        
					}                   
		});
	    return false;
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
<script src="assets/js/main.js"></script>
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
<!-- <script src="assets/js/vendor/datatable_net/dataTables.options.js"></script> -->

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