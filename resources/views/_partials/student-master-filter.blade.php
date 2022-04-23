<form role="form"  method="POST" action="{{ $action_route }}">
    {{ csrf_field() }}

    <input type="hidden" value="search_registered_students" name="action_type"/>    
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
                <option value="{{ $class->Classid }}" {{ app('request')->input('id_class') == $class->Classid ? ' selected=""' : '' }}>{{ $class->ClassNo }}</option>
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

        <div class="submit-holder form-group col-sm-12"> 
            <button type="submit" class="btn btn-blue">Filters<i class="fa fa-filter"></i></button> 
        </div>

    </div>           
</form>