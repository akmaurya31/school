@extends('layouts.admin_header')
    @section('title', 'View Timetable Info')
    @section('content')

@if(Session::has('message'))
<input type="hidden" name="saved_success" value="{{ Session::get('message') }}">
@endif 

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
<a href="javascript:void(0)">View Timetable</a>
</li>
</ul>
<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>
</div>
</div>
<div class="akform_holder ">
<div class="row">
  <div class="col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <strong>Timetable</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <form role="form" class="box form-horizontal" method="POST" action="{{ Auth::user()->role_name == 'Teaching' ? route('teacher.view-timetable') : route('staff.view-timetable') }}" enctype="multipart/form-data">    
                {{ csrf_field() }}
                <input type="hidden" value="get_employee_timetable" name="action_type"/>
                <div class="form-group">
                    @if (Auth::user()->role_name == 'Teaching')
                    <input type="hidden" name="id_employee" value="{{ Auth::user()->user_id }}" >
                    @else
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Select Employee</label>
                        <select class="form-control" name="id_employee" id="id-employee">
                            <option value="">Select Employee</option>
                            @if($employee_list)
                                @foreach($employee_list as $key => $employee)
                                <option value="{{ $employee->t_id }}" {{ app('request')->input('id_employee') == $employee->t_id ? ' selected=""' : '' }}>{{ $employee->t_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    @endif
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label for="classSel">Class</label>
                        <select class="form-control ak_select2" name="id_class" id="id-class">
                            <option value="">----</option>
                            @if($classes)
                                @foreach($classes as $key => $class)
                                <option value="{{ $class->id_class }}" {{ app('request')->input('id_class') == $class->id_class ? ' selected=""' : '' }}>{{ $class->class_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label for="classSel">Sections</label>
                        <select class="form-control ak_select2" name="id_section" id="id-section">
                            <option value="">----</option>
                            @if($sections)
                                @foreach($sections as $key => $section)
                                <option value="{{ $section->id_section }}" {{ app('request')->input('id_section') == $section->id_section ? ' selected=""' : '' }}>{{ $section->section_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <button type="submit" class="btn btn-primary">Get Timetable</button>
                    </div>
                </div>    
            </form>

        </div>
        <!-- /tile body-->
        
        @if($day_wise_times)
        <!-- tile body-->
        <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>PERIOD</th>
                            @for ($day = 1; $day <= $nb_days; $day++)
                            <th>{{ \App\Helpers\EmpAccess::instance()->getDaysName($day) }}</th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        @for ($period = 1; $period <= $nb_periods; $period++)
                        <tr>
                            <td>{{ $period }}</td>
                            @for ($day = 1; $day <= $nb_days; $day++)
                            <td>
                                @if(isset($day_wise_times[$day]))
                                    @foreach($day_wise_times[$day] as $key => $empArr)
                                        @if($empArr->period == $period)
                                        <p>Teacher: <strong>{{ strtoupper($empArr->t_name) }}</strong> {!! $empArr->subject_name ? '<br/>Subject: <strong>'.$empArr->subject_name.'</strong>'  : '' !!}<br/>Class: <strong>{{ $empArr->class_name }}</strong></p>
                                        @endif
                                    @endforeach
                                @endif
                            </td>
                            @endfor
                        </tr>    
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /tile body-->
        @endif

    </section>
  </div>
</div>
</div>


</div>
</div>

</section>
<!--/ CONTENT -->

<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
@section('footer_scripts')
<script type="text/javascript">
$(function(){
    $('select[name="id_employee"], select[name="id_class"], select[name="id_section"]').select2();
});
</script>
@endsection

@endsection
