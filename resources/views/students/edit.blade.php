@extends('layouts.admin_header')
@section('title', 'Edit Student Details')
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
<a href="index.html">Edit Student</a>
</li>
</ul>

<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>

</div>

</div>
 <div class="akform_holder new_admision">
        @if (count($errors))
               <div class="alert alert-danger alert-dismissible">
                 <ul>  
                   @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach     
                 </ul>   
            </div>
        @endif 
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif 
     <div class="row">
         <div class="col-md-12">
                <!-- tile -->
                <section class="tile">

                    <!-- tile header -->
                    <div class="tile-header bg-blue dvd dvd-btm">
                        <h1 class="custom-font"><i class="fa fa-graduation-cap"></i> <strong>Student </strong>Detail</h1>
                        <ul class="controls">
                            <li class="dropdown">

                                <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <i class="fa fa-spinner fa-spin"></i>
                                </a>

                                <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                    <li>
                                        <a role="button" tabindex="0" class="tile-toggle">
                                            <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                            <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-refresh">
                                            <i class="fa fa-refresh"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" class="tile-fullscreen">
                                            <i class="fa fa-expand"></i> Fullscreen
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                        </ul>
                    </div>
                    <!-- /tile header -->
<form method='post' action="{{ route('student.update', $student_details->s_id) }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');">
                     {{ @csrf_field() }}
                     {{ method_field('PUT') }}
					 <input type="hidden" name='si_id' value="{{ $data['studentInfo']->si_id}}">
                    <!-- tile body -->
                    <div class="tile-body not-last">

<div class="ak_tile_subhead"> <h2> Academic Details </h2></div>
                        
                            <div class="row">
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

                            <label>Academic Year *</label>
                            
                            <select class="form-control ak_select2" name="session" required id='session'>
                            
                                @foreach($data['session'] as $key)
                                    <option value="{{ $key->ClassSession }}" {{ $key->ClassSession == $student_details->s_session ? 'selected' : ''}}> {{ $key->ClassSession}}</option>
                                @endforeach
                            
                            </select>
                            
                            </div>
                            
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <label for="regno">Register No *</label>
                            
                            <input type="text" class="form-control" id="regno" placeholder="eg: SMS-02194" required name='s_registered' autocomplete='off' value="{{ $student_details->s_registered }}" readonly >
                            
                            </div>
                            
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <label for="roll">Roll</label>
                            
                            <input type="text" class="form-control" name="roll" placeholder="" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="{{ $data['studentInfo']->si_student_rollnumber }}" required >
                            
                            </div>
                            
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <label for="regno">Admission Date *</label>
                            
                            <div class='input-group datepicker'>
                            
                            <input type='text' class="form-control" required name='adm_date' autocomplete='off' value="{{ $student_details->s_adm_date }}"/>
                            
                            <span class="input-group-addon">
                            
                            <span class="fa fa-calendar"></span>
                            
                            </span>
                            
                            </div>
                            
                            </div>
                            
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <label>Class *</label>
                            
                            <select name='class_name' class="form-control ak_select2" required onchange="return getSection(this.value);">
                            
                            <option value=''>Select </option>
                            
                            @foreach($data['classes'] as $key)
                                <option value="{{ $key->ClassNo }}" {{ $key->ClassNo == $data['classDetails']->ClassNo ? 'selected' : ''}} >{{ $key->ClassNo}}</option>
                            @endforeach
                            
                            </select>
                            
                
                            </div>
                            
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <label>Section *</label>
                            
                            <select class="form-control ak_select2" required id='section' name='class_section'>
                            
                            <option value=''>Select Class Section</option>
                            @foreach($data['sections'] as $key)
								<option value="{{ $key->ClassSection }}" {{ $key->ClassSection == $data['classDetails']->ClassSection ? 'selected' : ''}} >{{ $key->ClassSection}}</option>
							@endforeach
                            </select>
                            
                            
                            
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <label>Semester *</label>
                            <select class="form-control ak_select2" name="semester" required>
                            <option value=''>Select</option>
                            <option value='1' {{  $data['studentInfo']->si_type == '1' ? 'selected' : '' }}>Semester One</option>
                            <option value='2' {{ $data['studentInfo']->si_type == '2' ? 'selected' : '' }}>Semester Two</option>
                            </select>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            
                            <label>Category *</label>
                            
                            <select class="form-control ak_select2" required name='category'>
                            
                            <option value='' selected>Select</option>
                            
                            <option value='Gen.' {{ $student_details->s_category_id == 'Gen.' ? 'selected' : '' }}>Gen.</option>
                            
                            <option value='OBC-A' {{ $student_details->s_category_id == 'OBC-A' ? 'selected' : '' }}>OBC-A</option>
                            
                            <option value='OBC-B' {{ $student_details->s_category_id == 'OBC-B' ? 'selected' : '' }} >OBC-B</option>
                            
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
                                        <input type="text" class="form-control" id="fname" required name='fname' autocomplete='off' value="{{ $student_details->s_first_name }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" />
                                        
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="lanem">Last Name *</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="fa fa-user-o"></span>
                                        </span>
                                        <input type="text" class="form-control" id="lname" required name='lname' autocomplete='off' value="{{ $student_details->s_last_name }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>
                                        
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Gender *</label>
                                    <select class="form-control ak_select2" required name='gender'>
                                        <option value=''> Select</option>
                                        <option value='Male' {{ $student_details->s_gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value='Female' {{ $student_details->s_gender == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value='Other' {{ $student_details->s_gender == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
    
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Blood Group</label>
                                    <select class="form-control ak_select2" required name='blood_group'>
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
                                    <div class='input-group datepicker'>
                                        <input type='text' class="form-control" required name='dob' autocomplete='off' value="{{ $student_details->s_dob }}"/>
                                         <span class="input-group-addon">
                                            <span class="fa fa-birthday-cake"></span>
                                        </span>
                                    </div>
                                </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="mt">Mother Tongue</label>
                                       
                                        <select name='mother_tongue' class="form-control ak_select2" required >

                                            <option value="" selected>Select</option>
                                            
                                            @foreach($data['mothertongue'] as $key)
                                            
                                            <option value="{{ $key->mother_tongue_name }}" {{  $student_details->s_mother == $key->mother_tongue_name ? 'selected' : '' }}>{{ $key->mother_tongue_name}}</option>
                                            
                                            @endforeach
                                        
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="rgn">Religion</label>
                                        <input type="text" class="form-control" id="rgn" placeholder="" name='religion' autocomplete='off' value="{{ $student_details->s_religion }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cst">Caste</label>
                                        <input type="text" class="form-control" id="cst" placeholder="" name='caste' autocomplete='off' value="{{ $student_details->s_caste }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" required>
                                    </div>
                                    </div>

                                   
                                <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="mno">Mobile Number</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-phone"></span>
                                                </span>
                                                <input type="number" class="form-control" id="mno" placeholder="" name='mobile' autocomplete='off' value="{{ $student_details->s_mobile }}" onblur="return checkMobile3(this.value);" maxlength="10" minlength='10' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                                
                                            </div>
                                            <div id='errorMobile1'></div>
                                           
                                        </div>
                                        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                                            <label for="mno">Email</label>
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                            <span class="fa fa-envelope-o"></span>
                                            </span>
                                            <input type="text" class="form-control" id="mno" placeholder="" onblur="return CheckEmail4(this.value);" required value="{{ $student_details->s_father_email }}" name='s_email'>
                                            <div id='errorStudentemail'></div>
                                        </div>
                                        
                                        
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="" name='city' autocomplete='off' value="{{ $student_details->s_city }}" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="state">State</label>
                                            <select class="form-control ak_select2" required name='state'>
                                                <option value=''>Select</option>    
                                                @forelse($data['states'] as $key=>$state)
                                                <option value='{{ $state}}' {{ $student_details->s_state == $state ? 'selected' : '' }}>{{ $state }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="addd">Present Address</label>
                                            <textarea class="form-control" rows="5" id="padress" onblur="put_address_permanent(this.value);" required placeholder="" name='present_address'>{{ $student_details->s_present_address }}</textarea>
                                    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="state">Permanent Address</label>
                                        <textarea class="form-control" rows="5" id="permanent_address" placeholder="" name='permanent_address' required>{{ $student_details->s_permanent_address }}</textarea>
                                    </div>
                            </div>
                            <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="adn">Adhar Card Number</label>
                                           <input type="text" class="form-control" id="adn" placeholder="" name='student_adhar' value="{{ $student_details->s_adhar_card }}" required minlength='12' maxlength='12' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">  
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
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="city">View Image</label>
                                     <div class="drop-zone">
                                    <center><img src="{{ asset('public/documents/'.$student_details->s_image_url) }}" width="100px" heigth='100px'></center>   
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">Upload pic</label>
                                     <div class="drop-zone">
                                    <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                    <input type="file" name="myFile" class="drop-zone__input">
                                  </div>
                                </div>
                            </div>
                                      
                        

                    </div>
                    <!-- /tile body -->

                     <!-- tile body -->
                    <div class="tile-body ">
<div class="ak_tile_subhead"> <h2> Upload Documents </h2></div>
                        
                           
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="upd">Upload TC</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                    <input type="file" class="form-control" id="upd" placeholder="" name='tc'>
                                                    
                                                </div>
                                                <a href="{{ asset('public/documents/'.$student_details->s_tc) }}" target='_blank'>View TC</a>
                                               
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="upd">Upload Birth Certificate</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                    <input type="file" class="form-control" id="upd" placeholder="" name='birth_cer'>
                                                    
                                                </div>
                                                <a href="{{ asset('public/documents/'.$student_details->s_birth) }}" target='_blank'>View Birth Certificate</a>
                                                    
                                                
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="upd">Upload Character certificate</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                    <input type="file" class="form-control" id="upd" placeholder="" name='character_cer'>
                                                    
                                                </div>
                                                <a href="{{ asset('public/documents/'.$student_details->s_char_cer) }}" target='_blank'>View Cast certificate</a>
                                                    
                                                
                                            </div>
                                            
                                            <div class="form-group col-md-3">
                                                <label for="upd">Upload Cast certificate</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                    <input type="file" class="form-control" id="upd" placeholder="" name='cast_cer'>
                                                    
                                                </div>
                                                <a href="{{ asset('public/documents/'.$student_details->s_cast_cer) }}" target='_blank'>View Character certificate</a>
                                                    
                                                
                                            </div>
                                            
                                          
                                            </div>
                        

                    </div>
                    <!-- /tile body -->
                        <!-- tile body -->
    <div class="tile-body ">
        <div class="ak_tile_subhead"> <h2> Parents Details </h2></div>
    <div class="form_subdivision">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="fname">Father Name</label>
            <input type="text" class="form-control" name='father_name' value="{{ $student_details->s_father_name }}" required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" />    
            </div>

            <div class="form-group col-md-4">
            <label for="fname">Father Occupation</label>
            <input type="text" class="form-control" id="fname" name='father_occupation' value="{{ $student_details->s_father_occupation }}" required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" />    
            </div>

            <div class="form-group col-md-4">
                <label for="fname">Father Income</label>
            <input type="text" class="form-control" id="fname" name='father_income' value="{{ $student_details->s_father_income }}" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />    

            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Education</label>
                 <select class="form-control ak_select2" name="father_education" required>
    
                    <option value=''>Select Education</option>
                    
                    @foreach($data['educations'] as $dept)
                    
                    <option value="{{ $dept->education_name}}" {{ $dept->education_name == $student_details->s_father_education ? 'selected' : '' }}>{{ $dept->education_name}}</option>
                    
                    @endforeach
                
                </select>

            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Mobile Number</label>
                <input type="number" class="form-control" id="fname" name='father_mobile' value="{{ $student_details->s_father_mobile }}" onblur="return checkMobile(this.value);" maxlength="10" minlength='10' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />  
                <div id='errorFatherMobile'></div>  
                
            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Email</label>
                   <input type="text" class="form-control" id="fname" name='father_email' value="{{ $student_details->s_father_email }}"/>    
            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Adhaar Number</label>
                <div class="input-group">
                <input type="text" class="form-control" id="fname" name = "father_adhar" value="{{ $student_details->s_father_adhar }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength='12' minlength='12'/>    
                </div>
            </div>

        </div>
        </div>
        <div class="form_subdivision">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="fname">Mother Name</label>
                    
            <input type="text" class="form-control" id="fname" name = 'mother_name' value="{{ $student_details->s_mother_name }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" required/>    

                </div>

                <div class="form-group col-md-4">
                    <label for="fname">Mother Occupation</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_occupation' value="{{ $student_details->s_mother_occupation }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" required/>    
                                    </div>

                <div class="form-group col-md-4">
                    <label for="fname">Mother Income</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_income' value="{{ $student_details->s_mother_income }}" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"/>    
                    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Education</label>
                     <select class="form-control ak_select2" name="mother_education" required>
    
                        <option value=''>Select Education</option>
                        
                        @foreach($data['educations'] as $dept)
                        
                        <option value="{{ $dept->education_name}}" {{ $dept->education_name == $student_details->s_mother_education ? 'selected' : '' }}>{{ $dept->education_name}}</option>
                        
                        @endforeach
                    
                    </select>
        
                  
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Mobile Number</label>
                   
            <input type="number" class="form-control" id="fname" name='mother_mobile' value="{{ $student_details->s_mother_mobile_number }}" onblur="return checkMobile1(this.value);" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required minlength='10' />    
                   <div id='errorMotherMobile'></div> 
                </div>
                
                <div class="form-group col-md-4">
                    <label for="fname">Mother Email</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_email' value="{{ $student_details->s_mother_email }}" required/>    
                   
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Adhaar Number</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_adhar' value="{{ $student_details->s_mother_adhar }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required minlength='12' maxlength='12' />    
                    
                </div>

            </div>
            </div>
            <div class="form_subdivision">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fname">City</label>
                        
            <input type="text" class="form-control" id="fname" name='mother_city' value="{{ $student_details->s_city_1 }}" required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>    
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">State</label>
                        <select class="form-control ak_select2" required name='mother_state'>
                                                <option value=''>Select</option>    
                                                @forelse($data['states'] as $key=>$state)
                                                <option value='{{ $state}}' {{ $student_details->s_state_1 == $state ? 'selected' : '' }}>{{ $state }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                       </div>
                   
                    <div class="form-group col-md-12">
                        <label for="addd">Address</label>
                            <textarea class="form-control" rows="5" id="padress" placeholder="" required name='address_1'>{{ $student_details->s_address_1 }}</textarea>
                    
                    </div>
                </div>
            </div>
            <div class="form_subdivision">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Name </label>
                                        <input type="text" class="form-control" id="fname" name='gardian_name' value="{{ $student_details->s_guardian_name }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>    

                    </div>

                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Occupation</label>
                                        <input type="text" class="form-control" id="fname" name='gardian_occupation' value="{{ $student_details->s_guardian_occupation }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>    

                    </div>

                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Income</label>
                                        <input type="text" class="form-control" id="fname" name='gardian_income' value="{{ $student_details->s_guardian_income }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"/>    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Education</label>
                        <select class="form-control ak_select2" name="gardian_education">
    
                            <option value=''>Select Education</option>
                            
                            @foreach($data['educations'] as $dept)
                            
                            <option value="{{ $dept->education_name}}" {{ $dept->education_name == $student_details->gardian_education ? 'selected' : '' }}>{{ $dept->education_name}}</option>
                            
                            @endforeach
                        
                        </select>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Mobile Number</label>
                                        <input type="number" class="form-control" id="fname" name='gardian_mobile' value="{{ $student_details->s_guardian_mobile }}" maxlength="10" minlength='10' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />
                                        <div id='errorGardianMobile'></div>    

                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Email</label>
                                        <input type="text" class="form-control" id="fname" name='gardian_email' value="{{ $student_details->s_guardian_email }}"/>    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Adhaar Number</label>
                        
            <input type="text" class="form-control" id="fname" name='gardian_adhar' value="{{ $student_details->s_guardian_adhar }}" maxlength="12" minlength='12' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />    
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">City</label>
                        
            <input type="text" class="form-control" id="fname" name='gardian_city' value="{{ $student_details->s_guardian_city }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" />    
                                           </div>
                    <div class="form-group col-md-4">
                        <label for="fname">State</label>
                      <select class="form-control ak_select2" name='gardian_state'>
                                                <option value=''>Select</option>    
                                                @forelse($data['states'] as $key=>$state)
                                                <option value='{{ $state}}' {{ $student_details->s_guardian_state == $state ? 'selected' : '' }}>{{ $state }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                        </div>
                    </div>
                   
                   
                </div>
                @if($student_details->s_sibling_detail != "Brother#$#$#$#$")
                    <div class="form_subdivision last-item ">
                        <div class="row">
                            <div class="form-group col-md-2 col-xs-2">
                                <label for="fname">Siblings </label>
                                <select class="form-control ak_select2" name="relation_id[]" required>
                                    <option>Brother</option>
                                    <option>Sister</option>
                                   
                                  </select>   
        
                            </div>
        
                            <div class="form-group col-md-2 col-xs-2">
                                <label for="fname">Name</label>
                                <input type="text" class="form-control" name="ss_name[]"/>    
        
                            </div>
        
                            <div class="form-group col-md-2 col-xs-2">
                                <label for="fname">Class</label>
                                <input type="text" class="form-control" name="ss_class[]" />    
        
                            </div>
                            <div class="form-group col-md-2 col-xs-2">
                                <label for="fname">Roll Number</label>
                                <input type="text" class="form-control" name="ss_roll_number[]" />    
        
                            </div>
                            <div class="form-group col-md-2 col-xs-2">
                                <label for="fname">Registration Number</label>
                                <input type="text" class="form-control" name="ss_registration_number[]" />    
        
                            </div>
                           <div class="col-md-2 col-xs-2">
                               <br/>
                               <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                            </div>
                        </div>
                        <div class="row after-add-more">
		
                        </div>
                         
                        </div>
                        
                    @endif    

</div>
 <!-- tile body -->
             <div class="tile-body ">
                <div class="ak_tile_subhead"> <h2> Transport Details </h2></div>
            
                <div class="row">

                    <div class="form-group col-md-6">
                        <label>Transport Route </label>
                        <select class="form-control ak_select2" name='transport_id' onchange="return getTransport(this.value);">
                            <option value='0'>No-Route</option>
                            @foreach($data['transport'] as $transport)
                            <option value='{{$transport->TrasportRoutId}}' {{ $student_details->s_transport_id == $transport->TrasportRoutId ? 'selected' : '' }}>{{ $transport->RouteName}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-6">
                        <label>Vhicle Number </label>
                         <input type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='{{ $student_details->s_vehicle_id }}'/>  
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
                                <select class="form-control ak_select2" name='hostel_id' onchange='return getRoom(this.value);'>
                                    <option value='0'>No-Hostel</option>
                                    @foreach($data['hostels'] as $hostel)
                                    <option value='{{$hostel->HostelId}}' {{ $student_details->s_hostel_id == $hostel->HostelId ? 'selected' : '' }}>{{ $hostel->HostelName}}
                                    @endforeach
                                </select>
        
                            </div>
                            <div class="form-group col-md-6">
                            <label>Block Name  </label>
                            <input type='text' name='block_name' class='form-control' autocomplete="off" maxlength="50" value="{{ $student_details->s_bloack_name }}">
                            </div>
                            <div class="form-group col-md-6">
                            <label>Floor Name  </label>
                            <input type='text' name='floor_name' class='form-control' autocomplete="off" maxlength="50" value="{{ $student_details->s_floor_name }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Room Name  </label>
                                <select class="form-control ak_select2" required id='room_id' name='room_id'>
                                    <option value='0'>Select Room</option>
									@foreach($data['room'] as $key)
									   <option value="{{ $key->RoomId}}" {{ $student_details->s_room_id  == $key->RoomId ? 'selected' : '' }}>{{ $key->RoomName }}</option>
									@endforeach
                                </select>
        
                            </div>
                            
                            <div class="form-group col-md-6">
                            <label>Room Category  </label>
                            <select class="form-control ak_select2" name='room_category'>
                                <option value='0'>Select Room Category</option>
                                <option value='AC' {{ $student_details->s_room_category  == 'AC' ? 'selected' : '' }}>AC</option>
                                <option value='Non AC' {{ $student_details->s_room_category  == 'Non AC' ? 'selected' : '' }}>Non AC</option>
                            </select>
                            </div>
                            <div class="form-group col-md-6">
                            <label>Room Type  </label>
                            <input type='text' name='room_type' class='form-control' autocomplete="off" maxlength="50" value="$student_details->s_room_type">
                            </div>
                            <div class="form-group col-md-6">
                            <label>Bed Name  </label>
                            <input type='text' name='bed_name' class='form-control' autocomplete="off" maxlength="50" value='$student_details->s_bed_name'>
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
                            <input type="text" class="form-control" id="fname" name='school_name' value="{{ $student_details->s_previouse_school }}">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Qualification  </label>
                            <select class="form-control ak_select2" name='qualification'>

                            <option selected> Select</option>
                            
                            <option value='Nursery' {{ $student_details->s_previouse_qualification == 'Nursery' ? 'selected' : '' }}>Nursery</option>
                            
                            <option value='LKG' {{ $student_details->s_previouse_qualification == 'LKG' ? 'selected' : '' }} >LKG</option>
                            
                            <option value='UKG' {{ $student_details->s_previouse_qualification == 'UKG' ? 'selected' : '' }}>UKG</option>
                            
                            <option value='1st' {{ $student_details->s_previouse_qualification == '1st' ? 'selected' : '' }}>1st</option>
                            
                            <option value='2nd' {{ $student_details->s_previouse_qualification == '2nd' ? 'selected' : '' }}>2nd</option>
                            
                            <option value='3rd' {{ $student_details->s_previouse_qualification == '3rd' ? 'selected' : '' }}>3rd</option>
                            
                            <option value='4th' {{ $student_details->s_previouse_qualification == '4th' ? 'selected' : '' }}>4th</option>
                            
                            <option value='5th' {{ $student_details->s_previouse_qualification == '5th' ? 'selected' : '' }}>5th</option>
                            
                            <option value='6th' {{ $student_details->s_previouse_qualification == '6th' ? 'selected' : '' }}>6th</option>
                            
                            <option value='7th' {{ $student_details->s_previouse_qualification == '7th' ? 'selected' : '' }}>7th</option>
                            
                            <option value='8th' {{ $student_details->s_previouse_qualification == '8th' ? 'selected' : '' }}>8th</option>
                            
                            <option value='9th' {{ $student_details->s_previouse_qualification == '9th' ? 'selected' : '' }}>9th</option>
                            
                            <option value='10th' {{ $student_details->s_previouse_qualification == '10th' ? 'selected' : '' }}>10th</option>
                            
                            <option value='11th' {{ $student_details->s_previouse_qualification == '11th' ? 'selected' : '' }}>11th</option>
                            
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="addd">Remarks</label>
                                <textarea class="form-control" rows="3" name="remarks" id="padress" placeholder="" >{{ $student_details->s_previouse_remark }}</textarea>
                        
                        </div>
    
                    </div>
    
            </div>
            <!-- /tile body -->

                    <div class="submit-holder">
                        <div class="row">
                        <div class="form-group col-sm-12"> <button type="reset" class="btn btn-red">Reset</button> 
                            <button type="submit" class="btn btn-blue">Submit <i class="fa fa-floppy-o"></i></button> </div> </div>

                    </div>
</form>
                    <div class="copy hide">
                        <div class="control-group">
                           <div class="form-group col-md-2 col-xs-2">
                                <br/>
                                <select class="form-control ak_select2" name="relation_id[]" required>
                                    <option>Brother</option>
                                    <option>Sister</option>
                                   
                                  </select>   
        
                            </div>
        
                            <div class="form-group col-md-2 col-xs-2">
                                <br/>
                                <input type="text" class="form-control" name="ss_name[]"/>    
        
                            </div>
        
                            <div class="form-group col-md-2 col-xs-2">
                                <br/>
                                <input type="text" class="form-control" name="ss_class[]" />    
        
                            </div>
                            <div class="form-group col-md-2 col-xs-2">
                                <br/>
                                <input type="text" class="form-control" name="ss_roll_number[]" />    
        
                            </div>
                            <div class="form-group col-md-2 col-xs-2">
                                <br/>
                                <input type="text" class="form-control" name="ss_registration_number[]" />    
        
                            </div>
                           <div class="col-md-2 col-xs-2">
                                <br/>
                                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                            </div>
                        </div>
                    </div>              


                </section>
                <!-- /tile -->

                
         </div>
     </div>
                  
 </div>

</div>
<script type="text/javascript">
   
function getSection(i)

{

var session = $("#session").val();

$.ajax({

url: "{{ route('student.getsection') }}",

type: 'GET',

data: { class_id:i,session:session },

success: function (argument) {

$("#section").html(argument);

},

error: function (hrx, ajaxOption, errorThrow) {

console.log(ajaxOption);

console.log(errorThrow);

}

});

}



function getTransport(i)

{

if(i == 0){

$("#vehicle_number").val('No Vehicle');

}else{

$.ajax({

url: "{{ route('student.getvehicle') }}",

type: 'GET',

data: { route_id:i },

success: function (argument) {

$("#vehicle_number").val(argument);

},

error: function (hrx, ajaxOption, errorThrow) {

console.log(ajaxOption);

console.log(errorThrow);

}

});

}

}



function getRoom(i)

{

$.ajax({

url: "{{ route('student.getroom') }}",

type: 'GET',

data: { route_id:i },

success: function (argument) {

$("#room_id").html(argument);

},

error: function (hrx, ajaxOption, errorThrow) {

console.log(ajaxOption);

console.log(errorThrow);

}

});

}

</script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>

$(function () {

$(".add-more").click(function(){ 

var html = $(".copy").html();

$(".after-add-more").append(html);

});



$("body").on("click",".remove",function(){ 

$(this).parents(".control-group").remove();

});



});

function checkMobile(i)

{

var mobileNum = i;

var validateMobNum= /^\d*(?:\.\d{1,2})?$/;

if (validateMobNum.test(mobileNum ) && mobileNum.length == 10) {

$("#errorFatherMobile").html(" ");

}

else {

$("#errorFatherMobile").html("Invalid Mobile Number");

}

return false;

}



function checkMobile1(i)

{

var mobileNum = i;

var validateMobNum= /^\d*(?:\.\d{1,2})?$/;

if (validateMobNum.test(mobileNum ) && mobileNum.length == 10) {

$("#errorMotherMobile").html(" ");

}

else {

$("#errorMotherMobile").html("Invalid Mobile Number");

}

return false;

}



function checkMobile2(i)

{

var mobileNum = i;

var validateMobNum= /^\d*(?:\.\d{1,2})?$/;

if (validateMobNum.test(mobileNum ) && mobileNum.length == 10) {

$("#errorGardianMobile").html(" ");

}

else {

$("#errorGardianMobile").html("Invalid Mobile Number");

}

return false;

}

function checkMobile3(i)

{

var mobileNum = i;

var validateMobNum= /^\d*(?:\.\d{1,2})?$/;

if (validateMobNum.test(mobileNum ) && mobileNum.length == 10) {

$("#errorMobile1").html(" ");

}

else {

$("#errorMobile1").html("Invalid Mobile Number");

}

return false;

}



function getBankFields(){

var radio_button = $('input[name="is_sibling"]:checked').val();

if(radio_button == 1){

$("#sibling").hide();

}else{

$("#sibling").show();

}       

}

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
        if (reg.test(emailField) == false) 
        {
            $("#emailFatherError").html("Invalid Email Address");
            return false;
        }
        else
        {
            $("#emailFatherError").html(" ");
            return false;
        }

    }
    function validateEmail1(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
        if (reg.test(emailField) == false) 
        {
            $("#emailMotherError").html("Invalid Email Address");
            return false;
        }
        else
        {
            $("#emailMotherError").html(" ");
            return false;
        }

    }
    function validateEmail2(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
        if (reg.test(emailField) == false) 
        {
            $("#emailGardianError").html("Invalid Email Address");
            return false;
        }
        else
        {
            $("#emailGardianError").html(" ");
            return false;
        }

    }

    function CheckEmail4(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        
        if (reg.test(emailField) == false) 
        {
            $("#errorStudentemail").html("Invalid Email Address");
            return false;
        }
        else
        {
            $("#errorStudentemail").html(" ");
            return false;
        }
    }

    function put_address_permanent(i)
    {
        $("#permanent_address").val(i);
        return false;
    }
    // character validation 
    $('#first_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#last_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#father_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#mother_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#gr_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#f_occupation').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#m_occupation').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#g_occupation').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#city').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#state').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#state_1').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#city_1').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#mt').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
     $('#rgn').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#cst').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#fe').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#me').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#ge').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#s_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#s_name_1').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#school_name').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });

    $('#relation').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#city_2').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    $('#state_2').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        alert('Please Enter Alphabate');
        return false;
        }
    });
    
    function chack_year(date){
       var dt1 = new Date(date);    
       var today = new Date();    
       var diff =(today.getTime() - dt1.getTime()) / 1000;
       diff /= (60 * 60 * 24 * 7 * 4);
       var months = Math.abs(Math.round(diff));
       if(months>=30){
           return true;
       }else{
          $("#birth_date").val(" ");
          alert('Your age is less than 2.5 years');
          return false;
       }
    }
</script>
@endsection