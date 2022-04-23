@extends('layouts.admin_header')

@section('title', 'Edit Staff')

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

<a href="index.html">Edit Staff</a>

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

<h1 class="custom-font"><i class="fa fa-user-circle-o"></i> <strong>Edit </strong>Staff</h1>

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

<form method='post' action="{{ route('staff.update', $staff_details->t_id) }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to submit?');">

{{ @csrf_field() }}

{{ method_field('PUT') }}

<!-- tile body -->

<div class="tile-body not-last">

<div class="ak_tile_subhead"> <h2> Academic Details </h2></div>

<div class="row">

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label>Role *</label>

<select class="form-control ak_select2" name="role_name" required onchange="return get_designation(this.value);">

<option value="">Select Role</option>

<option value='Teaching' {{ $staff_details->t_role_name == "Teaching" ? "selected" : "" }}>Teaching</option>

<option value='Non Teaching' {{ $staff_details->t_role_name == "Non Teaching" ? "selected" : "" }}>Non Teaching </option>

</select>

</div>

<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="regno">Joining Date *</label>

<div class='input-group'>

<input type='date' class="form-control" name='joinig_date' required value="{{ date('Y-m-d',strtotime($staff_details->t_join_date)) }}"/>

<span class="input-group-addon">

<span class="fa fa-calendar"></span>

</span>

</div>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label>Department *</label>

<select class="form-control ak_select2" name="department" required>

<option value="">Select Department</option>

@foreach($departments as $dept)

<option value="{{ $dept->d_id}}" {{ $dept->d_id == $staff_details->t_dept_id ? 'selected' : ' '}}>{{ $dept->d_name}}</option>

@endforeach

</select>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label>Designation *</label>

<select class="form-control ak_select2" name="designation" required id='designation'>

<option value="">Select Designation</option>

@foreach($designations as $dept)

<option value="{{ $dept->ds_id}}" {{ $dept->ds_id == $staff_details->t_desgnation_id ? 'selected' : ' '}}>{{ $dept->ds_name}}</option>

@endforeach

</select>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="addd">Qualifications</label>

<select class="form-control ak_select2" name="qualification" required>

<option value="">Select Education</option>

@foreach($education as $dept)

<option value="{{ $dept->education_name}}" {{ $dept->education_name == $staff_details->t_qualification ? 'selected' : ' '}}>{{ $dept->education_name}}</option>

@endforeach

</select>


</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="addd">Expirence Details</label>

<select name='experiance' class='form-control ak_select2'>
    <option value="">Select</option>
    <?php for($a=1;$a<=40;$a++){ ?>
        <option value="<?=$a?>" {{ $staff_details->t_experiance == $a ? 'selected' : '' }}><?=$a?></option>
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

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="fname">Name *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-user-o"></span>

</span>

<input type="text" class="form-control" name="name" required value="{{ $staff_details->t_name }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" autocomplete='off' maxlength='50'/>



</div>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label>Gender *</label>

<select class="form-control ak_select2" required name='gender'>

<option selected> Select</option>

<option value="Male" {{ $staff_details->t_gender == 'Male' ? 'selected' : ''}}>Male</option>

<option value='Female' {{ $staff_details->t_gender == 'Female' ? 'selected' : ''}}>Female</option>

<option value='Other' {{ $staff_details->t_gender == 'Other' ? 'selected' : ''}}>Other</option>

</select>

</div>

<div class="form-group col-lg-4 col-md-6 col-sm-12 col-xs-12">

<label for="lanem">Religion</label>

<input type="text" class="form-control" name="religion" required value="{{ $staff_details->t_religion }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" autocomplete='off' maxlength='50'/>



</div>



<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label>Blood Group</label>

<select class="form-control ak_select2" required name='blood_group'>

<option select> Select</option>

<option value="A+" {{ $staff_details->t_blood_group == 'A+' ? 'selected' : '' }}>A+</option>

<option value="A" {{ $staff_details->t_blood_group == 'A' ? 'selected' : '' }}>A</option>

<option value="A-" {{ $staff_details->t_blood_group == 'A-' ? 'selected' : '' }}>A-</option>

<option value="B" {{ $staff_details->t_blood_group == 'B' ? 'selected' : '' }}>B</option>

<option value="B+" {{ $staff_details->t_blood_group == 'B+' ? 'selected' : '' }}>B+</option>

<option value="B-" {{ $staff_details->t_blood_group == 'B-' ? 'selected' : '' }}>B-</option>

<option value="AB" {{ $staff_details->t_blood_group == 'AB' ? 'selected' : '' }}>AB</option>

<option value="AB+" {{ $staff_details->t_blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>

<option value="AB-" {{ $staff_details->t_blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>

<option value="O" {{ $staff_details->t_blood_group == 'O' ? 'selected' : '' }}>O</option>

<option value="O+" {{ $staff_details->t_blood_group == 'O+' ? 'selected' : '' }}>O+</option>

<option value="O-" {{ $staff_details->t_blood_group == 'O-' ? 'selected' : '' }}>O-</option>

</select>

</div>

<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label for="regno">Birth Date *</label>

<div class='input-group'>



<input type='date' class="form-control" required name="date_of_birth" value="{{ date('Y-m-d',strtotime($staff_details->t_dob)) }}"/>

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

<input type="number" class="form-control" name="mobile_number" placeholder="" value="{{ $staff_details->t_mobile_number }}" onblur="return checkMobile(this.value);" maxlength='10' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete='off'>



</div>



<div id='mobileError'></div>

</div>

<div class="form-group col-lg-3 col-md-6 col-sm-12 col-xs-12">

<label for="mno">Email</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-envelope-o"></span>

</span>

<input type="email" class="form-control" name="email" placeholder="" value="{{ $staff_details->t_email }}" onblur="return validateEmail(this.value);" autocomplete='off'>





</div>


<div id='emailError'></div>

</div>



<div class="form-group col-lg-4 col-md-12 col-sm-12 col-xs-12">

<label for="mno">Pan</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-envelope-o"></span>

</span>

<input type="text" class="form-control" name="pan" placeholder="" value="{{ $staff_details->t_pan }}" autocomplete='off' maxlength='15'>

</div>

</div>



<div class="form-group col-md-6 col-xs-12">

<label for="addd">Present Address</label>

<textarea class="form-control" rows="5" name="present_address"  placeholder="" required>{{ $staff_details->t_present_address }}</textarea>



</div>

<div class="form-group col-md-6 col-xs-12">

<label for="state">Permanent Address</label>

<textarea class="form-control" rows="5" name="permanent_address" placeholder="" required>{{ $staff_details->t_permanent_address }}</textarea>

</div>

<div class="form-group col-xs-6">

<label for="city">Profile Image</label>

<div class="drop-zone">

<img src="{{ asset('public/staff/'.$staff_details->t_profile_image) }}" height='100px' width='100px'>

</div>

</div>

<div class="form-group col-xs-6">

<label for="city">Profile Image Upload</label>

<div class="drop-zone">

<span class="drop-zone__prompt">Drop file here or click to upload</span>

<input type="file" name="myFile" class="drop-zone__input">

</div>

</div>

</div>

</div>

<!-- /tile body --

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

<input type="text" class="form-control" name="facebook_link" value="{{ $staff_details->t_facebook }}">



</div>

</div>

<div class="form-group col-md-4 col-xs-12">

<label for="fname">Twitter *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-twitter"></span>

</span>

<input type="text" class="form-control" name="twitter" value="{{ $staff_details->t_twitter }}">



</div>

</div>

<div class="form-group col-md-4 col-xs-12">

<label for="fname">Linked In *</label>

<div class="input-group">

<span class="input-group-addon">

<span class="fa fa-linkedin"></span>

</span>

<input type="text" class="form-control" name="linkdin" value="" value="{{ $staff_details->t_linkdin }}">



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

<input type="text" class="form-control" name="account_holder" required="" value="{{ $staff_details->t_account_holder }}" onkeyup="this.value=this.value.replace(/[^a-zA-Z \s]/g,'');" autocomplete='off' maxlength='50'>    

</div>

<div class="form-group col-md-6 col-xs-12">

<label for="fname">Bank Branch</label>

<input type="text" class="form-control" name="bank_branch" required="" value="{{ $staff_details->t_branch }}" autocomplete='off' maxlength='40'>    

</div>
<div class="form-group col-md-6 col-xs-12">

    <label for="fname">Account No.</label>
    
    <input type="text" class="form-control" name="account_number" required="" value="{{ $staff_details->t_account_number }}" autocomplete='off' maxlength='20' onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">    
    
    </div>
<div class="form-group col-md-6 col-xs-12">

<label for="fname">IFSC Code</label>

<input type="text" class="form-control" name="ifsc_code" required="" value="{{ $staff_details->t_ifsc_code }}">    

</div>

</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
    <div class="row">

        <div class="form-group col-md-12">

    <label for="fname">Bank Address</label>
    <textarea type="text" class="form-control" name="bank_address" required="" rows="5">{{ $staff_details->t_branch_address }}</textarea>

    </div>
</div>

</div>
</div>
</div>
<!-- /tile body -->



<div class="submit-holder">

<div class="row">
<div class="form-group col-xs-12">
<button type="submit" class="btn btn-blue">Update Information <i class="fa fa-floppy-o"></i></button> </div> 
</div>
</div>


</form>

</section>

<!-- /tile -->

</div>

</div>

</div>

</div>

<script type="text/javascript">

    function get_designation(value)

    {

        $.ajax({

                url: "{{ route('staff.get-designation') }}",

                type: 'GET',

                data: { role:value },

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
 
</script>

@endsection