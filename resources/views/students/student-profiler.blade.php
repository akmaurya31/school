@extends('layouts.admin_header')
@section('title', 'Student Profiler')
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
<a href="index.html">Student Profile</a>
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
                <!-- tile -->
                <section class="tile">

                    <!-- tile header -->
                    <div class="tile-header bg-blue dvd dvd-btm">
                        <h1 class="custom-font"><i class="fas fa5-user-graduate"></i> <strong>Student </strong>Profile</h1>
                    </div>
                    <!-- /tile header -->

     <div class="tile-widget bg-white p-0" style="display: block;">
    
                <div class="profile-head">
                    <div class="col-md-12 col-lg-4 col-xl-3">
                    <div class="image-content-center user-pro">
                    <div class="preview">
                    <img src="{{ asset('assets/images/ici-avatar.jpg') }}">
                    </div>
                    </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="tile-body" id="content-tabs">
                            <ul class="nav nav-pills">
                            <li role="tab" data-toggle="tab" class="active">
                                <a href="#profile">Profile</a>
                                <div class="triangle-top"></div>
                            </li>
                            <li role="tab" data-toggle="tab">
                                <a href="#projects">Projects</a>
                                <div class="triangle-top"></div>
                            </li>
                            <li role="tab" data-toggle="tab">
                                <a href="#photos">Photos</a>
                                <div class="triangle-top"></div>
                            </li>
                            <li role="tab" data-toggle="tab">
                                <a href="#frnds">Friends</a>
                                <div class="triangle-top"></div>
                            </li>
                            <li role="tab" data-toggle="tab">
                                <a href="#group">Group</a>
                                <div class="triangle-top"></div>
                            </li>
                          </ul>
                        </div>
                        <div class="form-tab-content">
                            <!-- profile -->
                            <div class="tab-pane active" id="profile">
                            <section class="tile">
                                <div class="tile-body">
                                    <div class="row">
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>First Name</h5>
                                        <p>Rahul</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Last Name</h5>
                                        <p>Raj</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Email ID</h5>
                                        <p>Rahul@gmail.com</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>City</h5>
                                        <p>Kanpur</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>State</h5>
                                        <p>Uttar Pradesh</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Country</h5>
                                        <p>India</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>DOB</h5>
                                        <p>10-5-2008</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Interets</h5>
                                        <p>Web Design, Basketball etc</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Mobile</h5>
                                        <p>7898989087</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Fathers name</h5>
                                        <p>PK Singh</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Father Mobile</h5>
                                        <p>98989898</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Class</h5>
                                        <p>9th</p>
                                    </div>
                                    <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                        <h5>Roll No</h5>
                                        <p>14</p>
                                    </div>
                                    </div>
                                    </div>
                            </section>
                            </div>
                            <!-- /profile -->
                            <!-- projects -->
                            <div class="tab-pane" id="projects">
                                <section class="tile">
                                    <div class="tile-body">
                                        <div class="row">
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Projects 1</h5>
                                                <p>item 1</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Projects 2</h5>
                                                <p>item 2</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Projects 3</h5>
                                                <p>item 3</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Projects 4</h5>
                                                <p>item 4</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Projects 5</h5>
                                                <p>item 5</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Projects 6</h5>
                                                <p>item 7</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Projects 7</h5>
                                                <p>item 7</p>
                                            </div>
                                            </div>
                                    </div>
                                </section>
                                
                            </div>
                            <!-- /projects -->
                            <!-- photos -->
                            <div class="tab-pane" id="photos">
                                <section class="tile">
                                    <div class="tile-body">
                                        <div class="row">
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Photos 1</h5>
                                                <p>item 1</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Photos 2</h5>
                                                <p>item 2</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Photos 3</h5>
                                                <p>item 3</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Photos 4</h5>
                                                <p>item 4</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Photos 5</h5>
                                                <p>item 5</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Photos 6</h5>
                                                <p>item 7</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>Photos 7</h5>
                                                <p>item 7</p>
                                            </div>
                                            </div>    
                                    </div>
                                </section>
                                
                            </div>
                            <!-- /photos -->
                            <!-- friends -->
                            <div class="tab-pane" id="frnds">
                                <section class="tile">
                                    <div class="tile-body">
                                        <div class="row">
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>friends 1</h5>
                                                <p>item 1</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>friends 2</h5>
                                                <p>item 2</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>friends 3</h5>
                                                <p>item 3</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>friends 4</h5>
                                                <p>item 4</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>friends 5</h5>
                                                <p>item 5</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>friends 6</h5>
                                                <p>item 7</p>
                                            </div>
                                            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                <h5>friends 7</h5>
                                                <p>item 7</p>
                                            </div>
                                            </div>    
                                    </div>
                                </section>    
                            </div>
                            <!-- /friends -->
                            <!-- group -->
                            <div class="tab-pane" id="group">
                                <section class="tile">
                                    <div class="tile-body">
                                        <div class="row">
                                        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                            <h5>Group 1</h5>
                                            <p>item 1</p>
                                        </div>
                                        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                            <h5>Group 2</h5>
                                            <p>item 2</p>
                                        </div>
                                        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                            <h5>Group 3</h5>
                                            <p>item 3</p>
                                        </div>
                                        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                            <h5>Group 4</h5>
                                            <p>item 4</p>
                                        </div>
                                        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                            <h5>Group 5</h5>
                                            <p>item 5</p>
                                        </div>
                                        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                            <h5>Group 6</h5>
                                            <p>item 7</p>
                                        </div>
                                        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                            <h5>Group 7</h5>
                                            <p>item 7</p>
                                        </div>
                                        </div>
                                    </div>
                                </section>
                                
                            </div>
                            <!-- /group -->
                        </div> 
                    </div>
                    </div>
    </div>
    
        <!-- /tile widget -->
    <!-- tile body -->
    <div class="tile-body p-0">
    
    <div class="panel-group ak_accordian profile_style" id="prof_acc" role="tablist" aria-multiselectable="true">
    <div class="panel panel-transparent ak_acc_iner">
    <div class="panel-heading" role="tab" id="basic_details">
    <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#prof_acc" href="#pa1" class="collapsed" aria-expanded="true">
    <span><i class="fa fa-graduation-cap"></i> Basic Details</span>  
    </a>
    </h4>
    </div>
    <div id="pa1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion" aria-expanded="true">
    <div class="panel-body">
        
            <!-- tile body -->
            <div class="tile-body">
            <div class="row">
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Name</h5>
                <p>Rahul Raj</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Class</h5>
                <p>6th</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Section</h5>
                <p>A</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>DOB</h5>
                <p>10-5-2008</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Class Teacher</h5>
                <p>Priya Vashne</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Teacher Mobile</h5>
                <p>7898989087</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Student Mobile</h5>
                <p>98989898</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Fathers name</h5>
                <p>PK Singh</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Father Mobile</h5>
                <p>98989898</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Local Address</h5>
                <p>45, GS Main Road Kanpur</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Email ID</h5>
                <p>Rahul@gmail.com</p>
            </div>
            <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h5>Father Occupation</h5>
                <p>Business</p>
            </div>
            </div>
            </div>
            <!-- /tile body -->
            <!-- ::remove body
            <div class="tile-body ">
            <div class="ak_tile_subhead"> <h2> Student Details </h2></div>
            <div class="row">
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                <label for="fname">First Name *</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-user-o"></span>
                    </span>
                    <input type="text" class="form-control" id="fname" required />
                    
                </div>
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                <label for="lanem">Last Name *</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <span class="fa fa-user-o"></span>
                    </span>
                    <input type="text" class="form-control" id="lname" required />
                    
                </div>
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                <label>Gender *</label>
                <select class="form-control ak_select2" required>
                    <option selected> Select</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                <label>Blood Group</label>
                <select class="form-control ak_select2" required>
                    <option select> Select</option>
                    <option>A+</option>
                    <option>A</option>
                    <option>A-</option>
                    <option>B</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O</option>
                    <option>O+</option>
                    <option>O-</option>
                </select>
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                <label for="regno">Birth Date *</label>
                <div class='input-group datepicker ' data-format="L">
                    
                    <input type='text' class="form-control" required />
                        <span class="input-group-addon">
                        <span class="fa fa-birthday-cake"></span>
                    </span>
                </div>
            </div>
                <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                    <label for="mt">Mother Tongue</label>
                    <input type="text" class="form-control" id="mt" placeholder="">
                </div>
                <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                    <label for="rgn">Religion</label>
                    <input type="text" class="form-control" id="rgn" placeholder="">
                </div>
                <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                    <label for="cst">Caste</label>
                    <input type="text" class="form-control" id="cst" placeholder="">
                </div>
            
                    <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="mno">Mobile Number</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-phone"></span>
                            </span>
                            <input type="text" class="form-control" id="mno" placeholder="">
                            
                        </div>
                        
                        
                    </div>
                    <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="mno">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="fa fa-envelope-o"></span>
                            </span>
                            <input type="text" class="form-control" id="mno" placeholder="">
                            
                        </div>
                        
                        
                    </div>
                    <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="">
                    </div>
                    <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" placeholder="">
                    </div>
            
                <div class="form-group col-lg-6 col-sm-6 col-xs-12">
                    <label for="addd">Present Address</label>
                        <textarea class="form-control" rows="5" name="padress" id="padress" placeholder="" required></textarea>
                
                </div>
                <div class="form-group col-lg-6 col-sm-6 col-xs-12">
                    <label for="state">Permanent Address</label>
                    <textarea class="form-control" rows="5" name="padress" id="padress" placeholder="" required></textarea>
                </div>
            
                    <div class="form-group col-lg-6 col-md-12 col-xs-12">
                        <label for="adn">Adhar Card Number</label>
                        <input type="text" class="form-control" id="adn" placeholder="">  
                    </div>
                    
                    <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                        <label for="mno">Family ID</label>
                        
                            <input type="text" class="form-control" id="mno" placeholder="">  
                        
                    </div>
                    <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                        <label for="city">Member ID</label>
                        <input type="text" class="form-control" id="city" placeholder="">
                    </div>
            
            <div class="form-group col-md-12 col-xs-12">
                <label for="city">Upload pic</label>
            <div class="drop-zone">
                <span class="drop-zone__prompt">Drop file here or click to upload</span>
                <input type="file" name="myFile" class="drop-zone__input">
                </div>
                </div>
            </div>
            </div>
            -->
            <!-- ::remove tile body
            <div class="tile-body ">
            <div class="ak_tile_subhead"> <h2> Upload Documents </h2></div>
                    <div class="row">
                        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                            <label for="upd">Upload TC</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="fa fa-upload"></span>
                                </span>
                                <input type="file" class="form-control" id="upd" placeholder="">
                                
                            </div>
                            
                        </div>
                        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                            <label for="upd">Upload Birth Certificate</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="fa fa-upload"></span>
                                </span>
                                <input type="file" class="form-control" id="upd" placeholder="">
                                
                            </div>
                            
                        </div>
                        <div class="form-group col-lg-3 col-sm-6 col-xs-12">
                            <label for="upd">Upload Caracter certificate</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="fa fa-upload"></span>
                                </span>
                                <input type="file" class="form-control" id="upd" placeholder="">
                                
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
            </div>-->
            <!-- ::  tile body
            <div class="tile-body ">
            <div class="ak_tile_subhead"> <h2> Parents Details </h2></div>
            <div class="form_subdivision">
            <div class="row">
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Father Name</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Father Occupation</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Father Income</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-sm-6 col-xs-12">
            <label for="fname">Father Education</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-sm-6 col-xs-12">
            <label for="fname">Father Mobile Number</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-sm-6 col-xs-12">
            <label for="fname">Father Email</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-xs-12">
            <label for="fname">Father Adhaar Number</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            </div>
            </div>
            <div class="form_subdivision">
            <div class="row">
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Mother Name</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Mother Occupation</label>
            <input type="text" class="form-control" id="fname" required />    
                </div>
            <div class="form-group col-lg-4 col-sm-6 col-xs-12">
            <label for="fname">Mother Income</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-sm-6 col-xs-12">
            <label for="fname">Mother Education</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-sm-6 col-xs-12">
            <label for="fname">Mother Mobile Number</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-sm-6 col-xs-12">
            <label for="fname">Mother Email</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-3 col-xs-12">
            <label for="fname">Mother Adhaar Number</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            </div>
            </div>
            <div class="form_subdivision last-item">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="row">
            <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
            <label for="fname">City</label>
            <input type="text" class="form-control" id="fname" required />    
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
            <label for="fname">State</label>
            <input type="text" class="form-control" id="fname" required />    
                    </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-xs-12">
            <div class="form-group ">
            <label for="addd">Address</label>
            <textarea class="form-control" rows="5" name="padress" id="padress" placeholder="" required></textarea>
            </div>
            </div>
            </div>
            </div>
            
            
            </div> -->
            <!--
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
            </div> -->
            <!-- tile body 
            <div class="tile-body " id="guardian" style="display: none;">
                <div class="ak_tile_subhead"> <h2> Guardian Details </h2></div>
                <div class="form_subdivision last-item">
                    <div class="row">
                        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="fname">Guardian Name </label>
                                <input type="text" class="form-control" id="fname" required />    
                        </div>
                        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="fname">Guardian Occupation</label>
                                <input type="text" class="form-control" id="fname" required />    
                        </div>
                        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="fname">Guardian Income</label>
                                <input type="text" class="form-control" id="fname" required />    
                        </div>
                        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="fname">Guardian Education</label>
                                <input type="text" class="form-control" id="fname" required />    
                        </div>
                        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                            <label for="fname">Relation</label>
                                    <input type="text" class="form-control" id="fname" required />    
                            </div>
                        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="fname">Guardian Mobile Number</label>
                                <input type="text" class="form-control" id="fname" required />    
                        </div>
                        <div class="form-group col-lg-4 col-sm-6 col-xs-12">
                        <label for="fname">Guardian Email</label>
                                <input type="text" class="form-control" id="fname" required />    
                        </div>
                        <div class="form-group col-lg-8 col-sm-6 col-xs-12">
                        <label for="fname">Guardian Adhaar Number</label>
                        <input type="text" class="form-control" id="fname" required />    
                        </div>
                  
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="row">
                    <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <label for="fname">City</label>
                    <input type="text" class="form-control" id="fname" required />    
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <label for="fname">State</label>
                    <input type="text" class="form-control" id="fname" required />    
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-xs-12">
                    <div class="form-group ">
                    <label for="addd">Address</label>
                    <textarea class="form-control" rows="5" name="padress" id="padress" placeholder="" required></textarea>
                    </div>
                    </div>
                    </div>
                    </div>
                </div> -->
            
            <!-- tile body 
            <div class="tile-body " id="siblings" style="display: none;">
                <div class="ak_tile_subhead"> <h2> Siblings </h2></div>
                <div class="form_subdivision last-item">
                    <div class="row">
                    <div class="form-group col-lg-2 col-md-6 col-xs-12">
                    <label for="fname">Siblings </label>
                    <select class="form-control ak_select2" name="state" required>
                        <option>Brother</option>
                        <option>Sister</option>
                        
                        </select>   
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-xs-12">
                    <label for="fname">Name</label>
                                    <input type="text" class="form-control" id="fname" required />    
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-xs-12">
                    <label for="fname">Class</label>
                                    <input type="text" class="form-control" id="fname" required />    
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-xs-12">
                    <label for="fname">Roll Number</label>
                                    <input type="text" class="form-control" id="fname" required />    
                    </div>
                    <div class="form-group col-lg-2 col-md-6 col-xs-12">
                    <label for="fname">Registration Number</label>
                                    <input type="text" class="form-control" id="fname" required />    
                    </div>
                    <div class="col-lg-2 col-md-6 col-xs-12 mt-20">
                    <a href="#" class="btn btn-blue add-more"><i class="fa fa-plus-circle"></i> More</a>
                    </div>
                    </div>
                    </div>
                </div> -->
                <!-- /tile body -->
            
            <!-- tile body 
            <div class="tile-body " id="transport" style="display: none;">
            <div class="ak_tile_subhead"> <h2> Transport Details </h2></div>
            <div class="row">
            <div class="form-group col-md-6">
            <label>Transport Route </label>
            <select class="form-control ak_select2" required>
            <option selected> Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
            </select>
            </div>
            <div class="form-group col-md-6">
            <label>Vehicle Number </label>
            <select class="form-control ak_select2" required>
            <option selected> Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
            </select>
            </div>
            </div>
            </div> -->
            <!-- /tile body -->
            <!-- tile body 
            <div class="tile-body " id="hostel" style="display: none;">
            <div class="ak_tile_subhead"> <h2> Hostel Details </h2></div>
            <div class="row">
            <div class="form-group col-md-6">
            <label>Hostel Name  </label>
            <select class="form-control ak_select2" required>
                <option selected> Select</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
            </div>
            <div class="form-group col-md-6">
            <label>Room Name  </label>
            <select class="form-control ak_select2" required>
                <option selected> Select</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
            </div>
            </div>
            </div> -->
            <!-- /tile body -->
            <!-- tile body 
            <div class="tile-body ">
            <div class="ak_tile_subhead"> <h2> Previous School Details </h2></div>
            <div class="row">
            <div class="form-group col-md-6">
            <label>School Name  </label>
            <input type="text" class="form-control" id="fname" required="">
            </div>
            <div class="form-group col-md-6">
            <label>Qualification  </label>
            <input type="text" class="form-control" id="fname" required="">
            </div>
            <div class="form-group col-md-12">
            <label for="addd">Remarks</label>
            <textarea class="form-control" rows="3" name="rmrks" id="padress" placeholder="" required=""></textarea>
            </div>
            </div>
            </div> -->
            <!-- /tile body -->
            <!-- tile body 
            <div class="tile-body ">
                <div class="ak_tile_subhead"> <h2> Declaration </h2></div>
            
                <div class="row">
            <div class="form-group col-md-12">
            
                        <label class="checkbox checkbox-custom-alt">
                            <input type="checkbox" value=""> <i></i> I hereby certify that the above information provided by me is correct and Morbi varius, magna quis auctor molestie, enim purus facilisis felis, sit amet dapibus neque quam ut ipsum. Curabitur dapibus est mollis, ullamcorper metus at, faucibus nibh. Morbi magna orci, fringilla eu ornare quis, accumsan at nunc. In mattis nec tellus quis mollis. Aliquam erat volutpat. Aenean tempus sem in risus semper rutrum. Donec tortor leo, elementum eget purus vitae, pulvinar dapibus justo. 
                        </label>
            
                   
                </div>
            </div>
            </div>
           
             /tile body 
            
            <div class="submit-holder">
            <div class="row">
            <div class="form-group col-sm-12"> <button type="reset" class="btn btn-red">Reset</button> 
            <button type="submit" class="btn btn-blue">Save changes <i class="fa fa-floppy-o"></i></button> </div> </div>
            </div> -->
            
    
    </div>
    </div>
    </div>
    <!--- basic details end -->
    <!-- exam results -->
    <div class="panel panel-transparent ak_acc_iner">
        <div class="panel-heading" role="tab" id="exam_details">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#prof_acc" href="#pa2" class="collapsed" aria-expanded="false">
        <span><i class="fas fa5-user-graduate"></i> Exam results</span>  
        </a>
        </h4>
        </div>
        <div id="pa2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-row" aria-expanded="false">
        <div class="panel-body">
       <!-- tile body -->
       <div class="tile-body">
        <div class="row info-table">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Type Of Exam</th>
                        <th>Attendance</th>
                        <th>Total Marks</th>
                        <th>Obtained</th>
                        <th>Reamrks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monthly</td>
                        <td>Present</td>
                        <td>100</td>
                        <td>60</td>
                        <td>Lorem ipsum text is the dummy text here</td>
                    </tr>
                    <tr>
                        <td>Half Yearly</td>
                        <td>Present</td>
                        <td>100</td>
                        <td>55</td>
                        <td>Lorem ipsum text is the dummy text here</td>
                    </tr>
                    <tr>
                        <td>Annual</td>
                        <td>Absent</td>
                        <td>100</td>
                        <td>60</td>
                        <td>Lorem ipsum text is the dummy text here</td>
                    </tr>
                    <tr>
                        <td>Intenral Assessment</td>
                        <td>N/A</td>
                        <td>100</td>
                        <td>60</td>
                        <td>Lorem ipsum text is the dummy text here</td>
                    </tr>
                    <tr>
                        <td>Extra Activity</td>
                        <td>Present</td>
                        <td>100</td>
                        <td>60</td>
                        <td>Lorem ipsum text is the dummy text here</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>  
        <!-- /tile body -->
        </div>
        </div>
    </div>
    <!-- /exam results -->

    <!-- parent information -->
    <div class="panel panel-transparent ak_acc_iner">
        <div class="panel-heading" role="tab" id="student_details">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#prof_acc" href="#pa3" class="collapsed" aria-expanded="false">
        <span><i class="fas fa5-user-graduate"></i> Parent Information</span>  
        </a>
        </h4>
        </div>
        <div id="pa3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="student_details" aria-expanded="false">
        <div class="panel-body">
       <!-- tile body -->
       <div class="tile-body">
        <div class="row">
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Name</h5>
            <p>R K Singh</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Relation</h5>
            <p>Father</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Occupation</h5>
            <p>Doctor</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Income</h5>
            <p>50000</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Education</h5>
            <p>MBBS</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>City</h5>
            <p>Kanpur</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>State</h5>
            <p>Uttar Pradesh</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Mobile No</h5>
            <p>98989898</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Email ID</h5>
            <p>Rahul@gmail.com</p>
        </div>
        <div class="sp--info col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <h5>Address</h5>
            <p>45, GS Main Road Kanpur</p>
        </div>
        </div>
        </div>     
        <!-- /tile body -->
        </div>
        </div>
    </div>
    <!-- /parent information -->

    <!-- book issue -->
    <div class="panel panel-transparent ak_acc_iner">
        <div class="panel-heading" role="tab" id="book_details">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#prof_acc" href="#pa4" class="collapsed" aria-expanded="false">
        <span><i class="fas fa5-user-graduate"></i> Book Issue</span>  
        </a>
        </h4>
        </div>
        <div id="pa4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="student_details" aria-expanded="false">
        <div class="panel-body">
       <!-- tile body -->
       <div class="tile-body">
        <div class="row info-table">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Book Title</th>
                        <th>Date Of Issue</th>
                        <th>Date of Expiry</th>
                        <th>Fine</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>History</td>
                        <td>11.June.2020</td>
                        <td>06.Aug.2020</td>
                        <td>0.00</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Civics</td>
                        <td>11.June.2020</td>
                        <td>06.Aug.2020</td>
                        <td>0.00</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>  
        <!-- /tile body -->
        </div>
        </div>
    </div>
    <!-- /book issue -->

    <!-- documents -->
    <div class="panel panel-transparent ak_acc_iner">
        <div class="panel-heading" role="tab" id="documents_details">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#prof_acc" href="#pa5" class="collapsed" aria-expanded="false">
        <span><i class="fas fa5-user-graduate"></i> Documents</span>  
        </a>
        </h4>
        </div>
        <div id="pa5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="student_details" aria-expanded="false">
        <div class="panel-body">
        <!-- tile body -->
       <div class="tile-body">
        <div class="row info-table">
            <button class="btn badge badge-success" data-toggle="tooltip" title="" data-original-title="Upload"><i class="fa fa-upload fa-2x" aria-hidden="true"></i></button>
            <table class="table table-responsive table-bordered table-striped upload-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Document Type</th>
                        <th>File</th>
                        <th>Remarks</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>tutu</td>
                        <td>utyu</td>
                        <td>elementatry-school-child-boy.png</td>
                        <td></td>
                        <td>01.Jul.2020</td>
                        <td>
                            <button class="btn badge badge-primary" data-toggle="tooltip" title="" data-original-title="Download"><i class="fa fa-download fa-2x" aria-hidden="true"></i></button>
                            <button class="btn badge badge-warning" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                            <button class="btn badge badge-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>tutu</td>
                        <td>utyu</td>
                        <td>elementatry-school-child-boy.png</td>
                        <td></td>
                        <td>01.Jul.2020</td>
                        <td>
                            <button class="btn badge badge-primary" data-toggle="tooltip" title="" data-original-title="Download"><i class="fa fa-download fa-2x" aria-hidden="true"></i></button>
                            <button class="btn badge badge-warning" data-toggle="tooltip" title="" data-original-title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                            <button class="btn badge badge-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>  
        <!-- /tile body -->    
        </div>
        </div>
    </div>
    <!-- /documents -->

    <!-- fees -->
    <div class="panel panel-transparent ak_acc_iner">
        <div class="panel-heading" role="tab" id="fees_details">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#prof_acc" href="#pa6" class="collapsed" aria-expanded="false">
        <span><i class="fas fa5-user-graduate"></i> Fees</span>  
        </a>
        </h4>
        </div>
        <div id="pa6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="student_details" aria-expanded="false">
        <div class="panel-body">
       <!-- tile body -->
       <div class="tile-body">
        <div class="row info-table">
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Fees Type</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Discount</th>
                        <th>Fine</th>
                        <th>Paid</th>
                        <th>Due Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>  
        <!-- /tile body -->
        </div>
        </div>
    </div>
    <!-- /fees -->

    </div>
    
    </div>
    <!-- /tile body -->


                </section>
                <!-- /tile -->

                
         </div>
     </div>
                  
 </div>

</div>
@section('footer-scripts')

@endsection
@endsection