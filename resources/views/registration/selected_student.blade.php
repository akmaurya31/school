@extends('layouts.admin_header')

@section('title', 'Selected Student List')

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

<a href="index.html">Registration Student List</a>

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

        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Select </strong>Ground</h1>

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

        <form role="form" action="{{ url('admin/registration/filter_selected_student') }}" method='post'>
        {{ @csrf_field() }}
        <div class="row">
            <div class="form-group col-md-3">
            <label for="cls">Academic Year</label>
            <select name='session_year' class='form-control' required>
                <option value='' selected>select Session</option>
                @foreach($session as $key)
                <option value='{{$key->ClassSession}}' {{ $data['session_year'] == $key->ClassSession ? 'selected' : ''}}>{{ $key->ClassSession }}</option>
                @endforeach
            </select> 
            </div>
            <div class="form-group col-md-2">
            <label for="cls">Samesters</label>
            <select name='type' class='form-control' required>
                <option value='' selected>select Semester</option>
                <option value='1' {{ $data['sem'] == 1 ? 'selected' : '' }}>Semester 1</option>
                <option value='2' {{ $data['sem'] == 2 ? 'selected' : '' }}>Semester 2</option>
            </select> 
            </div>
        <div class="form-group col-md-2">
            <label for="cls">Class *</label>
            <select class="form-control ak_select2" name="class" required>
               <option value='' selected>select Class</option>
               @foreach($classes as $class)
                <option value='{{$class->ClassNo}}' {{ $data['c'] ==  $class->ClassNo ? 'selected' : '' }}>{{ $class->ClassNo }}</option>
               @endforeach   
            </select>
        </div>
        <!--<div class="form-group col-md-2">
            <label for="cls">From *</label>
            <input type='date' name='from' class='form-control' required value="{{ date('Y-m-d') }}">
        </div>
         <div class="form-group col-md-2">
            <label for="cls">To *</label>
            <input type='date' name='to' class='form-control' required value="{{ date('Y-m-d') }}">
        </div>-->
       <!-- <div class="form-group col-md-3">
            <label for="sec">Section *</label>
            <select class="form-control ak_select2" name="section" required>
                <option value='' selected>select Section</option>
                @foreach($sections as $section)
                    <option value='{{$section->ClassSection}}' {{ $data['c'] ==  $section->ClassSection ? 'selected' : '' }}>{{ $section->ClassSection }}</option>
                @endforeach   
            </select>
        </div>-->
         <div class="form-group col-md-3">
            <label for="sec">Enter Percentage Marks *</label>
            <input type="number" name="">
        </div>        

        <div class="submit-holder form-group col-sm-12"> 

        <button type="submit" class="btn btn-blue">Filters<i class="fa fa-filter"></i></button> 

        </div>

        </div>           

        </form>

        

        </div>                        

        <!-- /tile body -->

        </section>

        <!-- /tile -->

        </div>
@if(isset($students))
<div class="col-md-12">

<!-- tile -->

<section class="tile">



<!-- tile header -->

<div class="tile-header bg-blue dvd dvd-btm">

<h1 class="custom-font"><i class="fas fa5-user-graduate"></i> <strong>Student </strong>List</h1>

<ul class="ak_tble_actions">
    <li><button type='button' class='btn btn-success btn-flat save_selected'>Save Selected Students</button></li>
</ul>

</div>

<!-- /tile header -->

<!-- tile body -->

<div class="tile-body ak_table ak_table2 ak_dtablestyle student_list_page">



<div class="table-responsive table_ws_nowrap">
<table class="table mb-0" id="datatable1" style="width:100%">

<thead>

<tr>
    
    <th>S.No</th>
    
    <th class="stl_th3">Name</th>
    
    <th class="stl_th3">Date of Birth</th>

    <th class="stl_th23">Father Name</th>
    
    <th class="stl_th26">Father Mobile</th>
    
    <th class="stl_th26">Present Status</th>
    
    <th class="stl_th26">Marks Obtained</th>
    
    <th class="stl_th26">Admission Date</th>
    
    <th class="stl_th20 action_icons_th">Action</th>

</tr>

</thead>

<tbody>

  @foreach($students as $key)
  
    <td>{{ $loop->iteration }}</td>

    <td>{{ $key->first_name }} {{ $key->last_name}}</td>
    
    <td>{{ date('d-m-Y',strtotime($key->dob)) }}</td>
    
    <td>{{ $key->father_name }}</td>
    
    <td>{{ $key->father_mobile_number }}</td>

    <td>{{$key->present_status}}
    </td>
    <td>
       {{$key->marks}}
    </td>
    <td>
       {{ $key->adm_date }}
    </td>
    <td>

        <div class="ak_actionbtns">
        
            <a href="{{url('admin/registration/show/'.$key->id)}}" class="action_icons opt" target='_blank'><i class="fa fa-eye"></i></a>
            
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
@endif
</div>
</div>
<style>
    .modal {
      text-align: center;
      position:fixed;
    }

    @media screen and (min-width: 768px) { 
      .modal:before {
        display: inline-block;
        vertical-align: middle;
        content: " ";
        height: 100%;
      }
    }

    .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">

    function delete_student(i){

        if(confirm('Are you sure you want to delete this student Name'))

        {

            $.ajax({                        

                url: '{{ url("admin/registration/delete") }}',                      

                type: 'GET',                       

                data: {id:i},      

                dataType: 'json',                       

                success: function (argument) {  

                    if(argument['status'])

                    {

                        alert(argument['msg']);

                        location.reload();

                    }else

                    {

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