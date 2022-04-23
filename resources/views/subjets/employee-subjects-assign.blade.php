@extends('layouts.admin_header')
    @section('title', 'Subject Options')
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
<a href="javascript:void(0)">Add Subjects</a>
</li>
</ul>
<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>
</div>
</div>

@if(!$edited_clssubject)
<div class="akform_holder ">
<div class="row">
  <div class="col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <strong>Add Subjects</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <form role="form" class="box form-horizontal" method="POST" action="{{ route('staff.emp-subject-add') }}" enctype="multipart/form-data">    
                {{ csrf_field() }}
                <input type="hidden" value="{{ $edited_subject ? 'edit' : 'add' }}_subjectmaster" name="action_type"/>
                @if($edited_subject)
                <input type="hidden" value="{{ $edited_subject->id }}" name="id_subject" required=""/>
                @endif
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Subject Name</label>
                        <input type="text" class="form-control" value="{{ $edited_subject ? $edited_subject->title : '' }}" name="title" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <button type="submit" class="btn btn-primary">Save Subject</button>
                    </div>
                </div>    
            </form>
        </div>
        <!-- /tile body-->
    </section>
  </div>

  <div class="col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <strong>Subjects List</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <div class="table-responsive ak_table ak_table2 ak_dtablestyle">
                <table class="table table bordered" id="datatable1">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($subjects)
                        @foreach($subjects as $key => $subject)
                        <tr>
                            <td></td>
                            <td>{{ $subject->title }}</td>
                            <td class="ak_actionbtns">
                                <a href="{{ route('staff.emp-subject-edit', [base64_encode($subject->id)]) }}"  class="action_icons edt"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0);" onclick="return quickConfirm('', '{{ route('admin.remove-records', ['subjectsmaster', 'id', base64_encode($subject->id), base64_encode(route('staff.emp-subject-add'))]) }}');" class="action_icons del"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
        <!-- /tile body-->
    </section>
  </div>

</div>
</div>
@endif
<div class="akform_holder ">
<div class="row">
  <div class="col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <strong>Add Subjects in Classes</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <form role="form" class="box form-horizontal" method="POST" action="{{ route('staff.emp-subject-add') }}" enctype="multipart/form-data">    
                {{ csrf_field() }}
                <input type="hidden" value="{{ $edited_clssubject ? 'edit' : 'assign' }}_subjects_to_class" name="action_type"/>
                @if($edited_clssubject)
                <input type="hidden" value="{{ $edited_clssubject->id }}" name="id_clssubject" required=""/>
                @endif
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Select Class</label>
                        <select class="form-control" name="id_class" required="">
                            <option value="">Select Class</option>
                            @if($classes)
                                @foreach($classes as $key => $class)
                                <option value="{{ $class->id_class }}"  {{ $edited_clssubject && $edited_clssubject->id_class == $class->id_class ? ' selected="true"' : "" }} >{{ $class->class_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Select{{ $edited_clssubject ? 'ed' : '' }} Subjects</label>
                        <select class="form-control" name="id_subjects[]" id="id-subjects" multiple="true" required="">
                            <option value="">Select Subject</option>
                            @if($subjects)
                                @foreach($subjects as $key => $subject)
                                <option value="{{ $subject->id }}" {{ $edited_clssubject && in_array($subject->id, unserialize($edited_clssubject->id_subjects)) ? ' selected="true"' : '' }}>{{ $subject->title }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>    
            </form>
        </div>
        <!-- /tile body-->
    </section>
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
    <strong>Subjects Classeswise</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <div class="table-responsive ak_table ak_table2 ak_dtablestyle">
                <table class="table table bordered" id="datatable1">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Class</th>
                            <th>Subjects</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($class_subjects)
                        @foreach($class_subjects as $key => $subject)
                        <tr>
                            <td></td>
                            <td>{{ $subject->class_name }}</td>
                            <td>
                                @if($subject->subjects)
                                @foreach($subject->subjects as $csubject)
                                <p>{{ $csubject->title }}</p>
                                @endforeach
                                @endif
                            </td>
                            <td class="ak_actionbtns" style="min-height: 60px;">
                                <a href="{{ route('staff.emp-classsubject-edit', [base64_encode($subject->id)]) }}"  class="action_icons edt"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0);" onclick="return quickConfirm('', '{{ route('admin.remove-records', ['class_subject_assign', 'id', base64_encode($subject->id), base64_encode(route('staff.emp-subject-add'))]) }}');" class="action_icons del"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
        <!-- /tile body-->
    </section>
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
    <strong>Assign Classes to Teachers</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <form role="form" class="box form-horizontal" method="POST" action="{{ route('staff.emp-subject-add') }}" enctype="multipart/form-data">    
                {{ csrf_field() }}
                <input type="hidden" value="{{ $edited_empclasses ? 'edit' : 'assign' }}_classes_to_employee" name="action_type"/>
                @if($edited_empclasses)
                <input type="hidden" value="{{ $edited_empclasses->id }}" name="id_empclasses" required=""/>
                @endif
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Select Teacher</label>
                        <select class="form-control" name="id_employee" required="">
                            <option value="">--  --</option>
                            @if($employee_list)
                                @foreach($employee_list as $key => $employee)
                                <option value="{{ $employee->t_id }}" {{ $edited_empclasses && $edited_empclasses->id_employee == $employee->t_id ? ' selected="true"' : '' }} >{{ $employee->t_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Select{{ $edited_empclasses ? 'ed' : '' }} Class{{ $edited_empclasses ? 'es' : '' }}</label>
                        <select class="form-control" name="id_classes[]" multiple="true" required="">
                            <option value="">Select Class</option>
                            @if($classes)
                                @foreach($classes as $key => $class)
                                <option value="{{ $class->id_class }}" {{ $edited_empclasses && in_array($class->id_class, unserialize($edited_empclasses->id_classes)) ? ' selected="true"' : '' }}>{{ $class->class_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>    
            </form>
        </div>
        <!-- /tile body-->
    </section>
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
    <strong>Classes assigned to teachers</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <div class="table-responsive ak_table ak_table2 ak_dtablestyle">
                <table class="table table bordered" id="datatable1">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Teacher</th>
                            <th>Classes</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($employee_classes)
                        @foreach($employee_classes as $key => $empclasses)
                        <tr>
                            <td></td>
                            <td>{{ $empclasses->employee_name }}</td>
                            <td>
                                @if($empclasses->classes)
                                @foreach($empclasses->classes as $empClass)
                                <p>{{ $empClass->class_name }}</p>
                                @endforeach
                                @endif
                            </td>
                            <td class="ak_actionbtns" style="min-height: 60px;">
                                <a href="{{ route('staff.emp-classes-edit', [base64_encode($empclasses->id)]) }}"  class="action_icons edt"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0);" onclick="return quickConfirm('', '{{ route('admin.remove-records', ['employee_classes', 'id', base64_encode($empclasses->id), base64_encode(route('staff.emp-subject-add'))]) }}');" class="action_icons del"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            
        </div>
        <!-- /tile body-->
    </section>
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
    <strong>Assign Period</strong></h1>
    </div>
    <!-- /tile header -->
        <!-- tile body-->
        <div class="tile-body">
            <form role="form" class="box form-horizontal" method="POST" action="{{ route('staff.emp-subject-add') }}" enctype="multipart/form-data">    
                {{ csrf_field() }}
                <input type="hidden" value="add_periods_in_class_section" name="action_type"/>
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Select Class</label>
                        <select class="form-control" name="id_class" id="id-class" required="">
                            <option value="">----</option>
                            @if($classes)
                                @foreach($classes as $key => $class)
                                <option value="{{ $class->id_class }}">{{ $class->class_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Select Section</label>
                        <select class="form-control" name="id_section" id="id-section" required="">
                            <option value="">----</option>
                            @if($sections)
                                @foreach($sections as $key => $section)
                                <option value="{{ $section->id_section }}">{{ $section->section_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label class="control-label">Number of Periods</label>
                        <input type="text" class="form-control number-inpt" name="period_num" required="" maxlength="1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>    
            </form>
        </div>
        <!-- /tile body-->
    </section>
  </div>
</div>
</div>

</div>
</div>

</section>
<!--/ CONTENT -->

<!--/ Application Content -->
<!-- modal popup -->
<div id="editAppModuleModal" class="modal fade ak_modal-style">

    <form role="form" class="box" method="POST" action="{{ route('appControl.module-settings') }}">    
    
      {{ csrf_field() }}
      
      <input type="hidden" value="update_module_status" name="action_type"/>
      <input type="hidden" value="" name="id_module"/>

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header bg-blue">

          <h3 class="modal-title custom-font">Edit</h3>

          <a class="modal-close" href="" data-dismiss="modal"><i class="fa fa-close"></i></a>

      </div>

      <div class="modal-body">

        <div class="row">
          <div class="form-group col-sm-6">
            <label for="moduleInp">Module</label>
            <input type="text" class="form-control" name="module_name" id="module-name" required>   
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="moduleInp">Status</label>
            <select class="form-control" name="module_status" id="module-status" required>
                <option value="">------</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
          </div>
        </div>

      </div>

      <div class="modal-footer">

          <!-- <a role="button" href="http://oracleinfotech.in/demoschool/schoolmgt/admin/staff/6" class="btn btn-blue" target="_blank" id="view_url">View Full Details</a> -->

          <a role="button" class="btn btn-danger" data-dismiss="modal">Close</a>
        <button type="submit" class="btn btn-primary">Save Details</button>

      </div>

    </div>

      <!-- modal content -->

    </div>
   </form>
</div>
<!-- /modal popup -->
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
@section('footer_scripts')
<script type="text/javascript">
$(function(){
    $('select[name="id_employee"], select[name="id_subjects[]"], select[name="id_class"],select[name="id_classes[]"], select[name="id_section"]').select2();
});
</script>
@endsection

@endsection
