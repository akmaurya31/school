@extends('layouts.admin_header')

@section('title', 'View Registration')

@section('content')

<section id="content">
<div class="page page-dashboard">
<div class="pageheader">
<div class="page-bar">
<ul class="page-breadcrumb">
<li>
<a href="#"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="#">View Student Registration</a>
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

<h1 class="custom-font"><i class="fa fa-graduation-cap"></i> Edit <strong>Student </strong>Registration</h1>

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

<form action='{{url("admin/registration/update/".$details->id)}}' method='post' enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');">

{{ @csrf_field() }}

<!-- tile body -->

<div class="tile-body not-last">

<div class="ak_tile_subhead"> <h2> Academic Details </h2></div>

<div class="row rowflex">

<div class="form-group col-lg-6 col-md-4 col-sm-6 col-xs-12">

<label>Academic Year *</label>

<select class="form-control ak_select2" name="session_name" required id='session' disabled >
<option value='' selected>select</option>    
@foreach($dropDown['session'] as $key)

<option value="{{ $key->ClassSession }}" {{ $key->ClassSession == $details->session_name ? 'selected' : '' }} >{{ $key->ClassSession}}</option>

@endforeach

</select>

</div>

<div class="form-group col-lg-6 col-md-4 col-sm-6 col-xs-12">

<label for="regno">Register No *</label>

<input disabled disabled type="text" class="form-control" id="regno" placeholder="eg: SMS-02194" required name='registration' autocomplete='off' value="{{ $details->registration }}" readonly >

</div>

<div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">

<label>Class *</label>

<select disabled name='class_name' class="form-control ak_select2" required onchange="return getSection(this.value);">

<option value=''>Select </option>

@foreach($dropDown['classes'] as $key)

<option value="{{ $key->ClassNo }}" {{ $key->ClassNo == $details->class_name ? 'selected' : '' }}>{{ $key->ClassNo}}</option>

@endforeach

</select>



</div>

<!--<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">

<label>Section *</label>

<select class="form-control ak_select2" required id='section' name='class_section'>

<option value='' selected>Select Class Section</option>

@foreach($dropDown['section'] as $key)

<option value="{{ $key->ClassSection }}" {{ $key->ClassSection == $details->class_section ? 'selected' : '' }}>{{ $key->ClassSection}}</option>

@endforeach

</select>



</div>-->
<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
<label>Semester *</label>
<select disabled class="form-control ak_select2" name="semester" required>
<option value=''>Select</option>
<option value='1' {{ $details->semester == '1' ? 'selected' : '' }}>Semester One</option>
<option value='2' {{ $details->semester == '2' ? 'selected' : '' }}>Semester Two</option>
</select>
</div>
<div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">

<label>Category *</label>

<select disabled class="form-control ak_select2" required name='category'>

<option value='' selected>Select</option>

<option value='Gen.' {{ $details->category == 'Gen.' ? 'selected' : '' }}>Gen.</option>

<option value='OBC-A' {{ $details->category == 'OBC-A' ? 'selected' : '' }}>OBC-A</option>

<option value='OBC-B' {{ $details->category == 'OBC-B' ? 'selected' : '' }} >OBC-B</option>

<option value='SC' {{ $details->category == 'SC' ? 'selected' : '' }}>SC</option>

<option value='ST' {{ $details->category == 'ST' ? 'selected' : '' }}>ST</option>



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

<input disabled type="text" class="form-control" required name='first_name' autocomplete='off' value="{{ $details->first_name }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>



</div>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="lanem">Last Name *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-user-o"></span>

</span>

<input disabled type="text" class="form-control" required name='last_name' autocomplete='off' value="{{ $details->last_name }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>



</div>

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label>Gender *</label>

<select disabled class="form-control ak_select2" required name='gender'>

<option value='' selected> Select</option>

<option value='Male' {{ $details->gender == 'Male' ? 'selected' : '' }}>Male</option>

<option value='Female' {{$details->gender == 'Female' ? 'selected' : '' }} >Female</option>

<option value='Other' {{ $details->gender == 'Other' ? 'selected' : '' }}>Other</option>

</select>



</div>

<!---<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label>Blood Group</label>

<select class="form-control ak_select2" required name='blood_group'>

<option value='' selected> Select</option>

<option value='A+' {{ $details->blood_group == 'A+' ? 'selected' : '' }}>A+</option>

<option value='A' {{ $details->blood_group == 'A' ? 'selected' : '' }}>A</option>

<option value='A-' {{ $details->blood_group == 'A-' ? 'selected' : '' }}>A-</option>

<option value='B' {{ $details->blood_group == 'B' ? 'selected' : '' }}>B</option>

<option value='B+' {{ $details->blood_group == 'B+' ? 'selected' : '' }}>B+</option>

<option value='B-' {{ $details->blood_group == 'B-' ? 'selected' : '' }}>B-</option>

<option value='AB' {{ $details->blood_group == 'AB' ? 'selected' : '' }}>AB</option>

<option value='AB+' {{ $details->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>

<option value='AB-' {{ $details->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>

<option value='O' {{ $details->blood_group == 'O' ? 'selected' : '' }}>O</option>

<option value='O+' {{ $details->blood_group == 'O+' ? 'selected' : '' }}>O+</option>

<option value='O-' {{ $details->blood_group == 'O-' ? 'selected' : '' }}>O-</option>

</select>



</div>-->

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="regno">Birth Date *</label>

<div class='input-group'>



<input disabled type='date' class="form-control" required name='dob' autocomplete='off' id='birth_date' value="{{ $details->dob }}" onchange="return chack_year(this.value);"/>

<span class="input-group-addon">

<span class="fa fa-birthday-cake"></span>

</span>

</div>

</div>

<!--<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="mt">Mother Tongue</label>

<select name='mother_tongue' class="form-control ak_select2" required >

<option value="" selected>Select</option>

@foreach($dropDown['mothertongue'] as $key)

<option value="{{ $key->mother_tongue_name }}" {{ $details->mother_tongue == $key->mother_tongue_name ? 'selected' : '' }}>{{ $key->mother_tongue_name}}</option>

@endforeach

</select>

</div>-->

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="rgn">Religion</label>

<input disabled type="text" class="form-control" id="rgn" placeholder="" name='religion' autocomplete='off' value="{{ $details->religion }}" required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');">

</div>

<!--<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="cst">Caste</label>

<input type="text" class="form-control" id="cst" placeholder="" name='caste' autocomplete='off' value="{{ $details->religion }}" required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" >

</div>-->

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="mno">Mobile Number</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-phone"></span>

</span>

<input  disabled type="text" class="form-control" id="mno" placeholder="" name='mobile_number' autocomplete='off' value="{{ $details->mobile_number }}"  minlength='10' maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>



</div>

<div id='errorMobile1'></div>



</div>
<div class="form-group col-lg-4 col-sm-6 col-xs-12">
<label for="mno">Email</label>
<div class="input-group">
<span class="input-group-addon">
<span class="fa fa-envelope-o"></span>
</span>
<input disabled type="email" class="form-control" id="mno" placeholder="" required name='email' value="{{ $details->email }}">

</div>
<div id='errorStudentemail'></div>

</div>
<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="city">City</label>

<input disabled required type="text" class="form-control" id="city" placeholder="" name='city' autocomplete='off' value="{{ $details->city }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');">

</div>

<div class="form-group col-lg-4 col-sm-6 col-xs-12">

<label for="state">State</label>
<select disabled class="form-control ak_select2" required name='state'>
<option value='' selected>Select</option>    
@forelse($dropDown['states'] as $key=>$state)
<option value='{{ $state}}' {{ $details->state == $state ? 'selected' : '' }}>{{ $state }}</option>
@empty
@endforelse
</select>


</div>

<div class="form-group col-lg-12 col-sm-6 col-xs-12">

<label for="addd">Present Address</label>

<textarea disabled class="form-control" rows="5" id="padress" required placeholder="" name='present_address' onblur="put_address_permanent(this.value);">{{ $details->present_address }}</textarea>



</div>

<!--<div class="form-group col-lg-6 col-sm-6 col-xs-12">

<label for="state">Permanent Address</label>

<textarea class="form-control" rows="5" id="permanent_address" placeholder="" required name='permanent_address'>{{ $details->permanent_address }}</textarea>

</div>

<div class="form-group col-lg-12 col-md-12 col-xs-12">

<label for="adn">Adhar Card Number</label>

<input type="text" class="form-control" id="adn" placeholder="" name='student_adhar' value="{{ $details->student_adhar }}"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" minlength="12" required>  

</div>-->
<div class="form-group col-lg-6 col-md-12 col-xs-12">

<label for="adn">Last Marks/Grade Obtained</label>

<input disabled type="text" class="form-control" id="adn" placeholder="" name='last_marks' value="{{ $details->last_marks }}" maxlength="12" required>  

</div>
@if($details->last_mark_certificate != '')
    <div class="form-group col-lg-6 col-md-12 col-xs-12">
    
    <label for="adn">Last Marks/Grade Certificate</label>
    <br>
    <a href="{{ asset('public/registration_images/'.$details->last_mark_certificate) }}" target="_blank">View Certificate</a>
    
    </div>
@endif

<div class="form-group col-md-12 col-xs-12">

<label for="city">View Image</label>

<div class="drop-zone">

<img src="{{ asset('public/registration_images/'.$details->image_url) }}" width='100px' height="100px">

</div>

</div>

</div>

</div>

<!-- tile body -->

<div class="tile-body ">
    <div class="ak_tile_subhead"> <h2> Parents Details </h2></div>

    <div class="form_subdivision">
        <div class="row rowflex">
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Father Name</label>
        <input disabled type="text" class="form-control" name='father_name' value="{{  $details->father_name }}" id='father_name' required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>    
    </div>
    <!--<div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Father Occupation</label>
        <input type="text" class="form-control" name='father_occupation' value="{{ $details->father_occupation }}" id='f_occupation' required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>    
    </div>
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Father Income</label>
        <input type="text" class="form-control" id="fname" name='father_income' value="{{$details->father_income }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" required/>    
    </div>-->
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Father Education</label>
        <select disabled class="form-control ak_select2" name="father_education" required>

            <option value='' selected>Select Education</option>
            
            @foreach($dropDown['educations'] as $dept)
            
            <option value="{{ $dept->education_name}}" {{ $dept->education_name == $details->father_education ? 'selected' : '' }}>{{ $dept->education_name}}</option>
            
            @endforeach
        
        </select>
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Father Mobile Number</label>
    
        <input disabled type="text" class="form-control" id="fname" name='father_mobile_number' value="{{ $details->father_mobile_number }}" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required minlength="10"/>  
    
        <div id='errorFatherMobile'></div> 
    
        </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Father Email</label>
        <input disabled required type="email" class="form-control" id="fname" name='father_email' value="{{ $details->father_email }}" onblur="return validateEmail(this.value)"/>
        <div id='emailFatherError'></div>
        </div>
        <!--<div class="form-group col-lg-3 col-xs-12">
        <label for="fname">Father Adhaar Number</label>
        <input required type="text" class="form-control" id="fname" name = "father_adhaar_number" value="{{ $details->father_adhaar_number }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" minlength="12"/>    
    </div>-->
        </div>
    
        </div>
        <div class="form_subdivision">
        <div class="row rowflex">
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Mother Name</label>
    <input disabled type="text" class="form-control" id="mother_name" name = 'mother_name' value="{{ $details->mother_name }}" required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>    
        </div>
        <!--<div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Mother Occupation</label>
        <input type="text" class="form-control" name='mother_occupation' value="{{ $details->mother_occupation }}" id='m_occupation' required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');"/>    
    </div>
        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
        <label for="fname">Mother Income</label>
        <input required type="text" class="form-control" id="fname" name='mother_income' value="{{ $details->mother_income }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="40"/>    
    </div>-->
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Mother Education</label>
        <select disabled class="form-control ak_select2" name="mother_education" required>

            <option value='' selected>Select Education</option>
            
            @foreach($dropDown['educations'] as $dept)
            
            <option value="{{ $dept->education_name}}" {{ $dept->education_name == $details->mother_education ? 'selected' : ' '}}>{{ $dept->education_name}}</option>
            
            @endforeach
        
        </select>
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Mother Mobile Number</label>
        <input disabled required type="text" class="form-control" id="fname" name='mother_mobile_number' value="{{ $details->mother_mobile_number }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10"/> 
        <div id='errorMotherMobile'></div>   
    </div>
        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
        <label for="fname">Mother Email</label>
         <input disabled required type="email" class="form-control" id="fname" name='mother_email' value="{{ $details->mother_email }}"/>    
        <div id='emailMotherError'></div>     
    </div>
        <!--<div class="form-group col-lg-3 col-xs-12">
        <label for="fname">Mother Adhaar Number</label>
        <input type="text" class="form-control" id="fname" name='mother_adhaar_number' value="{{ $details->mother_adhaar_number }}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" required minlength="12"/>    
    </div>-->
        </div>
        </div>
        <div class="form_subdivision last-item">
        <div class="row rowflex">
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="row">
        <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <label for="fname">City</label>
        <input disabled type="text" class="form-control" name='parent_city' value="{{ $details->parent_city }}" id='city_1' required onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" /> 
         </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
        <label for="fname">State</label>
        
        <select disabled class="form-control ak_select2" required name='parent_state'>
            <option value=''>Select</option>    
            @forelse($dropDown['states'] as $key=>$state)
            <option value='{{ $state}}' {{ $details->parent_state == $state ? 'selected' : '' }}>{{ $state }}</option>
            @empty
            @endforelse
        </select>
                </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-xs-12">
        <div class="form-group ">
        <label for="addd">Address</label>
        <textarea disabled class="form-control" rows="5" id="padress" placeholder="" name='parent_address' required>{{ $details->parent_address }}</textarea>
        </div>
        </div>
        </div>
        </div>
        




</div>
<!-- /tile body -->
</div>
<!-- /tile body -->
</div>
</form>
             
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




</script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script>
</script>

@endsection