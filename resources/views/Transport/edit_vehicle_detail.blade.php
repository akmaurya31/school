c    @extends('layouts.admin_header')
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
<a href="javascript:void(0)">Vehicle Details</a>
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

  <div class="alert alert-success alert-dismissible">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <h5><i class="icon fas fa-check"></i> Alert!</h5>

        {{ $error }}

      </div>

@endforeach

@endif 

@if(Session::has('message'))

  <div class="alert alert-success alert-dismissible">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <h5><i class="icon fas fa-check"></i> Alert!</h5>

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
      <form role="form" method="post" action="{{route('admin.update_vehicle_details',$editdetail->id)}}" class="box">
      {{ csrf_field() }}
        <div class="row">
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehicleName">Vehicle Name</label>
            <input type="text" class="form-control" name="vehicle_name" value="{{$editdetail->vehicle_name}}" id="vehicle_name" placeholder="Vehicle Name">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="registerNo">Registration Number</label>
            <input type="text" class="form-control" name="registerNo" value="{{$editdetail->registerNo}}" id="registerNo" placeholder="KA04AB2341">  
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="registerDate">Registered On</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="registerDate" name="registerDate" autocomplete="off" value="{{$editdetail->registerDate}}" class="form-control"  />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="taxNo">Seat Capacity</label>
            <input class="form-control" type="seat_capacity" name="seat_capacity" value="{{$editdetail->seatCapacity}}" id="seat_capacity" placeholder="0" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="ownerName">Owner Name</label> 
            <input class="form-control" type="text" name="ownerName" id="ownerName" value="{{$editdetail->ownerName}}" placeholder="Owner Name" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="ownerAddr">Owner Address</label>
            <input class="form-control" name="ownerAddr" id="ownerAddr" value="{{$editdetail->ownerAddr}}" placeholder="Owner Address" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="ownerCo">Owner C/O</label>
            <input class="form-control" type="text" name="ownerCo" id="ownerCo" value="{{$editdetail->ownerCo}}" placeholder="Owner Name" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="fuel">Fuel Used</label>
            <select class="form-control ak_select2" value="{{$editdetail->fuel}}" name="fuel" id="fuel" required>
              <option value="">{{$editdetail->fuel}}</option>
              <option  value="Petrol">Petrol</option>
              <option value="Diesel">Diesel </option>
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="taxNo">Tax Number</label>
            <input class="form-control" type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" name="taxNo" id="taxNo" value="{{$editdetail->taxNo}}" placeholder="eg: 12345" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="taxAmount">Tax Amount </label>
            <input class="form-control" type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" name="taxAmount" id="taxAmount" value="{{$editdetail->taxAmount}}" placeholder="eg: 500" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="taxPayOn">Tax Pay On</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="taxPayOn" name="taxPayOn" autocomplete="off" value="{{$editdetail->taxPayOn}}" class="form-control"  />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="taxPayTo">Tax Pay To</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="taxPayTo" name="taxPayTo" autocomplete="off" value="{{$editdetail->taxPayTo}}" class="form-control"  />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="taxType">Tax Type</label>
            <input class="form-control" type="text" name="taxType" id="taxType" value="{{$editdetail->taxType}}" placeholder="Tax Type" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="insuranceCompany">Insurance Company</label>
            <input class="form-control" type="text" name="insuranceCompany" value="{{$editdetail->insuranceCompany}}" id="insuranceCompany" placeholder="company name" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="insuredAmount">Insured Amount</label>
            <input class="form-control" type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" name="insuredAmount" value="{{$editdetail->insuredAmount}}" id="insuredAmount" placeholder="eg: 1500" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="policyNo">Policy Number</label>
            <input class="form-control" type="number"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" name="policyNo" value="{{$editdetail->policyNo}}" id="policyNo" placeholder="policy number" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="insuredDate">Insured Date</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="insuredDate" autocomplete="off" name="insuredDate" value="{{$editdetail->insuredDate}}" class="form-control"  />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="insuredFrom">Insured From</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="insuredFrom" name="insuredFrom" autocomplete="off" value="{{$editdetail->insuredFrom}}" class="form-control"  />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="insuredTo">Insured To</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="insuredTo" name="insuredTo" autocomplete="off" value="{{$editdetail->insuredTo}}" class="form-control"  />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="insuredPd">Insured Period</label>
            <input class="form-control" type="number" name="insuredPd"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" value="{{$editdetail->insuredPd}}" id="insuredPd" placeholder="in years" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="claimAmount">Claim Amount</label>
            <input class="form-control" type="number" name="claimAmount"  onkeydown="limit(this,12);" onkeyup="limit(this,12);" value="{{$editdetail->claimAmount}}" id="claimAmount" placeholder="0" >
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="itemCost">Vehicle Average</label>
            <input class="form-control" type="text" name="itemCost" id="itemCost" value="{{$editdetail->itemCost}}" placeholder="in KM" >
          </div>

          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="vehiclemode">Vehicle Mode</label>
            <input class="form-control" type="text" name="vehiclemode" id="vehiclemode" value="{{$editdetail->vehiclemode}}" placeholder="In-house or Hire" >
          </div>

        </div>  
        <div class="submit-holder">
          <div class="row">
          <div class="col-sm-12 form__button--action"> 
          <div>
          <!-- <button type="reset" class="btn btn-red">Reset</button> -->
          </div>
          <div>
          <button type="submit" class="btn btn-blue"><i class="fa fa-floppy-o"></i>Save</button>
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
   
    $("#taxPayOn").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#taxPayTo").datepicker("option", "minDate", dt);
        }
    });
    
    $("#taxPayTo").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#taxPayOn").datepicker("option", "maxDate", dt);
        }
    });
    
    $("#registerDate").datepicker();
      $("#insuredDate").datepicker();
     $("#insuredFrom").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#insuredTo").datepicker("option", "minDate", dt);
        }
    });
     $("#insuredTo").datepicker({
        numberOfMonths: 1,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#insuredFrom").datepicker("option", "maxDate", dt);
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