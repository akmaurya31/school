@extends('layouts.admin_header')

@section('title', 'Add New Quiz')

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

<a href="#">EXAM & QUESTION STATUS</a>

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

<form role="form" method='post' action="{{ route('quiz.store') }}" class="box" novalidate> 
<!-- Create Quiz Page Start -->

<div class="row">
<div class="form-tab-content">
<!-- single in/ou -->

<div class="col-md-12">
  <section class="tile">
  <div class="tile-header bg-white dvd dvd-btm" style="border:solid lightgrey 1px;">
    <h3 class="custom-font">SELECT OPTIONS TO CREATE EXAM
   </h3>

  </div>
 
          <div class="tile-body"> 
            {{ @csrf_field() }} 
            <div class="row">
              

              <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <select class="tile-header bg-white dvd dvd-btm" name="drop_subject" style="border:solid lightgrey 1px; width:300px;">
                     <option value=''>-------------SELECT SUBJECT-------------</option>
                     <option>Mathematics</option>
                     <option>Physics</option>
                     <option>Chemistry</option>
                     <option>Science</option>
                  </select>
                    
              </div>

             <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <select class="tile-header bg-white dvd dvd-btm"  name="drop_class"  style="border:solid lightgrey 1px; width:300px;">
                     <option  value=''>-------------SELECT CLASS-------------</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                     <option>11</option>
                  </select>
                    
              </div>
            
              <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <select class="tile-header bg-white dvd dvd-btm"  name="drop_section"  style="border:solid lightgrey 1px; width:300px;">
                      <option  value=''>-------------SELECT SECTION-------------</option>
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                    </select>
                      
                </div> 
            </div>          
          </div> 
    </section>
</div>
</div>
</div>




<section class="tile">
<div class="tile-body" id="content-tabs">
  <ul class="nav nav-pills">
    <li role="tab" data-toggle="tab" class="active"><a href="#tab-pane--content1">MCQ</a></li>
    <li role="tab" data-toggle="tab"><a href="#tab-pane--content2">TRUE/FALSE</a></li>
   
</ul>
</div>
</section>


<div class="row">
<div class="form-tab-content">
<!-- single in/ou -->
<div class="tab-pane active" id="tab-pane--content1">
<div class="col-md-12">

<section class="tile">
  <div class="tile-header bg-white dvd dvd-btm" style="border:solid lightgrey 1px;">
    <h2 class="custom-font"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Create MCQ Questions</h2>
    <ul class="controls">
      <li>
        <a role="button" tabindex="0" class="tile-toggle">
          <span class="minimize"><i class="fa fa-minus"></i></span>
          <span class="expand"><i class="fa fa-plus"></i></span>
        </a>
      </li>
    </ul>
  </div>  
  <div class="tile-body">
 
      <div class="row">
        <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="tile-header bg-blue dvd dvd-btm modal-action" style="width:100px; border:solid lightgrey 1px; ">
              <h3>Q.No 1</h3>
            </div> 
        </div>
        <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10">
          <div class="col-sm-12 col-xs-12">
              <!-- tile header -->
              <div  style="margin: 3px;">
                  <textarea rows="4" cols="100" name="enter_question" placeholder="enter Question" required></textarea>
              </div> 
          </div>          

            <br/><br/><br/><br/><br/><br/>


            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <font size="4" color="grey" >A.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="opt_a">&nbsp;&nbsp;&nbsp;
             <textarea   rows="1" cols="94" placeholder="enter option" name="txt_opt_a" ></textarea> <br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <font size="4" color="grey" >B.</font>&nbsp;&nbsp; <input type="radio" name="opt_b">&nbsp;&nbsp;&nbsp;
            <textarea rows="1" cols="94" placeholder="enter option" name="txt_opt_b" ></textarea> <br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <font size="4" color="grey"  >C.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="opt_c">&nbsp;&nbsp;&nbsp;
             <textarea rows="1" cols="94" placeholder="enter option" name="txt_opt_c" ></textarea> <br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <font size="4" color="grey"  >D.</font>&nbsp;&nbsp; <input type="radio" name="opt_d">&nbsp;&nbsp;&nbsp;
            <textarea rows="1" cols="94" placeholder="enter option" name="txt_opt_d" ></textarea> <br/>
             </div>

             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <textarea rows="2" cols="100" name="explination" placeholder="Expalination" ></textarea>
             </div> 
             
        </div>


         <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <center> <button type="submit" class="btn btn-red">SUBMIT2</button></center> 
        </div> 
      </div> 
  </div>
</section>   
</div>
</div>  
</div>
</div>
<!----/tab content 1----->


<!----tab content 2----->
<div class="row">
<div class="form-tab-content">
<!-- single in/ou -->

<div class="tab-pane" id="tab-pane--content2">
<div class="col-md-12">

<section class="tile">
  <div class="tile-header bg-white dvd dvd-btm" style="border:solid lightgrey 1px;">
    <h2 class="custom-font">Setting of True and False Questions and answers
   </h2>
    <ul class="controls">
      <li>
        <a role="button" tabindex="0" class="tile-toggle">
          <span class="minimize"><i class="fa fa-minus"></i></span>
          <span class="expand"><i class="fa fa-plus"></i></span>
        </a>
      </li>
    </ul>
  </div>  
  <div class="tile-body">
    <form role="form" class="box">
      <div class="row">
         <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-2" >
            <div class="tile-header bg-blue dvd dvd-btm modal-action" style="width:100px;  border:solid lightgrey 1px; ">
              <h3>Q.No 1</h3>

            </div> 
        </div>
        <div class="form-group col-lg-10 col-md-10 col-sm-10 col-xs-10" >
          <div class="col-sm-12 col-xs-12">
              <!-- tile header -->
              <div  style="margin: 3px;">
                  <textarea rows="4" cols="100" name="en_question" placeholder="enter Question" required></textarea>
              </div> 
          </div>      

            <br/><br/><br/><br/><br/><br/>
           <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <font size="4" color="grey" >A.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="opt_tr_a">&nbsp;&nbsp;&nbsp;<font color="black" size="3">TRUE</font><br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <font size="4" color="grey" >B.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="opt_tr_b">&nbsp;&nbsp;&nbsp;<font color="black" size="3">FALSE</font><br/>
             </div>

             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <textarea rows="2" cols="100" placeholder="Expalination" name="tr_expalination" ></textarea>
             </div>
        </div>



        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center><button type="submit" class="btn btn-red">SUBMIT3</button></center>

        </div>


      </div>

  </div>
</section>
</form> 
</div>
</div>
</div>
</div>


<!----/tab content 2----->



  <!-- Create Quiz Page End -->

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