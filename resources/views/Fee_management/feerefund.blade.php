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
<a href="index.html">Refund Fees</a>
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
<div class="row ht-adjust-300">
  <div class="col-sm-6 col-xs-12">
    <!-- tile -->
    <section class="tile">
    
    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font"><i class="fa fa-search"></i><strong>Search Student</strong></h1>
    </div>
    <!-- /tile header -->
    
    <!-- tile body -->
    <div class="tile-body">
      <form role="form" class="box">
        <div class="row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="grpName">Enter Reg No</label>
            <input type="text" class="form-control" name="grpName" id="registration no." placeholder="">  
          </div>
          <div class="form-group col-sm-4 col-xs-12">
            <div class="btn-align-row">
            <button type="submit" data-value="Seacrching..." class="btn btn-blue"><i class="fa fa-search"></i>Find</button>
            </div>
          </div> 
        </div>

        <div class="row">
          <div class="tile-body search_results">
            <div class="profile-picture col-xs-6">
              <img src="http://oracleinfotech.in/demoschool/schoolmgt/assets/images/ici-avatar.jpg" alt="" class="img-responsive">
            </div>
            <div class="search_results--lists">
              <div><span>Name</span><span>Dhananjay</span></div>
              <div><span>FName</span><span>Mehrotra</span></div>
              <div><span>Reg No</span><span>12345</span></div>
              <div><span>Roll No</span><span>12345</span></div>
              <div><span>Class</span><span>Nursery Daffodil</span></div>
              <div><span>Section</span><span>B</span></div>
            </div>
          </div>
        </div>
      </form>
    </div>                        
    <!-- /tile body -->
    </section>
    <!-- /tile -->
  </div>
  <div class="col-sm-6 col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font">
    <i class="fas fa-history"></i>
    <strong>Payment History</strong></h1>
    </div>
    <!-- /tile header -->
      <!-- tile body-->
      <div class="tile-body ak_table ak_table2 ak_dtablestyle">
        <div class="table_ws_nowrap">
           <table class="table table-bordered table-responsive mb-0">
            <thead>
              <tr>
                <th class="stl_th2">SL</th>
                <th class="stl_th3">Head Name</th>
                <th class="stl_th4">Paid Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Admission Fee</td>
                <td>2000</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Total Fee</td>
                <td>2000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="refundAmtTxt">Refund Amount</label>
            <input type="number" min="0" class="form-control" name="refundAmtTxt" id="refundAmtTxt" placeholder="">  
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="modeTxt">Mode</label>
            <select class="form-control ak_select2" name="modeTxt" required> 
              <option>Bank</option> 
              <option>Cashoption>
            </select>  
          </div>
          <div class="orm-group col-sm-6 col-xs-12">
            <label for="refundDate">Date</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="refundDate" name="refundDate" class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="remarksTxt">Remarks</label>
            <input type="text" class="form-control" name="remarksTxt" id="remarksTxt" placeholder="">  
          </div>
          <div class="form-group col-sm-6 col-xs-12">
              <div class="btn-align-row">
              <button type="submit" data-value="Seacrching..." class="btn btn-blue"><i class="fa fa-search"></i>Find</button>
              </div>
          </div>
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
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
<script>
$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});

</script>
@endsection
