@extends('layouts.admin_header')

@section('title', 'Admin Dashboard')

@section('content')

<section id="content">



<div class="page page-dashboard dashboard-only">



<div class="pageheader">





<div class="page-bar">



<ul class="page-breadcrumb">

<li>

<a href="index.html"><i class="fa fa-home"></i> HOME</a>

</li>

<li>

<a href="index.html">Dashboard</a>

</li>

</ul>



<div class="page-toolbar">

<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">

<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>

</a>

</div>



</div>



</div>



<!-- cards row -->

<div class="row">



<!-- col -->

<div class="card-container col-lg-3 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-greensea">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<span class="top_icons">

    <img src="assets/images/dashicons_top_student_w.png" />

</span>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-8">

<p class="text-elg text-strong mb-0">101</p>

<span>Total Students</span>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

<div class="back bg-greensea">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-cog fa-2x"></i> Boys</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-chain-broken fa-2x"></i> Girls</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-ellipsis-h fa-2x"></i> More</a>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

</div>

</div>

<!-- /col -->



<!-- col -->

<div class="card-container col-lg-3 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-lightred">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<span class="top_icons">

    <img src="assets/images/dashicons_top_teacher_w.png" />

</span>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-8">

<p class="text-elg text-strong mb-0">11</p>

<span>Total Teachers</span>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

<div class="back bg-lightred">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-cog fa-2x"></i> Male</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-chain-broken fa-2x"></i> Female</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-ellipsis-h fa-2x"></i> More</a>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

</div>

</div>

<!-- /col -->



<!-- col -->

<div class="card-container col-lg-3 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-blue">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<span class="top_icons">

    <img src="assets/images/dashicons_top_employees_w.png" />

</span>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-8">

<p class="text-elg text-strong mb-0">21</p>

<span>Total Employees</span>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

<div class="back bg-blue">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-cog fa-2x"></i>Male</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-chain-broken fa-2x"></i>Female</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-ellipsis-h fa-2x"></i> More</a>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

</div>

</div>

<!-- /col -->



<!-- col -->

<div class="card-container col-lg-3 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-slategray bg_akcolor1">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<span class="top_icons">

    <img src="assets/images/dashicons_top_classes_w.png" />

</span>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-8">

<p class="text-elg text-strong mb-0">12</p>

<span>Total Class</span>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

<div class="back bg-slategray bg_akcolor1">



<!-- row -->

<div class="row">

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-cog fa-2x"></i> Settings</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-chain-broken fa-2x"></i> Content</a>

</div>

<!-- /col -->

<!-- col -->

<div class="col-xs-4">

<a href=#><i class="fa fa-ellipsis-h fa-2x"></i> More</a>

</div>

<!-- /col -->

</div>

<!-- /row -->



</div>

</div>

</div>

<!-- /col -->



</div>

<!-- /row top row-->

<!-- row -->

<div class="row">

<!-- col -->

<div class="col-md-6">



<!-- tile -->

<section class="tile" fullscreen="isFullscreen02">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font"><strong>Office </strong>Usage</h1>

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



<!-- tile widget -->

<div class="tile-widget">

<div id="browser-usage" style="height: 250px"></div>

</div>

<!-- /tile widget -->



<!-- tile body -->

<div class="tile-body p-0">

<div class="ofusage_list">

<div class="panel-group " id="accordion" role="tablist" aria-multiselectable="true">

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingOne">



<h4 class="panel-title">

<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

<span><i class="fa fa-plus text-sm mr-5"></i> This Month</span>

<span class="badge pull-right bg-lightred">6</span>

</a>

</h4>

</div>



<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">

<div class="panel-body">

<table class="table table-no-border m-0">

<tbody>

<tr>

<td>1</td>

<td>Income</td>

<td>25000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>2</td>

<td>Expenditure</td>

<td>20,000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>3</td>

<td>Admission</td>

<td>1500</td>

<td><i class="fa fa-caret-down text-danger"></i></td>

</tr>

<tr>

<td>4</td>

<td>Result</td>

<td>5000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>5</td>

<td>Transfer Certificates</td>

<td>10000</td>

<td><i class="fa fa-caret-down text-danger"></i></td>

</tr>

<tr>

<td>6</td>

<td>Others</td>

<td>25000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingTwo">

<h4 class="panel-title">

<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

<span><i class="fa fa-minus text-sm mr-5"></i> Last Month</span>

</a>

</h4>

</div>

<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">

<div class="panel-body">

<table class="table table-no-border m-0">

<tbody>

<tr>

<td>1</td>

<td>Income</td>

<td>25000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>2</td>

<td>Expenditure</td>

<td>20,000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>3</td>

<td>Admission</td>

<td>1500</td>

<td><i class="fa fa-caret-down text-danger"></i></td>

</tr>

<tr>

<td>4</td>

<td>Result</td>

<td>5000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>5</td>

<td>Transfer Certificates</td>

<td>10000</td>

<td><i class="fa fa-caret-down text-danger"></i></td>

</tr>

<tr>

<td>6</td>

<td>Others</td>

<td>25000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingThree">

<h4 class="panel-title">

<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

<span><i class="fa fa-minus text-sm mr-5"></i> This Year</span>

</a>

</h4>

</div>

<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

<div class="panel-body">

<table class="table table-no-border m-0">

<tbody>

<tr>

<td>1</td>

<td>Income</td>

<td>25000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>2</td>

<td>Expenditure</td>

<td>20,000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>3</td>

<td>Admission</td>

<td>1500</td>

<td><i class="fa fa-caret-down text-danger"></i></td>

</tr>

<tr>

<td>4</td>

<td>Result</td>

<td>5000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

<tr>

<td>5</td>

<td>Transfer Certificates</td>

<td>10000</td>

<td><i class="fa fa-caret-down text-danger"></i></td>

</tr>

<tr>

<td>6</td>

<td>Others</td>

<td>25000</td>

<td><i class="fa fa-caret-up text-success"></i></td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>



</div>

<!-- /tile body -->



</section>

<!-- /tile -->



</div>

<!-- /col Office Usage -->



<!-- col -->

<div class="col-md-6">



<!-- tile -->

<section class="tile">



<!-- tile header -->
<div class="tile-header bg-slategray  dvd dvd-btm">
    <h1 class="custom-font"><strong>Fees </strong>Collections</h1>
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




<!-- tile widget -->

<div class="row">

<div class="col-md-12">



<div class="tile-widget bg-slategray ">

<div id="statistics-chart" style="height: 400px;"></div>

</div>

</div>





</div>

<!-- /tile widget -->





</section>

<!-- /tile -->



</div>

<!-- /col Fees collection -->



</div>

<!-- /row fees & office usage -->



<div class="row"> 

    <!-- col -->

<div class="col-md-6">



<!-- tile -->

<section class="tile bg-blue">

<!-- tile header -->
<div class="tile-header bg-blue ">
    <h1 class="custom-font">Daily To Do List</h1>
    <ul class="controls">                                       <li>
        <a role="button" tabindex="0" class="tile-toggle">
        <span class="minimize"><i class="fa fa-minus"></i></span>
        <span class="expand"><i class="fa fa-plus"></i></span>
        </a>
        </li></li>
    </ul>
</div>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


<div class="dtdl_panel_content">

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingTwo1">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;7 Meeting 1400 hrs with staff</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo1">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingThree">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;Parents Meeting 1000 hrs</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>





<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingTwo1">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;7 Meeting 1400 hrs with staff</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo3">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingThree">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;Parents Meeting 1000 hrs</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseThree4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>



<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingTwo1">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;7 Meeting 1400 hrs with staff</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseTwo5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo5">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingThree">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;Parents Meeting 1000 hrs</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseThree6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>



<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingTwo1">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo7" aria-expanded="false">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;7 Meeting 1400 hrs with staff</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseTwo7" class="panel-collapse collapse" role="tabpanel">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>

<div class="panel panel-default panel-transparent">

<div class="panel-heading" role="tab" id="headingThree">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree8" aria-expanded="false" aria-controls="collapseThree">

        <span><i class="fa fa-smile-o" style="font-size:20px"></i><p>&nbsp;&nbsp;Parents Meeting 1000 hrs</p><i class="fa fa-minus righticon text-sm mr-5"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseThree8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Task Name</td>

            <td>6985</td>

            

        </tr>

        <tr>

            <td>2</td>

            <td>Task Name</td>

            <td>2697</td>

            

        </tr>

        <tr>

            <td>3</td>

            <td>Task Name</td>

            <td>3597</td>

            

        </tr>

        

        </tbody>

    </table>

</div>

</div>

</div>

</div>

</div>

<!-- /tile body -->



</section>

<!-- /tile -->



</div>

<!-- / col To Do List-->                         

<!-- col -->

<div class="col-md-6">



<!-- tile -->

<section class="tile">





<!-- tile header -->
<div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font"><strong>Total Strength  </strong>Class wise</h1>
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




<!-- tile widget -->

<div class="tile-widget ak_tscw_list">

    <div class="progress-list">
    
        <div class="details">
    
            <div class="title">Class I</div>
    
            <div class="description">Boys(40) & Girls(30)</div>
    
        </div>
    
        <div class="status pull-right">
    
            <span>80</span>%
    
        </div>
    
        <div class="clearfix"></div>
    
        <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    
            
    
        </div>
    
        </div>
    
    </div>
    
    
    
    <div class="progress-list">
    
        <div class="details">
    
            <div class="title">Class II</div>
    
            <div class="description">Boys(40) & Girls(30)</div>
    
        </div>
    
        <div class="status pull-right">
    
            <span>60</span>%
    
        </div>
    
        <div class="clearfix"></div>
    
        <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    
            <span class="sr-only">60%</span>
    
        </div>
    
        </div>
    
    </div>
    
    
    
    <div class="progress-list">
    
        <div class="details">
    
            <div class="title">Class III</div>
    
            <div class="description">Boys(40) & Girls(30)</div>
    
        </div>
    
        <div class="status pull-right">
    
            <span>40</span>%
    
        </div>
    
        <div class="clearfix"></div>
    
        <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    
            <span class="sr-only">40%</span>
    
        </div>
    
        </div>
    
    </div>
    
    
    
    <div class="progress-list">
    
        <div class="details">
    
            <div class="title">Class IV</div>
    
            <div class="description">Boys(40) & Girls(30)</div>
    
        </div>
    
        <div class="status pull-right">
    
            <span>40</span>%
    
        </div>
    
        <div class="clearfix"></div>
    
        <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    
            <span class="sr-only">60%</span>
    
        </div>
    
        </div>
    
    </div>
    
    
    
    <div class="progress-list">
    
        <div class="details">
    
            <div class="title">Class V</div>
    
            <div class="description">Boys(40) & Girls(30)</div>
    
        </div>
    
        <div class="status pull-right">
    
            <span>40</span>%
    
        </div>
    
        <div class="clearfix"></div>
    
        <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    
            <span class="sr-only">60%</span>
    
        </div>
    
        </div>
    
    </div>
    
    <div class="progress-list">
    
        <div class="details">
    
            <div class="title">Class VI</div>
    
            <div class="description">Boys(40) & Girls(30)</div>
    
        </div>
    
        <div class="status pull-right">
    
            <span>40</span>%
    
        </div>
    
        <div class="clearfix"></div>
    
        <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    
            <span class="sr-only">40%</span>
    
        </div>
    
        </div>
    
    </div>
    
    
    
    <div class="progress-list">
    
    <div class="details">
    
        <div class="title">Class VII</div>
    
        <div class="description">Boys(40) & Girls(30)</div>
    
    </div>
    
    <div class="status pull-right">
    
        <span>40</span>%
    
    </div>
    
    <div class="clearfix"></div>
    
    <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    
        <span class="sr-only">40%</span>
    
        </div>
    
    </div>
    
    </div>
    
    
    
                                            <div class="progress-list">
    
        <div class="details">
    
            <div class="title">Class VIII</div>
    
            <div class="description">Boys(40) & Girls(30)</div>
    
        </div>
    
        <div class="status pull-right">
    
            <span>40</span>%
    
        </div>
    
        <div class="clearfix"></div>
    
        <div class="progress-xs not-rounded progress">
    
        <div class="progress-bar progress-bar-dutch" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    
            <span class="sr-only">40%</span>
    
        </div>
    
        </div>
    
    </div>
    
    </div>

<!-- /tile widget -->







</section>

<!-- /tile -->



</div>

<!-- /col Total strenth class wise -->



</div>

<!-- row_strength & todo-->



<div class="row">



<!-- col -->



<!-- /col -->

<div class="card-container col-lg-2 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-slategray db_shortboxstyle_ak">

<!-- row -->

<div class="row">

<div class="icnholder"><img src="assets/images/bicon1_w.png" class="db_st_icons" />

</div>

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Today On Leave</span>

</div>

<span>8</span>

</div>

</div>



<div class="back bg-slategray db_shortboxstyle_ak">

<div class="row">

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Today On Leave</span>

</div>

<span>8</span>

</div>

</div>

</div>

</div>

<div class="card-container col-lg-2 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-slategray db_shortboxstyle_ak">

<!-- row -->

<div class="row">

<div class="icnholder"><img src="assets/images/bicon2_w.png" class="db_st_icons" />

</div>

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span> Vehicle Route </span>

</div>

<span>30</span>

</div>

</div>

<div class="back bg-slategray db_shortboxstyle_ak">

<div class="row">

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span> Vehicle Route </span>

</div>

<span>30</span>

</div>

</div>   

</div>

</div>



<div class="card-container col-lg-2 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-slategray db_shortboxstyle_ak">

<!-- row -->

<div class="row">

<div class="icnholder"><img src="assets/images/bicon3_w.png" class="db_st_icons" />

</div>

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Total Vehicle </span>

</div>

<span>70</span>

</div>

</div>

<div class="back bg-slategray db_shortboxstyle_ak">

<div class="row">

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Total Vehicle </span>

</div>

<span>70</span>

</div>

</div>   

</div>

</div>

<div class="card-container col-lg-2 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-slategray db_shortboxstyle_ak">

<!-- row -->

<div class="row">

<div class="icnholder"><img src="assets/images/bicon4_w.png" class="db_st_icons" />

</div>

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Total Exp Heads </span>

</div>

<span>70</span>

</div>

</div>

<div class="back bg-slategray db_shortboxstyle_ak">

<div class="row">

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Total Exp Heads </span>

</div>

<span>70</span>

</div>

</div>    

</div>

</div>



<div class="card-container col-lg-2 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-slategray db_shortboxstyle_ak">

<!-- row -->

<div class="row">

<div class="icnholder"><img src="assets/images/bicon5_w.png" class="db_st_icons" />

</div>

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Total Hostel Room </span>

</div>

<span>30</span>

</div>

</div>

<div class="back bg-slategray db_shortboxstyle_ak">

<div class="row">

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Total Hostel&nbsp;Room </span>

</div>

<span>30</span>

</div>

</div>   

</div>

</div>



<div class="card-container col-lg-2 col-sm-6 col-sm-12">

<div class="card">

<div class="front bg-slategray db_shortboxstyle_ak">

<!-- row -->

<div class="row">

<div class="icnholder"><img src="assets/images/bicon6_w.png" class="db_st_icons" />

</div>

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Hostel Student</span>

</div>

<span>40</span>

</div>

</div>



<div class="back bg-slategray db_shortboxstyle_ak">

    <div class="row">

        

<div class="col-xs-8">

<p class="text-elg text-strong mb-0"></p>

<span>Hostel Student</span>

</div>

<span>40</span>

</div>



</div>          

</div>

</div>



</div>



<!-- status_6cols-->



<!-- row -->

<div class="row">





<!-- col -->

<div class="col-md-6">



<!-- tile -->

<section class="tile bg-slategray widget-calendar sk_schoolcal">



<!-- tile header -->

<div class="tile-header dvd dvd-btm">

<h1 class="custom-font"><strong>School</strong>Calendar</h1>

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



<!-- tile body -->

<div class="tile-body p-0">

<div id="mini-calendar"></div>
<div class="rickshaw1" id="realtime-rickshaw" style="display: none;"></div>
</div>
<!-- /tile body -->
<!--
<div class="tile m-0">
 tile body -- >
<div class="tile-body p-0 m" style="height: 0px;top:100px;width:100px;">
    <div class="rickshaw1" id="realtime-rickshaw"></div>
</div>
 /tile body 

</div>-->

<!-- /tile body -->

</section>



<!-- /tile -->





</div>

<!-- /col calender -->







<!-- col -->

<div class="col-md-6">



<!-- tile -->

<section class="tile" style=" overflow: hidden;">

<!-- tile header -->
<div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font"><strong>Today  </strong>Programs</h1>
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



<!-- tile body -->

<div class="tile-body tp lined-paper">

<div id="notes-carousel" class="owl-carousel">



<div>

<h4 class="mt-5 mb-5 pl-10">Today Program #1</h4>

<p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>

</div>



<div>

<h4 class="mt-5 mb-5">Today Program #2</h4>

<p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>

</div>



<div>

<h4 class="mt-5 mb-5">Today Program #3</h4>

<p class="text-muted mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad.</p>

</div>



</div>

</div>

<!-- /tile body -->



</section>

<!-- /tile -->















</div>

<!-- /col tp -->





</div>

<!-- /row cal_tp-->



<div class="row">

<!-- col -->

<div class="col-md-4">

<!-- tile -->

<section class="tile widget-message">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font"><strong>Quick </strong>Message</h1>

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



<!-- tile widget -->

<div class="tile-widget bg-blue">



<form role="form">

<div class="form-group">

<select data-placeholder="Select recipients..." multiple="" tabindex="3" class="chosen-select input-underline" style="width: 100%;">

    <option value="ici@gmail.com">ici@gmail.com</option>

    <option value="johny@gmail.com">johny@gmail.com</option>

    <option value="arnie@gmail.com">arnie@gmail.com</option>

    <option value="pete@gmail.com">pete@gmail.com</option>

    <option value="gorge@gmail.com">gorge@gmail.com</option>

</select>

</div>

<div class="form-group">

<input type="text" class="form-control underline-input" placeholder="Type subject...">

</div>

</form>



</div>

<!-- /tile widget -->



<!-- tile body -->

<div class="tile-body p-0">



<div id="summernote">Hello Summernote</div>



</div>

<!-- /tile body -->



<!-- tile footer -->

<div class="tile-footer bg-blue text-right">



<button class="btn btn-blue btn-ef btn-ef-7 btn-ef-7h" activate-button="success"><i class="fa fa-envelope"></i> Send message</button>



</div>

<!-- /tile footer -->



</section>

<!-- /tile -->

</div>

<!-- /col -->







<!-- col -->

<div class="col-md-4">

<!-- tile -->

<section class="tile widget-chat">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font">Today Attendence</h1>

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



<!-- tile body -->

<div class="tile-body slim-scroll" style="max-height: 97px;overflow:auto;">



<ul >

<li class="out">Students</li>

<li class="out">Teachers</li>

<li class="out">Non Teaching Staff</li>

</li>



</ul>



</div>



</section>



<section class="tile widget-chat">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font">Annual Plan Activity List</h1>

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



<!-- tile body -->

<div class="tile-body slim-scroll" style="max-height: 120px;overflow:auto;">



<ul >

<li class="out">Annual Day</li>

<li class="out">Sports Day</li>

<li class="out">Annual Admin Meeting</li>

<li class="out">Audit Report Completed / No</li>



</ul>



</div>



</section>



<section class="tile widget-chat">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font">Library Status</h1>

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



<!-- tile body -->

<div class="tile-body slim-scroll" style="max-height: 100px;overflow:auto;">



<ul >

<li class="out">Total Books (2022) </li>

<li class="out">Books Issued(400)</li>

<li class="out">Books Purchase (300)</li>

<li class="out">Issued (500)</li>

<li class="out">Available (5000)</li>

</ul>



</div>



</section>

<!-- /tile -->

</div>

<!-- /col -->

<!-- col -->

<div class="col-md-4">

<!-- tile -->

<section class="tile bg-blue widget-appointments">



<!-- tile header -->

<div class="tile-header dvd dvd-btm" style="max-height: 200px;overflow:auto;">

<h1 class="custom-font">Fees Due Lists</h1>
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



<!-- tile body -->

<div class="tile-body p-0">



<!-- col -->

<div class="panel panel-default panel-transparent fdl_panel ak_pnl_tglefix">

<!--     Class I  --->

<div class="panel-heading" role="tab" id="headingThree">

    <h4 class="panel-title">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree7" aria-expanded="false" aria-controls="collapseThree">

            <span>Class I <i class="fa fa-minus text-sm mr-5" style="margin-left:200px;"></i> 

            </span>

        </a>

    </h4>

</div>

<div id="collapseThree7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

    <div class="panel-body">

        <table class="table table-no-border m-0">

            <tbody>

            <tr>

                <td>1</td>

                <td>Chrome</td>

                <td>6985</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>2</td>

                <td>Other</td>

                <td>2697</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>3</td>

                <td>Safari</td>

                <td>3597</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>4</td>

                <td>Firefox</td>

                <td>2145</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>5</td>

                <td>Internet Explorer</td>

                <td>1854</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>6</td>

                <td>Opera</td>

                <td>654</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

<!--      XXXXXXXXXXXXXXX   -->  

<!--     Class I  --->

<div class="panel-heading" role="tab" id="headingThree">

    <h4 class="panel-title">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">

            <span>Class I <i class="fa fa-minus text-sm mr-5" style="margin-left:200px;"></i> 

            </span>

        </a>

    </h4>

</div>

<div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

    <div class="panel-body">

        <table class="table table-no-border m-0">

            <tbody>

            <tr>

                <td>1</td>

                <td>Rahul</td>

                <td>6985</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>2</td>

                <td>Rohan</td>

                <td>2697</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>3</td>

                <td>Sohan</td>

                <td>3597</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>4</td>

                <td>Sunil</td>

                <td>2145</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>5</td>

                <td>Raman</td>

                <td>1854</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>6</td>

                <td>Sonali</td>

                <td>654</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

<!--      XXXXXXXXXXXXXXX   -->  

<!--     Class I  --->

<div class="panel-heading" role="tab" id="headingThree">

    <h4 class="panel-title">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">

            <span>Class I <i class="fa fa-minus text-sm mr-5" style="margin-left:200px;"></i> 

            </span>

        </a>

    </h4>

</div>

<div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

    <div class="panel-body">

        <table class="table table-no-border m-0">

            <tbody>

            <tr>

                <td>1</td>

                <td>Rahul</td>

                <td>6985</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>2</td>

                <td>Rohan</td>

                <td>2697</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>3</td>

                <td>Sohan</td>

                <td>3597</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>4</td>

                <td>Sunil</td>

                <td>2145</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>5</td>

                <td>Raman</td>

                <td>1854</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>6</td>

                <td>Sonali</td>

                <td>654</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

<!--      XXXXXXXXXXXXXXX   -->  

<!--     Class I  --->

<div class="panel-heading" role="tab" id="headingThree">

    <h4 class="panel-title">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">

            <span>Class I <i class="fa fa-minus text-sm mr-5" style="margin-left:200px;"></i> 

            </span>

        </a>

    </h4>

</div>

<div id="collapseThree4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

    <div class="panel-body">

        <table class="table table-no-border m-0">

            <tbody>

            <tr>

                <td>1</td>

                <td>Rahul</td>

                <td>6985</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>2</td>

                <td>Rohan</td>

                <td>2697</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>3</td>

                <td>Sohan</td>

                <td>3597</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>4</td>

                <td>Sunil</td>

                <td>2145</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>5</td>

                <td>Raman</td>

                <td>1854</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>6</td>

                <td>Sonali</td>

                <td>654</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

<!--      XXXXXXXXXXXXXXX   -->  

<!--     Class I  --->

<div class="panel-heading" role="tab" id="headingThree">

    <h4 class="panel-title">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">

            <span>Class I <i class="fa fa-minus text-sm mr-5" style="margin-left:200px;"></i> 

            </span>

        </a>

    </h4>

</div>

<div id="collapseThree5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

    <div class="panel-body">

        <table class="table table-no-border m-0">

            <tbody>

            <tr>

                <td>1</td>

                <td>Rahul</td>

                <td>6985</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>2</td>

                <td>Rohan</td>

                <td>2697</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>3</td>

                <td>Sohan</td>

                <td>3597</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>4</td>

                <td>Sunil</td>

                <td>2145</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>5</td>

                <td>Raman</td>

                <td>1854</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>6</td>

                <td>Sonali</td>

                <td>654</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

<!--      XXXXXXXXXXXXXXX   -->  

<!--     Class I  --->

<div class="panel-heading" role="tab" id="headingThree">

    <h4 class="panel-title">

        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree">

            <span>Class I <i class="fa fa-minus text-sm mr-5" style="margin-left:200px;"></i> 

            </span>

        </a>

    </h4>

</div>

<div id="collapseThree6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

    <div class="panel-body">

        <table class="table table-no-border m-0">

            <tbody>

            <tr>

                <td>1</td>

                <td>Rahul</td>

                <td>6985</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>2</td>

                <td>Rohan</td>

                <td>2697</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>3</td>

                <td>Sohan</td>

                <td>3597</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>4</td>

                <td>Sunil</td>

                <td>2145</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            <tr>

                <td>5</td>

                <td>Raman</td>

                <td>1854</td>

                <td><i class="fa fa-caret-down text-danger"></i></td>

            </tr>

            <tr>

                <td>6</td>

                <td>Sonali</td>

                <td>654</td>

                <td><i class="fa fa-caret-up text-success"></i></td>

            </tr>

            </tbody>

        </table>

    </div>

</div>

<!--      XXXXXXXXXXXXXXX   --> 



<!--     Class I  --->

<div class="panel-heading" role="tab" id="headingThree">

<h4 class="panel-title">

    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree7" aria-expanded="false" aria-controls="collapseThree">

        <span>Class I <i class="fa fa-minus text-sm mr-5" style="margin-left:200px;"></i> 

        </span>

    </a>

</h4>

</div>

<div id="collapseThree7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">

<div class="panel-body">

    <table class="table table-no-border m-0">

        <tbody>

        <tr>

            <td>1</td>

            <td>Rahul</td>

            <td>6985</td>

            <td><i class="fa fa-caret-up text-success"></i></td>

        </tr>

        <tr>

            <td>2</td>

            <td>Rohan</td>

            <td>2697</td>

            <td><i class="fa fa-caret-up text-success"></i></td>

        </tr>

        <tr>

            <td>3</td>

            <td>Sohan</td>

            <td>3597</td>

            <td><i class="fa fa-caret-down text-danger"></i></td>

        </tr>

        <tr>

            <td>4</td>

            <td>Sunil</td>

            <td>2145</td>

            <td><i class="fa fa-caret-up text-success"></i></td>

        </tr>

        <tr>

            <td>5</td>

            <td>Raman</td>

            <td>1854</td>

            <td><i class="fa fa-caret-down text-danger"></i></td>

        </tr>

        <tr>

            <td>6</td>

            <td>Sonali</td>

            <td>654</td>

            <td><i class="fa fa-caret-up text-success"></i></td>

        </tr>

        </tbody>

    </table>

</div>

</div>

<!--      XXXXXXXXXXXXXXX   --> 





<!-- /col -->

</div>



<!-- /tile body -->







</section>

<!-- /tile -->

</div>

<!-- /col -->



</div>

<!-- /row -->



</div>

@endsection