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
<a href="#">Group & Head</a>
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
   <div class="col-md-6 col-xs-12">
      <!-- tile -->
      <section class="tile">
         <!-- tile header -->
         <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
            <h1 class="custom-font"><strong>Group Master</strong></h1>
         </div>
         <!-- /tile header -->
         <!-- tile body -->
         <div class="tile-body">
            <form role="form" class="box" method='post' action="" >
               <div class="row">
                  <div class="form-group col-sm-6 col-xs-12">
                     <label for="grpName">Group Name</label>
                     <input type="text" class="form-control" name="grpName" id="grpName" placeholder="grp1">  
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                     <br/>
                     <button type="submit" data-value="New item is purchased" class="btn btn-blue"><i class="fa fa-plus"></i>Save</button>
                  </div>
               </div>
               <div class="row">
               </div>
            </form>
         </div>
      </section>
      <!-- /tile -->
   </div>

   
   <div class="col-md-6 col-xs-12">
      <!-- tile -->
      <section class="tile">
         <!-- tile header -->
         <div class="tile-header bg-blue dvd dvd-btm tile-toggle">
            <h1 class="custom-font"><strong>Head Master</strong></h1>
         </div>
         <!-- /tile header -->
         <!-- tile body -->
         <div class="tile-body">
            <form role="form" class="box" method='post' action="" >
               <div class="row">
                  <div class="form-group col-sm-6 col-xs-12">
                     <label for="grpName">Group Name</label>
                     <input type="text" class="form-control" name="grpName" id="grpName" placeholder="grp1">  
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                     <br/>
                     <button type="submit" data-value="New item is purchased" class="btn btn-blue"><i class="fa fa-plus"></i>Save</button>
                  </div>
               </div>
            </form>
         </div>
      </section>
      <!-- /tile -->
   </div>
</div>



          
        <div class="row">
          <div class="tile-body ak_table ak_table2 ak_dtablestyle">
            <div class="table_ws_nowrap">
               <table class="table table-bordered table-responsive mb-0">
                <thead>
                  <tr>
                    <th class="stl_th1">Head Name</th>
                    <th class="stl_th2">Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label for="transportTxt">Transport fees</label></td>
                    <td><input type="number" maxlength="6" min="0" class="form-control" name="transportTxt" id="transportTxt"></td>
                  </tr>
                  <tr>
                    <td><label for="tutionTxt">Tution fees</label></td>
                    <td><input type="number" maxlength="6" min="0" class="form-control" name="tutionTxt" id="tutionTxt"></td>
                  </tr>  
                  <tr>
                    <td><label for="annualTxt">Annual fees</label></td>
                    <td><input type="number" maxlength="6" min="0" class="form-control" name="annualTxt" id="annualTxt"></td>
                  </tr>

                  <tr>
                    <td><label for="annualTxt">Frequency</label></td>
                    <td>
                       <select class="form-control" name="selectSel" required> 
              <option>Annual</option> 
              <option>Quarterly</option>
              <option>Half Yearly</option>
            </select>          
          </td>
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
          <button type="submit" data-value="New item is purchased" class="btn btn-blue"><i class="fa fa-plus"></i>Save</button>
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


  <div class="col-md-8 col-xs-12">
    <section class="tile sec-ht-425">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font">
    <strong>Group</strong> Master</h1>
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
            <th class="stl_th10 action_icons_th">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td>1</td>
            <td>New Fee</td> 
            <td>
              <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
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


  <div class="col-md-8 col-xs-12">
    <section class="tile sec-ht-425">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font">
    <strong>Head Name </strong>Master</h1>
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
            <th class="stl_th4">Head Name</th>  
            <th class="stl_th10 action_icons_th">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td>1</td> 
            <td>Tution Fee</td> 
            <td>
              <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
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



<div class="col-md-12 col-xs-12">
    <section class="tile sec-ht-425">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font">
    <strong>Head </strong>Master</h1>
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
            <th class="stl_th4">Head Name</th>
            <th class="stl_th5">Rate</th>
            <th class="stl_th6">Frequency</th>
            <th class="stl_th10 action_icons_th">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td>1</td> 
            <td>Tution Fee</td>
            <td>2928.90</td>
            <td>Bi-Monthly</td>
            <td>
              <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
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
