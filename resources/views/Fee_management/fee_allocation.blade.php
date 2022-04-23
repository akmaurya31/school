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
<a href="#"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="#">Fee Allocation</a>
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
  <div id="fortune"></div>
  <div class="col-md-12">
    <!-- tile -->
    <section class="tile">
    
    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font"></i><strong>Fee Allocation</strong></h1>
    </div>
    <!-- /tile header -->
    
    <!-- tile body -->
    <div class="tile-body">
    <form role="form" method='post' action="{{ route('Feemanagement.alc_store') }}"> 
      {{ csrf_field() }}

        <div class="row">

        <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="feeForSel">Fees For Class</label>
            <select class="form-control ak_select2" name="class_id" id="feeForSel" required> 
              @foreach($classes as $key)
              <option value="{{$key->id}}">{{ $key->title }}</option>
              @endforeach 
            </select>
          </div>

          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="grpNameSel">Group Name</label>
            <select class="form-control ak_select2" name="group_id" id="grpNameSel" required> 
              <option selected="selected" value="-1">--Select--</option>
              @foreach($GroupMaster as $key)
              <option value="{{$key->id}}">{{ $key->group_name }}</option>
              @endforeach 
            </select>
          </div>

          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="feeForSel">Frequency</label>
            <select class="form-control" name="frequency" required> 
              <option  value='1'>Annual</option> 
              <option  value='3'>Quarterly</option>
              <option  value='6'>Half Yearly</option>
              <option  value='12'>monthly</option>
            </select>       
          </div>




        </div>
        <div class="row" id="fee-allocate-grpName">
          <div class="tile-body ak_table ak_table2 ak_dtablestyle">
            <div class="table_ws_nowrap tbl--cst__scroll">
               <table class="table table-bordered table-responsive mb-0 data_tbl--feature no-data__tabl--btns">
                <thead>
                  <tr>
                    <th class="stl_th1"></th>
                    <th class="stl_th2">Head Name</th>
                    <th class="stl_th3">Apr</th>
                    <th class="stl_th4">May</th>
                    <th class="stl_th5">Jun</th>
                    <th class="stl_th6">Jul</th>
                    <th class="stl_th7">Aug</th>
                    <th class="stl_th8">Sep</th>
                    <th class="stl_th9">Oct</th>
                    <th class="stl_th10">Nov</th>
                    <th class="stl_th11">Dec</th>
                    <th class="stl_th12">Jan</th>
                    <th class="stl_th13">Feb</th>
                    <th class="stl_th14">Mar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($HeadMaster as $key)
                  <tr>
                    <td><br/><input type="checkbox" name="headbox[<?=$key->id?>]" class="checkAll" value="<?=$key->id?>"/></td>
                    <td><label for="tutionTxt">{{ $key->head_name }}</label></td> 
                    <td><input type="number" name="mon_m4[<?=$key->id?>]" id="mon_m4"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m5[<?=$key->id?>]" id="mon_m5"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m6[<?=$key->id?>]" id="mon_m6"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m7[<?=$key->id?>]" id="mon_m7"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m8[<?=$key->id?>]" id="mon_m8"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m9[<?=$key->id?>]" id="mon_m9"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m10[<?=$key->id?>]" id="mon_m10"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m11[<?=$key->id?>]" id="mon_m11"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m12[<?=$key->id?>]" id="mon_m12"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m1[<?=$key->id?>]" id="mon_m1"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m2[<?=$key->id?>]" id="mon_m2"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                    <td><input type="number" name="mon_m3[<?=$key->id?>]" id="mon_m3"  value="{{ $valk=$key->rate/$key->frequency }}"></td>
                  </tr>
                  @endforeach  
                </tbody>
              </table>
            </div>
          </div>
        </div>


        <div class="row" id="fee-allocate-forBatch">
          <div class="tile-body ak_dtablestyle">
            <div class="table_ws_nowrap tbl--cst__scroll">
               <table class="table table-bordered table-responsive mb-0">
                <thead>
                  <tr>
                    <th class="stl_th1">Class</th>
                    <th class="stl_th2">Nicname</th>
                    <th class="stl_th3">Section Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Prep</td>
                    <td>Prep</td>
                    <td>Marigold</td>
                  </tr>
                  <tr>
                    <td>Prep</td>
                    <td>Prep</td>
                    <td>Marigold</td>
                  </tr>
                  <tr>
                    <td>Prep</td>
                    <td>Prep</td>
                    <td>Marigold</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


        <div class="row" id="fee-allocate-forStudent">
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="courseSel">Select Course</label>
            <select class="form-control ak_select2" name="courseSel" id="courseSel" required> 
              <option selected="selected" value="-1">--Select--</option>
              <option value='course1'>course1</option> 
              <option value='course2'>course2</option>
              <option value='course3'>course3</option>
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="batchSel">Select Batch</label>
            <select class="form-control ak_select2" name="batchSel" id="batchSel" disabled required> 
              <option selected="selected" value="-1">--Select--</option>
              <option value='batch1'>Batch 1</option>
              <option value='batch2'>Batch 2</option>
              <option value='batch3'>Batch 3</option>
            </select>
          </div>
          <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="sectionSel">Select Section</label>
            <select class="form-control ak_select2" name="sectionSel" id="sectionSel" disabled required> 
              <option selected="selected" value="-1">--Select--</option>
              <option value='section1'>Section 1</option>
              <option value='section2'>Section 2</option>
              <option value='section3'>Section 3</option>
            </select>
          </div>
        </div>
        <div class="row" id="fee-allocate-tbl--details">
          <div class="tile-body ak_table ak_table2 ak_dtablestyle">
            <div class="table_ws_nowrap tbl--fee__collect">
               <table class="table table-bordered table-responsive data_tbl--feature mb-0">
                <thead>
                  <tr>
                    <th class="stl_th1"></th>
                    <th class="stl_th2">Reg No</th>
                    <th class="stl_th3">Student Name</th>
                    <th class="stl_th4">Father Name</th>
                    <th class="stl_th5">Admission Type</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td>3495</td>
                    <td>Kirti Sharma</td>
                    <td>Kapil Sharma</td>
                    <td>Admission Type</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>3497</td>
                    <td>Dipanshu Suthar</td>
                    <td>Rohitash</td>
                    <td>New</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="submit-holder">
          <div class="row">
          <div class="col-sm-12 form__button--action"> 
          <div>
          <button type="reset" class="btn btn-red">Reset</button>
          </div>
          <div>
          <button type="submit" data-value="New item is purchased" class="btn btn-blue"><i class="fa fa-floppy-o"></i>Save</button>
          
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
