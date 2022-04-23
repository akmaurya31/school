@extends('layouts.admin_header')
@section('title', 'View Student Details')
@section('content')
<section id="content">

<div class="page page-dashboard">

<div class="pageheader">


<div class="page-bar">

<ul class="page-breadcrumb">
<li>
<a href="index.html"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="#">Parent Profile</a>
</li>
</ul>

<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>

</div>

</div>
<div class="akform_holder profile_page student">
    <div class="ak_tabs">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tb1" aria-controls="users" role="tab" data-toggle="tab"><i class="fas fa5-user-graduate"></i> Parent Profile Details</a></li>
                    <li role="presentation" class=""><a href="#tb2" aria-controls="users" role="tab" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Basic Details</a></li>
                    <!--<li role="presentation"><a href="#tb3" aria-controls="history" role="tab" data-toggle="tab"><i class="fas fa5-dollar-sign"></i> Fees Details</a></li>-->

                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane p-0 active" id="tb1">
                       
                        
                        <div class="profile-head">
                            <div class="col-md-12 col-lg-4 col-xl-3">
                            <div class="image-content-center user-pro">
                            <div class="preview">
                            <!--<img src="{{asset('public/documents/'.$student_details->s_image_url)}}">-->
                            </div>
                            </div>
                            </div>
                            <div class="col-md-12 col-lg-5 col-xl-5">
                            <h5>{{ $student_details->s_father_name }} </h5>
                            <p>Student / General</p>
                            <ul>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Guardian Name"><i class="fas fa5-users"></i></div> {{ $student_details->s_father_name}}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Date Of Birth"><i class="fas fa5-birthday-cake"></i></div> {{ $student_details->s_father_occupation }}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Class"><i class="fas fa5-school"></i></div> {{ $student_details->s_father_income }}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Mobile No"><i class="fas fa5-phone-volume"></i></div> {{ $student_details->s_father_mobile }}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Email"><i class="far fa5-envelope"></i></div> {{  $student_details->s_father_email }}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Present Address"><i class="fas fa5-home"></i></div>{{ $student_details->s_address_1 }}</li>
                            </ul>
                            </div>
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="tb2">
                        <form method='post' action="{{ route('student.update', $student_details->s_id) }}" enctype="multipart/form-data">
        
    <div class="tile-body ">
        <div class="ak_tile_subhead"> <h2> Guardian Details </h2></div>
    <div class="form_subdivision">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="fname">Father Name</label>
            <input disabled type="text" class="form-control" name='father_name' value="{{ $student_details->s_father_name }}"/>    
            </div>

            <div class="form-group col-md-4">
            <label for="fname">Father Occupation</label>
            <input disabled type="text" class="form-control" id="fname" name='father_occupation' value="{{ $student_details->s_father_occupation }}"/>    
            </div>

            <div class="form-group col-md-4">
                <label for="fname">Father Income</label>
            <input disabled type="text" class="form-control" id="fname" name='father_income' value="{{ $student_details->s_father_income }}"/>    

            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Education</label>
            <input disabled type="text" class="form-control" id="fname" name='father_education' value="{{ $student_details->s_father_education }}"/>    

            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Mobile Number</label>
                <div class="input-group">
            <input disabled type="number" class="form-control" id="fname" name='father_mobile' value="{{ $student_details->s_father_mobile }}" onblur="return checkMobile(this.value);" maxlength="10"/>  
            <div id='errorFatherMobile'></div>  
                </div>
                
            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Email</label>
                <div class="input-group">
            <input disabled type="text" class="form-control" id="fname" name='father_email' value="{{ $student_details->s_father_email }}"/>    
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Adhaar Number</label>
                <div class="input-group">
                <input disabled type="text" class="form-control" id="fname" name = "father_adhar" value="{{ $student_details->s_father_adhar }}" />    
                </div>
            </div>

        </div>
        </div>
        <div class="form_subdivision">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="fname">Mother Name</label>
                    
            <input disabled type="text" class="form-control" id="fname" name = 'mother_name' value="{{ $student_details->s_mother_name }}"/>    

                </div>

                <div class="form-group col-md-4">
                    <label for="fname">Mother Occupation</label>
                    
            <input disabled type="text" class="form-control" id="fname" name='mother_occupation' value="{{ $student_details->s_mother_occupation }}"/>    
                                    </div>

                <div class="form-group col-md-4">
                    <label for="fname">Mother Income</label>
                    
            <input disabled type="text" class="form-control" id="fname" name='mother_income' value="{{ $student_details->s_mother_income }}"/>    
                    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Education</label>
                    
            <input disabled type="text" class="form-control" id="fname" name='mother_education' value="{{ $student_details->s_mother_education }}"/>    
                  
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Mobile Number</label>
                   
            <input disabled type="number" class="form-control" id="fname" name='mother_mobile' value="{{ $student_details->s_mother_mobile_number }}" onblur="return checkMobile1(this.value);" maxlength="10"/>    
                   <div id='errorMotherMobile'></div> 
                </div>
                
                <div class="form-group col-md-4">
                    <label for="fname">Mother Email</label>
                    
            <input disabled type="text" class="form-control" id="fname" name='mother_email' value="{{ $student_details->s_mother_email }}"/>    
                   
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Adhaar Number</label>
                    
            <input disabled type="text" class="form-control" id="fname" name='mother_adhar' value="{{ $student_details->s_mother_adhar }}"/>    
                    
                </div>

            </div>
            </div>
            <div class="form_subdivision">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fname">City</label>
                        
            <input disabled type="text" class="form-control" id="fname" name='mother_city' value="{{ $student_details->s_city_1 }}"/>    
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">State</label>
                       
            <input disabled type="text" class="form-control" id="fname" name='mother_state' value="{{ $student_details->s_state_1 }}"/>    
                                       </div>
                   
                    <div class="form-group col-md-12">
                        <label for="addd">Address</label>
                            <textarea disabled class="form-control" rows="5" id="padress" placeholder="" name='address_1'>{{ $student_details->s_address_1 }}</textarea>
                    
                    </div>
                </div>
            </div>
          

                   

</div>
 
              
</form>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="tb3">
                         <!-- tile body -->
<div class="tile-body ak_table ak_table2 ak_dtablestyle feestable">
    <div class="table_ws_nowrap">
    <table class="table mb-0" id="datatable1">
    <thead>
    <tr>
    <th class="stl_th1"></th>
    <th class="stl_th10">S.No</th>
    <th class="stl_th2">Fees type</th>
    <th class="stl_th3">Due Date</th>
    <th class="stl_th4">Status</th>
    <th class="stl_th5">Amount</th>
    <th class="stl_th6">Discount</th>
    <th class="stl_th7">Fine</th>
    <th class="stl_th8">Paid</th>
    <th class="stl_th9">Balance</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td></td>
    <td>1</td>
    <td> Tution Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹10000.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹10000.00</td>
    <td> ₹00.00</td>          
    
    </tr>
    <tr>
    <td></td>
    <td> 2 </td>
    <td> Examination Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-danger btn-sm">Unpaid</button> </td>
    <td> ₹500.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹500.00</td>          
    
    </tr>
    
    <tr>
    <td></td>
    <td>3</td>
    <td> Admission Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹1500.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹1500.00</td>
    <td> ₹00.00</td>          
    
    </tr>
    
    <tr>
    <td></td>
    <td>4</td>
    <td> Tution Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹10000.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹10000.00</td>
    <td> ₹00.00</td>          
    
    </tr>
    <tr>
    <td></td>
    <td>5</td>
    <td> Examination Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-danger btn-sm">Unpaid</button> </td>
    <td> ₹500.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹500.00</td>          
    
    </tr>
    <tr>
    <td></td>
    <td>5</td>
    <td> Tution Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹10000.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹10000.00</td>
    <td> ₹00.00</td>          
    
    </tr>    
    <tr>
    <td></td>
    <td>1</td>
    <td> Tution Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹10000.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹10000.00</td>
    <td> ₹00.00</td>          
    
    </tr>
        <tr>
    <td></td>
    <td>2</td>
    <td> Examination Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-danger btn-sm">Unpaid</button> </td>
    <td> ₹500.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹500.00</td>          
    
    </tr>
    
        <tr>
    <td></td>
    <td>3</td>
    <td> Admission Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹1500.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹1500.00</td>
    <td> ₹00.00</td>          
    
    </tr>
    
        <tr>
    <td></td>
    <td>4</td>
    <td> Tution Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹10000.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹10000.00</td>
    <td> ₹00.00</td>          
    
    </tr>
        <tr>
    <td></td>
    <td>5</td>
    <td> Examination Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-danger btn-sm">Unpaid</button> </td>
    <td> ₹500.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹500.00</td>          
    
    </tr>
        <tr>
    <td></td>
    <td>5</td>
    <td> Tution Fees</td>
    <td> 01.dec.2020</td>
    <td> <button type="button" class="btn btn-primary btn-sm">Paid</button> </td>
    <td> ₹10000.00 </td>
    <td> ₹00.00</td>
    <td> ₹00.00</td>
    <td> ₹10000.00</td>
    <td> ₹00.00</td>          
    
    </tr>
    
    
    </tbody>
    </table>
    </div>
    </div>
    <!-- /tile body -->
                    </div>

                </div>
    
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
 
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
  
</script>
@endsection