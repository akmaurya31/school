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
<a href="">Fine Setup</a>
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
      <h1 class="custom-font"><i class="fa fa-money"></i><strong>Fine</strong> Setup</h1>
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
        <form role="form" method='post' class="box" action="{{ route('Feemanagement.fine_store') }}">
         {{ csrf_field() }}
          <div class="row"> 

          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="feeTypeSel">Session</label>
              <select class="form-control ak_select2" name="fee_type" required> 
                <option>Select</option> 
                <option value='19'>2019-2020</option> 
                <option value='20'>2020-2021</option> 
                <option value='21'>2021-2022</option> 
                <option value='22'>2022-2023</option> 
              </select>
            </div>


          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="feeTypeSel">Wing</label>
              <select class="form-control ak_select2" name="fee_type" required> 
                <option>Select</option> 
                <option value='1'>JUNIOR WING 1</option> 
                <option value='2'>JUNIOR WING 2</option> 
                <option value='3'>SENIOR WING 1</option>
                <option value='4'>SENIOR WING 2</option>
              </select>
            </div>

           
             
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="fineVAl">Fine Value</label>
              <input type="number" class="form-control" name="fine_value" id="fine_value" placeholder="0" required>  
            </div>
            <!-- <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="onEveryDay">On Every (days)</label>
              <input type="number" class="form-control" name="on_everyday" id="on_everyday" placeholder="0" required>  
            </div> -->

            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="feeTypeSel">Fine Mode</label>
              <select class="form-control ak_select2" name="fee_type" required> 
                <option>Select</option> 
                <option value='1'>Per Day</option> 
                <option value='7'>Every Week</option> 
                <option value='30'>Every Month</option> 
              </select>
            </div> 

            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="batch">Fine Month</label>
              <select class="form-control ak_select2" name="fine_month" required> 
                <option>Select</option> 
                <option value='4'>April</option> 
                <option value='5'>May</option> 
                <option value='6'>June</option> 
                <option value='7'>July</option> 
              </select>
            </div>
          </div>  
          <div class="submit-holder">
            <div class="row">
            <div class="col-sm-12 form__button--action"> 
            <div>
            <button type="reset" class="btn btn-red"><i class="fa fa-repeat"></i>Reset</button>
            </div>
            <div>
            <button type="submit" data-value="New Vendor Added" class="btn btn-blue"><i class="fa fa-print"></i>Save</button>
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
      <strong>Fine</strong> Lists</h1>
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
             
              <th class="stl_th5">Session</th>
              <th class="stl_th6">Wing</th>
              <th class="stl_th7">Fine Value</th>
              <th class="stl_th7">Fine Mode</th>
              <th class="stl_th7">Fine Month</th>
              <th class="stl_th8 action_icons_th">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($finedata as $key) 
            <tr>
              <td></td>
              <td>{{$key->id}}</td>
             
              <td>{{$key->fine_value}}</td>
              <td>{{$key->on_everyday}}</td>
              <td>{{$key->up_to}}</td>
              <td>{{$key->amount_percent}}</td>
              <td>{{$key->amount_percent}}</td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
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
                      <li class="qi-item id-2"><b>Fees Type:</b> <span id="feesType_qv">Monthwise</span></li>
                      <li class="qi-item id-2"><b>Amount Percentage:</b> <span id="roll_qv">20</span></li>
                      <li class="qi-item id-2"><b>Exclude Month:</b> <span id="excludeMonth_qv">April</span></li>
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
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"></script>')</script> -->
@section('footer_scripts')
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
@endsection
