@extends('layouts.admin_header')
    @section('title', 'Timetable Settings')
    @section('content')

@if(Session::has('message'))
<input type="hidden" name="saved_success" value="{{ Session::get('message') }}">
@endif 

<!--/ CONTROLS Content -->
<!-- ====================================================
================= CONTENT ===============================
===================================================== -->
<!-- ====================================================

================= CONTENT ===============================

===================================================== -->

<section id="content">

<div class="page page-dashboard">

<div class="pageheader">

<div class="page-bar">

<ul class="page-breadcrumb">

<li>

<a href="index.html"><i class="fa fa-table"></i> HOME</a>

</li>

<li>

<a href="index.html">Time Table Generation</a>

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

  <div id="fortune"></div>

  <div class="col-md-12">

    <!-- tile -->

    <section class="tile">

    

    <!-- tile header -->

    <div class="tile-header bg-blue dvd dvd-btm tile-toggle">

    <h1 class="custom-font"><i class="fa fa-table"></i><strong>Time Table Generation</strong></h1>

    <ul class="controls">

        <li>

            <a role="button" tabindex="0">

                <span class="minimize"><i class="fa fa-minus"></i></span>

                <span class="expand"><i class="fa fa-plus"></i></span>

            </a>

        </li>

    </ul>

    </div>

    <!-- /tile header -->

    

    <!-- tile body -->

    <div class="tile-body">
        
        <form role="form" class="box form-s" method="POST" action="{{ route('staff.set-timetable') }}" enctype="multipart/form-data">    
            {{ csrf_field() }}
            
            <input type="hidden" value="get_selected_days_inputs" name="action_type"/>
        
            <div class="row">
    
                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
        
                    <label for="classSel">Class</label>
        
                    <select class="form-control ak_select2" name="id_class" id="id-class" required="">
                        <option value="">----</option>
                        @if($classes)
                            @foreach($classes as $key => $class)
                            <option value="{{ $class->id_class }}" {{ app('request')->input('id_class') == $class->id_class ? ' selected=""' : '' }}>{{ $class->class_name }}</option>
                            @endforeach
                        @endif
                    </select>
        
                </div>
        
                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
        
                    <label for="classSel">Divisions</label>
        
                    <select class="form-control ak_select2" name="id_section" id="id-section" required="">
                        <option value="">----</option>
                        @if($sections)
                            @foreach($sections as $key => $section)
                            <option value="{{ $section->id_section }}" {{ app('request')->input('id_section') == $section->id_section ? ' selected=""' : '' }}>{{ $section->section_name }}</option>
                            @endforeach
                        @endif
                    </select>
        
                </div>
        
                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <label for="noOfDaysSel">No of days</label>
                    <select class="form-control ak_select2" name="days" id="days" required> 
                      <option value="">--Days in a week--</option>
                      <option value="1" {{ app('request')->input('days') == 1 ? ' selected=""' : '' }}>1</option>
                      <option value="2" {{ app('request')->input('days') == 2 ? ' selected=""' : '' }}>2</option>
                      <option value="3" {{ app('request')->input('days') == 3 ? ' selected=""' : '' }}>3</option>
                      <option value="4" {{ app('request')->input('days') == 4 ? ' selected=""' : '' }}>4</option>
                      <option value="5" {{ app('request')->input('days') == 5 ? ' selected=""' : '' }}>5</option>
                      <option value="6" {{ app('request')->input('days') == 6 ? ' selected=""' : '' }}>6</option>
                    </select>
                </div>
        
                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="btn-align-row">
                      <button class="btn btn-blue" type="submit">Generate Days</button> 
                    </div>
                </div>
    
            </div>
        </form>

    </div>                        
    
    @if($get_periods)
    
    <div class="tile-body">
        
        <form role="form" class="box form-s" method="POST" action="{{ route('staff.set-timetable') }}" enctype="multipart/form-data">    
            {{ csrf_field() }}
            
            <input type="hidden" value="set_periods_for_selected_days" name="action_type"/>
            <input type="hidden" value="{{ $get_periods['id_class'] }}" name="id_class"/>
            <input type="hidden" value="{{ $get_periods['id_section'] }}" name="id_section"/>
            <input type="hidden" value="{{ $get_periods['days'] }}" name="days"/>
            <input type="hidden" value="{{ $get_periods['periods'] }}" name="periods"/>
        
            <div class="row">
                @for ($day_num = 1; $day_num <= $get_periods['days']; $day_num++)
                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <label for="classSel">{{ \App\Helpers\EmpAccess::instance()->getDaysName($day_num) }}</label>
        
                    <select class="form-control ak_select2" name="selected_periods[{{ $day_num }}]" id="selected-periods-for-day-{{ $day_num }}" required="">
                        <option value="">----</option>
                        @for ($period_num = 1; $period_num <= $get_periods['periods']; $period_num++)
                        <option value="{{ $period_num }}" {{ isset(app('request')->input('selected_periods')[$day_num]) && app('request')->input('selected_periods')[$day_num] == $period_num ? ' selected="true"' : '' }} >Period {{ $period_num }}</option>
                        @endfor
                    </select>
        
                </div>
                
                @endfor                
        
            </div>
            <div class="row">
                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <button class="btn btn-blue" type="submit">Set periods</button> 
                </div>
            </div>
        </form>

    </div>                        
    @endif
 
    <!-- /tile body -->

    </section>

    <!-- /tile -->

    </div>

</div>


</div>

@if($get_teachers_for_periods)
<div class="akform_holder ">

<div class="row">

  <div id="fortune"></div>

  <div class="col-md-12">

    <!-- tile -->

    <section class="tile">

    

    <!-- tile header -->

    <div class="tile-header bg-blue dvd dvd-btm tile-toggle">

    <h1 class="custom-font"><i class="fa fa-table"></i><strong>Set Time Table</strong></h1>

    <ul class="controls">

        <li>

            <a role="button" tabindex="0">

                <span class="minimize"><i class="fa fa-minus"></i></span>

                <span class="expand"><i class="fa fa-plus"></i></span>

            </a>

        </li>

    </ul>

    </div>

    <!-- /tile header -->

    

    <!-- tile body -->

    <div class="tile-body">
        
        <form role="form" class="box form-s" method="POST" action="{{ route('staff.set-timetable') }}">    
            {{ csrf_field() }}
            
            <input type="hidden" value="save_periods_history" name="action_type"/>
            <input type="hidden" value="{{ $get_periods['id_class'] }}" name="id_class"/>
            <input type="hidden" value="{{ $get_periods['id_section'] }}" name="id_section"/>
        
            <div class="table-responsive">
                <table class="table table-borderd" id="timetable-setter-table">
                    <tbody>
                    @for ($day_num = 1; $day_num <= $get_periods['days']; $day_num++)

                    <tr>
                        <th>{{ \App\Helpers\EmpAccess::instance()->getDaysName($day_num) }}</th>
                        
                        @for ($period_num = 1; $period_num <= (int) $get_periods['selected_periods'][$day_num]; $period_num++)
                            <td class="form-group text-center">
                                <label class="control-label">Period {{ $period_num }}</label>
                                <input type="hidden" name="id_subject[{{ $day_num }}][{{ $period_num }}]" required=""/>
                                <select class="form-control id-teacher" name="employees_info[{{ $day_num }}][{{ $period_num }}]" data-day="{{ $day_num }}" data-period="{{ $period_num }}" required> 
                                  <option value="">--Select Teacher--</option>
                                  @if($employee_list)
                                       @foreach($employee_list as $key => $employee)
                                       <option value="{{ $employee->id_emp }}">{{ $employee->emp_name }}</option>
                                       @endforeach
                                  @endif
                                </select>
                                <label><span class="selected-subject"></span></label>
                            </td>
                        @endfor
                    </tr>
                    
                    @endfor                
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><button type="submit" class="btn btn-primary">Save Details</button></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>

    </div>                        
    

    <!-- /tile body -->

    </section>

    <!-- /tile -->

    </div>

</div>


</div>
@endif

</div>

</div>

</section>
<!--/ CONTENT -->

<div id="selectSubjectModel" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <form role="form" class="box" method="POST" action="{{ route('staff.set-timetable') }}"> 
    <input type="hidden" name="id_teacher" required=""/>
    <input type="hidden" name="day" required=""/>
    <input type="hidden" name="period" required=""/>
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Select Subject: </h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <select class="form-control" name="id_subject" required="">
                        <option value="">Select</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-blue">Select</button>
        </div>
    </div>
    </form>
  </div>
</div>

<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
@section('footer_scripts')
<script type="text/javascript">
jQuery(function($){
    $('.id-teacher').select2();
    
    $('.id-teacher').on('change', function(){
        var id_teacher = $(this).val();
        var day = $(this).data('day');
        var period = $(this).data('period');
        var selectContainer = $(this).closest('td.form-group');
        selectContainer.find('input[name="id_subject['+day+']['+period+']"]').val('');
        
        $('#selectSubjectModel form').trigger('reset');
        $('#selectSubjectModel form select[name="id_subject"] option[valuable="1"]').remove();
        
        $.ajax({
            method: "GET",
            url: "{{ route('staff.set-timetable') }}",
            dataType:'json',
            data: {
                'id_teacher': id_teacher
            }, 
            success: function(response) {
                var options = '';
                $.each(response, function(k, v) {
                    options += '<option value="'+v.id+'" valuable="1">'+v.title+'</option>';
                });     

                $('#selectSubjectModel form input[name="id_teacher"]').val(id_teacher);
                $('#selectSubjectModel form input[name="day"]').val(day);
                $('#selectSubjectModel form input[name="period"]').val(period);
                
                $('#selectSubjectModel form select[name="id_subject"]').append(options);
                $('#selectSubjectModel form select[name="id_subject"]').select2({
                    width: '100%',
                });
                
                $('#selectSubjectModel').modal('show');
            }
        });
        
    });
    
    $('#selectSubjectModel form').submit(function(e){
        e.preventDefault();
        var id_teacher = $(this).find('input[name="id_teacher"]').val();
        var day = $(this).find('input[name="day"]').val();
        var period = $(this).find('input[name="period"]').val();
        var id_subject = $(this).find('select[name="id_subject"]').val();
        var subject = $(this).find('select[name="id_subject"] option:selected').text();
        var getSelector = $('#timetable-setter-table').find('select[data-day="'+day+'"][data-period="'+period+'"]');
        var selectContainer = getSelector.closest('td.form-group');
        
        selectContainer.find('input[name="id_subject['+day+']['+period+']"]').val(id_subject);
        selectContainer.find('span.selected-subject').text('Selected Subject: '+subject);
        $('#selectSubjectModel').modal('hide');
    });
});
</script>
@endsection

@endsection
