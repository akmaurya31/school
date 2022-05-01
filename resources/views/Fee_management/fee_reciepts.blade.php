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
<a href="index.html">Payment History</a>
</li>
</ul>
<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>
</div>
</div>
<div class="akform_holder">
  <div class="row" id="fee-reciept">
    <div class="col-xs-12">
      <section class="tile">
        <div class="tile-body">
          <div>
            <button type="submit" data-value="Printing..." class="btn btn-blue"><i class="fa fa-print"></i>Print</button>
          </div>
          <div class="row print-wrapper">
            <!-- two reciepts copies -->
            <div class="col-xs-6">
              <div class="print-details">
                <div class="print-head">
                  <div class="print-logo col-xs-5">
                    <img class="img-responsive" src="https://placehold.co/50x50">
                  </div>
                  <h4>LK International School</h4>
                  <p>Sector-63, Rohini, New Delhi</p>
                </div>
              </div>
              <div class="print-details__info">
                  <h5>Fee Reciept</h5>
                  <div class="row">
                      <div class="col-xs-6">
                        <p><span><b>Reciept No</b></span>:<span id="row1-col1">19</span></p>
                        <p><span><b>Admission No</b></span>:<span id="row2-col1">{{ $St->s_registered }}</span></p>
                        <p><span><b>Student Name</b></span>:<span id="row3-col1">{{ $St->s_first_name }}{{ $St->s_last_name }}</span></p>
                        <p><span><b>Father's Name</b></span>:<span id="row4-col1">{{ $St->s_father_name }}</span></p>
                        <p><span><b>Installment</b></span>:<span id="row5-col1">Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec,Jan,Feb</span></p>
                      </div>
                      <div class="col-xs-6">
                        <p><span><b>Due Date</b></span>:<span id="row1-col2">13/10/2020</span></p>
                        <p><span><b>Session</b></span>:<span id="row2-col2">{{ $St->s_session }}</span></p>
                        <p><span><b>Class</b></span>:<span id="row3-col2">{{ $St->s_class_id }}</span></p>
                        <p><span><b>Contact</b></span>:<span id="row4-col2">{{ $St->s_mobile }}</span></p>
                      </div>
                  </div>
                  <div class="print-data-tbl">
                    <div class="ak_table ak_table2 ">
                      <div class="table_ws_nowrap tbl--cst__scroll">
                         <table class="table table-bordered table-responsive mb-0">
                          <thead>
                            <tr>
                              <th class="stl_th1">SL</th>
                              <th class="stl_th2">Head Name</th>
                              <th class="stl_th3">Month</th>
                              <th class="stl_th4">Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php  $i=1;    ?>
                  @foreach($HeadMaster as $key) 
                   <?php   if($key->group_id==2){   ?>
                          <?php ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td>{{ $key->head_name }}</td>
                              <td>{{ $MONTHS }}</td>
                              <td>{{ $key->head_name }}</td>
                            </tr>
                            <?php }  $i=$i+1; ?>
                  @endforeach  
                          </tbody>
                        </table>
                      </div>
                      </div>
                  </div>
              </div>
              <div class="payment-info">
                      <h5>Payment Information</h5>
                      <div class="row">
                        <div class="col-xs-12">
                          <p><span><b>Paymode</b></span>:<span id="row1-col1">Cash</span></p>
                          <p><span><b>Instrument Date</b></span>:<span id="row2-col1"></span></p>
                          <p><span><b>Instrunebt No</b></span>:<span id="row3-col1"></span></p>
                          <p><span><b>Total Amount</b></span>:<span id="row4-col1">{{ $Tp->totalfee }}</span></p>
                          <p><span><b>Paid Amount</b></span>:<span id="row5-col1">{{ $Tp->payment }}</span></p>  
                          <p><span><b>Balance Amount</b></span>:<span id="row5-col1">{{ $Tp->balance }}</span></p>  
                        </div>
                      </div>
              </div>
              <div id="fee-reciept--footer">
                <div class="row">
                  <label for="">Amount in words</label>
                <p>
                  Rs. one hundred and one thousand two hundred and thirty two only 
                </p>
                </div>
              </div>  
            </div>
            <div class="col-xs-6">
              <div class="print-details">
                <div class="print-logo col-xs-5">
                  <img class="img-responsive" src="https://placehold.co/50x50">
                </div>
                <div class="print-head">
                  <h4>LK International School</h4>
                  <p>Sector-63, Rohini, New Delhi</p>
                </div>
              </div>
              <div class="print-details__info">
                  <h5>Fee Reciept</h5>
                  <div class="row">
                      <div class="col-xs-6">
                        <p><span><b>Reciept No</b></span>:<span id="row1-col1">19</span></p>
                        <p><span><b>Admission No</b></span>:<span id="row2-col1">4130</span></p>
                        <p><span><b>Student Name</b></span>:<span id="row3-col1">HARDIK LOHIA</span></p>
                        <p><span><b>Father's Name</b></span>:<span id="row4-col1">PAWAN LOHIA</span></p>
                        <p><span><b>Installment</b></span>:<span id="row5-col1">Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec,Jan,Feb</span></p>
                      </div>
                      <div class="col-xs-6">
                        <p><span><b>Due Date</b></span>:<span id="row1-col2">13/10/2020</span></p>
                        <p><span><b>Session</b></span>:<span id="row2-col2">2019-20</span></p>
                        <p><span><b>Class</b></span>:<span id="row3-col2">Prep-Tulip</span></p>
                        <p><span><b>Contact</b></span>:<span id="row4-col2">976547890</span></p>
                      </div>
                  </div>
                  <div class="print-data-tbl">
                    <div class="ak_table ak_table2 ">
                      <div class="table_ws_nowrap tbl--cst__scroll">
                         <table class="table table-bordered table-responsive mb-0">
                          <thead>
                            <tr>
                              <th class="stl_th1">SL</th>
                              <th class="stl_th2">Head Name</th>
                              <th class="stl_th3">Month</th>
                              <th class="stl_th4">Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Five Months AC EMS(New)</td>
                              <td>Apr</td>
                              <td>1475</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>ERP EMS</td>
                              <td>Apr,May Jul, Feb</td>
                              <td>72</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Annual Charge</td>
                              <td>Apr,May,Jun, Jul, Feb</td>
                              <td>1475</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Caution Money</td>
                              <td>Apr,May,Jun, Jul, Feb</td>
                              <td>2500</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      </div>
                  </div>
              </div>
              <div class="payment-info">
                      <h5>Payment Information</h5>
                      <div class="row">
                        <div class="col-xs-12">
                          <p><span><b>Paymode</b></span>:<span id="row1-col1">Cash</span></p>
                          <p><span><b>Instrument Date</b></span>:<span id="row2-col1"></span></p>
                          <p><span><b>Instrunebt No</b></span>:<span id="row3-col1"></span></p>
                          <p><span><b>Total Amount</b></span>:<span id="row4-col1">101232.00</span></p>
                          <p><span><b>Paid Amount</b></span>:<span id="row5-col1">101232.00</span></p>  
                          <p><span><b>Balance Amount</b></span>:<span id="row5-col1">0.00</span></p>  
                        </div>
                      </div>
              </div>
              <div id="fee-reciept--footer">
                <div class="row">
                  <label for="">Amount in words</label>
                <p>
                  Rs. one hundred and one thousand two hundred and thirty two only 
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
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
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"></script>')</script> -->
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
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
@endsection
