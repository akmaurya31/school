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

@if(Session::has('message'))
<input type="hidden" name="saved_success" value="{{ Session::get('message') }}">

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
    <input type="hidden" name="registration_type" value="1"/>
    <!-- tile body -->
    <div class="tile-body not-last">
        <div class="ak_tile_subhead"><h2>Academic Details</h2></div>
        <div class="row">
            <div class="form-group col-md-3">
                <label>Academic Year *</label>
                <select class="form-control ak_select2" name="id_session" required>
                    <option value="">Please Select</option>
                @foreach($dropDown['session'] as $key)

                <option value="{{ $key->Classid }}">{{ $key->ClassSession}}</option>

                @endforeach
                </select>
            </div>

        <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="sems">Semesters *</label>
            <select class="form-control ak_select2" name="semester" required>
                <option value="">Please Select</option>
                <option value='1' {{ app('request')->input('semester') == 1 ? ' selected=""' : '' }}>Semester 1</option>
                <option value='2' {{ app('request')->input('semester') == 2 ? ' selected=""' : '' }}>Semester 2</option>
                <option value='3' {{ app('request')->input('semester') == 3 ? ' selected=""' : '' }}>Semester 3</option>
            </select>
        </div>

            <div class="form-group col-md-3">
                <label>Class *</label>
<select name='id_class' class="form-control ak_select2" required onchange="return getSection(this.value);">

<option value=''>Please Select</option>

@foreach($dropDown['classes'] as $key)

<option value="{{ $key->Classid }}">{{ $key->ClassNo}}</option>

@endforeach

</select>
            </div>
        <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <label for="class">Section *</label>
            <select class="form-control ak_select2" name="id_section" required>
            @if($dropDown['sections'])
            <option value="">Please Select</option>
                @foreach($dropDown['sections'] as $key => $section)
                <option value="{{ $section->Classid }}">{{ $section->ClassSection }}</option>
                @endforeach
            @endif
            </select>
        </div>



        </div>
        <div class="row"></div>
    </div>
    <!-- /tile body -->
    <!-- tile body -->
    <div class="tile-body">
        <div class="ak_tile_subhead"><h2>Student Details</h2></div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="fname">Roll No.</label>
                <input type="text" class="form-control number-inpt" id="roll-number" required name='roll_number' autocomplete='off' value="{{ old('roll_number')}}" maxlength="10" />
            </div>

            <div class="form-group col-md-3">
                <label for="fname">First Name *</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-user-o"></span>
                    </span>        
                    <input type="text" class="form-control" id="first_name" required name='fname' autocomplete='off' value="{{ old('fname')}}" />
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="lanem">Last Name *</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-user-o"></span>
                    </span>
                    <input type="text" class="form-control" id="last_name" required name='lname' autocomplete='off' value="{{ old('lname')}}"  />
                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Gender *</label>
<select class="form-control ak_select2" required name='gender'>

<option value=''> Select</option>

<option value='Male' {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>

<option value='Female' {{ old('gender') == 'Female' ? 'selected' : '' }} >Female</option>

<option value='Other' {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>

</select>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label>Category *</label>
<select class="form-control ak_select2" required name='category'>

<option value='' selected>Please Select</option>

<option value='Gen.' {{ old('category') == 'Gen.' ? 'selected' : '' }}>Gen.</option>

<option value='OBC-A' {{ old('category') == 'OBC-A' ? 'selected' : '' }}>OBC-A</option>

<option value='OBC-B' {{ old('category') == 'OBC-B' ? 'selected' : '' }} >OBC-B</option>

<option value='SC' {{ old('category') == 'SC' ? 'selected' : '' }}>SC</option>

<option value='ST' {{ old('category') == 'ST' ? 'selected' : '' }}>ST</option>



</select>
            </div>


            <div class="form-group col-md-3">
                <label for="regno">Birth Date *</label>
                <div class="input-group datepicker" data-format="L">
 <input type='text' class="form-control" required name='dob' autocomplete='off' id='birth_date' value="{{ old('dob')}}" onchange="return chack_year(this.value);"/>
                    <span class="input-group-addon">
                        <span class="fa fa-birthday-cake"></span>
                    </span>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="mt">Mother Tongue</label>
<select name='mother_tongue' class="form-control ak_select2" required >

<option value="" selected>Select</option>

@foreach($dropDown['mothertongue'] as $key)

<option value="{{ $key->mother_tongue_name }}" {{ old('mother_tongue') == $key->mother_tongue_name ? 'selected' : '' }}>{{ $key->mother_tongue_name}}</option>

@endforeach

</select>

            </div>
            <div class="form-group col-md-3">
                <label for="rgn">Religion</label>
<input type="text" class="form-control" id="rgn" placeholder="" name='religion' autocomplete='off' value="{{ old('religion')}}" required>
            </div>
        </div>
        <div class="row"></div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="mno">Mobile Number</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-phone"></span>
                    </span>
<input type="text" class="form-control" id="mno" placeholder="" name='mobile' autocomplete='off' value="{{ old('mobile')}}" onblur="return checkMobile3(this.value);" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="mno">Email</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-envelope-o"></span>
                    </span>
<input type="text" class="form-control" id="mno" placeholder="" onblur="return CheckEmail4(this.value);" required name='s_email'>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="city">City</label>
<input required type="text" class="form-control" id="city" placeholder="" name='city' autocomplete='off' value="{{ old('mother_name')}}">
            </div>
            <div class="form-group col-md-3">
                <label for="state">State</label>
<select class="form-control ak_select2" required name='state'>
<option value=''>Select</option>    
@forelse($dropDown['states'] as $key=>$state)
<option value='{{ $state}}' {{ old('state') == $state ? 'selected' : '' }}>{{ $state }}</option>
@empty
@endforelse
</select>

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="addd">Present Address</label>
<textarea class="form-control" rows="5" id="padress" required placeholder="" name='present_address' onblur="put_address_permanent(this.value);">{{ old('present_address') }}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="state">Permanent Address</label>
<textarea class="form-control" rows="5" id="permanent_address" placeholder="" required name='permanent_address'>{{ old('permanent_address') }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
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
    <div class="tile-body">
        <div class="ak_tile_subhead"><h2>Upload Documents</h2></div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="upd">Upload TC</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-upload"></span>
                    </span>
<input type="file" class="form-control" id="upd" placeholder="" name='tc' required="">
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="upd">Upload Birth Certificate</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-upload"></span>
                    </span>
                    <input type="file" class="form-control" id="upd" placeholder="" name='birth_cer' required>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="upd">Upload Caracter certificate</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-upload"></span>
                    </span>
<input type="file" class="form-control" id="upd" placeholder="" name='character_cer' required="">
                </div>
            </div>
        </div>
    </div>
    <!-- /tile body -->
    <!-- tile body -->
    <div class="tile-body">
        <div class="ak_tile_subhead"><h2>Guardian Details</h2></div>
        <div class="form_subdivision">
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="fname">Father Name</label>
        <input type="text" class="form-control" name='father_name' value="{{ old('father_name')}}" id='father_name' required/>    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Father Occupation</label>
        <input type="text" class="form-control" name='father_occupation' value="{{ old('father_occupation')}}" id='f_occupation' required/>    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Father Income</label>
        <input type="text" class="form-control" id="fname" name='father_income' value="{{ old('father_income')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="12" required/>    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Father Education</label>
        <select class="form-control ak_select2" name="father_education" required>

            <option value=''>Select Education</option>
            
            @foreach($dropDown['educations'] as $dept)
            
            <option value="{{ $dept->education_name}}" {{ $dept->education_name == old('father_education') ? 'selected' : '' }}>{{ $dept->education_name}}</option>
            
            @endforeach
        
        </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Father Mobile Number</label>
        <input type="text" class="form-control" id="fname" name='father_mobile' value="{{ old('father_mobile')}}" onblur="return checkMobile(this.value);" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required minlength="10"/>  
    
        <div id='errorFatherMobile'></div> 
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Father Email</label>
        <input required type="text" class="form-control" id="fname" name='father_email' value="{{ old('father_email')}}" onblur="return validateEmail(this.value)"/>
        <div id='emailFatherError'></div>

                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="fname">Mother Name</label>
    <input type="text" class="form-control" id="mother_name" name = 'mother_name' value="{{ old('mother_name')}}" required/>    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Occupation</label>
        <input type="text" class="form-control" name='mother_occupation' value="{{ old('mother_occupation')}}" id='m_occupation' required/>    
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Income</label>
        <input required type="text" class="form-control" id="fname" name='mother_income' value="{{ old('mother_income')}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="40"/>    

                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Education</label>
        <select class="form-control ak_select2" name="mother_education" required>

            <option value=''>Select Education</option>
            
            @foreach($dropDown['educations'] as $dept)
            
            <option value="{{ $dept->education_name}}" {{ $dept->education_name == old('mother_education') ? 'selected' : ' '}}>{{ $dept->education_name}}</option>
            
            @endforeach
        
        </select>

                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Mobile Number</label>
        <input required type="text" class="form-control" id="fname" name='mother_mobile' value="{{ old('mother_mobile')}}" onblur="return checkMobile1(this.value);" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" minlength="10"/> 
        <div id='errorMotherMobile'></div>   
                </div>
                <div class="form-group col-md-4">
                    <label for="fname">Mother Email</label>
         <input required type="email" class="form-control" id="fname" name='mother_email' value="{{ old('mother_email')}}" onblur="return validateEmail1(this.value);"/>    
        <div id='emailMotherError'></div>     

                </div>

                <div class="form-group col-md-12">
                    <label for="addd">Remarks</label>
<textarea class="form-control" rows="3" name="remarks" id="padress" placeholder="" >{{ old('remarks') }}</textarea>

                </div>
            </div>
            <!-- tile body -->
            <div class="tile-body">
                <div class="ak_tile_subhead"><h2>Declaration</h2></div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="checkbox checkbox-custom-alt">
                            <input type="checkbox" name='final_check' required /> <i></i> I hereby certify that the above information provided by me is correct as per my best knowledge, if any thing found wrong, legal action can be taken against me and my
                            son/doughte can be rejected from school without any question from administration.
                        </label>
                    </div>
                </div>
            </div>

            <!-- /tile body -->
        </div>
    </div>

    <div class="submit-holder">
        <div class="row">
            <div class="form-group col-sm-12">
                <button type="reset" class="btn btn-red">Reset</button> <button type="submit" class="btn btn-blue">Registerd <i class="fa fa-floppy-o"></i></button>
            </div>
        </div>
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


$(function (){
  if($('input[name="saved_success"]').length > 0 ){
    swal({
      title: 'Student registered successfully!',
      text: $('input[name="saved_success"]').val(),
      icon: "success",
      button: "OK",
    });    
  }
});



</script>

@endsection