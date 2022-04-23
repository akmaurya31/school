<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>School ERP - Student Admission</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/vendor/animate.css">
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
<link rel="stylesheet" href="assets/js/vendor/morris/morris.css">
<link rel="stylesheet" href="assets/js/vendor/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/js/vendor/owl-carousel/owl.theme.css">
<link rel="stylesheet" href="assets/js/vendor/rickshaw/rickshaw.min.css">
<link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
<!-- datatable css -->
<link rel="stylesheet" href="assets/js/vendor/datatable_net/jquery.dataTables.min.css">
<link rel="stylesheet" href="assets/js/vendor/datatable_net/autoFill.dataTables.min.css" />
<link rel="stylesheet" href="assets/js/vendor/datatable_net/select.dataTables.min.css">
<link rel="stylesheet" href="assets/js/vendor/datatable_net/buttons.dataTables.min.css" />
<!-- datatable css  end-->
<link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">
<link rel="stylesheet" href="assets/js/vendor/summernote/summernote.css"> 
<link href="assets/css/select2.css" rel="stylesheet" />   
<link rel="stylesheet" href="assets/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/akstyle.css">
<link rel="stylesheet" href="assets/css/responsive.css">

<script src="assets/js/sweet.min.js"></script>
<script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<style>
  #partitioned {
  padding-left: 15px;  
  letter-spacing: 42px;
  border: 0;
  background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
  background-position: bottom;
  background-size: 50px 1px;
  background-repeat: repeat-x;
  background-position-x: 35px;
  width: 30rem;
  min-width: 30rem;
  position: relative;
  left: 8rem;
}

#divInner{
  left: 0;
  position: sticky;
}

#divOuter{
  width: 190px;
}
</style>
</head>
<body id="school" class="appWrapper">
<div id="wrap" class="animsition">
<section id="header">
<header class="clearfix">
<div class="branding">
<a class="brand" href="index.html">
<!-- <span><strong>School</strong>ERP</span> -->
<img src="assets/images/logo2.jpg" alt="logo" class="logo_image" />
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
<a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-cog"></i>
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
Español <span class="flag-icon flag-icon-mx"></span>
</a></li>
</ul>
</li>
<li class="dropdown nav-profile">
<a href class="dropdown-toggle" data-toggle="dropdown">
<img src="assets/images/ici-avatar.jpg" alt="" class="img-circle size-30x30">
<span>User Name<i class="fa fa-angle-down"></i></span>
</a>
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
</ul>
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
<div class="panel-heading" role="tab">
<h4 class="panel-title">
<a data-toggle="collapse" href="#sidebarNav">
Navigation <i class="fa fa-angle-up"></i>
</a>
</h4>
</div>
<div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
<div class="panel-body">
<!-- ===================================================
================= NAVIGATION Content ===================
==================================================== -->
<ul id="navigation">
<li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
<li>
<a role="button" tabindex="0"><i class="fa fa-user-plus"></i> <span>Admission </span></a>
<ul>
<li><a href="new_admission.html"><i class="fa fa-caret-right"></i>New Admission</a></li>
<li><a href="mutiple_import.html"><i class="fa fa-caret-right"></i>Import Multiple</a></li>
<li><a href="student_add_category.html"><i class="fa fa-caret-right"></i>Category</a></li>
<li><a href="admission_setup.html"><i class="fa fa-caret-right"></i>Admission Setup</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-graduation-cap"></i> <span>Student Details </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Student List</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Account Activate</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-male"></i> <span>Parents </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Parents</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>List Parents</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Account Activate</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-address-card"></i> <span>Reception Management</span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Admission Enquiry</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Visitor Record</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Phone Log Record</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Postal Record</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Complain / Feedback</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-id-card-o"></i> <span>Staff Management </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Department</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Designation</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Staff</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-address-book-o"></i> <span>Generate ID’s </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Id Template</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Admit Card Template</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Staff id Template</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Generate Id</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-award"></i> <span>Generate Certificate </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Template</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Staff</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Student</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-marker"></i> <span>HR Management </span></a>
<ul>
<li>
<a role="button" tabindex="0"><i class="far fa5-money-bill-alt"></i> <span>Payroll </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Salary Template</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Salary Allotment</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Salary Payment</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-calendar-times-o"></i> <span>Leave </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>My Application</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Leave Category</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Application Mange</a></li>
</ul>
</li>
<li><a href="admission.html"><i class="fas fa5-comment-dollar"></i>Appreciation</a></li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-hand-holding-usd"></i> <span>Advance Payment </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Payment Application</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Application Manage</a></li>
</ul>
</li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-book"></i> <span>Class & Academic </span></a>
<ul>
<li><a href="admission.html"><i class="fas fa5-calendar-check"></i>Class Scheduler</a></li>
<li>
<a role="button" tabindex="0"><i class="fa fa-book"></i> <span>Class Management </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Manage Class</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Teacher Assign</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-book"></i> <span>Class Subject </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Subject</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Assign Class</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Assign Teacher</a></li>
</ul>
</li>
<li><a href="admission.html"><i class="fas fa5-user-graduate"></i>Student Promotion</a></li>
</ul>
</li>
<li><a href="admission.html"><i class="fa fa-television"></i>Class Online</a></li>
<li>
<a role="button" tabindex="0"><i class="fa fa-cloud-upload"></i> <span>Books Upload </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Define Attachment</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Content Upload</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-laptop-code"></i> <span>Homework E-Content </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Upload Audio Video</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Evaluation Report</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-book-reader"></i> <span>Exam Management </span></a>
<ul>
<li>
<a role="button" tabindex="0"><i class="fa fa-file-text"></i> <span>Exam </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Manage Exam</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Term Exam</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Examination Hall</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Student Distribution</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-clock-o"></i> <span>Exam Scheduler </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Exam Scheduler</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Schedule Exam</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-pencil"></i> <span>Marks Setup </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Marks Entries</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Grade Setup</a></li>
</ul>
</li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-chalkboard-teacher"></i> <span>Smart Attendance</span></a>
<ul>
<li>
<a role="button" tabindex="0"><i class="fas fa-graduation-cap"></i> <span>Student </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Class Attendance</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Exam Attendance</a></li>
</ul>
</li>
<li><a href="admission.html"><i class="fa fa-user-circle-o"></i>Employee</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-pencil-square-o"></i> <span>Hostel and Transport </span></a>
<ul>
<li>
<a role="button" tabindex="0"><i class="fas fa5-school"></i> <span>Hostel </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Category</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Hostel Master</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Rooms Setup</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Reports</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-shuttle-van"></i> <span>Transport </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Vehicle</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Route</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Create Stoppage</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Vehicle Allotment</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Allotment Reports</a></li>
</ul>
</li>
</ul>
</li>

<li>
<a role="button" tabindex="0"><i class="fa fa-calendar"></i> <span>School Events </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Event Type</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Events Create & List</a></li>
</ul>
</li>


<li>
<a role="button" tabindex="0"><i class="fa fa-envelope-o"></i> <span>EXAMS </span></a>
<ul>
<li><a href="exam1.html"><i class="fa fa-caret-right"></i>Exam and Question status</a></li>
<li><a href="exam2.html"><i class="fa fa-caret-right"></i>exam creation</a></li>
<li><a href="exam3.html"><i class="fa fa-caret-right"></i>Exam</a></li>

</ul>
</li>

<li>
<a role="button" tabindex="0"><i class="fa fa-envelope-o"></i> <span>SMS & MAIL </span></a>
<ul>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Add SMS Template</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Add E-mail Template</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Bulk SMS & E-mail</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>SMS E-mail Counter</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Message</a></li>
</ul>
</li>

<li>
<a role="button" tabindex="0"><i class="fa fa-envelope-o"></i> <span>EXAMS </span></a>
<ul>
<li><a href="exam1.html"><i class="fa fa-caret-right"></i>Exam and Question status</a></li>
<li><a href="exam2.html"><i class="fa fa-caret-right"></i>exam creation</a></li>
<li><a href="exam3.html"><i class="fa fa-caret-right"></i>Exam</a></li>

</ul>
</li>



<li>
<a role="button" tabindex="0"><i class="fa fa-envelope-o"></i> <span>SMS & MAIL </span></a>
<ul>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Add SMS Template</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Add E-mail Template</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Bulk SMS & E-mail</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>SMS E-mail Counter</a></li>
<li><a href="school.html"><i class="fa fa-caret-right"></i>Message</a></li>
</ul>
</li>



<li>
    <a role="button" tabindex="0"><i class="fa fa-envelope-o"></i> <span>Mail</span> <span class="badge bg-lightred">6</span></a>
      <ul>
         <li><a href="mail-inbox.html"><i class="fa fa-caret-right"></i> Inbox</a></li>
         <li><a href="mail-compose.html"><i class="fa fa-caret-right"></i> Compose Mail</a></li>
         <li><a href="mail-single.html"><i class="fa fa-caret-right"></i> Single Mail</a></li>
      </ul>
</li>




<li>
<a role="button" tabindex="0"><i class="fa fa fa-usd"></i> <span>Fee Management </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Fee Type</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Fee Group</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Fine setting</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Fee Allotment</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Fee invoice</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Generate Due Fee</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Reminder</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-users"></i> <span>Account Management </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Account</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add Voucher Head</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add new deposit</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Add new Expenditure</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Transaction List</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Generate Report </span></a>
<ul>
<li>
<a role="button" tabindex="0"><i class="icon-book-open"></i> <span>Examination Report </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Report Card</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Tabulation Sheet</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Exam Report</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="icon-layers"></i> <span>HR Reports </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Payment Summary</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Leave Summary</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Staff attendance</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Student attendance</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Payment Summary</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Leave Summary</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-hand-holding-usd"></i> <span>Fee Reports </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Student Fee Report</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Payment Receipt History</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>FeeFine report</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fas fa5-clipboard-list"></i> <span>Accounts Report </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>A/c Statements</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Income & Expenditure</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Income</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Expenditure</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>A/C Balance Sheet</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Filter Transitions</a></li>
</ul>
</li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="far fa5-thumbs-up"></i> <span>Grievances / Feedback</span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Grievances List</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Feedback List</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-globe"></i> <span>Web Management </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Web page Setting</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Menu Item</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Web Page Section</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Manage Web page</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Sliding Pictures</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>School Features</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Our Testimonials</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>School Services</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>FAQ</a></li>
</ul>
</li>
<li>
<a role="button" tabindex="0"><i class="fa fa-cog"></i> <span>Setting </span></a>
<ul>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>Language</a></li>
<li><a href="admission.html"><i class="fa fa-caret-right"></i>School</a></li>
</ul>
</li>
</ul>
<!--/ NAVIGATION Content -->
</div>
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
<img class="media-object img-circle" src="assets/images/ici-avatar.jpg" alt>
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
<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<section id="content">
<div class="page page-dashboard">
<div class="pageheader">
<div class="page-bar">
<ul class="page-breadcrumb">
<li>
<a href="index.html"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="#">EXAM & QUESTION STATUS</a>
</li>
</ul>
</div>
</div>
<div class="akform_holder">
<!-- tile header -->



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
          <form role="form" class="box">
            <div class="row">
              

              <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <select class="tile-header bg-white dvd dvd-btm" style="border:solid lightgrey 1px; width:300px;">
                     <option>-------------SELECT SUBJECT-------------</option>
                     <option>Mathematics</option>
                     <option>Physics</option>
                     <option>Chemistry</option>
                     <option>Science</option>
                  </select>
                    
              </div>

             <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <select class="tile-header bg-white dvd dvd-btm" style="border:solid lightgrey 1px; width:300px;">
                     <option>-------------SELECT CLASS-------------</option>
                     <option>8</option>
                     <option>9</option>
                     <option>10</option>
                     <option>11</option>
                  </select>
                    
              </div>
            
            <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <select class="tile-header bg-white dvd dvd-btm" style="border:solid lightgrey 1px; width:300px;">
                     <option>-------------SELECT SECTION-------------</option>
                     <option>A</option>
                     <option>B</option>
                     <option>C</option>
                     <option>D</option>
                  </select>
                    
              </div>
            
            

            </div>
          </form>
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
    <form role="form" class="box">
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
                  <textarea rows="4" cols="100" placeholder="enter Question" required></textarea>
              </div> 
          </div>          

            <br/><br/><br/><br/><br/><br/>


            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <font size="4" color="grey" >A.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="a">&nbsp;&nbsp;&nbsp;<textarea   rows="1" cols="94" placeholder="enter option" ></textarea> <br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <font size="4" color="grey" >B.</font>&nbsp;&nbsp; <input type="radio" name="a">&nbsp;&nbsp;&nbsp;<textarea rows="1" cols="94" placeholder="enter option" ></textarea> <br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <font size="4" color="grey"  >C.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="a">&nbsp;&nbsp;&nbsp;<textarea rows="1" cols="94" placeholder="enter option" ></textarea> <br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <font size="4" color="grey"  >D.</font>&nbsp;&nbsp; <input type="radio" name="a">&nbsp;&nbsp;&nbsp;<textarea rows="1" cols="94" placeholder="enter option" ></textarea> <br/>
             </div>

             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <textarea rows="2" cols="100" placeholder="Expalination" ></textarea>
             </div>
            
            

             
        </div>


         <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <center> <button type="submit" class="btn btn-red">SUBMIT</button></center>

        </div>
        

      </div>

     
    </form>
  </div>
</section>  

</div>
</div>
</div>
</div>





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
                  <textarea rows="4" cols="100" placeholder="enter Question" required></textarea>
              </div> 
          </div>      

            <br/><br/><br/><br/><br/><br/>
           <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <font size="4" color="grey" >A.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="a">&nbsp;&nbsp;&nbsp;<font color="black" size="3">TRUE</font><br/>
             </div>

            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <font size="4" color="grey" >B.</font>&nbsp;&nbsp;&nbsp;<input type="radio" name="a">&nbsp;&nbsp;&nbsp;<font color="black" size="3">FALSE</font><br/>
             </div>

             <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <textarea rows="2" cols="100" placeholder="Expalination" ></textarea>
             </div>
        </div>



        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center><button type="submit" class="btn btn-red">SUBMIT</button></center>

        </div>


      </div>
  </form> 
  </div>
</section>
</div>
</div>
</div>
</div>


<!----/tab content 2----->


<!-- /tile -->
</div>

</div>
<!-- /all-student -->
<!-- /bed create -->
<!-- /tile -->
</div>

<p class="cright">&copy; Copyright 2020, All Right Reserved</p>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<!-- otp modal starts -->
<div id="form-template" class="hidden">
  <form>
    <div class="row otp-wrapper">
      <div id="divOuter">
        <div id="divInner">
          <input autocomplete="off" id="partitioned" type="text" maxlength="6" />
        </div>
      </div>
    </div>
  </form>
</div>
<!-- otp ends -->
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
<script>
/* sweet alerts */
/* currently called on button call but should be
  called on post method complete*/
  $(function (){
  $('button[type="submit"]').on('click',()=>{
    swal({
      title: "Data Saved!",
      text: "Entry recorded",
      icon: "success",
      button: "OK",
    });
  });
});

;

/* $(function(){
  $("").DataTable();
}); */

</script>
<script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/vendor/jRespond/jRespond.min.js"></script>
<script src="assets/js/vendor/d3/d3.min.js"></script>
<script src="assets/js/vendor/d3/d3.layout.min.js"></script>
<script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>
<script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
<script src="assets/js/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/js/vendor/daterangepicker/daterangepicker.js"></script>
<script src="assets/js/vendor/screenfull/screenfull.min.js"></script>
<script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
<script src="assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>
<script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>
<script src="assets/js/vendor/raphael/raphael-min.js"></script>
<script src="assets/js/vendor/morris/morris.min.js"></script>
<script src="assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="assets/js/vendor/summernote/summernote.min.js"></script>
<script src="assets/js/vendor/coolclock/coolclock.js"></script>
<script src="assets/js/vendor/coolclock/excanvas.js"></script>
<script src="assets/js/select2.js"></script> 
<script src="assets/js/main.js"></script>
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
</script>
<!--/ Page Specific Scripts -->
<!-- Datatable scripts -->
<script src="assets/js/vendor/datatable_net/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.autoFill.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.select.min.js"></script>
<script src="assets/js/vendor/datatable_net/dataTables.buttons.min.js"></script>
<script src="assets/js/vendor/datatable_net/jszip.min.js"></script>
<script src="assets/js/vendor/datatable_net/pdfmake.min.js"></script>
<script src="assets/js/vendor/datatable_net/vfs_fonts.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.html5.min.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.colVis.min.js"></script>
<script src="assets/js/vendor/datatable_net/buttons.print.min.js"></script>
<!-- cutom js for data table  -->
<script src="assets/js/vendor/datatable_net/dataTables.options.js"></script> 

<!-- datatable-script ends-->

<script src="assets/js/fullscreen.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>