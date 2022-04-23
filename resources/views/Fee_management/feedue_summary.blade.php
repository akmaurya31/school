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
<a href="">Due Fee Summary</a>
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
      <h1 class="custom-font"><i class="fa fa-money"></i><strong>Due</strong> Fee Summary</h1>
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
              <label for="sessionSel">Session</label>
              <select class="form-control ak_select2" name="sessionSel" required> 
                <option>Select</option> 
                <option>2020-21</option> 
                <option>2019-20</option> 
                <option>option 3</option> 
                <option>option 4</option> 
              </select>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="semSel">Semester</label>
              <select class="form-control ak_select2" name="semSel" required> 
                <option>Select</option> 
                <option>Semester 1</option> 
                <option>Semester 2</option> 
                <option>option 3</option> 
                <option>option 4</option> 
              </select>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="classSel">Class</label>
              <select class="form-control ak_select2" name="classSel" required> 
                <option>Select</option> 
                <option>option 1</option> 
                <option>option 2</option> 
                <option>option 3</option> 
                <option>option 4</option> 
              </select>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Section</label>
              <select class="form-control ak_select2" name="sectionSal" required> 
                <option>Select</option> 
                <option>option 1</option> 
                <option>option 2</option> 
                <option>option 3</option> 
                <option>option 4</option> 
              </select>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div>
              <button type="submit" data-value="New Vendor Added" class="btn btn-blue"><i class="fa fa-search"></i>Find</button>
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
      <strong>Due</strong>Summary Lists</h1>
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
              <th class="stl_th3">Class Name</th>
              <th class="stl_th4">Reg Number</th>
              <th class="stl_th5">Student Name</th>
              <th class="stl_th6">Month</th>
              <th class="stl_th7">Contact No</th>
              <th class="stl_th8">Total</th>
              <th class="stl_th9 action_icons_th">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td>1</td>
              <td>IX/A</td>
              <td>2870</td>
              <td>Vaishali Sharma</td>
              <td>Apr,May,Jun,Jul,Aug,Sep</td>
              <td>8295122007</td>
              <td>12536.00</td>
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
          <h3 class="modal-title custom-font">Fee Details</h3>
          <a class="modal-close" href="" data-dismiss="modal"><i class="fa fa-close"></i></a>
      </div>
      <div class="modal-body">
        <div>
          <button type="submit" data-value="Printing..." class="btn btn-blue"><i class="fa fa-print"></i>Print</button>
        </div>
        <div class="print-details">
          <div class="print-head">
            <div class="print-logo col-xs-4">
              <img class="img-responsive" src="https://placehold.co/50x50">
            </div>
            <h4>LK International School</h4>
            <p>Sector-63, Rohini, New Delhi</p>
          </div>
        <div class="print-details__info">
          <div class="row">
              <p class="col-sm-6"><span><b>Student Name:</b></span><span id="studentName_qv">Vaishali Sharma</span></p>
              <p class="col-sm-6"><span><b>Father's Name:</b></span><span id="fname_qv">Mukesh</span></p>
              <p class="col-sm-6"><span><b>Course Name:</b></span><span id="courseName_qv">April</span></p>
              <p class="col-sm-6"><span><b>Due Date:</b></span><span id="courseName_qv">10/4/2018</span></p>
          </div>
          <div class="print-data-tbl">
            <table>
              <tr>
                <th>Month</th>
                <th>Amount</th>
              </tr>
              <tr>
                <td>April</td>
                <td>16330</td>
              </tr>
              <tr>
                <td>May</td>
                <td>1630</td>
              </tr>
              <tr>
                <td>June</td>
                <td>1630</td>
              </tr>
              <tr class="total-fees">
                <td>Total</td>
                <td>4890</td>
              </tr>
            </table>
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
</div>
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"></script>')</script>-->
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
<!-- Datatable scripts -->
<!--<script src="assets/js/vendor/datatable_net/jquery.dataTables.min.js"></script>
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

