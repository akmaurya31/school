@extends('layouts.teacher_header')
@section('title', 'Change Password')
@section('content')
<section id="content">

<div class="page page-dashboard">

<div class="pageheader">


<div class="page-bar">

<ul class="page-breadcrumb">
<li>
<a href="{{ route('admin-dashboard') }}"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="#">Change Password</a>
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
          
         <div class="col-md-6">
         	 @if (count($errors))
				  @foreach ($errors->all() as $error)
					<div class="alert alert-danger alert-dismissible">
		                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
		                  {{ $error }}
		                </div>
				  @endforeach
		        @endif 
		        @if(Session::has('message'))
					<div class="alert alert-danger alert-dismissible">
		                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
		                  {{ Session::get('message') }}
		            </div>
				@endif		
                <!-- tile -->
                <section class="tile">

                    <!-- tile header -->
                    <div class="tile-header bg-blue dvd dvd-btm">
                        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Change </strong>Password</h1>
                        <ul class="controls">
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
                    <!-- /tile header -->

                    <!-- tile body -->
                    <div class="tile-body">
                        <form role="form" method='post' action='{{ route('students.update-password') }}'>
                        	{{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="catname">Old Password *</label>
                                            <input type="password" class="form-control" id="catname" name='oldpassword'>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="catname">New Password *</label>
                                            <input type="password" class="form-control" id="catname" name='newpassword'>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="catname">Confirm Password *</label>
                                            <input type="password" class="form-control" id="catname" name='confirmpassword'>
                                    </div>

                    <div class="submit-holder form-group col-sm-12"> 
                        <button type="submit" class="btn btn-blue">Save Password</button> 
                    </div>
                </div>           
                            </form>
                        
                            </div>                        
                    <!-- /tile body -->
                    </section>
                <!-- /tile -->
            </div>
        </div>
    </div>        
@endsection