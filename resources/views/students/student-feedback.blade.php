@extends('layouts.admin_header')
    @section('title', 'feedback form')
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
<a href="">On site Reporting</a>
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
      <h1 class="custom-font"><i class="fa fa-user"></i><strong>Site Visit</strong> Report</h1>
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
              <label for="sessionSel">School Name</label>
			  <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="School Name" required>  
            <!--  <select class="form-control ak_select2" name="sessionSel" required> 
                <option>Select</option> 
                <option>2020-21</option> 
                <option>2019-20</option> 
                <option>option 3</option> 
                <option>option 4</option> 
              </select> -->
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="semSel">Location</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="School Location" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="classSel">Phone No</label>
             <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="School Contant No" required>  
            </div>
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Pincode</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Area pincode" required>  
            </div>
			
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Contact Person</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Name here" required>  
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Principal/HOD Name</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Name of principal" required>  
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Principal Contant Details-1</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Office Number" required>  
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Principal Contant Details-2</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Mobile Number" required>  
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sessionSel">Any Software Running</label>
             <select class="form-control ak_select2" name="sessionSel" required> 
                <option>Select</option> 
                <option>Yes</option> 
                <option>No</option> 
                <option>May be</option> 
              </select>
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Software Company Name</label>
              <input type="text" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Company Name here" required>  
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Approx Cost</label>
              <input type="text" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Area pincode" required>  
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sectionSal">Company Website</label>
              <input type="tel" class="form-control" name="cmpLLNo" id="cmpLLNo" placeholder="Enter Web Address" required>  
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <label for="sessionSel">Is better than Us</label>
             <select class="form-control ak_select2" name="sessionSel" required> 
                <option>Select</option> 
                <option>Yes</option> 
                <option>No</option> 
                <option>No idea</option> 
              </select>
            </div>
			<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="">Images or Documents</label>
            <div class="input-group">
              <input type="text" class="form-control" id="pdf-name" placeholder="Select picture if any" readonly>
              <label class="input-group-btn">
                <span class="btn btn-primary">
                    Choose File <input type="file" id="pdf-file" name="pdf_file" style="display: none;">
                </span>
              </label>
            </div>
            <span>(maximum 15 MB each)</span>
          </div>
			<div class="form-group col-lg-6 col-md-4 col-sm-6 col-xs-12">
          <label for="roomRemarks">Remarks</label>
            <textarea class="form-control" name="roomRemarks" id="roomRemarks" cols="20" rows="2"></textarea>
        </div>
			
            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div>
            <button type="submit" class="btn btn-blue">Submit<i class="fa fa-floppy-o"></i></button>
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
      <strong>Site Visit</strong>Record Lists</h1>
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
              <th class="stl_th3">School Name</th>
              <th class="stl_th4">Location</th>
              <th class="stl_th5">Phone No</th>
              <th class="stl_th6">Pincode</th>
              <th class="stl_th7">Contact Person</th>
              <th class="stl_th8">Principal Name</th>
              <th class="stl_th9 action_icons_th">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td>1</td>
              <td>HS public school</td>
              <td>Delhi cantt</td>
              <td>7989898989</td>
              <td>110010</td>
              <td>Mr Rathore</td>
              <td>Dr kp mishra</td>
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
        <div class="print-details">
          <div>
            <button type="submit" data-value="New Vendor Added" class="btn btn-blue"><i class="fa fa-print"></i>Print</button>
          </div>
          <div class="print-head">
            <h5>Fees Reminder</h5>
            <h6>LK International School</h6>
            <p>Sector-63, Rohini, New Delhi</p>
          </div>
        </div>
        <div class="quickvie-holder">             
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
                        <td>June</td>
                        <td>1630</td>
                      </tr>
                    </table>
                  </div>
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


@section('footer-scripts')

@endsection



@endsection