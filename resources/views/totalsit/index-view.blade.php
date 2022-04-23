@extends('layouts.admin_header')

@section('title', 'Admission Setup')

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

<a href="#">Admission Setup</a>

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
@if(!isset($edit))
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
                    <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          {{ Session::get('message') }}
                    </div>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          {{ Session::get('success') }}
                    </div>
                @endif  

        <section class="tile">

        

        <!-- tile header -->

        <div class="tile-header bg-blue dvd dvd-btm">

        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Add </strong>New</h1>

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

        <form role="form" action="{{ route('totalsit.store') }}" method='post'>
        {{ @csrf_field() }}
        <div class="row">
            <div class="form-group col-md-3">
            <label for="cls">Session</label>
            <select name='session_name' class='form-control' required>
                @foreach($data['session'] as $key)
                <option value='{{$key->ClassSession}}' {{ old('session_name') == $key->ClassSession ? 'selected' : ''}}>{{ $key->ClassSession }}</option>
                @endforeach
            </select> 
            </div>
			<div class="form-group col-md-3">
				<label for="cls">Class *</label>
				<select class="form-control" name="class_name" required>
				   @foreach($data['classes'] as $class)
					<option value='{{$class->ClassNo}}' {{ old('class_name') ==  $class->ClassNo ? 'selected' : '' }}>{{ $class->ClassNo }}</option>
				   @endforeach   
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="sec">Category *</label>
				<select class="form-control ak_select2" required name='category'>
					<option value='' selected>Select</option>
					<option value='Gen.'>Gen.</option>
					<option value='OBC-A'>OBC-A</option>
					<option value='OBC-B'>OBC-B</option>
					<option value='SC'>SC</option>
					<option value='ST'>ST</option>
				</select>

			</div>
			
			<div class="form-group col-md-3">
				<label for="sec">Seat *</label>
				<input type='number' name='number_of_sits' class='form-control'>
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
@else
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
                    <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          {{ Session::get('message') }}
                    </div>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          {{ Session::get('success') }}
                    </div>
                @endif  

        <section class="tile">

        

        <!-- tile header -->

        <div class="tile-header bg-blue dvd dvd-btm">

        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Edit </strong>Total seat</h1>

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

        <form role="form" action="{{ route('totalsit.update',$details->id) }}" method='post' onsubmit="return confirm('Are you sure you want to submit?');">
        {{ @csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
            <div class="form-group col-md-3">
            <label for="cls">Session</label>
            <select name='session_name' class='form-control' required>
                @foreach($data['session'] as $key)
                <option value='{{$key->ClassSession}}' {{ $details->session_name == $key->ClassSession ? 'selected' : ''}}>{{ $key->ClassSession }}</option>
                @endforeach
            </select> 
            </div>
            <div class="form-group col-md-3">
                <label for="cls">Class *</label>
                <select class="form-control" name="class_name" required>
                   @foreach($data['classes'] as $class)
                    <option value='{{$class->ClassNo}}' {{ $details->class_name ==  $class->ClassNo ? 'selected' : '' }}>{{ $class->ClassNo }}</option>
                   @endforeach   
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="sec">Category *</label>
                <select class="form-control ak_select2" required name='category'>
                    <option value='' selected>Select</option>
                    <option value='Gen.' {{ $details->category_name == 'Gen.' ? 'selected' : ''}}>Gen.</option>
                    <option value='OBC-A' {{ $details->category_name == 'OBC-A' ? 'selected' : ''}}>OBC-A</option>
                    <option value='OBC-B' {{ $details->category_name == 'OBC-B' ? 'selected' : ''}}>OBC-B</option>
                    <option value='SC' {{ $details->category_name == 'SC' ? 'selected' : ''}}>SC</option>
                    <option value='ST' {{ $details->category_name == 'ST' ? 'selected' : ''}}>ST</option>
                </select>

            </div>
            
            <div class="form-group col-md-3">
                <label for="sec">Seat *</label>
                <input type='number' name='number_of_sits' class='form-control' value='{{ $details->number_of_sits }}'>
            </div>
            
        
        

        <div class="submit-holder form-group col-sm-12"> 

        <button type="submit" class="btn btn-blue">Update</button> 

        </div>

        </div>           

        </form>

        

        </div>                        

        <!-- /tile body -->

        </section>

        <!-- /tile -->

        </div>
@endif        

<div class="col-md-12">

<!-- tile -->

<section class="tile">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font"><i class="fas fa5-user-graduate"></i> <strong>Adminssion Setup </strong>List</h1>

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

<div class="tile-body ak_table ak_table2 ak_dtablestyle student_list_page">



<div class="table-responsive table_ws_nowrap">
<table class="table mb-0" id="example" style="width:100%">

<thead>

<tr>

    <th>S.No</th>

    <th class="stl_th4">Session</th>

    <th class="stl_th5">Class</th>

    <th class="stl_th6">Category</th>

    <th class="stl_th7">Seat</th>

    <th class="stl_th20 action_icons_th">Action</th>

</tr>

</thead>

<tbody>

  @foreach($totalsits as $key)

  <tr>
 
    <td>{{ $loop->iteration }}</td>

    <td>{{ $key->session_name }}</td>

    <td>{{ $key->class_name}}</td>
	
	<td>{{ $key->category_name }}</td>
	
	<td>{{ $key->number_of_sits}}</td>

    <td>

        <div class="ak_actionbtns">

<a href="{{route('totalsit.edit',$key)}}" class="action_icons edt"><i class="fa fa-pencil"></i></a>  

<a href="#" onclick="return delete_totalsit({{$key->id}});"  class="action_icons del"><i class="fa fa-trash-o"></i></a>

</td>



  </tr>

  @endforeach

</tbody>

</table>

</div>



</div>



</section>

<!-- /tile -->

</div>



</div>

</div>



</div>

<script type="text/javascript">

    function delete_totalsit(i){
        if(confirm('Are you sure you want to delete')){
           $.ajax({                        
                url: '{{ route("totalsit.delete-totalsit") }}',                      
                type: 'GET',                       
                data: {id:i},      
                dataType: 'json',                       
                success: function (argument) {  
                    if(argument['status'])
                    {
                       alert(argument['msg']);
                        location.reload();
                    }else{
                        alert('not updated');
                    }
                },  
                error: function (hrx, ajaxOption, errorThrow) {     
                    console.log(ajaxOption);                        
                    console.log(errorThrow);                        
                }                   
            });             

        }
    }

</script>

@endsection