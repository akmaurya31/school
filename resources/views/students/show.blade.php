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
<a href="#">Student Profile</a>
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
                    <li role="presentation" class="active"><a href="#tb1" aria-controls="users" role="tab" data-toggle="tab"><i class="fas fa5-user-graduate"></i> Student Profile Details</a></li>
                    <li role="presentation" class=""><a href="#tb2" aria-controls="users" role="tab" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Basic Details</a></li>
                    <!--<li role="presentation"><a href="#tb3" aria-controls="history" role="tab" data-toggle="tab"><i class="fas fa5-dollar-sign"></i> Fees Details</a></li>-->

                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane p-0 active" id="tb1">
                       
                        
                        <div class="profile-head">
                            <div class="col-md-12 col-lg-4 col-xl-3">
                            <div class="image-content-center user-pro">
                            <div class="preview">
                            <img src="{{asset('public/documents/'.$student_details->s_image_url)}}">
                            </div>
                            </div>
                            </div>
                            <div class="col-md-12 col-lg-5 col-xl-5">
                            <h5>{{ $student_details->s_first_name }} {{ $student_details->s_last_name }}</h5>
                            <p>Student / General</p>
                            <ul>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Guardian Name"><i class="fas fa5-users"></i></div> {{ $student_details->s_father_name}}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Date Of Birth"><i class="fas fa5-birthday-cake"></i></div> {{ date('d-m-Y',strtotime($student_details->s_dob)) }}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Class"><i class="fas fa5-school"></i></div> {{$data['classDetails']->ClassNo}}({{$data['classDetails']->ClassSection}})</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Mobile No"><i class="fas fa5-phone-volume"></i></div> {{ $student_details->s_mobile}}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Email"><i class="far fa5-envelope"></i></div> {{  $student_details->s_father_email }}</li>
                            <li><div class="icon-holder" data-toggle="tooltip" data-original-title="Present Address"><i class="fas fa5-home"></i></div>{{ $student_details->s_present_address }}</li>
                            </ul>
                            </div>
                            </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="tb2">
                        <form method='post' action="{{ route('student.update', $student_details->s_id) }}" enctype="multipart/form-data">
                     {{ @csrf_field() }}
                     {{ method_field('PUT') }}
					 <input type="hidden" name='si_id' value="{{ $data['studentInfo']->si_id}}">
                    <!-- tile body -->
                    <div class="tile-body not-last">

<div class="ak_tile_subhead"> <h2> Academic Details </h2></div>
                        
                            <div class="row">
                            <div class="form-group col-md-3">
                                <label>Academic Year *</label>
                                <select disabled class="form-control ak_select2" name="session" required id='session'>
                                    @foreach($data['session'] as $key)
                                    <option value="{{ $key->ClassSession }}" {{ $key->ClassSession == $student_details->s_session ? 'selected' : ''}}> {{ $key->ClassSession}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="regno">Register No *</label>
                                <input disabled type="text" class="form-control" id="regno" placeholder="eg: SMS-02194" required name='s_registered' autocomplete='off' value="{{ $student_details->s_registered }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="roll">Roll</label>
                                <input disabled type="text" class="form-control" name="roll" placeholder="" required value="{{ $data['studentInfo']->si_student_rollnumber }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="regno">Admission Date *</label>
                                <div class='input-group datepicker ' data-format="L">
                                    <input disabled type='text' class="form-control" required name='adm_date' autocomplete='off' value="{{ date('m/d/Y',strtotime($student_details->s_adm_date)) }}"/>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                           
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Class *</label>
                                    <select disabled name='class_name' class="form-control ak_select2" required onchange="return getSection(this.value);">
                                        <option selected>Slelect </option>
                                        @foreach($data['classes'] as $key)
                                            <option value="{{ $key->ClassNo }}" {{ $key->ClassNo == $data['classDetails']->ClassNo ? 'selected' : ''}} >{{ $key->ClassNo}}</option>
                                        @endforeach
                                    </select>
    
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Section *</label>
                                    <select disabled class="form-control ak_select2" required id='section' name='class_section'>
                                        <option value=''>Select Class Section</option>
										@foreach($data['sections'] as $key)
										   <option value="{{ $key->ClassSection }}" {{ $key->ClassSection == $data['classDetails']->ClassSection ? 'selected' : ''}} >{{ $key->ClassSection}}</option>
										@endforeach
                                    </select>
    
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Category *</label>
                                    <select disabled class="form-control ak_select2" required name='category'>
                                        <option value='' selected>Select</option>
                                        <option value='Gen.' {{ $student_details->s_category_id == 'Gen.' ? 'selected' : '' }}>Gen.</option>
                                        <option value='OBC-A' {{ $student_details->s_category_id == 'OBC-A' ? 'selected' : '' }}>OBC-A</option>
                                        <option value='OBC-B' {{ $student_details->s_category_id == 'OBC-B' ? 'selected' : '' }}>OBC-B</option>
                                        <option value='SC' {{ $student_details->s_category_id == 'SC' ? 'selected' : '' }}>SC</option>
                                        <option value='ST' {{ $student_details->s_category_id == 'ST' ? 'selected' : '' }}>ST</option>
                
                                    </select>
    
                                </div>

                                </div>


                        

                    </div>
                    <!-- /tile body -->
                                        <!-- tile body -->
                    <div class="tile-body ">
<div class="ak_tile_subhead"> <h2> Student Details </h2></div>
                        
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="fname">First Name *</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="fa fa-user-o"></span>
                                        </span>
                                        <input disabled type="text" class="form-control" id="fname" required name='fname' autocomplete='off' value="{{ $student_details->s_first_name }}"/>
                                        
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="lanem">Last Name *</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="fa fa-user-o"></span>
                                        </span>
                                        <input disabled type="text" class="form-control" id="lname" required name='lname' autocomplete='off' value="{{ $student_details->s_last_name }}"/>
                                        
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Gender *</label>
                                    <select disabled class="form-control ak_select2" required name='gender'>
                                        <option selected> Select</option>
                                        <option value='Male' {{ $student_details->s_gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value='Female' {{ $student_details->s_gender == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value='Other' {{ $student_details->s_gender == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
    
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Blood Group</label>
                                    <select disabled class="form-control ak_select2" required name='blood_group'>
                                        <option value=''> Select</option>
                                        <option value='A+' {{ $student_details->s_blood_group == 'A+' ? 'selected' : '' }} >A+</option>
                                        <option value='A' {{ $student_details->s_blood_group == 'A' ? 'selected' : '' }}>A</option>
                                        <option value='A-' {{ $student_details->s_blood_group == 'A-' ? 'selected' : '' }}>A-</option>
                                        <option value='B' {{ $student_details->s_blood_group == 'B' ? 'selected' : '' }}>B</option>
                                        <option value='B+' {{ $student_details->s_blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                        <option value='B-' {{ $student_details->s_blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                        <option value='AB' {{ $student_details->s_blood_group == 'AB' ? 'selected' : '' }}>AB</option>
                                        <option value='AB+' {{ $student_details->s_blood_group == 'AB-' ? 'selected' : '' }}>AB+</option>
                                        <option value='AB-' {{ $student_details->s_blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                        <option value='O' {{ $student_details->s_blood_group == 'O' ? 'selected' : '' }}>O</option>
                                        <option value='O+' {{ $student_details->s_blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                        <option value='O-' {{ $student_details->s_blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                    </select>
    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="regno">Birth Date *</label>
                                    <div class='input-group datepicker ' data-format="L">
                                       
                                        <input disabled type='text' class="form-control" required name='dob' autocomplete='off' value="{{ date('m/d/Y',strtotime($student_details->s_dob)) }}"/>
                                         <span class="input-group-addon">
                                            <span class="fa fa-birthday-cake"></span>
                                        </span>
                                    </div>
                                </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="mt">Mother Tongue</label>
                                        <input disabled type="text" class="form-control" id="mt" placeholder="" name='mother_name' autocomplete='off' value="{{  $student_details->s_mother }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="rgn">Religion</label>
                                        <input disabled type="text" class="form-control" id="rgn" placeholder="" name='religion' autocomplete='off' value="{{ $student_details->s_religion }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cst">Caste</label>
                                        <input disabled type="text" class="form-control" id="cst" placeholder="" name='caste' autocomplete='off' value="{{ $student_details->s_caste }}">
                                    </div>
                                    </div>

                                   
                                <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="mno">Mobile Number</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-phone"></span>
                                                </span>
                                                <input disabled type="number" class="form-control" id="mno" placeholder="" name='mobile' autocomplete='off' value="{{ $student_details->s_mobile }}" onblur="return checkMobile3(this.value);" maxlength="10">
                                                
                                            </div>
                                            <div id='errorMobile1'></div>
                                           
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="city">City</label>
                                            <input disabled type="text" class="form-control" id="city" placeholder="" name='city' autocomplete='off' value="{{ $student_details->s_city }}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="state">State</label>
                                            <input disabled type="text" class="form-control" id="state" placeholder="" name='state' autocomplete='off' value="{{ $student_details->s_state }}">
                                        </div>
                                    </div>
                                    <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="addd">Present Address</label>
                                            <textarea disabled class="form-control" rows="5" id="padress" placeholder="" name='present_address'>{{ $student_details->s_present_address }}</textarea>
                                    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="state">Permanent Address</label>
                                        <textarea disabled class="form-control" rows="5" id="padress" placeholder="" name='permanent_address'>{{ $student_details->s_permanent_address }}</textarea>
                                    </div>
                            </div>
                            <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="adn">Adhar Card Number</label>
                                           <input disabled type="text" class="form-control" id="adn" placeholder="" name='student_adhar' value="{{ $student_details->s_adhar_card }}">  
                                        </div>
                                        
                                        <!--<div class="form-group col-md-3">
                                            <label for="mno">Family ID</label>
                                            
                                                <input type="text" class="form-control" id="mno" placeholder="" name='family_id' value="{{ $student_details->s_family_id }}">  
                                           
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="city">Member ID</label>
                                            <input type="text" class="form-control" id="city" placeholder="" name='member_id' value="{{ $student_details->s_member_id }}">
                                        </div>-->
                            </div>
                            <!--<div class="row">
                                <div class="form-group col-md-12">
                                   <center><img src="{{ asset('public/documents/'.$student_details->s_image_url) }}"></center>
                                </div>
                            </div>-->
                                      
                        

                    </div>
                    <!-- /tile body -->

                     <!-- tile body -->
                    <div class="tile-body ">
<div class="ak_tile_subhead"> <h2> Upload Documents </h2></div>
                        
                           
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                               
                                                <div class="input-group">
                                         
                                                    <a href="{{ asset('public/documents/'.$student_details->s_tc) }}" target='_blank'>View TC</a>
                                                    
                                                </div>
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                               
                                                <div class="input-group">
                                                   <a href="{{ asset('public/documents/'.$student_details->s_birth) }}" target='_blank'>View Birth Certificate</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-4">
                         
                                                <div class="input-group">
                                                    <a href="{{ asset('public/documents/'.$student_details->s_char_cer) }}" target='_blank'>View Character certificate</a>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                          
                                            </div>
                        

                    </div>
                    <!-- /tile body -->
                        <!-- tile body -->
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
            <div class="form_subdivision">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Name </label>
                                        <input disabled type="text" class="form-control" id="fname" name='gardian_name' value="{{ $student_details->s_guardian_name }}"/>    

                    </div>

                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Occupation</label>
                                        <input disabled type="text" class="form-control" id="fname" name='gardian_occupation' value="{{ $student_details->s_guardian_occupation }}"/>    

                    </div>

                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Income</label>
                                        <input disabled type="text" class="form-control" id="fname" name='gardian_income' value="{{ $student_details->s_guardian_income }}"/>    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Education</label>
                                        <input disabled type="text" class="form-control" id="fname" name='gardian_education' value="{{ $student_details->s_guardian_education }}"/>    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Mobile Number</label>
                                        <input disabled type="number" class="form-control" id="fname" name='gardian_mobile' value="{{ $student_details->s_guardian_mobile }}" onblur="return checkMobile2(this.value);" maxlength="10"/>
                                        <div id='errorGardianMobile'></div>    

                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Email</label>
                                        <input disabled type="text" class="form-control" id="fname" name='gardian_email' value="{{ $student_details->s_guardian_email }}"/>    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Adhaar Number</label>
                        
            <input disabled type="text" class="form-control" id="fname" name='gardian_adhar' value="{{ $student_details->s_guardian_adhar }}"/>    
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">City</label>
                        
            <input disabled type="text" class="form-control" id="fname" name='gardian_city' value="{{ $student_details->s_guardian_city }}"/>    
                                           </div>
                    <div class="form-group col-md-4">
                        <label for="fname">State</label>
                      
            <input disabled type="text" class="form-control" name='gardian_state' value="{{ $student_details->s_guardian_state }}" />    
                        </div>
                    </div>
                   
                   
                </div>

                   

</div>
 <!-- tile body -->
             <div class="tile-body ">
                <div class="ak_tile_subhead"> <h2> Transport Details </h2></div>
            
                <div class="row">

                    <div class="form-group col-md-6">
                        <label>Transport Route </label>
                        <select disabled class="form-control ak_select2" name='transport_id' onchange="return getTransport(this.value);">
                            <option value='0'>No-Route</option>
                            @foreach($data['transport'] as $transport)
                            <option value='{{$transport->TrasportRoutId}}' {{ $student_details->s_transport_id == $transport->TrasportRoutId ? 'selected' : '' }}>{{ $transport->RouteName}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-6">
                        <label>Vhicle Number </label>
                         <input disabled type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='{{ $student_details->s_vehicle_id }}'/>  
                    </div>

                </div>

        </div>
        <!-- /tile body -->
                     <!-- tile body -->
                     <div class="tile-body ">
                        <div class="ak_tile_subhead"> <h2> Hostel Details </h2></div>
                    
                        <div class="row">
        
                            <div class="form-group col-md-6">
                                <label>Hostel Name  </label>
                                <select disabled class="form-control ak_select2" name='hostel_id' onchange='return getRoom(this.value);'>
                                    <option value='0'>No-Hostel</option>
                                    @foreach($data['hostels'] as $hostel)
                                    <option value='{{$hostel->HostelId}}' {{ $student_details->s_hostel_id == $hostel->HostelId ? 'selected' : '' }}>{{ $hostel->HostelName}}
                                    @endforeach
                                </select>
        
                            </div>
							<div class="form-group col-md-6">
								<label>Block Name </label>
								 <input disabled type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='{{ $student_details->s_block_name }}'/>  
							</div>
							<div class="form-group col-md-6">
								<label>Floor Name </label>
								 <input disabled type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='{{ $student_details->s_floor_name }}'/>  
							</div>
                            <div class="form-group col-md-6">
                                <label>Room Name  </label>
                                <select disabled class="form-control ak_select2" required id='room_id' name='room_id'>
                                    <option value='0'>Select Room</option>
									@foreach($data['room'] as $key)
									   <option value="{{ $key->RoomId}}" {{ $student_details->s_room_id  == $key->RoomId ? 'selected' : '' }}>{{ $key->RoomName }}</option>
									@endforeach
                                </select>
        
                            </div>
							<div class="form-group col-md-6">
								<label>Room Category </label>
								 <input disabled type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='{{ $student_details->s_room_category }}'/>  
							</div>
							
							<div class="form-group col-md-6">
								<label>Room Type</label>
								 <input disabled type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='{{ $student_details->s_room_type }}'/>  
							</div>
							
							<div class="form-group col-md-6">
								<label>Bed Name</label>
								 <input disabled type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='{{ $student_details->s_bed_name }}'/>  
							</div>
        
                        </div>
        
                </div>
                <!-- /tile body -->
                 <!-- tile body -->
                 <div class="tile-body ">
                    <div class="ak_tile_subhead"> <h2> Previous School Details </h2></div>
                
                    <div class="row">
    
                        <div class="form-group col-md-6">
                            <label>School Name  </label>
                            <input disabled type="text" class="form-control" id="fname" name='school_name' value="{{ $student_details->s_previouse_school }}">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Qualification  </label>
                            <input disabled type="text" class="form-control" id="fname" name='qualification' value="{{ $student_details->s_previouse_qualification }}">

                        </div>
                        <div class="form-group col-md-12">
                            <label for="addd">Remarks</label>
                                <textarea disabled class="form-control" rows="3" name="remarks" id="padress" placeholder="" >{{ $student_details->s_previouse_remark }}</textarea>
                        
                        </div>
    
                    </div>
    
            </div>
            <!-- /tile body -->

              
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