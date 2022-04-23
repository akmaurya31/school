@extends('layouts.admin_header')

@section('title', 'Edit Department')

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

<a href="#">Edit Department</a>

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

                @if(Session::has('message'))

                    <div class="alert alert-success alert-dismissible">

                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>

                          {{ Session::get('message') }}

                    </div>

                @endif  
                </div>
         <div class="col-md-6">
                <!-- tile -->

                <section class="tile">



                    <!-- tile header -->

                    <div class="tile-header bg-blue dvd dvd-btm">

                        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Edit </strong> Department</h1>

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

                    <div class="tile-body">

                       <form role="form" method='post' action="{{ route('department.update', $deptDetail->d_id) }}" onsubmit="return confirm('Are you sure you want to submit?');">

                            {{ csrf_field() }}

                            {{ method_field('PUT') }}

                                <div class="row">

                                    <div class="form-group col-md-12">

                                        <label for="catname">Department Name *</label>

                                            <input type="text" class="form-control" name='department' value="{{  $deptDetail->d_name }}" >

                                    </div>

                                    



                    <div class="submit-holder form-group col-sm-12"> 

                        <button type="submit" class="btn btn-blue">Submit</button> 

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

                  

 </div>

@endsection 