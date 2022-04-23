@extends('layouts.parent_header')
@section('title', 'Student List')
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
<a href="index.html">Student List</a>
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
<h1 class="custom-font"><i class="fas fa5-user-graduate"></i> <strong>Student </strong>List</h1>
<ul class="controls">
<li><a href="#"><i class="fas fa5-copy"></i></a></li>
<li><a href="#"><i class="fas fa5-file-csv"></i></a></li>
<li><a href="#"><i class="fas fa5-file-excel"></i></a></li>
<li><a href="#"><i class="fas fa5-file-pdf"></i></a></li>
<li><a href="#"><i class="fas fa5-print"></i></a></li>
<li><a href="#"><i class="fas fa5-file-export"></i></a></li>
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
<!-- tile widget -->
<div class="tile-widget">

<div class="row">
<div class="col-sm-8">
<select class="input-sm form-control inline w-sm">
<option value="0">Bulk action</option>
<option value="1">Delete selected</option>
<option value="2">Archive selected</option>
<option value="3">Copy selected</option>
</select>
<button class="btn btn-sm btn-slategray">Apply</button>
</div>



<div class="col-sm-4">
<div class="input-group">
<input type="text" class="input-sm form-control" placeholder="Search...">
<span class="input-group-btn">
<button class="btn btn-sm btn-slategray" type="button">Go!</button>
</span>
</div>
</div>

</div>

</div>
<!-- tile body -->
<div class="tile-body ak_table ak_table2 student_list_page">

<div class="table-responsive table_ws_nowrap">
<table class="table mb-0" id="usersList">
<thead>
<tr>
    <th class="stl_th3">Name</th>
    <th class="stl_th4">Class</th>
    <th class="stl_th5">Section</th>
    <th class="stl_th6">Roll Number</th>
    <th class="stl_th7">Register No</th>
    <th class="stl_th8">Admission Date</th>
    <th class="stl_th9">Category</th>
    <th class="stl_th10">Gender</th>
    <th class="stl_th11">Blood Group</th>
    <th class="stl_th12">Date of Birth</th>
    <th class="stl_th13">Religion</th>
    <th class="stl_th14">Caste</th>
    <th class="stl_th15">Mobile</th>
    <th class="stl_th16">City</th>
    <th class="stl_th17">State</th>
    <th class="stl_th18">Present Address</th>
    <th class="stl_th19">Permanent Address</th>
    <th class="stl_th20">Adhar No.</th>
    <th class="stl_th21">Family Id</th>
    <th class="stl_th22">Member Id</th>
    <th class="stl_th23">Father Name</th>
    <th class="stl_th24">Father Occupation</th>
    <th class="stl_th25">Father Income</th>
    <th class="stl_th26">Father Education</th>
    <th class="stl_th26">Father Mobile</th>
    <th class="stl_th26">Father Email</th>
    <th class="stl_th26">Father Adhar</th>
    <th class="stl_th23">Mother Name</th>
    <th class="stl_th24">Mother Occupation</th>
    <th class="stl_th25">Mother Income</th>
    <th class="stl_th26">Mother Education</th>
    <th class="stl_th26">Mother Mobile</th>
    <th class="stl_th26">Mother Email</th>
    <th class="stl_th26">Mother Adhar</th>
    <th class="stl_th26">City</th>
    <th class="stl_th26">State</th>
    <th class="stl_th23">Guardian Name</th>
    <th class="stl_th24">Guardian Occupation</th>
    <th class="stl_th25">Guardian Income</th>
    <th class="stl_th26">Guardian Education</th>
    <th class="stl_th26">Guardian Mobile</th>
    <th class="stl_th26">Guardian Email</th>
    <th class="stl_th26">City</th>
    <th class="stl_th26">State</th>
    <th class="stl_th26">Guardian Adhar</th>
    <th class="stl_th26">Transport Route</th>
    <th class="stl_th26">Vehicle No.</th>
    <th class="stl_th26">Hostel</th>
    <th class="stl_th26">Room</th>
    <th class="stl_th26">Previous School</th>
    <th class="stl_th26">Qualification</th>
    <th class="stl_th26">Remarks</th>
</tr>
</thead>
<tbody>
  @foreach($students as $key)
  <tr>
    <td>{{ $key->s_first_name }} {{ $key->s_last_name}}</td>
    <td>{{ $key->ClassNo}}</td>
    <td>{{ $key->ClassSection }}</td>
    <td>{{ $key->si_student_rollnumber }}</td>
    <td>{{ $key->s_registered }}</td>
    <td>{{ $key->s_adm_date }}</td>
    <td>{{ $key->s_category_id }}</td>
    <td>{{ $key->s_gender }}</td>
    <td>{{ $key->s_blood_group }}</td>
    <td>{{ $key->s_dob }}</td>
    <td>{{ $key->s_religion }}</td>
    <td>{{ $key->s_caste }}</td>
    <td>{{ $key->s_mobile }}</td>
    <td>{{ $key->s_city }}</td>
    <td>{{ $key->s_state }}</td>
    <td>{{ $key->s_present_address }}</td>
    <td>{{ $key->s_permanent_address }}</td>
    <td>{{ $key->s_adhar_card }}</td>
    <td>{{ $key->s_family_id }}</td>
    <td>{{ $key->s_member_id }}</td>
    <td>{{ $key->s_father_name }}</td>
    <td>{{ $key->s_father_occupation }}</td>
    <td>{{ $key->s_father_income }}</td>
    <td>{{ $key->s_father_education }}</td>
    <td>{{ $key->s_father_mobile }}</td>
    <td>{{ $key->s_father_email }}</td>
    <td>{{ $key->s_father_adhar }}</td>
    <td>{{ $key->s_mother_name }}</td>
    <td>{{ $key->s_mother_occupation }}</td>
    <td>{{ $key->s_mother_income }}</td>
    <td>{{ $key->s_mother_education }}</td>
    <td>{{ $key->s_mother_mobile_number }}</td>
    <td>{{ $key->s_mother_email }}</td>
    <td>{{ $key->s_mother_adhar }}</td>
    <td>{{ $key->s_city_1 }}</td>
    <td>{{ $key->s_state_1 }}</td>
    <td>{{ $key->s_guardian_name }}</td>
    <td>{{ $key->s_guardian_occupation }}</td>
    <td>{{ $key->s_guardian_income }}</td>
    <td>{{ $key->s_guardian_education }}</td>
    <td>{{ $key->s_guardian_mobile_number }}</td>
    <td>{{ $key->s_guardian_email }}</td>
    <td>{{ $key->s_guardian_adhar }}</td>
    <td>{{ $key->s_guardian_city }}</td>
    <td>{{ $key->s_guardian_state }}</td>
    <td>{{ $transports[$key->s_transport_id] }}</td>
    <td>{{ $key->s_vehicle_id }}</td>
    <td>{{ $hostels[$key->s_hostel_id] }}</td>
    <td>{{ $rooms[$key->s_room_id] }}</td>
    <td>{{ $key->s_previouse_school }}</td>
    <td>{{ $key->s_previouse_qualification }}</td>
    <td>{{ $key->s_previouse_remark }}</td>

  </tr>
  @endforeach
</tbody>
</table>
</div>

</div>
<div class="tile-footer bt-0 dvd dvd-top">
<div class="row">



<div class="col-sm-5 text-left">
<small class="text-default">showing 20-30 of 50 items</small>
</div>

<div class="col-sm-7 text-right">
<ul class="pagination pagination-sm m-0">
    <li><a href="#" class="bg-blue"><i class="fa fa-chevron-left"></i></a></li>
    <li><a href="#" class="active bg-slategray">1</a></li>
    <li><a href="#" class="">2</a></li>
    <li><a href="#" class="">3</a></li>
    <li><a href="#" class="bg-blue"><i class="fa fa-chevron-right"></i></a></li>
</ul>
</div>

</div>
</div>
</section>
<!-- /tile -->
</div>

</div>
</div>

</div>
@endsection