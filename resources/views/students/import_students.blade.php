@extends('layouts.admin_header')

@section('title', 'Import Uplaod')

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

<a href="index.html">Import Upload</a>

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
       @if (count($errors))
               <div class="alert alert-danger alert-dismissible">
                 <ul>  
                   @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach     
                 </ul>   
            </div>
        @endif 
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif 
<div class="row">

    <div class="col-md-12">

        <!-- tile -->

        <section class="tile">

        

        <!-- tile header -->

        <div class="tile-header bg-blue dvd dvd-btm">

        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Upload</strong>File</h1>
        <a href="{{ asset('public/upload_template/upload_template.csv')}}">Export Import Format</a>
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

        <form role="form" action="{{ route('student.insert-import') }}" method='post' enctype="multipart/form-data">
        {{ @csrf_field() }}
        <div class="row">
            <div class="form-group col-md-3">
            <label for="cls">Academic Year</label>
            <select name='session_year' class='form-control' required>
                @foreach($data['session'] as $key)
                <option value='{{$key->ClassSession}}' >{{ $key->ClassSession }}</option>
                @endforeach
            </select> 
            </div>
      
			<div class="form-group col-md-3">
				<label for="cls">Class *</label>
				<select class="form-control ak_select2" name="class" required>
				   @foreach($data['classes'] as $class)
					<option value='{{$class->ClassNo}}'>{{ $class->ClassNo }}</option>
				   @endforeach   
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="sec">Section *</label>
				<select class="form-control ak_select2" name="section" required>
					@foreach($data['sections'] as $section)
						<option value='{{$section->ClassSection}}'>{{ $section->ClassSection }}</option>
					@endforeach   
				</select>
			</div>
            <div class="form-group col-md-3">
                <label for="sec">Upload file</label>
                <input type='file' name='myFile' class='form-control'>
            </div>
        

        <div class="submit-holder form-group col-sm-12"> 

        <button type="submit" class="btn btn-blue">Import !<i class="fa fa-filter"></i></button> 

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