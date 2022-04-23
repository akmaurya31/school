<div class="tile-body" id="content-tabs-nope">
  <ul class="nav nav-pills">
    <li class="@if(isset($school1_template)) {{ $school_template }} @endif "><a href="{{ route('sms.school-template') }}">School</a></li>
    <li class="@if(isset($staff_template)) {{ $staff_template }} @endif "><a href="{{ route('sms.staff-template') }}">Staff</a></li>
    <li class="@if(isset($students_template)) {{ $students_template }} @endif "><a href="{{ route('sms.students-template') }}">Student</a></li>
    <li class="@if(isset($guardian_template)) {{ $guardian_template }} @endif "><a href="{{ route('sms.guardian-template') }}">Guardian</a></li>
    <li class="@if(isset($groups_template)) {{ $groups_template }} @endif "><a href="{{ route('sms.groups-template') }}">Group</a></li> 
  </ul>
</div>
