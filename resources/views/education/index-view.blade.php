@extends('layouts.admin_header')

@section('title', 'Education')

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

<a href="#">Education</a>

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

                @if(Session::has('success'))

                    <div class="alert alert-success alert-dismissible">

                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                          <h5><i class="icon fas fa-check"></i> Success!</h5>

                          {{ Session::get('success') }}

                    </div>

                @endif  
         </div>
         <div class="col-md-6">
                @if(!isset($edit_details))

                <!-- tile -->

                <section class="tile">



                    <!-- tile header -->

                    <div class="tile-header bg-blue dvd dvd-btm">

                        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Add </strong>New Education</h1>

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

                        <form role="form" method='post' action="{{ route('education.store') }}">

                            {{ csrf_field() }}

                                <div class="row">

                                    <div class="form-group col-md-12">

                                        <label for="catname">Name *</label>

                                            <input type="text" class="form-control" name='education_name' value="{{ old('education_name') }}" autocomplete="off" maxlength="50">

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

                @else

                <!-- tile -->

                <section class="tile">



                    <!-- tile header -->

                    <div class="tile-header bg-blue dvd dvd-btm">

                        <h1 class="custom-font"><i class="fa fa-pencil-square-o"></i> <strong>Update </strong>Education</h1>

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

                        <form role="form" method='post' action="{{ route('education.update',$edit_details->id) }}" onsubmit="return confirm('are you sure you want to update detail')">

                            {{ csrf_field() }}

                            {{ method_field('PUT') }}

                                <div class="row">

                                    <div class="form-group col-md-12">

                                        <label for="catname">Name *</label>

                                            <input type="text" class="form-control" name='education_name' value="{{ $edit_details->education_name }}" autocomplete="off" maxlength="50" >

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

                @endif

            </div>

            <div class="col-md-6">

               <!-- tile -->

               <section class="tile">



                <!-- tile header -->

                <div class="tile-header bg-blue dvd dvd-btm">

                    <h1 class="custom-font"><i class="fa fa-list"></i> <strong>Education </strong>List</h1>
<!--
                    <ul class="controls">
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

                                <th>S Id</th>

                                <th>Name</th>

                                <th class="action_icons_th">Actions</th>

                            </tr>

                            </thead>

                            <tbody>

                            @foreach($data as $key)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $key->education_name }}</td>

                                

                                <td>

                                    <div class="ak_actionbtns">

    

                                        <a href="{{route('education.edit',$key)}}" class="action_icons edt" target="_blank"><i class="fa fa-pencil"></i></a> 

                                        <a href="#" onclick="return delete_education({{$key->id}})" class="action_icons del" ><i class="fa fa-trash-o"></i></a>

                                    </div>

                                </div>    

                                    

                            </tr>     

                            @endforeach

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

                  

 </div>

 <script type="text/javascript">

     function delete_education(i)

     {

        if(confirm('Are you sure you want to delete'))

        {

            $.ajax({                        

                url: '{{ route("education.delete-education") }}',                      

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