@extends('layouts.admin_header')
@section('title', 'New Admission')
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
<a href="index.html">Student Admission</a>
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
                        <h1 class="custom-font"><i class="fa fa-graduation-cap"></i> <strong>Student </strong>Admission</h1>
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
<form action='{{route('student.store')}}' method='post' enctype="multipart/form-data">
    {{ csrf_field() }}
                    <!-- tile body -->
                    <div class="tile-body not-last">

<div class="ak_tile_subhead"> <h2> Academic Details </h2></div>
                        
                            <div class="row">
                            <div class="form-group col-md-3">
                                <label>Academic Year *</label>
                                <select class="form-control" name="session" required id='session'>
                                    @foreach($dropDown['session'] as $key)
                                    <option value="{{ $key->ClassSession }}">{{ $key->ClassSession}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="regno">Register No *</label>
                                <input type="text" class="form-control" id="regno" placeholder="eg: SMS-02194" required name='s_registered' autocomplete='off' value="{{ old('s_registered')}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="roll">Roll</label>
                                <input type="text" class="form-control" name="roll" placeholder="" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="regno">Admission Date *</label>
                                <div class='input-group datepicker ' data-format="L">
                                    <input type='text' class="form-control" required name='adm_date' autocomplete='off' value="{{ old('adm_date')}}"/>
                                    <span class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </span>
                                </div>
                            </div>
                           
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label>Class *</label>
                                    <select name='class_name' class="form-control" required onchange="return getSection(this.value);">
                                        <option selected>Slelect </option>
                                        @foreach($dropDown['classes'] as $key)
                                            <option value="{{ $key->ClassNo }}">{{ $key->ClassNo}}</option>
                                        @endforeach
                                    </select>
    
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Section *</label>
                                    <select class="form-control" required id='section' name='class_section'>
                                        <option value=''>Select Class Section</option>
                                    </select>
    
                                </div>
                                <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <label>Semester *</label>
                                    <select class="form-control" name="si_type" required>
                                        <option>Semester One</option>
                                        <option>Semester Two</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Category *</label>
                                    <select class="form-control" required name='category'>
                                        <option value='' selected>Select</option>
                                        <option value='Gen.'>Gen.</option>
                                        <option value='OBC-A'>OBC-A</option>
                                        <option value='OBC-B'>OBC-B</option>
                                        <option value='SC'>SC</option>
                                        <option value='ST'>ST</option>
                
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
                                        <input type="text" class="form-control" id="fname" required name='fname' autocomplete='off' value="{{ old('fname')}}"/>
                                        
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="lanem">Last Name *</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="fa fa-user-o"></span>
                                        </span>
                                        <input type="text" class="form-control" id="lname" required name='lname' autocomplete='off' value="{{ old('lname')}}"/>
                                        
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Gender *</label>
                                    <select class="form-control ak_select2" required name='gender'>
                                        <option selected> Select</option>
                                        <option value='Male'>Male</option>
                                        <option value='Female'>Female</option>
                                        <option value='Other'>Other</option>
                                    </select>
    
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Blood Group</label>
                                    <select class="form-control ak_select2" required name='blood_group'>
                                        <option value=''> Select</option>
                                        <option value='A+'>A+</option>
                                        <option value='A'>A</option>
                                        <option value='A-'>A-</option>
                                        <option value='B'>B</option>
                                        <option value='B+'>B+</option>
                                        <option value='B-'>B-</option>
                                        <option value='AB'>AB</option>
                                        <option value='AB+'>AB+</option>
                                        <option value='AB-'>AB-</option>
                                        <option value='O'>O</option>
                                        <option value='O+'>O+</option>
                                        <option value='O-'>O-</option>
                                    </select>
    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="regno">Birth Date *</label>
                                    <div class='input-group datepicker ' data-format="L">
                                       
                                        <input type='text' class="form-control" required name='dob' autocomplete='off' value="{{ old('dob')}}"/>
                                         <span class="input-group-addon">
                                            <span class="fa fa-birthday-cake"></span>
                                        </span>
                                    </div>
                                </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="mt">Mother Tongue</label>
                                        <input type="text" class="form-control" id="mt" placeholder="" name='mother_name' autocomplete='off' value="{{ old('mother_name')}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="rgn">Religion</label>
                                        <input type="text" class="form-control" id="rgn" placeholder="" name='religion' autocomplete='off' value="{{ old('religion')}}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="cst">Caste</label>
                                        <input type="text" class="form-control" id="cst" placeholder="" name='caste' autocomplete='off' value="{{ old('caste')}}">
                                    </div>
                                    </div>

                                   
                                <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="mno">Mobile Number</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="fa fa-phone"></span>
                                                </span>
                                                <input type="number" class="form-control" id="mno" placeholder="" name='mobile' autocomplete='off' value="{{ old('mobile')}}" onblur="return checkMobile3(this.value);" maxlength="10">
                                                
                                            </div>
                                            <div id='errorMobile1'></div>
                                           
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="" name='city' autocomplete='off' value="{{ old('mother_name')}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" placeholder="" name='state' autocomplete='off' value="{{ old('state')}}">
                                        </div>
                                    </div>
                                    <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="addd">Present Address</label>
                                            <textarea class="form-control" rows="5" id="padress" placeholder="" name='present_address'>{{ old('present_address') }}</textarea>
                                    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="state">Permanent Address</label>
                                        <textarea class="form-control" rows="5" id="padress" placeholder="" name='permanent_address'>{{ old('permanent_address') }}</textarea>
                                    </div>
                            </div>
                            <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="adn">Adhar Card Number</label>
                                           <input type="text" class="form-control" id="adn" placeholder="" name='student_adhar' value="{{ old('student_adhar')}}">  
                                        </div>
                                        
                                        <div class="form-group col-md-3">
                                            <label for="mno">Family ID</label>
                                            
                                                <input type="text" class="form-control" id="mno" placeholder="" name='family_id' value="{{ old('family_id')}}">  
                                           
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="city">Member ID</label>
                                            <input type="text" class="form-control" id="city" placeholder="" name='member_id' value="{{ old('member_id')}}">
                                        </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="city">Upload pic</label>
                                <div class="drop-zone">
                                    <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                    <input type="file" name="myFile" class="drop-zone__input" required>
                                  </div>
                                  </div>
                            </div>
                                      
                        

                    </div>
                    <!-- /tile body -->

                     <!-- tile body -->
                    <div class="tile-body ">
<div class="ak_tile_subhead"> <h2> Upload Documents </h2></div>
                        
                           
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="upd">Upload TC</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                    <input type="file" class="form-control" id="upd" placeholder="" name='tc'>
                                                    
                                                </div>
                                               
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="upd">Upload Birth Certificate</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                    <input type="file" class="form-control" id="upd" placeholder="" name='birth_cer'>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="upd">Upload Character certificate</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-upload"></span>
                                                    </span>
                                                    <input type="file" class="form-control" id="upd" placeholder="" name='character_cer'>
                                                    
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
            <input type="text" class="form-control" name='father_name' value="{{ old('father_name')}}"/>    
            </div>

            <div class="form-group col-md-4">
            <label for="fname">Father Occupation</label>
            <input type="text" class="form-control" id="fname" name='father_occupation' value="{{ old('father_occupation')}}"/>    
            </div>

            <div class="form-group col-md-4">
                <label for="fname">Father Income</label>
            <input type="text" class="form-control" id="fname" name='father_income' value="{{ old('father_income')}}"/>    

            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Education</label>
            <input type="text" class="form-control" id="fname" name='father_education' value="{{ old('father_education')}}"/>    

            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Mobile Number</label>
                <div class="input-group">
            <input type="number" class="form-control" id="fname" name='father_mobile' value="{{ old('father_mobile')}}" onblur="return checkMobile(this.value);" maxlength="10"/>  
            <div id='errorFatherMobile'></div>  
                </div>
                
            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Email</label>
                <div class="input-group">
            <input type="text" class="form-control" id="fname" name='father_email' value="{{ old('father_email')}}" onblur="return validateEmail(this.value);"/>    
                </div>
                <div id='emailFatherError'></div>
            </div>
            <div class="form-group col-md-4">
                <label for="fname">Father Adhaar Number</label>
                <div class="input-group">
                <input type="text" class="form-control" id="fname" name = "father_adhar" value="{{ old('father_adhar') }}" />    
                </div>
            </div>

        </div>
        </div>
        <div class="form_subdivision">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="fname">Mother Name</label>
                    
            <input type="text" class="form-control" id="fname" name = 'mother_name' value="{{ old('mother_name')}}"/>    

                </div>

                <div class="form-group col-md-4">
                    <label for="fname">Mother Occupation</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_occupation' value="{{ old('mother_occupation')}}"/>    
                                    </div>

                <div class="form-group col-md-4">
                    <label for="fname">Mother Income</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_income' value="{{ old('mother_income')}}"/>    
                    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Education</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_education' value="{{ old('mother_education')}}"/>    
                  
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Mobile Number</label>
                   
            <input type="number" class="form-control" id="fname" name='mother_mobile' value="{{ old('mother_mobile')}}" onblur="return checkMobile1(this.value);" maxlength="10"/>    
                   <div id='errorMotherMobile'></div> 
                </div>
                
                <div class="form-group col-md-4">
                    <label for="fname">Mother Email</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_email' value="{{ old('mother_email')}}" onblur="return validateEmail1(this.value);"/>    
                 <div id='emailMotherError'></div>  
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Adhaar Number</label>
                    
            <input type="text" class="form-control" id="fname" name='mother_adhar' value="{{ old('mother_adhar')}}"/>    
                    
                </div>

            </div>
            </div>
            <div class="form_subdivision">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fname">City</label>
                        
            <input type="text" class="form-control" id="fname" name='mother_city' value="{{ old('mother_city
            ')}}"/>    
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">State</label>
                       
            <input type="text" class="form-control" id="fname" name='mother_state' value="{{ old('mother_state')}}"/>    
                                       </div>
                   
                    <div class="form-group col-md-12">
                        <label for="addd">Address</label>
                            <textarea class="form-control" rows="5" id="padress" placeholder="" name='address_1'>{{ old('address_1') }}</textarea>
                    
                    </div>
                </div>
            </div>
            <div class="form_subdivision">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Name </label>
                                        <input type="text" class="form-control" id="fname" name='gardian_name' value="{{ old('gardian_name')}}"/>    

                    </div>

                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Occupation</label>
                                        <input type="text" class="form-control" id="fname" name='gardian_occupation' value="{{ old('gardian_occupation')}}"/>    

                    </div>

                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Income</label>
                                        <input type="text" class="form-control" id="fname" name='gardian_income' value="{{ old('gardian_income')}}"/>    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Education</label>
                                        <input type="text" class="form-control" id="fname" name='gardian_education' value="{{ old('gardian_education')}}"/>    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Mobile Number</label>
                                        <input type="number" class="form-control" id="fname" name='gardian_mobile' value="{{ old('gardian_mobile')}}" onblur="return checkMobile2(this.value);" maxlength="10"/>
                                        <div id='errorGardianMobile'></div>    

                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Email</label>
                                        <input type="text" class="form-control" id="fname" name='gardian_email' value="{{ old('gardian_email')}}" onblur="return validateEmail2(this.value);"/>
                        <div id='emailGardianError'></div>                    

                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">Guardian Adhaar Number</label>
                        
            <input type="text" class="form-control" id="fname" name='gardian_adhar' value="{{ old('gardian_adhar')}}"/>    
                        
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fname">City</label>
                        
            <input type="text" class="form-control" id="fname" name='gardian_city' value="{{ old('gardian_city')}}"/>    
                                           </div>
                    <div class="form-group col-md-4">
                        <label for="fname">State</label>
                      
            <input type="text" class="form-control" name='gardian_state' value="{{ old('gardian_state')}}" />    
                        </div>
                    </div>
                   
                   
                </div>

                    <div class="form_subdivision last-item ">
                        <div class="row">
                                        <div class="col-sm-6">
                                                <h2 class="card-inside-title">Are You Sibling ?</h2>                          
                                                <div class="form-group">
                                                      <input name="is_sibling" type="radio" id="radio_40" class="with-gap radio-col-green" value="1" onclick="return getBankFields();" />
                                                      <label for="radio_40">No</label>                                          
                                                </div>  
                                            </div>
                                             <div class="col-sm-6"> 
                                                <h2 class="card-inside-title"><br/></h2>                            
                                                <div class="form-group">
                                                      <input name="is_sibling" type="radio" id="radio_39" class="with-gap radio-col-green" value="2"  onclick="return getBankFields();"/>
                                                      <label for="radio_39">Yes</label>                                         
                                                </div>
                                            </div>
                                        </div>
                        <div class="row" id='sibling' style="display: none;">
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

</div>
 <!-- tile body -->
             <div class="tile-body ">
                <div class="ak_tile_subhead"> <h2> Transport Details </h2></div>
            
                <div class="row">

                    <div class="form-group col-md-6">
                        <label>Transport Route </label>
                        <select class="form-control ak_select2" name='transport_id' onchange="return getTransport(this.value);">
                            <option value='0'>No-Route</option>
                            @foreach($dropDown['transport'] as $transport)
                            <option value='{{$transport->TrasportRoutId}}' {{ old('transport_id') == $transport->TrasportRoutId ? 'selected' : '' }}>{{ $transport->RouteName}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group col-md-6">
                        <label>Vhicle Number </label>
                         <input type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='No Vehicle'/>  
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
                                    @foreach($dropDown['hostels'] as $hostel)
                                    <option value='{{$hostel->HostelId}}' {{ old('hostel_id') == $hostel->HostelId ? 'selected' : '' }}>{{ $hostel->HostelName}}
                                    @endforeach
                                </select>
        
                            </div>
                            <div class="form-group col-md-6">
                                <label>Room Name  </label>
                                <select class="form-control ak_select2" required id='room_id' name='room_id'>
                                    <option value='0'>Select Room</option>
                                </select>
        
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
                            <input type="text" class="form-control" id="fname" name='school_name' value="{{ old('school_name') }}">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Qualification  </label>
                            <input type="text" class="form-control" id="fname" name='qualification' value="{{ old('qualification') }}">

                        </div>
                        <div class="form-group col-md-12">
                            <label for="addd">Remarks</label>
                                <textarea class="form-control" rows="3" name="remarks" id="padress" placeholder="" >{{ old('remarks') }}</textarea>
                        
                        </div>
    
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="checkbox" name='final_check' required >   I here by declare

                        </div>    
                    </div> 
    
            </div>
            <!-- /tile body -->

                    <div class="submit-holder">
                        <div class="row">
                            <button type="submit" class="btn btn-blue">Submit <i class="fa fa-floppy-o"></i></button> 
                        </div> 
                    </div>

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
            $("#emailGardianError").html(" ");
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
</script>
@endsection