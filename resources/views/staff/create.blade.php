@extends('layouts.admin_header')

@section('title', 'Add New Staff')

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

<a href="index.html">Add Staff</a>

</li>

</ul>
<!--
<div class="page-toolbar">

<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">

<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>

</a>

</div> -->

</div>

</div>

<div class="akform_holder new_admision">

<div class="row">

<div class="col-md-12">

    @if (count($errors))

        @foreach ($errors->all() as $error)

            <div class="alert alert-danger alert-dismissible">

                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                <h5><i class="icon fas fa-ban"></i> Alert!</h5>

                 {{ $error }}

            </div>

        @endforeach

    @endif 

    @if(session()->has('success'))

            <div class="alert alert-success">

                {{ session()->get('success') }}

            </div>

    @endif

<!-- tile -->

<section class="tile">

<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font"><i class="fa fa-plus-square-o"></i> <strong>Add New </strong>Staff</h1>

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

<form action="{{route('staff.store') }}" class="box" method='post' enctype="multipart/form-data">

{{ @csrf_field() }}

<!-- tile body -->

<div class="tile-body not-last">

<div class="ak_tile_subhead"> <h2> Academic Details </h2></div>

<div class="row">

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label>Role *</label>

<select class="form-control ak_select2" name="role_name" required>

<option value="">Select Role</option>

<option value='Teaching' {{ old("role_name") == "Teaching" ? "selected" : "" }}>Teaching</option>

<option value='Non Teaching' {{ old("role_name") == "Non Teaching" ? "selected" : "" }}>Non Teaching </option>

</select>

</div>



<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label>Department *</label>

<select class="form-control ak_select2" name="department" onchange="return get_designation(this.value);" required>

<option value="">Select Department</option>

@foreach($departments as $dept)

<option value="{{ $dept->d_id}}" {{ $dept->d_id == old('department') ? 'selected' : ' '}}>{{ $dept->d_name}}</option>

@endforeach

</select>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label>Designation *</label>

<select class="form-control ak_select2" name="designation" required id='designation'>
   <option value="">Select Designation</option>
</select>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="regno">Joining Date *</label>

<div class='input-group_'>

<input type='date' class="form-control" name='joinig_date' required value="{{ old('joinig_date') }}" autocomplete='off' />
   <!-- <span class="input-group-addon">

    <span class="fa fa-calendar"></span>
    
    </span> -->
</div>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="addd">Qualifications</label>

<select class="form-control ak_select2" name="qualification" required>

<option value="">Select Education</option>

@foreach($education as $dept)

<option value="{{ $dept->education_name}}" {{ $dept->education_name == old('qualification') ? 'selected' : ' '}}>{{ $dept->education_name}}</option>

@endforeach

</select>


</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="addd">Expirence Details</label>
<select name='experiance' class='form-control ak_select2' required>
    <option value="">Select</option>
    <?php for($a=1;$a<=40;$a++){ ?>
        <option value="<?=$a?>" {{ old('experiance') == $a ? 'selected' : '' }}><?=$a?></option>
    <?php } ?>
</select>
</div>

</div>

</div>

<!-- /tile body -->

<!-- tile body -->

<div class="tile-body ">

<div class="ak_tile_subhead"> <h2> Teacher Details </h2></div>

<div class="row">

<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label for="fname">Name *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-user-o"></span>

</span>

<input type="text" class="form-control" name="name" required value="{{ old('name') }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" autocomplete='off' maxlength='50' />



</div>

</div>

<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label>Gender *</label>

<select class="form-control ak_select2" required name='gender'>

<option value=''> Select</option>

<option value="Male" {{ old('gender') == 'Male' ? 'selected' : ''}}>Male</option>

<option value='Female' {{ old('gender') == 'Female' ? 'selected' : ''}}>Female</option>

<option value='Other' {{ old('gender') == 'Other' ? 'selected' : ''}}>Other</option>

</select>

</div>

<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label for="lanem">Religion</label>

<input type="text" class="form-control" name="religion" required value="{{ old('religion') }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" autocomplete='off' maxlength='30'/>



</div>



<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label>Blood Group</label>

<select class="form-control ak_select2" required name='blood_group'>

<option value=''> Select</option>

<option value="A+">A+</option>

<option value="A">A</option>

<option value="A-">A-</option>

<option value="B">B</option>

<option value="B+">B+</option>

<option value="B-">B-</option>

<option value="AB">AB</option>

<option value="AB+">AB+</option>

<option value="AB-">AB-</option>

<option value="O">O</option>

<option value="O+">O+</option>

<option value="O-">O-</option>

</select>

</div>

<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label for="regno">Birth Date *</label>

<div class='input-group'>

<input type='date' class="form-control" required name="date_of_birth" value="{{ old('date_of_birth') }}" autocomplete='off'/>

<span class="input-group-addon">

<span class="fa fa-birthday-cake"></span>

</span>

</div>

</div>

<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label for="mno">Mobile Number</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-phone"></span>

</span>

<input type="text" class="form-control" name="mobile_number" placeholder="" value="{{ old('mobile_number') }}" onblur="return checkMobile(this.value);" maxlength='10' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete='off' minlength='10' required>



</div>

<div id='mobileError'></div>



</div>

<div class="form-group col-lg-3 col-md-12 col-sm-12 col-xs-12">

<label for="mno">Email</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-envelope-o"></span>

</span>

<input type="email" class="form-control" name="email" placeholder="" value="{{ old('email') }}" onblur="return validateEmail(this.value);" autocomplete='off' required>

<div id='emailError'></div>

</div>

</div>

<div class="form-group col-lg-3 col-md-12 col-sm-12 col-xs-12">

<label for="mno">Pan</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-envelope-o"></span>

</span>

<input type="text" class="form-control" name="pan" placeholder="" value="{{ old('pan') }}" autocomplete='off' maxlength='15'>

</div>

</div>


<div class="form-group col-lg-6 col-md-6 col-xs-12">

<label for="addd">Present Address</label>

<textarea class="form-control" rows="5" name="present_address"  placeholder="" required onblur="return set_address(this.value);">{{ old('present_address') }}</textarea>



</div>

<div class="form-group col-lg-6 col-md-6 col-xs-12">

<label for="state">Permanent Address</label>

<textarea class="form-control" rows="5" name="permanent_address" placeholder="" required id='p_address'>{{ old('permanent_address') }}</textarea>

</div>



<div class="form-group col-xs-12">

<label for="city">Profile Picture</label>

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

<div class="ak_tile_subhead"> <h2> login Details </h2></div>

<div class="row">

<!--<div class="form-group col-md-4 col-xs-12">

<label for="fname">Usrername *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-user-o"></span>

</span>

<input type="email" class="form-control" name="username" required="" value="{{ old('username') }}" onblur="return validateEmail1(this.value);" autocomplete='off'>
<div id='userError'></div>
</div>

</div>-->

<div class="form-group col-md-6 col-xs-12">

<label for="fname">Password *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-unlock"></span>

</span>

<input type="password" class="form-control" name='password' id='password' required="" autocomplete='off' maxlength='60'>



</div>

</div>

<div class="form-group col-md-6 col-xs-12">

<label for="fname">Retype Password *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-unlock"></span>

</span>

<input type="password" class="form-control" name='retype_password' required="" onkeyup="return check_password(this.value);" maxlength='60'>

<div id='reset_password'></div>

</div>

</div>

</div>

</div>

<!-- /tile body -->

<!-- tile body -->

<div class="tile-body ">

<div class="ak_tile_subhead"> <h2> Social Links </h2></div>



<div class="row">

<div class="form-group col-md-4 col-xs-12">

<label for="fname">Facebook *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-facebook"></span>

</span>

<input type="text" class="form-control" name="facebook_link" value="{{ old('facebook_link') }}">



</div>

</div>

<div class="form-group col-md-4 col-xs-12">

<label for="fname">Twitter *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-twitter"></span>

</span>

<input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}">



</div>

</div>

<div class="form-group col-md-4 col-xs-12">

<label for="fname">Linked In *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-linkedin"></span>

</span>

<input type="text" class="form-control" name="linkdin" value="" value="{{ old('linkdin') }}">



</div>

</div>

</div>



</div>

<!-- /tile body -->

<!-- tile body -->

<div class="tile-body ">

<div class="ak_tile_subhead"> <h2> Bank Details </h2></div>

<div class="row">
    <div class="col-lg-8 col-md-6 col-xs-12">
            <div class="row">
        <div class="form-group col-md-6 col-xs-12">

<label for="fname">Account Holder</label>

<input type="text" class="form-control" name="account_holder" required="" value="{{ old('account_holder') }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" autocomplete='off' maxlength='50'>    

</div>

<div class="form-group col-md-6 col-xs-12">

<label for="fname">Bank Branch</label>

<input type="text" class="form-control" name="bank_branch" required="" value="{{ old('bank_branch') }}" autocomplete='off' maxlength='40'>    

</div>

<div class="form-group col-md-6 col-xs-12">


<label for="fname">Account No.</label> 
<input type="text" class="form-control" name="account_number" required="" value="{{ old('account_number') }}" autocomplete='off' maxlength='20' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"> 

   

</div>

<div class="form-group col-md-6 col-xs-12">

<label for="fname">IFSC Code</label>

<input type="text" class="form-control" name="ifsc_code" required="" value="{{ old('ifsc_code') }}" autocomplete='off' maxlength='20'>    

</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="row">
        <div class="form-group col-md-12">
            <label for="fname">Bank Address</label>            
    <textarea type="text" class="form-control" name="bank_address" required="" value="{{ old('bank_address') }}" rows="5"></textarea>
    <!--
<input type="text" class="form-control" name="bank_address" required="" value="{{ old('bank_address') }}">     
-->
            </div>



</div>
</div>

</div>

</div>

<!-- /tile body -->



<div class="submit-holder">

<div class="row">

<div class="form-group col-sm-12"> <button type="reset" class="btn btn-red">Reset</button> 

<button type="submit" class="btn btn-blue">Save changes <i class="fa fa-floppy-o"></i></button> </div> </div>

</div>

</form>

</section>

<!-- /tile -->

</div>

</div>

</div>

</div>

<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
@section('footer_scripts')

<script type="text/javascript">

    function get_designation(value)

    {

        $.ajax({

                url: "{{ route('staff.get-designation') }}",

                type: 'GET',

                data: { id_dept:value },

                success: function (argument) {

                    $("#designation").html(argument);

                },

                error: function (hrx, ajaxOption, errorThrow) {

                  console.log(ajaxOption);

                  console.log(errorThrow);

                }

          }); 

    }

    function checkMobile(i)

    {

        var mobileNum = i;

        var validateMobNum= /^\d*(?:\.\d{1,2})?$/;

        if (validateMobNum.test(mobileNum ) && mobileNum.length == 10) {

            $("#mobileError").html(" ");

        }

        else {

             $("#mobileError").html("Invalid Mobile Number");

        }

        return false;

    }



    function validateEmail(emailField){

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        

        if (reg.test(emailField) == false) 

        {

            $("#emailError").html("Invalid Email Address");

            return false;

        }

        else

        {

            $("#emailError").html(" ");

            return false;

        }



    }
    
    function validateEmail1(emailField){

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        

        if (reg.test(emailField) == false) 

        {

            $("#userError").html("Invalid Email Address");

            return false;

        }

        else

        {

            $("#userError").html(" ");

            return false;

        }



    }
    
    function check_password(i){
        var password = $("#password").val();
        if(password == i){
            $("#reset_password").html(' ');
        }else{
            $("#reset_password").html("Reset password is not matching");
        }
        return false;
    }
    
    function set_address(add){
        $("#p_address").val(add);
        return false;
    }
    
    
</script>
@endsection

@endsection