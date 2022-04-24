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
<a href="">Fee Head Setting</a>
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
      <h1 class="custom-font"><i class="fa fa-user"></i><strong>Manage Fee</strong> Head</h1>
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
      <form role="form" method='post' action="{{ route('Feemanagement.feeheads_alc_store') }}"> 
      {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="feeHeadTxt">Fees Heading</label>
              <input type="text" class="form-control two-db-source" name="fee_heading" id="feeHeadTxt" placeholder=" fee heading " required>  
            </div>
            
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="frequencySel">Frequency</label>
              <select class="form-control ak_select2" name="frequency" required> 
                <option>Quaterly</option> 
                <option>Annually</option>
              </select>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="fromDate">From Date</label>
              <div class='input-group datepicker ' data-format="L">
                <input type='text' id="fromDate" name="from_date" class="form-control" required />
                <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
                </span>
              </div>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="toDate">To Date</label>
              <div class='input-group datepicker ' data-format="L">
                <input type='text' id="toDate" name="to_date" class="form-control" required />
                <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
                </span>
              </div>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="dueDate">Due Date</label>
              <div class='input-group datepicker ' data-format="L">
                <input type='text' id="dueDate" name="due_date" class="form-control" required />
                <span class="input-group-addon">
                  <span class="fa fa-calendar"></span>
                </span>
              </div>
            </div>
            
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="refundSel">Refundable</label>
              <select class="form-control ak_select2" name="refundable" required> 
                <option>Yes</option> 
                <option>No</option> 
                <option>Partailly</option>
              </select>
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="course">Class</label>
              
              <select class="form-control ak_select2" name="class" required> 
              <option selected="selected" value="-1">--Select--</option>
              @foreach($classes as $keyc)
              <option value="{{$keyc->id}}">{{ $keyc->title }}</option>
              @endforeach
              </select> 
            </div>
            <!-- <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="displayTxt">Display Name</label>
              <input type="text" class="form-control two-db-dest" name="quater" id="displayTxt" placeholder="name" required>  
            </div> -->


            <!-- <div class="form-group col-xs-12">
              <label for="displayTxt">Select Months when fees due</label>
              <div class="display-checks">
                <input type="checkbox" name="january" id="january">
                <label for="january">January</label>
                
                <input type="checkbox" name="febraury" id="febraury">
                <label for="january">Febraury</label>
                
                <input type="checkbox" name="march" id="march">
                <label for="january">March</label>
                
                <input type="checkbox" name="april" id="april">
                <label for="january">April</label>
                
                <input type="checkbox" name="may" id="may">
                <label for="january">May</label>

                <input type="checkbox" name="june" id="june">
                <label for="january">June</label>

                <input type="checkbox" name="july" id="july">
                <label for="january">July</label>

                <input type="checkbox" name="aug" id="aug">
                <label for="january">August</label>

                <input type="checkbox" name="sept" id="sept">
                <label for="january">September</label>

                <input type="checkbox" name="oct" id="oct">
                <label for="january">October</label>

                <input type="checkbox" name="nov" id="nov">
                <label for="january">November</label>

                <input type="checkbox" name="dec" id="dec">
                <label for="january">December</label>
              </div>
            </div> -->


          </div>  
          <div class="submit-holder">
            <div class="row">
            <div class="col-sm-12 form__button--action">
              <div>
                <button type="reset" class="btn btn-red">Reset</button>
              </div> 
              <div>
                <button type="submit" data-value="New Vendor Added" class="btn btn-blue">Submit</button>
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
      <strong>Fee Head</strong> Lists</h1>
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
              <th class="stl_th3">Head Name</th>
              <th class="stl_th4">Display Name</th>
              <th class="stl_th5">Frequency</th>
              <th class="stl_th6">Apr</th>
              <th class="stl_th7">May</th>
              <th class="stl_th8">June</th>
              <th class="stl_th8">Jul</th>
              <th class="stl_th8">Aug</th>
              <th class="stl_th8">Sep</th>
              <th class="stl_th8">Oct</th>
              <th class="stl_th8">Nov</th>
              <th class="stl_th8">Dec</th>
              <th class="stl_th8">Jan</th>
              <th class="stl_th8">Feb</th>
              <th class="stl_th8">Mar</th>
              <th class="stl_th12 action_icons_th">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
              </td>
            </tr>
            <tr>
              <td></td>
              <td>1</td>
              <td>Admission Fee</td>
              <td>Admission Fee</td>
              <td>Monthly</td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td><span class="bdg-month badge badge-success">Paid</span></td>
              <td><span class="bdg-month badge badge-danger">Unpaid</span></td>
              <td>
                <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
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

<!-- Edit form goes here -->
<div id="editFormModal" class="modal fade ak_modal-style">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
          <h3 class="modal-title custom-font">Edit View</h3>
          <a class="modal-close" href="" data-dismiss="modal"><i class="fa fa-close"></i></a>
      </div>
      <div class="modal-body row">
        <div class="form-group col-sm-6 col-xs-12">
          <label for="feeHeadTxt">Fees Heading</label>
          <input type="text" class="form-control two-db-source" name="feeHeadTxt" id="feeHeadTxt" placeholder=" fee heading " required>  
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="frequencySel">Frequency</label>
          <select class="form-control ak_select2" name="frequencySel" required> 
            <option>Quaterly</option> 
            <option>Annually</option>
          </select>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="fromDate">From Date</label>
          <div class='input-group datepicker ' data-format="L">
            <input type='text' id="fromDate" name="fromDate" class="form-control" required />
            <span class="input-group-addon">
              <span class="fa fa-calendar"></span>
            </span>
          </div>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="toDate">To Date</label>
          <div class='input-group datepicker ' data-format="L">
            <input type='text' id="toDate" name="toDate" class="form-control" required />
            <span class="input-group-addon">
              <span class="fa fa-calendar"></span>
            </span>
          </div>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="dueDate">Due Date</label>
          <div class='input-group datepicker ' data-format="L">
            <input type='text' id="dueDate" name="dueDate" class="form-control" required />
            <span class="input-group-addon">
              <span class="fa fa-calendar"></span>
            </span>
          </div>
        </div>
        
        <div class="form-group col-sm-6 col-xs-12">
          <label for="refundSel">Refundable</label>
          <select class="form-control ak_select2" name="refundSel" required> 
            <option>Yes</option> 
            <option>No</option> 
            <option>Partailly</option>
          </select>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="course">Course</label>
          <select class="form-control ak_select2" name="course" required> 
            <option>V</option> 
            <option>VI</option> 
            <option>VII</option> 
            <option>VIII</option> 
            <option>IX</option> 
          </select>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="displayTxt">Display Name</label>
          <input type="text" class="form-control two-db-dest" name="displayTxt" id="displayTxt" placeholder="name" required>  
        </div>
        <div class="form-group col-xs-12">
          <label for="displayTxt">Select Months when fees due</label>
          <div class="display-checks">
            <input type="checkbox" name="january" id="january">
            <label for="january">January</label>
            
            <input type="checkbox" name="febraury" id="febraury">
            <label for="january">Febraury</label>
            
            <input type="checkbox" name="march" id="march">
            <label for="january">March</label>
            
            <input type="checkbox" name="april" id="april">
            <label for="january">April</label>
            
            <input type="checkbox" name="may" id="may">
            <label for="january">May</label>

            <input type="checkbox" name="june" id="june">
            <label for="january">June</label>

            <input type="checkbox" name="july" id="july">
            <label for="january">July</label>

            <input type="checkbox" name="aug" id="aug">
            <label for="january">August</label>

            <input type="checkbox" name="sept" id="sept">
            <label for="january">September</label>

            <input type="checkbox" name="oct" id="oct">
            <label for="january">October</label>

            <input type="checkbox" name="nov" id="nov">
            <label for="january">November</label>

            <input type="checkbox" name="dec" id="dec">
            <label for="january">December</label>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-red">Reset</button>
        <button type="submit" class="btn btn-blue">Modify</button>
      </div>
    </div>
      <!-- modal content -->
    </div>
</div>
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"></script>')</script>-->
<script>
$(function(){
  $("button[title='Edit']").on('click',function(){
    $("#editFormModal").modal('show');
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

<!--<script src="assets/js/fullscreen.js"></script -->
@endsection
