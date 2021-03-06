<!doctype html>

<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>@yield('title')</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/animsition/css/animsition.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/daterangepicker/daterangepicker-bs3.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/morris/morris.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/owl-carousel/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/rickshaw/rickshaw.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<!-- datatable css -->
<link rel="stylesheet" href="{{ asset('assets/js/vendor/datatable_net/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/datatable_net/autoFill.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/datatable_net/select.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/datatable_net/buttons.dataTables.min.css') }}">
<!-- datatable css  end-->
<link rel="stylesheet" href="{{ asset('assets/js/vendor/chosen/chosen.css') }}">
<link rel="stylesheet" href="{{ asset('assets/js/vendor/summernote/summernote.css') }}">        
<link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}"> 
<link rel="stylesheet" href="{{ asset('assets/css/flag-icon.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/akstyle.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

<script src="{{ asset('assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
<!-- Multiselect dropdown plugin  end-->

<link rel="stylesheet" href="{{ asset('assets/css/multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-multiselect.css') }}">
<script type="text/javascript">
    var base_url = "{{ URL::to('/') }}";
</script>
</head>
<body id="school" class="appWrapper admin-dashboard page-@yield('page_name')">

<div id="wrap" class="animsition">

<section id="header">

<header class="clearfix">

<div class="branding">

<a class="brand" href="#">

<!-- <span><strong>School</strong>ERP</span> -->
<img src="{{ asset('assets/images/logo2.jpg') }}" alt="logo" class="logo_image" />
</a>

<a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>

</div>

<ul class="nav-left pull-left list-unstyled list-inline">

<li class="sidebar-collapse divided-right">

<a role="button" tabindex="0" class="collapse-sidebar">

<i class="fa fa-outdent"></i>

</a>

</li>


<li class="dropdown divided-right settings">
    <a role="button" tabindex="0" class="s-expand">
        <i class="fas fa5-expand"></i>
    </a>
</li>

</ul>

<div class="search" id="main-search">

<input type="text" class="form-control underline-input" placeholder="Search...">

</div>

<ul class="nav-right pull-right list-inline">

<li class="dropdown notifications">

<a href class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bell"></i>
<span class="badge bg-lightred">3</span>
</a>
<div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInLeft">
<div class="panel-heading">
You have <strong>3</strong> notifications
</div>
<ul class="list-group">
<li class="list-group-item">
<a role="button" tabindex="0" class="media">
<div class="media-body">
    <span class="block">Application</span>
    <small class="text-muted">6 minutes ago</small>
</div>
</a>
</li>
<li class="list-group-item">
<a role="button" tabindex="0" class="media">
<div class="media-body">
    <span class="block">Urgent Meetings</span>
    <small class="text-muted">12 minutes ago</small>
</div>

</a>

</li>

<li class="list-group-item">

<a role="button" tabindex="0" class="media">



<div class="media-body">

    <span class="block">Urgent Meetings</span>

    <small class="text-muted">12 minutes ago</small>

</div>

</a>

</li>







</ul>



<div class="panel-footer">

<a role="button" tabindex="0">Show all notifications <i class="fa fa-angle-right pull-right"></i></a>

</div>



</div>



</li>

<li class="dropdown language">

<a href class="dropdown-toggle" data-toggle="dropdown">

English <span class="flag-icon flag-icon-us"></span> <i class="fa fa-angle-down"></i>

</a>

<ul class="dropdown-menu animated littleFadeInRight" role="menu">

<li><a role="button" tabindex="0">

English <span class="flag-icon flag-icon-us"></span>

</a></li>

<li><a role="button" tabindex="0">

Espa??ol <span class="flag-icon flag-icon-mx"></span>

</a></li>

</ul>



</li>



<li class="dropdown ak_dropdown  nav-profile">



<a href class="dropdown-toggle" data-toggle="dropdown">

<img src="{{ asset('assets/images/ici-avatar.jpg') }}" alt="" class="img-circle size-30x30">

<span>{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>

</a>


<div class="dropdown-menu animated littleFadeInRight" role="menu">
    <ul class="dropdown-user list-unstyled">
    <li class="user-p-box">
    <div class="dw-user-box">
    <div class="u-img">
    <img src="{{ asset('assets/images/ici-avatar.jpg') }}" alt="user">
    </div>
    <div class="u-text">
   
    <p class="text-muted">Loged in as : Admin</p>
    <h4>User Name</h4>
    <!--<a href="#" class="btn whitebtn btn-xs"><i class="fas fa-sign-out-alt"></i> Logout</a> -->
    </div>
    </div>
    </li>
    <li role="separator" class="divider"></li>
    <li><a href="#"><i class="fas fa5-user-shield"></i> Profile</a></li>
    <li><a href="#"><i class="fa fa-check"></i> Tasks <span class="label bg-lightred pull-right">new</span></a></li>
    <li><a href="#"><i class="far fa5-envelope"></i> Mailbox</a></li>
    <li><a href="#"><i class="fas fa5-cogs"></i> Settings</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="{{ route('admin-logout') }}"><i class="fas fa5-sign-out-alt"></i> Logout</a></li>
    </ul>
    </div>
<!--
<ul class="dropdown-menu animated littleFadeInRight" role="menu">

<li>
<a role="button" tabindex="0">
<span class="badge bg-greensea pull-right">86%</span>
<i class="fa fa-user"></i>Profile
</a>
</li>
<li>
<a role="button" tabindex="0">
<span class="label bg-lightred pull-right">new</span>
<i class="fa fa-check"></i>Tasks
</a>
</li>
<li>
<a role="button" tabindex="0">
<i class="fa fa-cog"></i>Settings
</a>
</li>
<li class="divider"></li>
<li>
<a role="button" tabindex="0">
<i class="fa fa-lock"></i>Lock
</a>
</li>
<li>
<a role="button" tabindex="0">
<i class="fa fa-sign-out"></i>Logout
</a>
</li>

</ul> -->


</li>



<li class="toggle-right-sidebar">

<a role="button" tabindex="0">

<i class="fa fa-comments"></i>

</a>

</li>

</ul>

<!-- Right-side navigation end -->







</header>



</section>

<!--/ HEADER Content  -->

<!-- =================================================

================= CONTROLS Content ===================

================================================== -->

<div id="controls">



<!-- ================================================

================= SIDEBAR Content ===================

================================================= -->

<aside id="sidebar">

<div id="sidebar-wrap">

<div class="panel-group slim-scroll" role="tablist">

<div class="panel panel-default">
    <!--
<div class="panel-heading" role="tab">

<h4 class="panel-title">

<a data-toggle="collapse" href="#sidebarNav">

Navigation <i class="fa fa-angle-up"></i>

</a>

</h4>

</div>-->

<div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">

<div class="panel-body">

<!-- ===================================================

================= NAVIGATION Content ===================

==================================================== -->

<ul id="navigation">
    
    <li class="@if(isset($dash)) {{ $dash }} @endif "><a href="{{ route('admin-dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    
    @if(\App\Helpers\EmpAccess::instance()->moduleAccess('2',Auth::user()->id))
    <li>

        <a role="button" tabindex="0" class="@if(isset($reg)) {{ $reg }} @endif "><i class="fa fa-user-plus"></i> <span>Registrations </span></a>

        <ul>
            

        <li class="@if(isset($add_new_core)) {{ $add_new_core }} @endif "><a href="{{route('student.createNew') }}"><i class="fa fa-caret-right"></i>New registration</a></li>

        <li class="@if(isset($reg)) {{ $reg}} @endif "><a href="{{ route('registration.index') }}"><i class="fa fa-caret-right"></i>Registration Details</a></li>

        
        <li class="@if(isset($test_new_reg)) {{ $test_new_reg }} @endif "><a href="{{ url('admin/registration/add-test-marks') }}"><i class="fa fa-caret-right"></i> Add Test Marks</a></li>

        
        <li class="@if(isset($selected_student)) {{ $selected_student }} @endif "><a href="{{ url('admin/registration/selected_student') }}"><i class="fa fa-caret-right"></i> Selected Students</a></li>

        <li class="@if(isset($config_active)) {{ $config_active }} @endif "><a href="{{ route('admin-configurations') }}"><i class="fa fa-caret-right"></i> <span>Marks Setup</span></a></li>

        
        </ul>

    </li>
    @endif
    
    @if(\App\Helpers\EmpAccess::instance()->moduleAccess('3',Auth::user()->id))
    <li>

        <a role="button" tabindex="0" class="@if(isset($add)) {{ $add }} @endif "><i class="fa fa-user-plus"></i> <span>Admission </span></a>

        <ul>
            
        <li class="@if(isset($class)) {{ $class }} @endif "><a href="{{ route('classes.index') }}"><i class="fa fa-caret-right"></i> <span>Classes</span></a></li>
        
        <li class="@if(isset($totalsit)) {{ $totalsit }} @endif "><a href="{{route('totalsit.index') }}"><i class="fa fa-caret-right"></i>Admission Setup</a></li>     

        <li class="@if(isset($mothertongue)) {{ $mothertongue }} @endif "><a href="{{route('mothertongue.index') }}"><i class="fa fa-caret-right"></i>Mother Tongue</a></li>    
        
        <li class="@if(isset($education)) {{ $education }} @endif "><a href="{{route('education.index') }}"><i class="fa fa-caret-right"></i>Educations</a></li>    

        <li class="@if(isset($import)) {{ $import }} @endif "><a href="{{ route('student.import-students') }}"><i class="fa fa-caret-right"></i>Import Multiple</a></li>

        </ul>

    </li>
    @endif
    
    @if(\App\Helpers\EmpAccess::instance()->moduleAccess('4',Auth::user()->id))
    <li>

        <a role="button" tabindex="0"><i class="fa fa-graduation-cap @if(isset($student_det)) {{ $student_det }} @endif"></i> <span>Student Details </span></a>

        <ul>

        <li class="@if(isset($list)) {{ $list }} @endif "><a href="{{ route('student.student-list') }}"><i class="fa fa-caret-right"></i>Student List</a></li>

        <li class="@if(isset($deactive_list)) {{ $deactive_list }} @endif "><a href="{{ route('student.deactive-list') }}"><i class="fa fa-caret-right"></i>Deactive Student List</a></li>
        
        <li class="@if(isset($parent_list)) {{ $parent_list }} @endif "><a href="{{ route('admin.parent_list') }}"><i class="fa fa-caret-right"></i>Parents List</a></li>

        <li class="@if(isset($parent_deactive)) {{ $parent_deactive }} @endif "><a href="{{ url('admin/parent/deactive_list') }}"><i class="fa fa-caret-right"></i>Parents Deactivate List</a></li>

        <li class="@if(isset($student_profiler)) {{ $student_profiler }} @endif "><a href="{{ route('student.student-profiler') }}"><i class="fa fa-caret-right"></i>Student Profile</a></li>

        <li class="@if(isset($student_feedback)) {{ $student_feedback }} @endif "><a href="{{ route('student.student-feedback') }}"><i class="fa fa-caret-right"></i>Student Feedback</a></li>

        </ul>

    </li>
    
    @endif
    
    @if (Auth::user()->role_name == 'Teaching')    
    <li>
        <a href="{{ route('teacher.view-timetable') }}" tabindex="0"><i class="fa fa-id-card-o @if(isset($staff)) {{ $staff}} @endif"></i> <span>Timetable </span></a>
    </li>

    
    @endif

    @if(\App\Helpers\EmpAccess::instance()->moduleAccess('5',Auth::user()->id))
    <li>

        <a role="button" tabindex="0"><i class="fa fa-id-card-o @if(isset($staff)) {{ $staff}} @endif"></i> <span>Staff Management </span></a>

    <ul>

        <li class="@if(isset($dept)) {{ $dept }} @endif"><a href="{{route('department.index')}}"><i class="fa fa-caret-right"></i>Add Department</a></li>

        <li class="@if(isset($desig)) {{ $desig }} @endif"><a href="{{ route('designation.index') }}"><i class="fa fa-caret-right"></i>Add Designation</a></li>

        <li class='@if(isset($emp)) {{ $emp }} @endif'><a href="{{ route('staff.create') }} "><i class="fa fa-caret-right"></i>Add Staff</a></li>

        <li class='@if(isset($emp_list)) {{ $emp_list }} @endif'><a href="{{ route('staff.index') }} "><i class="fa fa-caret-right"></i>Staff List</a></li>

        <li class='@if(isset($set_time_table)) {{ $set_time_table }} @endif'><a href="{{ route('staff.set-timetable') }} "><i class="fa fa-caret-right"></i>Set TimeTable</a></li>

        <li class='@if(isset($view_time_table)) {{ $view_time_table }} @endif'><a href="{{ route('staff.view-timetable') }} "><i class="fa fa-caret-right"></i>View TimeTable</a></li>

        <li class="@if(isset($staff_deactive)) {{ $staff_deactive }} @endif "><a href="{{ url('admin/staff/deactive_list') }}"><i class="fa fa-caret-right"></i>Staff Deactivate List</a></li>

    </ul>

    </li>
    
    @if(\App\Helpers\EmpAccess::instance()->moduleAccess('6',Auth::user()->id))
    <li>

        <a role="button" tabindex="0"><i class="fa fa-calendar @if(isset($leave_mgmt)) {{ $leave_mgmt}} @endif"></i> <span>Exam Management </span></a>

    <ul>

        <li class='@if(isset($leave_request)) {{ $leave_request }} @endif'><a href="#"><i class="fa fa-caret-right"></i>Create Exam</a></li>

        <li class="@if(isset($leave_list)) {{ $leave_list }} @endif "><a href="#"><i class="fa fa-caret-right"></i>Start Exam</a></li>

    </ul>

    </li>
   

@endif 










@if(\App\Helpers\EmpAccess::instance()->moduleAccess('6',Auth::user()->id))
    <li>

        <a role="button" tabindex="0"><i class="fa fa-calendar @if(isset($leave_mgmt)) {{ $leave_mgmt}} @endif"></i> <span>Quiz Management </span></a>

    <ul>
        <!-- //SS0904 1 -->
        <li class="@if(isset($desig)) {{ $desig }} @endif"><a href="{{ route('quiz.create') }}"><i class="fa fa-caret-right"></i>Create Quiz</a></li> 

        <li class='@if(isset($emp_list)) {{ $desig }} @endif'><a href="{{ route('quiz.list') }} "><i class="fa fa-caret-right"></i>Quiz List</a></li>

        <li class="@if(isset($desig)) {{ $desig }} @endif"><a href="{{ route('quiz.index') }}"><i class="fa fa-caret-right"></i>View Quiz</a></li> 

        <li class="@if(isset($leave_list)) {{ $leave_list }} @endif "><a href="#"><i class="fa fa-caret-right"></i>-</a></li>

    </ul>

    </li>
   

@endif 



<li>

    <a role="button" tabindex="0"><i class="fa fa-inr"></i> <span>Fee Managment </span></a>

    <ul>

    <li>

        <a role="button" tabindex="0"><i class="fa fa-gear fa-spin"></i> <span>Setup & Assing </span></a>

        <ul>

            <li><a href="{{ route('admin.fee_group') }}"><i class="fa fa-caret-right"></i>Create Group & Head</a></li>
            <li><a href="{{ route('admin.fee_allocation') }}"><i class="fa fa-caret-right"></i>Fee Allocation</a></li>
                <li><a href="{{ route('admin.feeheads_setup') }}"><i class="fa fa-caret-right"></i>Manage Fee Heads</a></li>
                <li><a href="{{ route('admin.feeconcession_setup') }}"><i class="fa fa-caret-right"></i>Create Concession</a></li>
                <li><a href="{{ route('admin.feefine_setup') }}"><i class="fa fa-caret-right"></i>Fine Setup</a></li>
    </ul> 
    </li>
    <li>
            <a role="button" tabindex="0"><i class="fa fa fa-usd"></i> <span>Payment & Refund </span></a>
            <ul> <li><a href="{{ route('admin.fee_invoice') }}"><i class="fa fa-caret-right"></i>Invoice Generate</a></li> 
            <li><a href="{{ route('admin.fee_paymenthistory') }}"><i class="fa fa-caret-right"></i>Take Payment</a></li>
            <li><a href="{{ route('admin.feerefund') }}"><i class="fa fa-caret-right"></i>Fee Refund</a></li>
            
            
            
            </ul>
    </li>
    <li>
        <a role="button" tabindex="0"><i class="fa fa-bar-chart"></i> <span>Fee Reports </span></a>
            <ul>
            <li><a href="{{ route('admin.feedue_summary') }}"><i class="fa fa-caret-right"></i>Due Fee Summary</a></li> 
                <li><a href="{{ route('admin.feedue_report') }}"><i class="fa fa-caret-right"></i>Due Fee Report</a></li>
                <li><a href="{{ route('admin.fee_dailycollect') }}"><i class="fa fa-caret-right"></i>Daily Collection Report</a></li>
                    <li><a href="{{ route('admin.feecheque_summary') }}"><i class="fa fa-caret-right"></i>Cheque Statment</a></li>
                        <li><a href="{{ route('admin.feedue_list') }}"><i class="fa fa-caret-right"></i>Montly Due List</a></li>
            </ul>
    </li>
    </ul> 
<!-- Fee Managment END -->





@endif    
</ul>
</li>

</ul>

</div>
</div>
</div>

</div>

</aside>

<!--/ SIDEBAR Content -->











<!-- =================================================

================= RIGHTBAR Content ===================

================================================== -->

<aside id="rightbar">



<div role="tabpanel">



<!-- Nav tabs -->

<ul class="nav nav-tabs" role="tablist">

<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a></li>

<li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>

<li role="presentation"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab"><i class="fa fa-heart"></i></a></li>

<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i></a></li>

</ul>



<!-- Tab panes -->

<div class="tab-content">

<div role="tabpanel" class="tab-pane active" id="users">

<h6><strong>Board</strong> Members</h6>



<ul>



<li class="online">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="schoolmgt/assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li>

<li class="online">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li><li class="online">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li><li class="online">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li><li class="online">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li>





</ul>



<h6><strong>Others</strong> Users</h6>



<ul>



<li class="offline">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li>

<li class="offline">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li><li class="offline">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li><li class="offline">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li>



</ul>

</div>



<div role="tabpanel" class="tab-pane" id="history">

<h6><strong>Chat</strong> History</h6>



<ul>



<li class="offline">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li>



</ul>

</div>



<div role="tabpanel" class="tab-pane" id="friends">

<h6><strong>Friends</strong> List</h6>

<ul>



<li class="offline">

<div class="media">

<a class="pull-left thumb thumb-sm" role="button" tabindex="0">

    <img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>

</a>

<div class="media-body">

    <span class="media-heading">Chairman<strong>Ashutosh</strong></span>

    <small><i class="fa fa-map-marker"></i> Ambala Cantt</small>

    <span class="badge badge-outline status"></span>

</div>

</div>

</li>

</ul>

</div>



<div role="tabpanel" class="tab-pane" id="settings">

<h6><strong>Chat</strong> Settings</h6>



<ul class="settings">



<li>

<div class="form-group">

<label class="col-xs-8 control-label">Show Offline Users</label>

<div class="col-xs-4 control-label">

    <div class="onoffswitch greensea">

        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-offline" checked="">

        <label class="onoffswitch-label" for="show-offline">

            <span class="onoffswitch-inner"></span>

            <span class="onoffswitch-switch"></span>

        </label>

    </div>

</div>

</div>

</li>



<li>

<div class="form-group">

<label class="col-xs-8 control-label">Show Fullname</label>

<div class="col-xs-4 control-label">

    <div class="onoffswitch greensea">

        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-fullname">

        <label class="onoffswitch-label" for="show-fullname">

            <span class="onoffswitch-inner"></span>

            <span class="onoffswitch-switch"></span>

        </label>

    </div>

</div>

</div>

</li>



<li>

<div class="form-group">

<label class="col-xs-8 control-label">History Enable</label>

<div class="col-xs-4 control-label">

    <div class="onoffswitch greensea">

        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-history" checked="">

        <label class="onoffswitch-label" for="show-history">

            <span class="onoffswitch-inner"></span>

            <span class="onoffswitch-switch"></span>

        </label>

    </div>

</div>

</div>

</li>



<li>

<div class="form-group">

<label class="col-xs-8 control-label">Show Locations</label>

<div class="col-xs-4 control-label">

    <div class="onoffswitch greensea">

        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-location" checked="">

        <label class="onoffswitch-label" for="show-location">

            <span class="onoffswitch-inner"></span>

            <span class="onoffswitch-switch"></span>

        </label>

    </div>

</div>

</div>

</li>



<li>

<div class="form-group">

<label class="col-xs-8 control-label">Notifications</label>

<div class="col-xs-4 control-label">

    <div class="onoffswitch greensea">

        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-notifications">

        <label class="onoffswitch-label" for="show-notifications">

            <span class="onoffswitch-inner"></span>

            <span class="onoffswitch-switch"></span>

        </label>

    </div>

</div>

</div>

</li>



<li>

<div class="form-group">

<label class="col-xs-8 control-label">Show Undread Count</label>

<div class="col-xs-4 control-label">

    <div class="onoffswitch greensea">

        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-unread" checked="">

        <label class="onoffswitch-label" for="show-unread">

            <span class="onoffswitch-inner"></span>

            <span class="onoffswitch-switch"></span>

        </label>

    </div>

</div>

</div>

</li>



</ul>

</div>

</div>



</div>



</aside>

<!--/ RIGHTBAR Content -->









</div>

<!--/ CONTROLS Content -->



@yield('content')





</section>

<!--/ CONTENT -->



</div>

<!--/ Application Content -->




<div id="myViewContentModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Quick View</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





<!-- ============================================

============== Vendor JavaScripts ===============

============================================= -->
<script src="{{ asset('assets/js/jquery3.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>-->

<script src="{{ asset('assets/js/vendor/bootstrap/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/vendor/jRespond/jRespond.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/d3/d3.layout.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/animsition/js/jquery.animsition.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/vendor/screenfull/screenfull.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/flot-spline/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/easypiechart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/chosen/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/summernote/summernote.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/coolclock/coolclock.js') }}"></script>
<script src="{{ asset('assets/js/vendor/coolclock/excanvas.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script> 
<script src="{{ asset('assets/js/main.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/dataTables.autoFill.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/dataTables.select.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/jszip.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/pdfmake.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/vfs_fonts.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/buttons.colVis.min.js') }}"></script>
 <script src="{{ asset('assets/js/vendor/datatable_net/buttons.print.min.js') }}"></script>
 <!-- cutom js for data table  -->
 <script src="{{ asset('assets/js/vendor/datatable_net/dataTables.options.js') }}"></script> 
<script src="{{ asset('assets/js/sweet.min.js') }}"></script> 
 <!-- datatable-script ends-->

<script src="{{ asset('assets/js/fullscreen.js') }}"></script>
<script src="{{ asset('assets/js/multiselect.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/js/custom-script.js') }}?ver=1.0.9"></script>
<script>
$(window).load(function(){
// Initialize Statistics chart
var data = [{
data: [[1,15],[2,40],[3,35],[4,39],[5,42],[6,50],[7,46],[8,49],[9,59],[10,60],[11,58],[12,74]],
label: 'Unique Visits',
points: {
show: true,
radius: 4
},
splines: {
show: true,
tension: 0.45,
lineWidth: 4,
fill: 0
}
}, {
data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
label: 'Page Views',
bars: {
show: true,
barWidth: 0.6,
lineWidth: 0,
fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
}
}];

var options = {
colors: ['#e05d6f','#61c8b8'],
series: {
shadowSize: 0
},
legend: {
backgroundOpacity: 0,
margin: -7,
position: 'ne',
noColumns: 2
},
xaxis: {
tickLength: 0,
font: {
color: '#fff'
},
position: 'bottom',
ticks: [
[ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
]
},
yaxis: {
tickLength: 0,
font: {
color: '#fff'
}
},
grid: {
borderWidth: {
top: 0,
right: 0,
bottom: 1,
left: 1
},
borderColor: 'rgba(255,255,255,.3)',
margin:0,
minBorderMargin:0,
labelMargin:20,
hoverable: true,
clickable: true,
mouseActiveRadius:6
},
tooltip: true,
tooltipOpts: {
content: '%s: %y',
defaultTheme: false,
shifts: {
x: 0,
y: 20
}
}
};

var plot = $.plot($("#statistics-chart"), data, options);

$(window).resize(function() {
// redraw the graph in the correctly sized div
plot.resize();
plot.setupGrid();
plot.draw();
});
// * Initialize Statistics chart

//Initialize morris chart
Morris.Donut({
element: 'browser-usage',
data: [
{label: 'Income', value: 25000, color: '#00a3d8'},
{label: 'Expenditure', value: 20000, color: '#2fbbe8'},
{label: 'Admission', value: 15000, color: '#72cae7'},
{label: 'Result', value: 5000, color: '#d9544f'},
{label: 'Transfer Certificates', value: 10000, color: '#ffc100'},
{label: 'Other', value: 25000, color: '#1693A5'}
],
resize: true
});
//*Initialize morris chart


// Initialize owl carousels
$('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
autoPlay: 5000,
stopOnHover: true,
slideSpeed : 300,
paginationSpeed : 400,
singleItem : true,
responsive: true
});

$('#appointments-carousel').owlCarousel({
autoPlay: 5000,
stopOnHover: true,
slideSpeed : 300,
paginationSpeed : 400,
navigation: true,
navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
singleItem : true
});
//* Initialize owl carousels


// Initialize rickshaw chart
var graph;

var seriesData = [ [], []];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 50; i++) {
random.addData(seriesData);
}

graph = new Rickshaw.Graph( {
element: document.querySelector("#realtime-rickshaw"),
renderer: 'area',
height: 133,
series: [{
name: 'Series 1',
color: 'steelblue',
data: seriesData[0]
}, {
name: 'Series 2',
color: 'lightblue',
data: seriesData[1]
}]
});

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
graph: graph,
});

graph.render();

setInterval( function() {
random.removeData(seriesData);
random.addData(seriesData);
graph.update();

},1000);
//* Initialize rickshaw chart

//Initialize mini calendar datepicker
$('#mini-calendar').datetimepicker({
inline: true
});
//*Initialize mini calendar datepicker


//Initialize multiselect dropdown list
$(function() {
  $('#multiSelect').multiselect({
    includeSelectAllOption: true
  });
});


//todo's
$('.widget-todo .todo-list li .checkbox').on('change', function() {
var todo = $(this).parents('li');

if (todo.hasClass('completed')) {
todo.removeClass('completed');
} else {
todo.addClass('completed');
}
});
//* todo's


//initialize datatable
$('#project-progress').DataTable({
"aoColumnDefs": [
{ 'bSortable': false, 'aTargets': [ "no-sort" ] }
],
});

//*initialize datatable

//load wysiwyg editor
$('#summernote').summernote({
toolbar: [
//['style', ['style']], // no style button
['style', ['bold', 'italic', 'underline', 'clear']],
['fontsize', ['fontsize']],
['color', ['color']],
['para', ['ul', 'ol', 'paragraph']],
['height', ['height']],
//['insert', ['picture', 'link']], // no insert buttons
//['table', ['table']], // no table button
//['help', ['help']] //no help button
],
height: 143   //set editable area's height
});
//*load wysiwyg editor
});
 // page full screen

</script>
<!--/ Page Sp{{ asset('cific ') }}Scripts -->

<!-- Datatabl{{ asset(' ') }}scripts -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<!-- Multiselect dropdown plugin  end-->

@yield('footer_scripts')

</body>

</html>

