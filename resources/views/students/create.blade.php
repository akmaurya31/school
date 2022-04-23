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

@if(session()->has('message'))

<div class="alert alert-danger">

{{ session()->get('message') }}

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
<li>
<a role="button" tabindex="0" class="tile-toggle">
<span class="minimize"><i class="fa fa-minus"></i></span>
<span class="expand"><i class="fa fa-plus"></i></span>
</a>
</li>
</ul>

</div>

<!-- /tile header -->

<form action='{{route('student.store')}}' method='post' enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');">

{{ csrf_field() }}

<!-- tile body -->

<div class="tile-body not-last">

<div class="ak_tile_subhead"> <h2> Academic Details </h2></div>

<div class="row rowflex">

<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

<label>Academic Year *</label>

<select class="form-control ak_select2" name="session" required id='session'>

@foreach($dropDown['session'] as $key)

<option value="{{ $key->ClassSession }}">{{ $key->ClassSession}}</option>

@endforeach

</select>

</div>

<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

<label for="regno">Register No *</label>

<input type="text" class="form-control" id="regno" placeholder="eg: SMS-02194" required name='s_registered' autocomplete='off' value="{{ $regNo }}" readonly >

</div>

<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

<label for="roll">Roll</label>

<input type="text" class="form-control" name="roll" placeholder="" required onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" value="{{ old('roll') }}">

</div>

<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

<label for="regno">Admission Date *</label>

<div class='input-group datepicker'>

<input type='text' class="form-control" required name='adm_date' autocomplete='off' value="{{ old('adm_date')}}"/>

<span class="input-group-addon">

<span class="fa fa-calendar"></span>

</span>

</div>

</div>

<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

<label>Class *</label>

<select name='class_name' class="form-control ak_select2" required onchange="return getSection(this.value);">

<option value=''>Slelect </option>

@foreach($dropDown['classes'] as $key)

<option value="{{ $key->ClassNo }}">{{ $key->ClassNo}}</option>

@endforeach

</select>



</div>

<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

<label>Section *</label>

<select class="form-control ak_select2" required id='section' name='class_section'>

<option value=''>Select Class Section</option>

</select>



</div>
<div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label>Semester *</label>
<select class="form-control ak_select2" name="semester" required>
<option value=''>Select</option>
<option value='1' {{ old('semester') == '1' ? 'selected' : '' }}>Semester One</option>
<option value='2' {{ old('semester') == '2' ? 'selected' : '' }}>Semester Two</option>
</select>
</div>
<div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">

<label>Category *</label>

<select class="form-control ak_select2" required name='category'>

<option value='' selected>Select</option>

<option value='Gen.' {{ old('category') == 'Gen.' ? 'selected' : '' }}>Gen.</option>

<option value='OBC-A' {{ old('category') == 'OBC-A' ? 'selected' : '' }}>OBC-A</option>

<option value='OBC-B' {{ old('category') == 'OBC-B' ? 'selected' : '' }} >OBC-B</option>

<option value='SC' {{ old('category') == 'SC' ? 'selected' : '' }}>SC</option>

<option value='ST' {{ old('category') == 'ST' ? 'selected' : '' }}>ST</option>



</select>



</div>

</div>


</div>

<!-- /tile body -->

<!-- tile body -->

<div class="tile-body ">

<div class="ak_tile_subhead"> <h2> Student Details </h2></div>

<div class="row rowflex">

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="fname">First Name *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-user-o"></span>

</span>

<input type="text" class="form-control" id="first_name" required name='fname' autocomplete='off' value="{{ old('fname')}}" />



</div>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="lanem">Last Name *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-user-o"></span>

</span>

<input type="text" class="form-control" id="last_name" required name='lname' autocomplete='off' value="{{ old('lname')}}"  />



</div>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label>Gender *</label>

<select class="form-control ak_select2" required name='gender'>

<option value=''> Select</option>

<option value='Male' {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>

<option value='Female' {{ old('gender') == 'Female' ? 'selected' : '' }} >Female</option>

<option value='Other' {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>

</select>



</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label>Blood Group</label>

<select class="form-control ak_select2" required name='blood_group'>

<option value=''> Select</option>

<option value='A+' {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>

<option value='A' {{ old('blood_group') == 'A' ? 'selected' : '' }}>A</option>

<option value='A-' {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>

<option value='B' {{ old('blood_group') == 'B' ? 'selected' : '' }}>B</option>

<option value='B+' {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>

<option value='B-' {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>

<option value='AB' {{ old('blood_group') == 'AB' ? 'selected' : '' }}>AB</option>

<option value='AB+' {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>

<option value='AB-' {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>

<option value='O' {{ old('blood_group') == 'O' ? 'selected' : '' }}>O</option>

<option value='O+' {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>

<option value='O-' {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>

</select>



</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="regno">Birth Date *</label>

<div class='input-group datepicker'>



<input type='text' class="form-control" required name='dob' autocomplete='off' id='birth_date' value="{{ old('dob')}}" onchange="return chack_year(this.value);"/>

<span class="input-group-addon">

<span class="fa fa-birthday-cake"></span>

</span>

</div>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="mt">Mother Tongue</label>

<select name='mother_tongue' class="form-control ak_select2" required >

<option value="" selected>Select</option>

@foreach($dropDown['mothertongue'] as $key)

<option value="{{ $key->mother_tongue_name }}" {{ old('mother_tongue') == $key->mother_tongue_name ? 'selected' : '' }}>{{ $key->mother_tongue_name}}</option>

@endforeach

</select>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="rgn">Religion</label>

<input type="text" class="form-control" id="rgn" placeholder="" name='religion' autocomplete='off' value="{{ old('religion')}}" required>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="cst">Caste</label>

<input type="text" class="form-control" id="cst" placeholder="" name='caste' autocomplete='off' value="{{ old('caste')}}" required>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="mno">Mobile Number</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-phone"></span>

</span>

<input type="text" class="form-control" id="mno" placeholder="" name='mobile' autocomplete='off' value="{{ old('mobile')}}" onblur="return checkMobile3(this.value);" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>



</div>

<div id='errorMobile1'></div>



</div>
<div class="form-group col-lg-4 col-sm-6 col-xs-12">
<label for="mno">Email</label>
<div class="input-group">
<span class="input-group-addon">
<span class="fa fa-envelope-o"></span>
</span>
<input type="text" class="form-control" id="mno" placeholder="" onblur="return CheckEmail4(this.value);" required name='s_email'>

</div>
<div id='errorStudentemail'></div>

</div>
<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="city">City</label>

<input required type="text" class="form-control" id="city" placeholder="" name='city' autocomplete='off' value="{{ old('mother_name')}}">

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="state">State</label>
<select class="form-control ak_select2" required name='state'>
<option value=''>Select</option>    
@forelse($dropDown['states'] as $key=>$state)
<option value='{{ $state}}' {{ old('state') == $state ? 'selected' : '' }}>{{ $state }}</option>
@empty
@endforelse
</select>


</div>

<div class="form-group col-lg-6 col-sm-6 col-xs-12">

<label for="addd">Present Address</label>

<textarea class="form-control" rows="5" id="padress" required placeholder="" name='present_address' onblur="put_address_permanent(this.value);">{{ old('present_address') }}</textarea>



</div>

<div class="form-group col-lg-6 col-sm-6 col-xs-12">

<label for="state">Permanent Address</label>

<textarea class="form-control" rows="5" id="permanent_address" placeholder="" required name='permanent_address'>{{ old('permanent_address') }}</textarea>

</div>

<div class="form-group col-lg-12 col-md-12 col-xs-12">

<label for="adn">Adhar Card Number</label>

<input type="text" class="form-control" id="adn" placeholder="" name='student_adhar' value="{{ old('student_adhar')}}"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" minlength="12" required>  

</div>


<!--
<div class="form-group col-lg-3 col-sm-6 col-xs-12">

<label for="mno">Family ID</label>



<input type="text" class="form-control" id="mno" placeholder="" name='family_id' value="{{ old('family_id')}}">  



</div>

<div class="form-group col-lg-3 col-sm-6 col-xs-12">

<label for="city">Member ID</label>

<input type="text" class="form-control" id="city" placeholder="" name='member_id' value="{{ old('member_id')}}">

</div>
-->


<div class="form-group col-md-12 col-xs-12">

<label for="city">Upload pic</label>

<div class="drop-zone">

<span class="drop-zone__prompt">Drop file here or click to upload</span>

<input type="file" name="myFile" class="drop-zone__input">

</div>

</div>

</div>

</div>

<div class="tile-body ">

<div class="ak_tile_subhead"> 
<h2> Upload Documents </h2></div>
<div class="row rowflex">

<div class="form-group col-lg-3 col-sm-6 col-xs-12">

<label for="upd">Upload TC</label>

<div class="input-group">

<span class="input-group-addon">

    <span class="fa fa-upload"></span>

</span>

<input type="file" class="form-control" id="upd" placeholder="" name='tc'>



</div>



</div>

<div class="form-group col-lg-3 col-sm-6 col-xs-12">

<label for="upd">Upload Birth Certificate</label>

<div class="input-group">

<span class="input-group-addon">

    <span class="fa fa-upload"></span>

</span>

<input type="file" class="form-control" id="upd" placeholder="" name='birth_cer' required>



</div>



</div>

<div class="form-group col-lg-3 col-sm-6 col-xs-12">

<label for="upd">Upload Character certificate</label>

<div class="input-group">

<span class="input-group-addon">

    <span class="fa fa-upload"></span>

</span>

<input type="file" class="form-control" id="upd" placeholder="" name='character_cer'>



</div>



</div>
<div class="form-group col-lg-3 col-sm-6 col-xs-12">
<label for="upd">Upload Cast certificate</label>
<div class="input-group">
<span class="input-group-addon">
    <span class="fa fa-upload"></span>
</span>
<input type="file" class="form-control" id="upd" placeholder="">

</div>

</div>
</div>





</div>

<!-- /tile body -->

<!-- tile body -->

<div class="tile-body ">
    <div class="ak_tile_subhead"> <h2> Parents Details </h2></div>

    <div class="form_subdivision">
        <div class="row rowflex">
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Father Name</label>
        <input type="text" class="form-control" name='father_name' value="{{ old('father_name')}}" id='father_name' required/>    
    </div>
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Father Occupation</label>
        <input type="text" class="form-control" name='father_occupation' value="{{ old('father_occupation')}}" id='f_occupation' required/>    
    </div>
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Father Income</label>
        <input type="text" class="form-control" id="fname" name='father_income' value="{{ old('father_income')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" required/>    
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Father Education</label>
        <select class="form-control ak_select2" name="father_education" required>

            <option value=''>Select Education</option>
            
            @foreach($dropDown['educations'] as $dept)
            
            <option value="{{ $dept->education_name}}" {{ $dept->education_name == old('father_education') ? 'selected' : '' }}>{{ $dept->education_name}}</option>
            
            @endforeach
        
        </select>
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Father Mobile Number</label>
    
        <input type="text" class="form-control" id="fname" name='father_mobile' value="{{ old('father_mobile')}}" onblur="return checkMobile(this.value);" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required minlength="10"/>  
    
        <div id='errorFatherMobile'></div> 
    
        </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Father Email</label>
        <input required type="text" class="form-control" id="fname" name='father_email' value="{{ old('father_email')}}" onblur="return validateEmail(this.value)"/>
        <div id='emailFatherError'></div>
        </div>
        <div class="form-group col-lg-3 col-xs-12">
        <label for="fname">Father Adhaar Number</label>
        <input required type="text" class="form-control" id="fname" name = "father_adhar" value="{{ old('father_adhar') }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" minlength="12"/>    
    </div>
        </div>
    
        </div>
        <div class="form_subdivision">
        <div class="row rowflex">
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Mother Name</label>
    <input type="text" class="form-control" id="mother_name" name = 'mother_name' value="{{ old('mother_name')}}" required/>    
        </div>
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Mother Occupation</label>
        <input type="text" class="form-control" name='mother_occupation' value="{{ old('mother_occupation')}}" id='m_occupation' required/>    
    </div>
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Mother Income</label>
        <input required type="text" class="form-control" id="fname" name='mother_income' value="{{ old('mother_income')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="40"/>    
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Mother Education</label>
        <select class="form-control ak_select2" name="mother_education" required>

            <option value=''>Select Education</option>
            
            @foreach($dropDown['educations'] as $dept)
            
            <option value="{{ $dept->education_name}}" {{ $dept->education_name == old('mother_education') ? 'selected' : ' '}}>{{ $dept->education_name}}</option>
            
            @endforeach
        
        </select>
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Mother Mobile Number</label>
        <input required type="text" class="form-control" id="fname" name='mother_mobile' value="{{ old('mother_mobile')}}" onblur="return checkMobile1(this.value);" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10"/> 
        <div id='errorMotherMobile'></div>   
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Mother Email</label>
         <input required type="email" class="form-control" id="fname" name='mother_email' value="{{ old('mother_email')}}" onblur="return validateEmail1(this.value);"/>    
        <div id='emailMotherError'></div>     
    </div>
        <div class="form-group col-lg-3 col-xs-12">
        <label for="fname">Mother Adhaar Number</label>
        <input type="text" class="form-control" id="fname" name='mother_adhar' value="{{ old('mother_adhar')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" required minlength="12"/>    
    </div>
        </div>
        </div>
        <div class="form_subdivision last-item">
        <div class="row rowflex">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <label for="fname">City</label>
        <input type="text" class="form-control" name='mother_city' value="{{ old('mother_city
    
        ')}}" id='city_1' required /> 
         </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <label for="fname">State</label>
        
        <select class="form-control ak_select2" required name='mother_state'>
            <option value=''>Select</option>    
            @forelse($dropDown['states'] as $key=>$state)
            <option value='{{ $state}}' {{ old('mother_state') == $state ? 'selected' : '' }}>{{ $state }}</option>
            @empty
            @endforelse
        </select>
                </div>
                </div>
            </div>
        <div class="col-lg-8 col-md-6 col-xs-12">
        <div class="form-group ">
        <label for="addd">Address</label>
        <textarea class="form-control" rows="5" id="padress" placeholder="" name='address_1' required>{{ old('address_1') }}</textarea>
        </div>
        </div>
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="form-group ">
                <label for="addd">Parent Password</label>
                <input type='text' name='parent_password' class='form-control' autocomplete='off'>
            </div>
        </div>
        </div>
        </div>
        




</div>


<div class="tile-body bg-white">
    <div class="row">

        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="form-group ak_switch mb-20-1200px">
                <label class="control-label"><i class="fas fa-users"></i> Other Guardian?</label>
                <div class="switchholder">

                    <div class="onoffswitch labeled blue block ogswtich">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox oth" id="switch01">
                        <label class="onoffswitch-label" for="switch01">
                            <span class="onoffswitch-inner"> </span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>


                </div>
            </div>        
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="form-group ak_switch mb-20-1200px">
                <label class="control-label"><i class="fas fa5-user-friends"></i> Siblings</label>
                <div class="switchholder">

                    <div class="onoffswitch labeled blue block sblngswtch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox oth" id="switch02">
                        <label class="onoffswitch-label" for="switch02">
                            <span class="onoffswitch-inner"> </span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>


                </div>
            </div>        
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12 mb-20-sm">
            <div class="form-group ak_switch">
                <label class="control-label"><i class="fas fa5-bus-alt"></i>Transport</label>
                <div class="switchholder">

                    <div class="onoffswitch labeled blue block trnsptswtch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox oth" id="switch03">
                        <label class="onoffswitch-label" for="switch03">
                            <span class="onoffswitch-inner"> </span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>


                </div>
            </div>        
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12 mb-20-sm">
            <div class="form-group ak_switch">
                <label class="control-label"><i class="fas fa5-building"></i> Hostel</label>
                <div class="switchholder">

                    <div class="onoffswitch labeled blue block hsswtch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox oth" id="switch04">
                        <label class="onoffswitch-label" for="switch04">
                            <span class="onoffswitch-inner"> </span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>


                </div>
            </div>        
        </div>

</div>
</div>
<!-- tile body -->
<div class="tile-body " id="guardian" style="display: none;">
    <div class="ak_tile_subhead"> <h2> Guardian Details </h2></div>
    <div class="form_subdivision last-item">
        <div class="row rowflex">
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Guardian Name </label>
            <input type="text" class="form-control" id="gr_name" name='gardian_name' value="{{ old('gardian_name')}}"/>    
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Guardian Occupation</label>
            <input type="text" class="form-control" name='gardian_occupation' value="{{ old('gardian_occupation')}}" id='g_occupation'/>    
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Guardian Income</label>
            <input type="text" class="form-control" id="fname" name='gardian_income' value="{{ old('gardian_income')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12"/>    
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Guardian Education</label>
            <select class="form-control ak_select2" name="gardian_education">

                <option selected>Select Education</option>
                
                @foreach($dropDown['educations'] as $dept)
                
                <option value="{{ $dept->education_name}}" {{ $dept->education_name == old('gardian_education') ? 'selected' : ' '}}>{{ $dept->education_name}}</option>
                
                @endforeach
            
            </select>
            
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                <label for="fname">Relation</label>
                        <input type="text" class="form-control" id="relation" />    
                </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Guardian Mobile Number</label>
            <input type="number" class="form-control" id="fname" name='gardian_mobile' value="{{ old('gardian_mobile')}}" onblur="return checkMobile2(this.value);" maxlength="10"/>
    
    <div id='errorGardianMobile'></div>    
                </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Guardian Email</label>
             <input type="text" class="form-control" id="fname" name='gardian_email' value="{{ old('gardian_email')}}" onblur="return validateEmail2(this.value);"/>
             <div id='emailGardianError'></div>   
            </div>
            <div class="form-group col-lg-8 col-sm-6 col-xs-12">
            <label for="fname">Guardian Adhaar Number</label>
            <input type="text" class="form-control" id="fname" name='gardian_adhar' value="{{ old('gardian_adhar')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" minlength="12" maxlength="12"/>    
            </div>
      
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <label for="fname">City</label>
        <input type="text" class="form-control" id="city_2" name='gardian_city' value="{{ old('gardian_city')}}"/>    
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <label for="fname">State</label>
        <select class="form-control ak_select2" name='gardian_state'>
            <option value=''>Select</option>    
            @forelse($dropDown['states'] as $key=>$state)
            <option value='{{ $state}}' {{ old('gardian_state') == $state ? 'selected' : '' }}>{{ $state }}</option>
            @empty
            @endforelse
        </select>
        
                </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-xs-12">
        <div class="form-group ">
        <label for="addd">Address</label>
        <textarea class="form-control" rows="5" name="padress" id="padress" placeholder=""></textarea>
        </div>
        </div>
        </div>
        </div>
    </div>
    <!-- /tile body -->

<!-- tile body -->
<div class="tile-body " id="siblings" style="display: none;">
    <div class="ak_tile_subhead"> <h2> Siblings </h2></div>
    <div class="form_subdivision last-item">
        <div class="row rowflex">
        <div class="form-group col-lg-2 col-sm-6 col-xs-12">
        <label for="fname">Siblings </label>
        <select class="form-control ak_select2" name="relation_id[]" required>
    
    <option>Brother</option>
    
    <option>Sister</option>
    
    
    
    </select>     
        </div>
        <div class="form-group col-lg-2 col-sm-6 col-xs-12">
        <label for="fname">Name</label>
        <input type="text" class="form-control" name="ss_name[]" id='s_name'/>    
        </div>
        <div class="form-group col-lg-2 col-sm-6 col-xs-12">
        <label for="fname">Class</label>
         <select name='ss_class[]' class='form-control'>
            @foreach($dropDown['classes'] as $key)
                <option value="{{ $key->ClassNo }}">{{ $key->ClassNo}}</option>
            @endforeach
         </select>
        </div>
        <div class="form-group col-lg-2 col-sm-6 col-xs-12">
        <label for="fname">Roll Number</label>
        <input type="number" class="form-control" name="ss_roll_number[]" />    
        </div>
        <div class="form-group col-lg-3 col-sm-11 col-xs-12">
        <label for="fname">Registration Number</label>
        <input type="text" class="form-control" name="ss_registration_number[]" />    
        </div>
        <div class="col-lg-1 col-sm-1 col-xs-12 mt-20 mt-0_xs">
        <a href="javascript:void()" class="btn btn-blue add-more" type="button"><i class="fa fa-plus-circle"></i> </a>
        </div>
        </div>
        <div class="row after-add-more">
    
</div>
        </div>
    </div>
    <!-- /tile body -->

<!-- tile body -->
<div class="tile-body " id="transport" style="display: none;">
<div class="ak_tile_subhead"> <h2> Transport Details </h2></div>
<div class="row rowflex">
<div class="form-group col-md-6 col-xs-12">
<label>Transport Route </label>
<select class="form-control ak_select2" name='transport_id' onchange="return getTransport(this.value);">
        
        <option value='0'>No-Route</option>
        
        @foreach($dropDown['transport'] as $transport)
        
        <option value='{{$transport->TrasportRoutId}}' {{ old('transport_id') == $transport->TrasportRoutId ? 'selected' : '' }}>{{ $transport->RouteName}}</option>
        
        @endforeach
        
        </select>
</div>
<div class="form-group col-md-6 col-xs-12">
<label>Vehicle Number </label>
<input type="text" class="form-control" id="vehicle_number" name='vehicle_number' value='No Vehicle'/>  

</div>
</div>
</div>
<!-- /tile body -->
<!-- tile body -->
<div class="tile-body " id="hostel" style="display: none;">
<div class="ak_tile_subhead"> <h2> Hostel Details </h2></div>
<div class="row rowflex">
<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Hostel Name  </label>
<select class="form-control ak_select2" name='hostel_id' onchange='return getRoom(this.value);'>
            
            <option value='0'>No-Hostel</option>
            
            @foreach($dropDown['hostels'] as $hostel)
            
            <option value='{{$hostel->HostelId}}' {{ old('hostel_id') == $hostel->HostelId ? 'selected' : '' }}>{{ $hostel->HostelName}}
            
            @endforeach
            
</select>
</div>
<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Block Name  </label>
<input type='text' name='block_name' class='form-control' autocomplete="off" maxlength="50">
</div>
<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Floor Name  </label>
<input type='text' name='floor_name' class='form-control' autocomplete="off" maxlength="50">
</div>
<div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
<label>Room Name  </label>
<select class="form-control ak_select2" required id='room_id' name='room_id'>
            
            <option value='0'>Select Room</option>
            
            </select>
</div>
<div class="form-group col-lg-3 col-md-4 col-sm-4 col-xs-12">
<label>Room Category  </label>
<select class="form-control ak_select2" required name='room_category'>
    <option value='0'>Select Room Category</option>
    <option value='AC'>AC</option>
    <option value='Non AC'>Non AC</option>
</select>
</div>
<div class="form-group col-lg-3 col-md-4 col-sm-4 col-xs-12">
<label>Room Type  </label>
<input type='text' name='room_type' class='form-control' autocomplete="off" maxlength="50">
</div>
<div class="form-group col-lg-3 col-md-4 col-sm-4 col-xs-12">
<label>Bed Name  </label>
<input type='text' name='bed_name' class='form-control' autocomplete="off" maxlength="50">
</div>
</div>
<!-- /tile body -->

<!--
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
    
    </div> -->

</div>
<!-- tile body -->

<div class="tile-body " >

<div class="ak_tile_subhead"> <h2> Previous School Details </h2></div>



<div class="row rowflex">



<div class="form-group col-md-6 col-xs-12">

<label>School Name  </label>

<input type="text" class="form-control" id="fname" name='school_name' value="{{ old('school_name') }}" id='school_name'>



</div>

<div class="form-group col-md-6 col-xs-12">

<label>Qualification  </label>

<select class="form-control ak_select2" name='qualification'>

<option selected> Select</option>

<option value='Nursery' {{ old('qualification') == 'Nursery' ? 'selected' : '' }}>Nursery</option>

<option value='LKG' {{ old('qualification') == 'LKG' ? 'selected' : '' }} >LKG</option>

<option value='UKG' {{ old('qualification') == 'UKG' ? 'selected' : '' }}>UKG</option>

<option value='1st' {{ old('qualification') == '1st' ? 'selected' : '' }}>1st</option>

<option value='2nd' {{ old('qualification') == '2nd' ? 'selected' : '' }}>2nd</option>

<option value='3rd' {{ old('qualification') == '3rd' ? 'selected' : '' }}>3rd</option>

<option value='4th' {{ old('qualification') == '4th' ? 'selected' : '' }}>4th</option>

<option value='5th' {{ old('qualification') == '5th' ? 'selected' : '' }}>5th</option>

<option value='6th' {{ old('qualification') == '6th' ? 'selected' : '' }}>6th</option>

<option value='7th' {{ old('qualification') == '7th' ? 'selected' : '' }}>7th</option>

<option value='8th' {{ old('qualification') == '8th' ? 'selected' : '' }}>8th</option>

<option value='9th' {{ old('qualification') == '9th' ? 'selected' : '' }}>9th</option>

<option value='10th' {{ old('qualification') == '10th' ? 'selected' : '' }}>10th</option>

<option value='11th' {{ old('qualification') == '11th' ? 'selected' : '' }}>11th</option>

</select>

</div>

<div class="form-group col-md-12 col-xs-12">

<label for="addd">Remarks</label>

<textarea class="form-control" rows="3" name="remarks" id="padress" placeholder="" >{{ old('remarks') }}</textarea>



</div>



</div>





</div>

<!-- /tile body -->
<!-- tile body -->
<div class="tile-body ">
    <div class="ak_tile_subhead"> <h2> Declaration </h2></div>

    <div class="row rowflex">
<div class="form-group col-md-12">

            <label class="checkbox checkbox-custom-alt">
                <input type="checkbox" name='final_check' required> <i></i> I hereby certify that the above information provided by me is correct.
                I am fully responsible for any incorrect information and ready for legal action by school and others authority.
            </label>

       
    </div>
</div>
</div>
</div>
<!-- /tile body -->
</div>

<div class="submit-holder">
<div class="row rowflex">
<div class="form-group col-xs-12"> <button type="reset" class="btn btn-red">Reset</button> 
<button type="submit" class="btn btn-blue" id='save_detail'>Save changes <i class="fa fa-floppy-o"></i></button> </div> </div>
</div>
</form>

<div class="copy hide">

<div class="control-group">

<div class="form-group col-lg-2 col-sm-6 col-xs-12">

<select class="form-control ak_select2" name="relation_id[]" required>

<option>Brother</option>

<option>Sister</option>



</select>   



</div>


<div class="form-group col-lg-2 col-sm-6 col-xs-12">


<input type="text" class="form-control" name="ss_name[]" id='s_name_1' onkeyup="this.value=this.value.replace(/[^a-z \s]/g,'');">



</div>


<div class="form-group col-lg-2 col-sm-6 col-xs-12">


<select name='ss_class[]' class='form-control'>
    @foreach($dropDown['classes'] as $key)
        <option value="{{ $key->ClassNo }}">{{ $key->ClassNo}}</option>
    @endforeach
</select>  
</div>

<div class="form-group col-lg-2 col-sm-6 col-xs-12">

<input type="number" class="form-control" name="ss_roll_number[]" />    

</div>

<div class="form-group col-lg-3 col-sm-11 col-xs-12">

<input type="text" class="form-control" name="ss_registration_number[]" />    

</div>

<div class="form-group col-lg-1 col-sm-1 col-xs-12">

<button class="btn btn-lightred remove" type="button"><i class="glyphicon glyphicon-remove"></i></button>

</div>

</div>

</div>              


</section>

<!-- /tile -->

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
        $("#switch01").click(function () {
            if ($(this).is(":checked")) {
                $("#guardian").show();
            } else {
                $("#guardian").hide();
            }
        });
    });
    $(function () {
        $("#switch02").click(function () {
            if ($(this).is(":checked")) {
                $("#siblings").show();
            } else {
                $("#siblings").hide();
            }
        });
    });
    $(function () {
        $("#switch03").click(function () {
            if ($(this).is(":checked")) {
                $("#transport").show();
            } else {
                $("#transport").hide();
            }
        });
    });
    $(function () {
        $("#switch04").click(function () {
            if ($(this).is(":checked")) {
                $("#hostel").show();
            } else {
                $("#hostel").hide();
            }
        });
    });
    
    </script>

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