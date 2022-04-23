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
<a href="index.html">Fee Concession Setup</a>
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
          <div class="form-group col-sm-8 col-xs-12">
            <label for="grpName">Enter Reg No</label>
            <input type="text" class="form-control" name="grpName" id="grpName" placeholder="grp1">  
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
              <div><span>Roll No</span><span>083091567</span></div>
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
    <section class="tile sec-ht-350">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <strong>Fee Concession Setup</strong></h1>
    <a role="button" id="modalClick" tabindex="0" class="modal-popup-link">Create new</a>
    </div>
    <!-- /tile header -->
      <!-- tile body-->
      <div class="tile-body">
        <div class="row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="refundAmtTxt">Select Concession Type</label>
            <div class="input-group">
              <label class="radio-inline"><input type="radio" name="optradio" checked>Manual</label>
              <label class="radio-inline"><input type="radio" name="optradio">Concession Group</label>
            </div>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <label for="feeForSel">Select Concession Group</label>
            <select class="form-control ak_select2" name="feeForSel" required> 
              <option>50%EMS + 50% Tution By Umesh Sir</option> 
              <option>option 2</option>
              <option>option 3</option>
            </select>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
              <div class="btn-align-row">
              <button type="submit" data-value="Assigned" class="btn btn-blue"><i class="fa fa-search"></i>Assign</button>
              </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>



<div class="row">
  <section class="tile">
    <!-- tile header -->
  <div class="tile-header bg-blue dvd dvd-btm">
  <h1 class="custom-font">
  <i class="fas fa-list"></i>
  <strong>Allocated</strong> Concession</h1>
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
          <th class="stl_th3">Group Name</th>
          <th class="stl_th4">Head Name</th>
          <th class="stl_th5">Rate</th>
          <th class="stl_th6">Frequency</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td>1</td>
          <td>New Fee</td>
          <td>Tution Fee</td>
          <td>2928.90</td>
          <td>Monthly</td>
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
<p class="cright">&copy; Copyright 2020, All Right Reserved</p>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->


<!-- create concession group detials -->
<div id="formModal" class="modal fade">
  <div class="modal-dialog w-tbl-70" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
        <div class="ak_tile_subhead"> <h2> Concession Setup </h2></div>
      </div>
      <form>
        <div class="modal-body row">
          <div class="form-group col-lg-3 col-sm-6 col-xs-12">
            <label for="concessTxt">Concession Name</label>
            <input class="form-control" type="text" name="concessTxt" id="concessTxt" placeholder="" required>
          </div>
          <!-- tile body -->
          <div class="col-xs-12" id="fee--group">
            <div class="tile-body ak_table ak_table2 ak_dtablestyle">
              <div class="table_ws_nowrap tbl--cst__scroll">
                <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
                  <thead>
                    <tr>
                      <th class="stl_th1"></th>
                      <th class="stl_th2">Head Name</th>
                      <th class="stl_th3">Type</th>
                      <th class="stl_th4">Value</th>
                      <th class="stl_th5">Apr</th>
                      <th class="stl_th6">May</th>
                      <th class="stl_th7">Jun</th>
                      <th class="stl_th8">Jul</th>
                      <th class="stl_th9">Aug</th>
                      <th class="stl_th10">Sep</th>
                      <th class="stl_th11">Oct</th>
                      <th class="stl_th12">Nov</th>
                      <th class="stl_th13">Dec</th>
                      <th class="stl_th14">Jan</th>
                      <th class="stl_th15">Feb</th>
                      <th class="stl_th16">Mar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td><label for="">Transport fees</label></td>
                      <td>
                        <select class="form-control ak_select2" name="row1--m1" id="row1--m1" required>
                          <option>Percentage</option>
                          <option>Decimal</option>
                          <option>ratio</option>
                        </select>
                      </td>
                      <td><input type="number" class="form-control" name="row1--m2" id="row1--m2"></td>
                      <td><input type="checkbox" name="row1--m3" id="row1--m3"></td>
                      <td><input type="checkbox" name="row1--m4" id="row1--m4"></td>
                      <td><input type="checkbox" name="row1--m5" id="row1--m5"></td>
                      <td><input type="checkbox" name="row1--m6" id="row1--m6"></td>
                      <td><input type="checkbox" name="row1--m7" id="row1--m7"></td>
                      <td><input type="checkbox" name="row1--m8" id="row1--m8"></td>
                      <td><input type="checkbox" name="row1--m9" id="row1--m9"></td>
                      <td><input type="checkbox" name="row1--m10" id="row1--m10"></td>
                      <td><input type="checkbox" name="row1--m11" id="row1--m11"></td>
                      <td><input type="checkbox" name="row1--m12" id="row1--m12"></td>
                      <td><input type="checkbox" name="row1--m13" id="row1--m13"></td>
                      <td><input type="checkbox" name="row1--m14" id="row1--m14"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><label for="">Annual Charge</label></td>
                      <td>
                        <select class="form-control ak_select2" name="row2--m1" id="row2--m1" required>
                          <option>Percentage</option>
                          <option>Decimal</option>
                          <option>ratio</option>
                        </select>
                      </td>
                      <td><input type="number" class="form-control" name="row2--m2" id="row2--m2"></td>
                      <td><input type="checkbox" name="row2--m3" id="row2--m3"></td>
                      <td><input type="checkbox" name="row2--m4" id="row2--m4"></td>
                      <td><input type="checkbox" name="row2--m5" id="row2--m5"></td>
                      <td><input type="checkbox" name="row2--m6" id="row2--m6"></td>
                      <td><input type="checkbox" name="row2--m7" id="row2--m7"></td>
                      <td><input type="checkbox" name="row2--m8" id="row2--m8"></td>
                      <td><input type="checkbox" name="row2--m9" id="row2--m9"></td>
                      <td><input type="checkbox" name="row2--m10" id="row2--m10"></td>
                      <td><input type="checkbox" name="row2--m11" id="row2--m11"></td>
                      <td><input type="checkbox" name="row2--m12" id="row2--m12"></td>
                      <td><input type="checkbox" name="row2--m13" id="row2--m13"></td>
                      <td><input type="checkbox" name="row2--m14" id="row2--m14"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><label for="">Development Fund</label></td>
                      <td>
                        <select class="form-control ak_select2" name="row3--m1" id="row3--m1" required>
                          <option>Percentage</option>
                          <option>Decimal</option>
                          <option>ratio</option>
                        </select>
                      </td>
                      <td><input type="number" class="form-control" name="row3--m2" id="row3--m2"></td>
                      <td><input type="checkbox" name="row3--m3" id="row3--m3"></td>
                      <td><input type="checkbox" name="row3--m4" id="row3--m4"></td>
                      <td><input type="checkbox" name="row3--m5" id="row3--m5"></td>
                      <td><input type="checkbox" name="row3--m6" id="row3--m6"></td>
                      <td><input type="checkbox" name="row3--m7" id="row3--m7"></td>
                      <td><input type="checkbox" name="row3--m8" id="row3--m8"></td>
                      <td><input type="checkbox" name="row3--m9" id="row3--m9"></td>
                      <td><input type="checkbox" name="row3--m10" id="row3--m10"></td>
                      <td><input type="checkbox" name="row3--m11" id="row3--m11"></td>
                      <td><input type="checkbox" name="row3--m12" id="row3--m12"></td>
                      <td><input type="checkbox" name="row3--m13" id="row3--m13"></td>
                      <td><input type="checkbox" name="row3--m14" id="row3--m14"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><label for="">Exam/Ass Fee</label></td>
                      <td>
                        <select class="form-control ak_select2" name="row4--m1" id="row4--m1" required>
                          <option>Percentage</option>
                          <option>Decimal</option>
                          <option>ratio</option>
                        </select>
                      </td>
                      <td><input type="number" class="form-control" name="row4--m2" id="row4--m2"></td>
                      <td><input type="checkbox" name="row4--m3" id="row4--m3"></td>
                      <td><input type="checkbox" name="row4--m4" id="row4--m4"></td>
                      <td><input type="checkbox" name="row4--m5" id="row4--m5"></td>
                      <td><input type="checkbox" name="row4--m6" id="row4--m6"></td>
                      <td><input type="checkbox" name="row4--m7" id="row4--m7"></td>
                      <td><input type="checkbox" name="row4--m8" id="row4--m8"></td>
                      <td><input type="checkbox" name="row4--m9" id="row4--m9"></td>
                      <td><input type="checkbox" name="row4--m10" id="row4--m10"></td>
                      <td><input type="checkbox" name="row4--m11" id="row4--m11"></td>
                      <td><input type="checkbox" name="row4--m12" id="row4--m12"></td>
                      <td><input type="checkbox" name="row4--m13" id="row4--m13"></td>
                      <td><input type="checkbox" name="row4--m14" id="row4--m14"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><label for="">Smart EMS</label></td>
                      <td>
                        
                        <select class="form-control ak_select2" name="row5--m1" id="row5--m1" required>
                          <option>Percentage</option>
                          <option>Decimal</option>
                          <option>ratio</option>
                        </select>
                        
                      </td>
                      <td><input type="number" class="form-control" name="row5--m2" id="row5--m2"></td>
                      <td><input type="checkbox" name="row5--m3" id="row5--m3"></td>
                      <td><input type="checkbox" name="row5--m4" id="row5--m4"></td>
                      <td><input type="checkbox" name="row5--m5" id="row5--m5"></td>
                      <td><input type="checkbox" name="row5--m6" id="row5--m6"></td>
                      <td><input type="checkbox" name="row5--m7" id="row5--m7"></td>
                      <td><input type="checkbox" name="row5--m8" id="row5--m8"></td>
                      <td><input type="checkbox" name="row5--m9" id="row5--m9"></td>
                      <td><input type="checkbox" name="row5--m10" id="row5--m10"></td>
                      <td><input type="checkbox" name="row5--m11" id="row5--m11"></td>
                      <td><input type="checkbox" name="row5--m12" id="row5--m12"></td>
                      <td><input type="checkbox" name="row5--m13" id="row5--m13"></td>
                      <td><input type="checkbox" name="row5--m14" id="row5--m14"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><label for="">ERP SMS</label></td>
                      <td>
                        <select class="form-control ak_select2" name="row6--m1" id="row6--m1">
                          <option>Percentage</option>
                          <option>Decimal</option>
                          <option>ratio</option>
                        </select>
                      </td>
                      <td><input type="number" class="form-control" name="row6--m2" id="row6--m2"></td>
                      <td><input type="checkbox" name="row6--m3" id="row6--m3"></td>
                      <td><input type="checkbox" name="row6--m4" id="row6--m4"></td>
                      <td><input type="checkbox" name="row6--m5" id="row6--m5"></td>
                      <td><input type="checkbox" name="row6--m6" id="row6--m6"></td>
                      <td><input type="checkbox" name="row6--m7" id="row6--m7"></td>
                      <td><input type="checkbox" name="row6--m8" id="row6--m8"></td>
                      <td><input type="checkbox" name="row6--m9" id="row6--m9"></td>
                      <td><input type="checkbox" name="row6--m10" id="row6--m10"></td>
                      <td><input type="checkbox" name="row6--m11" id="row6--m11"></td>
                      <td><input type="checkbox" name="row6--m12" id="row6--m12"></td>
                      <td><input type="checkbox" name="row6--m13" id="row6--m13"></td>
                      <td><input type="checkbox" name="row6--m14" id="row6--m14"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><label for="">Tution fees</label></td>
                      <td>
                        <select class="form-control ak_select2" name="row7--m1" id="row7--m1">
                          <option>Percentage</option>
                          <option>Decimal</option>
                          <option>ratio</option>
                        </select>
                      </td>
                      <td><input type="number" class="form-control" name="row7--m2" id="row7--m2"></td>
                      <td><input type="checkbox" name="row7--m3" id="row7--m3"></td>
                      <td><input type="checkbox" name="row7--m4" id="row7--m4"></td>
                      <td><input type="checkbox" name="row7--m5" id="row7--m5"></td>
                      <td><input type="checkbox" name="row7--m6" id="row7--m6"></td>
                      <td><input type="checkbox" name="row7--m7" id="row7--m7"></td>
                      <td><input type="checkbox" name="row7--m8" id="row7--m8"></td>
                      <td><input type="checkbox" name="row7--m9" id="row7--m9"></td>
                      <td><input type="checkbox" name="row7--m10" id="row7--m10"></td>
                      <td><input type="checkbox" name="row7--m11" id="row7--m11"></td>
                      <td><input type="checkbox" name="row7--m12" id="row7--m12"></td>
                      <td><input type="checkbox" name="row7--m13" id="row7--m13"></td>
                      <td><input type="checkbox" name="row7--m14" id="row7--m14"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div> 
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
/create concession Group detials -->
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<script>
$(function(){
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });
});

</script>
@endsection
