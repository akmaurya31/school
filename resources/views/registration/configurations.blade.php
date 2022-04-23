@extends('layouts.admin_header')
@section('title', 'Admin Dashboard')
@section('content')

@if(Session::has('message'))
<input type="hidden" name="saved_success" value="{{ Session::get('message') }}">

@endif 

<section id="content">

<div class="page page-dashboard">

<div class="pageheader">


<div class="page-bar">

<ul class="page-breadcrumb">
<li>
<a href="{{ route('admin-dashboard') }}"><i class="fa fa-home"></i> HOME</a>
</li>
<li>
<a href="#">Add Total Test Marks</a>
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
<!-- tile -->
<section class="tile">

    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Add </strong>Total Test Marks</h1>
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
        <form role="form" action="{{ route('admin-configurations') }}" method='post'>
                {{ @csrf_field() }}
              
              @if($marks_row)
              <input type="hidden" value="{{ $marks_row->id }}" name="id_marks"/>
              @endif

            <input type="hidden" value="{{ $marks_row ? 'update' : 'save' }}_marks_info" name="action_type"/>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="catname">Marks for Class *</label>
                        <select class="form-control ak_select2" name="class" required>
                           <option value='' selected>--</option>
                           @foreach($classes as $class)
                            <option value='{{$class->ClassNo}}' {{ $marks_row && $marks_row->class == $class->ClassNo ? ' selected="true"' : '' }}>{{ $class->ClassNo }}</option>
                           @endforeach   
                        </select>
                    </div>
                    
                     <div class="form-group col-md-12">
                        <label for="catname">Enter Max Marks *</label>
                          <input type="number" step=".01" min="0" value="{{ $marks_row ? $marks_row->marks : '' }}" class="form-control" name="marks" placeholder="400" required />    
                    </div>

    <div class="submit-holder form-group col-sm-12"> 
        <button type="reset" class="btn btn-red">Reset</button> 
        <button type="submit" class="btn btn-blue">Save marks <i class="fa fa-floppy-o"></i></button> 
    </div>
</div>           
            </form>
        
            </div>                        
    <!-- /tile body -->
    </section>
<!-- /tile -->
</div>
<div class="col-md-6">
<!-- tile -->
<section class="tile">

<!-- tile header -->
<div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font"><i class="fa fa-list"></i> <strong>Registration </strong>Test Marks Summery</h1>
   <!-- <ul class="controls">
        <li>
            <a role="button" tabindex="0" class="tile-toggle">
            <span class="minimize"><i class="fa fa-minus"></i></span>
            <span class="expand"><i class="fa fa-plus"></i></span>
            </a>
            </li>
    </ul> -->
</div>
<!-- /tile header -->

<!-- tile body -->
<div class="tile-body ak_table ak_table2">

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>SL No</th>
                <th>Class</th>
                <th>Total Test Marks</th>
                <th class="action_icons_th">Actions</th>
            </tr>
            </thead>
            <tbody>
              @if($marksmaster)

              @foreach($marksmaster as $key => $marks)

            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $marks->class }}</td>
                <td>{{ $marks->marks }}</td>
                <td><div class="ak_actionbtns">
                    <a href="/admin/configurations/update/{{ base64_encode($marks->id) }}" class="action_icons edt"><i class="fa fa-pencil"></i></a>
                    <a href="/admin/configurations/remove/{{ base64_encode($marks->id) }}" class="action_icons del"><i class="fa fa-trash-o"></i></a></div>
                </td>
            </tr>
              @endforeach

              @endif

            </tbody>
        </table>
    </div>

</div>
<!-- /tile body -->

</section>
<!-- /tile -->
</div>

</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(function (){
  if($('input[name="saved_success"]').length > 0 ){
    swal({
      title: $('input[name="saved_success"]').val(),
      text: "Entry recorded",
      icon: "success",
      button: "OK",
    });    
  }
});
    
</script> 
@endsection