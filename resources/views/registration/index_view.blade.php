@extends('layouts.admin_header')

@section('title', 'Registration Student List')

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

<a href="index.html">Registration Student Listxx</a>

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

        <form role="form" action="{{ url('admin/registration/student_filter') }}" method='get'>
        {{ @csrf_field() }}

        @if(isset($test_new_reg))
        <input type="hidden" name="action_type" value="add_test_marks_step" />
        @endif

        @if(isset($selected_student))
        <input type="hidden" name="action_type" value="get_selected_student" />
        @endif
        <div class="row">


<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <label for="acdYear">Academic Year *</label>
    <select class="form-control ak_select2" name="id_session" required>
    @if($sessions)
    <option value="">Please Select</option>
        @foreach($sessions as $key => $session)
        <option value="{{ $session->Classid }}" {{ app('request')->input('id_session') == $session->Classid ? ' selected=""' : '' }}>{{ $session->ClassSession }}</option>
        @endforeach
    @endif
    </select>
</div>
<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <label for="sems">Semesters *</label>
    <select class="form-control ak_select2" name="semester" required>
        <option value="">Please Select</option>
        <option value='1' {{ app('request')->input('semester') == 1 ? ' selected=""' : '' }}>Semester 1</option>
        <option value='2' {{ app('request')->input('semester') == 2 ? ' selected=""' : '' }}>Semester 2</option>
        <option value='3' {{ app('request')->input('semester') == 3 ? ' selected=""' : '' }}>Semester 3</option>
    </select>
</div>
<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <label for="class">Class *</label>
    <select class="form-control ak_select2" name="id_class" required>
    @if($classes)
    <option value="">Please Select</option>
        @foreach($classes as $key => $class)
        <option value="{{ $class->Classid }}" marks="{{ $class->marks }}" {{ app('request')->input('id_class') == $class->Classid ? ' selected=""' : '' }}>{{ $class->ClassNo }}</option>
        @endforeach
    @endif
    </select>
</div>
<div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <label for="class">Section *</label>
    <select class="form-control ak_select2" name="id_section" required>
    @if($sections)
    <option value="">Please Select</option>
        @foreach($sections as $key => $section)
        <option value="{{ $section->Classid }}" {{ app('request')->input('id_section') == $section->Classid ? ' selected=""' : '' }}>{{ $section->ClassSection }}</option>
        @endforeach
    @endif
    </select>
</div>

@if(isset($selected_student))
    <div class="form-group col-md-3">
        <label for="get_marks_obt">Search by Marks *</label>
        <input type="hidden" name="class_total_marks" />
        <input type='number' step=".01" min="0" class="form-control" required name='get_marks_obt' autocomplete='off' value="{{ isset($data['out_off_marks']) ? $data['out_off_marks'] : '' }}"/>
    </div>
    <div class="form-group col-md-5">
        <label>&nbsp;</label>
        <h4>Marks in (%) Out of <span id="marks-text">00.00</span> : <strong><span id="get-marks_percentage">0</span>%</strong></h4>
    </div>

@endif

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

</div>

<!-- /tile header -->

<!-- tile body -->

<div class="tile-body ak_table ak_table2 ak_dtablestyle student_list_page">



<div class="table-responsive table_ws_nowrap">
<table class="table mb-0 students-filtered-table" id="datatable1" style="width:100%">

<thead>

<tr>

    <th><input type="checkbox" id="basic_checkbox_2" class="filled-in"/>
                                                <label for="basic_checkbox_2"></label></th>

    <th>S.No</th>

    <th>Reg. ID</th>
    
    <th class="stl_th3">Name</th>
    
    <th class="stl_th3">Date of Birth</th>


    @if(isset($reg) || isset($selected_student))

    <th class="stl_th26">Category</th>

    @endif


    <th class="stl_th23">Father Name</th>
    
    <th class="stl_th26">Father Mobile</th>

    @if(isset($reg) || isset($selected_student))

    <th class="stl_th26">Father Occupation</th>

    <th class="stl_th26">Email</th>

    @endif

    @if(isset($selected_student))
    <th class="stl_th26">Marks Obtained</th>
    @endif
    
    @if(isset($test_new_reg))
    <th class="stl_th26">Present Status</th>
    
    <th class="stl_th26">Marks Obtained</th>

    <th class="stl_th26">Total Marks</th>
    
    <th class="stl_th26">Admission Date</th>
    @endif

    @if(isset($reg))
    <th class="stl_th26">Admission Date</th>    
    <th class="stl_th20 action_icons_th">Action</th>
    @endif

</tr>

</thead>

<tbody>

  @foreach($students as $key)
  <tr id-student="{{ $key->s_id }}">
    @if($key->present_status == 'Present')
    <td><input type="checkbox" name="basic_checkbox[<?=$key->id?>]" class="checkAll" value="<?=$key->id?>"/></td>
    </td>
    @else
    <td></td>
    @endif
  
    <td>{{ $loop->iteration }}</td>

    <td>{{ $key->s_registered }}</td>

    <td>{{ $key->s_first_name }} {{ $key->s_last_name}}</td>
    
    <td>{{ date('d-m-Y',strtotime($key->s_dob)) }}</td>

    @if(isset($reg) || isset($selected_student))

    <td>{{ $key->s_category_id }}</td>
    
    @endif

    
    <td>{{ $key->s_father_name }}</td>
    
    <td>{{ $key->s_father_mobile }}</td>
    
    @if(isset($reg) || isset($selected_student))
    
    <td>{{ $key->s_father_occupation }}</td>
    <td>{{ $key->s_email }}</td>

    @endif

    @if(isset($selected_student))
    <td>{{ $key->marks }}</td>
    @endif


    @if(isset($test_new_reg))

    <td class="present_status__sutdent">
        <select name="present_status" class='form-control'>
            <option value="">--Please Select--</option>
            <option value='Present' {{ $key->present_status == 'Present' ? 'selected' : '' }}>Present</option>
            <option value='Absent' {{ $key->present_status__sutdent == 'Absent' ? 'selected' : '' }}>Absent</option>
       </select>
    </td>
    <td class="marks___sutdent">
        <input name="mark" type='number' dump-mark="{{ $key->marks }}" value="{{ $key->marks }}" class='form-control'>
    </td>

    <td class="text-center total-marks">500</td>

    <td class="adm_date___sutdent">
        <div class="input-group datepicker" data-format="L">
            <input type='text' class="form-control" required name='adm_date' autocomplete='off' value="{{ date('m/d/Y',strtotime($key->admission_date)) }}"/>  
            <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
            </span>
        </div>
    </td>
    @endif

    @if(isset($reg))
    <td class="text-center total-marks">{{ date('Y-m-d',strtotime($key->s_adm_date)) }}</td>
    <td>

        <div class="ak_actionbtns">
            
<!--             <a href="#" onclick="return update_student({{$key->s_id}})" class="action_icons opt" title='update'><i class="fa fa-refresh" aria-hidden="true"></i></a>
 -->            
            <a href="javascript:void(0);" id-student="{{ $key->s_id }}" class="action_icons opt quick-view-mess" target='_blank'><i class="fa fa-eye"></i></a>
            
            <a href="{{url('admin/registration/edit/'.$key->s_id) }}" class="action_icons edt" target="_blank"><i class="fa fa-pencil"></i></a>  
            
            <a href="#" onclick="return delete_student({{$key->s_id}})"  class="action_icons del"><i class="fa fa-trash-o"></i></a>

        </td>
    @endif
    

  </tr>

  @endforeach
  
  

</tbody>
</table>

</div>
<div class="footer-aera">
    <button onclick="return update_student();" class="btn btn-success btn-flat" type="button" name="update_student_marks_bulk"><i class="fa fa-refresh" aria-hidden="true"></i> Save Marks</button>
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

<div id="myViewStdDetModal" class="modal fade">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
      </div>
    <div class="modal-body row">
        
    </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-red">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>



<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
@section('footer_scripts')
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
    
    function update_student(i=false)
    {
        var studentArr = [];
        $("table.students-filtered-table tbody tr").each(function(){

            var id_student = $(this).attr('id-student');
            var present_status = $(this).find('td.present_status__sutdent select[name="present_status"]').val();
            var marks = $(this).find('td.marks___sutdent input[name="mark"]').val();
            var adm_date = $(this).find('td.adm_date___sutdent input[name="adm_date"]').val();
            studentArr.push(id_student+','+present_status+','+marks+','+adm_date);
            //studentArr.push(id_student['present_status', present_status]);
        });

        $.ajax({                        
            url: '{{ url("admin/registration/update_information") }}',                      
            type: 'POST',                       
            data: {
                "studentArr": studentArr, 
                "_token": "{{ csrf_token() }}"
            },      
            dataType: 'json',                       
            success: function (argument) {  
                if(argument['status']){
				    swal({
				      title: 'Details Updated Successfully!',
				      text: "Entry recorded",
				      icon: "success",
				      button: "OK",
				    });    
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
    
    $(document).ready(function(){
        $('#basic_checkbox_2').click(function(){
				if($(this).prop("checked")) {
					$(".checkAll").prop("checked", true);
				} else {
					$(".checkAll").prop("checked", false);
				}                
		}); 
		
		$(".save_selected").click(function(){
		   	var val = [];
            $('.checkAll:checked').each(function(i){
              val[i] = $(this).val();
            });
    		if(val.length>0){
    			if(confirm('Are you sure you want to save selected students')){
    				var res= val.join('#');
    				$.ajax({                        
    					url: '{{ url("admin/registration/save_selected") }}',                      
    					type: 'GET',                       
    					data: {bulk_value:res},      
    					dataType: 'json',                       
    					success: function (argument) {  
    						if(argument['status'])
    						{
    							alert(argument['msg']);
    							location.reload();
    						}
    					},  
    					error: function (hrx, ajaxOption, errorThrow) {     
    						console.log(ajaxOption);                        
    						console.log(errorThrow);                        
    							}                   
    				});
                }				
    		}else{
    			alert('select student name firstly');
    		}
    		return false;
		});
		
    });
    
$(document).on('change', 'select[name="present_status"]', function(){
    if ($(this).val() == 'Absent') {
        $(this).closest('tr').find('input[name="mark"]').val('');
        $(this).closest('tr').find('input[name="mark"]').prop('readonly', true);
        $(this).closest('tr').find('.total-marks').text('')
    }else{

        $(this).closest('tr').find('input[name="mark"]').val($(this).closest('tr').find('input[name="mark"]').attr('dump-mark'));
        $(this).closest('tr').find('input[name="mark"]').prop('readonly', false);
        $(this).closest('tr').find('.total-marks').text('500')
    }
}) ; 

$(document).on('click', '.quick-view-mess', function(e){
  e.preventDefault();
  var id_student = $(this).attr('id-student');
  $.ajax({
      method: "GET",
      url: '/admin/registration/show/'+id_student+'/?from_ajax=1',
      dataType:'json',
      success: function(response)
      {
        var table = '';
        table += '<div class="table-responsive">';
          table += '<table class="table table-bordered">';
          $.each(response, function(k, v) {
            if (
                k == 's_birth' 
                || k == 's_char_cer'
                || k == 's_image_url'
                || k == 's_tc'
                || k == 's_father_education'
                || k == 's_father_income'
                || k == 's_father_mobile'
                || k == 's_father_name'
                ) {
                var header_txt = k.replace('s_', ' ').replace('_', ' ').toUpperCase();
                var body_txt = v;
                if (k == 's_birth') {
                    header_txt = 'Birth Certificate';
                    body_txt = '<a target="_blank" href="/public/documents/'+v+'" class="text-success"><strong>Click here to view</strong></a>'
                }
                if (k == 's_char_cer') {
                    header_txt = 'Character Certificate';
                    body_txt = '<a target="_blank" href="/public/documents/'+v+'" class="text-success"><strong>Click here to view</strong></a>'
                }
                if (k == 's_image_url') {
                    header_txt = 'Uploaded Photo';
                    body_txt = '<a target="_blank" href="/public/documents/'+v+'" class="text-success"><strong>Click here to view</strong></a>'
                }
                if (k == 's_tc') {
                    header_txt = 'Transfer Certificate';
                    body_txt = '<a target="_blank" href="/public/documents/'+v+'" class="text-success"><strong>Click here to view</strong></a>'
                }
                table += '<tr><th>'+header_txt+'</th><td>'+body_txt+'</td></tr>'; 
            }
          });         
          table += '</table>';
        table += '</div>';
        $("#myViewStdDetModal .modal-body").html(table);
        $("#myViewStdDetModal").modal('show');
      }
  });
});

$(document).on('keyup', 'input[name="get_marks_obt"]', function(){
    if ($(this).val() != '') {
        var marks_obt = parseFloat($(this).val());
        var total_marks = parseFloat($('input[name="class_total_marks"]').val());
        if (marks_obt > total_marks) {
            alert('Obtained marks must be below from total marks');
            $(this).val('');
            $('#get-marks_percentage').text('0');
            return ;
        }
        var percentage_marks = (marks_obt * 100)/total_marks;
        $('#get-marks_percentage').text(percentage_marks.toFixed(2));
    }
});

$(document).on('change', 'select[name="id_class"]', function(){
    var marks = $(this).find('option:selected').attr('marks');
    $('input[name="class_total_marks"]').val(marks);
    $('#marks-text').text(marks);
    $('#get-marks_percentage').text('');
}) ; 


</script>
@endsection

@endsection