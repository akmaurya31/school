<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Clear cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Routes cached</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
Route::get('home', 'WelcomeController@index')->name('home');
Route::get('/', 'WelcomeController@index')->name('home');
Route::get('/admin-login','LoginController@admin_login')->name('admin-login');
Route::get('/parent-login','LoginController@parent_login')->name('parent-login');
Route::get('/teacher-login','LoginController@teacher_login')->name('teacher-login');
Route::get('/accounts-login','LoginController@accounts_login')->name('accounts-login');
Route::get('/reception-login','LoginController@reception_login')->name('reception-login');
Route::get('/student-login','LoginController@student_login')->name('student-login');
Route::post('login/admin-login-request', 'LoginController@admin_login_request')->name('login.admin-login-request');
Route::post('login/parent-login-request', 'LoginController@parent_login_request')->name('login.parent-login-request');
Route::post('teacher-login-request', 'LoginController@teacher_login_request')->name('teacher-login-request');
Route::post('login/student-login-request', 'LoginController@student_login_request')->name('login.student-login-request');
Route::post('reception-login-request', 'LoginController@reception_login_request')->name('login.reception-login-request');
Route::post('accounts-login-request', 'LoginController@accounts_login_request')->name('accounts-login-request');


Route::group(['middleware' => ['auth','revalidate']], function () {
    //
    

    
    
    Route::get('/admin-dashboard','AdminController@index')->name('admin-dashboard');
    
    Route::get('/admin-setting','AdminController@setting')->name('admin-setting');
    
    Route::post('/admin-update-password','AdminController@update_password')->name('admin-update-password');
    
    Route::get('/admin-logout','AdminController@logout')->name('admin-logout');
    
    Route::get('/classes/delete-class', ['uses' => 'ClassController@delete_class', 'as' => 'classes.delete-class']);
    
    Route::resource('/classes','ClassController',['name'=>'classes']);

    Route::get('/student/create-new', ['uses' => 'StudentController@create', 'as' => 'student.createNew']);

    Route::post('/admin/student/update/{id}', ['uses' => 'StudentController@update', 'as' => 'student.update']);
    

    Route::get('/student/getsection', ['uses' => 'StudentController@getsection', 'as' => 'student.getsection']);
    
    Route::get('/student/getvehicle', ['uses' => 'StudentController@getvehicle', 'as' => 'student.getvehicle']);
    
    Route::get('/student/getroom', ['uses' => 'StudentController@getroom', 'as' => 'student.getroom']);
    
    Route::get('/student/student-list', ['uses' => 'StudentController@student_list', 'as' => 'student.student-list']);
    
    Route::get('/student/delete-student', ['uses' => 'StudentController@delete_student', 'as' => 'student.delete-student']);
    
    Route::post('/studnet/student-filter', ['uses' => 'StudentController@student_filter', 'as' => 'student.student-filter']);
    
    Route::get('/student/import-students', ['uses' => 'StudentController@import_students', 'as' => 'student.import-students']);
    
    Route::post('/student/insert-import', ['uses' => 'StudentController@insert_import', 'as' => 'student.insert-import']);
    
    Route::get('/student/delete-bulk', ['uses' => 'StudentController@delete_bulk', 'as' => 'student.delete-bulk']);
    
    Route::get('/student/parents-list', ['uses' => 'StudentController@parents_list', 'as' => 'student.parents-list']);
    
    Route::get('/student/active-account', ['uses' => 'StudentController@active_account', 'as' => 'student.active-account']);
    
    Route::get('/student/deactive-bulk', ['uses' => 'StudentController@deactive_bulk', 'as' => 'student.deactive-bulk']);
    
    Route::get('/student/deactive-list', ['uses' => 'StudentController@deactive_list', 'as' => 'student.deactive-list']);
    
    Route::post('/studnet/deactive-filter', ['uses' => 'StudentController@deactive_filter', 'as' => 'student.deactive-filter']);
    
    Route::get('/student/student-detail', ['uses' => 'StudentController@student_detail', 'as' => 'student.student-detail']);

    Route::get('/student/student-profile', ['uses' => 'StudentController@student_profiler', 'as' => 'student.student-profiler']);

    Route::get('/student/student-feedback', ['uses' => 'StudentController@student_feedback', 'as' => 'student.student-feedback']);
    
    Route::get('/student/reset_password','StudentController@reset_password');
    
    Route::resource('/student','StudentController',['name'=>'student']);
    
    
    #hostel category
    
    Route::get('/admin/delete-hostel-category', ['uses' => 'HostalCategoryController@delete_category', 'as' => 'hostel-category.delete_hostel_category']);
    Route::resource('admin/hostel-category','HostalCategoryController',['name'=>'hostel-category']);
    
    #hostel
    Route::resource('admin/hostel','HostelController',['name'=>'hostel']);
    Route::get('admin/add-hostel', 'HostelController@hostelmgt')->name('admin.add-hostel');
    Route::get('admin/add-block', 'HostelController@hostelmgt')->name('admin.add-block');
    Route::get('admin/add-floor', 'HostelController@hostelmgt')->name('admin.add-floor');
    Route::get('admin/add-room', 'HostelController@hostelmgt')->name('admin.add-room');
    Route::get('admin/add-bed', 'HostelController@hostelmgt')->name('admin.add-bed');
    
    Route::get('admin/edit-hostel/{id}', 'HostelController@hostelmgt')->name('admin.edit-hostel');
    Route::get('admin/get-row-data/{table}/{id}/{value}', 'HostelController@get_row_data')->name('admin.edit-hostel');
    Route::get('admin/edit-block/{id}', 'HostelController@hostelmgt')->name('admin.edit-block');
    Route::get('admin/edit-floor/{id}', 'HostelController@hostelmgt')->name('admin.edit-floor');
    Route::get('admin/edit-room/{id}', 'HostelController@hostelmgt')->name('admin.edit-floor');
    Route::get('admin/edit-bed/{id}', 'HostelController@hostelmgt')->name('admin.edit-floor');
    Route::post('admin/hostel-operations', 'HostelController@opertaions')->name('admin.hostel-operations');
    Route::get('admin/remove-records/{table}/{column}/{value}/{returnpath}', 'HostelController@remove_records')->name('admin.remove-records');
    Route::get('admin/bulk-operations/{type}/{table}/{targetids}/{returnpath}', 'HostelController@hostels_bulk_ope')->name('admin.bulk-operations');

    Route::post('admin/hostel-operations', 'HostelController@opertaions');
    Route::post('admin/hostel-admission', 'HostelController@hostelAdmission')->name('admin.hostel-admission');
    Route::get('admin/hostel-admission', 'HostelController@hostelAdmission')->name('admin.hostel-admission');
    Route::get('admin/hostel-guest-room', 'HostelController@guestRoomCreate')->name('admin.hostel-guest-room');
    Route::post('admin/hostel-guest-room', 'HostelController@guestRoomCreate')->name('admin.hostel-guest-room');
    Route::get('admin/Hostel/guestRoomAssign', 'HostelController@guestRoomAssign')->name('admin.guestRoomAssign');
    Route::post('admin/Hostel/guestRoomAssign', 'HostelController@guestRoomAssign')->name('admin.guestRoomAssign');
    Route::get('admin/Hostel/guestDetails', 'HostelController@guestDetails')->name('admin.guestDetails');
    Route::post('admin/Hostel/guestDetails', 'HostelController@guestDetails')->name('admin.guestDetails');
    Route::get('admin/Hostel/newVisitor', 'HostelController@newVisitor')->name('admin.newVisitor');
    Route::post('admin/new-visitor', 'HostelController@newVisitor');

    Route::get('admin/leave-management', 'HostelController@leave_management')->name('leave.add_request');
    Route::get('admin/leave-management/{action}/{id}', 'HostelController@leave_management')->name('leave.add_request');
    Route::post('admin/leave-management', 'HostelController@leave_management')->name('leave.add_request');

    Route::get('admin/leave-list', 'HostelController@leave_list')->name('leave.all_list');
    Route::post('admin/leave-list', 'HostelController@leave_list')->name('leave.get_leave_requests');

    Route::get('admin/Hostel/inoutRecord', 'HostelController@inoutRecord')->name('admin.inoutRecord');
    Route::get('admin/Hostel/inoutRecord/{action}/{id}', 'HostelController@inoutRecord')->name('admin.inoutRecord');
    Route::post('admin/Hostel/inoutRecord', 'HostelController@inoutRecord')->name('admin.inoutRecord');
    Route::get('admin/Hostel/mess', 'HostelController@mess')->name('admin.mess');
    Route::get('admin/Hostel/mess/{edit}/{id}', 'HostelController@mess')->name('admin.mess-edit');
    Route::post('admin/Hostel/mess', 'HostelController@mess')->name('admin.mess');
    Route::get('admin/Hostel/studentLeave', 'HostelController@studentLeave')->name('admin.studentLeave');
    Route::post('admin/Hostel/studentLeave', 'HostelController@studentLeave')->name('admin.studentLeave');
    Route::get('admin/hostel-fees-management', 'HostelController@hostelFeeCreate')->name('admin.hostel-fees-management');
    Route::post('admin/hostel-fees-management', 'HostelController@hostelFeeCreate')->name('admin.hostel-fees-management');    
    Route::get('admin/Hostel/hostelFeeSearch', 'HostelController@hostelFeeSearch')->name('admin.hostelFeeSearch');
    Route::post('admin/Hostel/hostelFeeSearch', 'HostelController@hostelFeeSearch')->name('admin.hostelFeeSearch');
    Route::post('admin/show-invoice', 'HostelController@showInvoice')->name('admin.show-invoice');
    Route::get('admin/show-invoice/{id}', 'HostelController@showInvoice')->name('admin.show-invoice');
    Route::get('admin/admin-hostel-vacate', 'HostelController@hostelVacate')->name('admin.admin-hostel-vacate');
    Route::post('admin/admin-hostel-vacate', 'HostelController@hostelVacate')->name('admin.admin-hostel-vacate');
    
    #room
    Route::get('/admin/delete-room', ['uses' => 'RoomController@delete_room', 'as' => 'room.delete_room']);
    Route::resource('admin/room','RoomController',['name'=>'room']);
    
    #Parent Login
    
    Route::get('/parent-dashboard','ParentController@index')->name('parent-dashboard');
    
    Route::get('/parent-setting','ParentController@setting')->name('parent-setting');
    
    Route::post('/parent-update-password','ParentController@update_password')->name('parent-update-password');
    
    Route::get('/parent-logout','ParentController@logout')->name('parent-logout');
    
    Route::get('/parents/student-list','ParentController@student_list')->name('parents.student-list');
    
    Route::get('/admin/delete-department', ['uses' => 'DepartmentController@delete_department', 'as' => 'admin.delete_department']);
    Route::resource('admin/department','DepartmentController',['name'=>'department']);
    
    Route::get('/admin/delete-designation', ['uses' => 'DesignationController@delete_designation', 'as' => 'admin.delete_designation']);
    Route::resource('admin/designation','DesignationController',['name'=>'designation']);
    
    Route::get('/admin/delete-staff', ['uses' => 'StaffController@delete_staff', 'as' => 'staff.delete-staff']);
    Route::get('/staff/get-designation', ['uses' => 'StaffController@get_designation_drop', 'as' => 'staff.get-designation']);
    Route::get('/staff/delete-bulk', ['uses' => 'StaffController@delete_bulk', 'as' => 'staff.delete-bulk']);
    Route::post('/staff/staff-filter', ['uses' => 'StaffController@staff_filter', 'as' => 'staff.staff-filter']);
    Route::get('/staff/reset_password','StaffController@reset_password');
    Route::get('/staff/staff_detail','StaffController@staff_detail');
    
    Route::get('admin/quiz/index','QuizController@index')->name('quiz.index');
    Route::get('admin/quiz/create','QuizController@create')->name('quiz.create');
    Route::post('admin/quiz/store', 'QuizController@store')->name('quiz.store');
    Route::get('admin/quiz/list', 'QuizController@list')->name('quiz.list');
    // Route::get('admin/quiz/edit/{id}','QuizController@index')->name('quiz.edit');

    Route::get('admin/staff/deactivate','StaffController@deactivate');
    Route::get('admin/staff/deactivate_bulk','StaffController@deactivate_bulk');
    Route::get('admin/staff/deactive_list','StaffController@deactive_list');

    Route::post('/subjects/add-subjects','StaffController@employee_subjects_assign')->name('staff.emp-subject-add');
    Route::get('/subjects/add-subjects','StaffController@employee_subjects_assign')->name('staff.emp-subject-add');
    Route::get('/subjects/edit-subject/{id}','StaffController@employee_subjects_assign')->name('staff.emp-subject-edit');
    Route::get('/subjects/edit-classsubject/{id}','StaffController@employee_subjects_assign')->name('staff.emp-classsubject-edit');
    Route::get('/subjects/edit-employee-classes/{id}','StaffController@employee_subjects_assign')->name('staff.emp-classes-edit');

    Route::post('/staff/set-timetable','StaffController@employee_set_timetable')->name('staff.set-timetable');;
    Route::get('/staff/set-timetable','StaffController@employee_set_timetable')->name('staff.set-timetable');;

    Route::post('/staff/view-timetable','StaffController@employee_view_timetable')->name('staff.view-timetable');;
    Route::get('/staff/view-timetable','StaffController@employee_view_timetable')->name('staff.view-timetable');;

    Route::post('/teacher/view-timetable','TeacherController@employee_view_timetable')->name('teacher.view-timetable');;
    Route::get('/teacher/view-timetable','TeacherController@employee_view_timetable')->name('teacher.view-timetable');;

    Route::resource('admin/staff','StaffController',['name'=>'staff']);
    
    #Teacher Login
    Route::get('/teacher-dashboard','TeacherController@index')->name('teacher-dashboard');
    
    Route::get('/teacher/setting','TeacherController@setting')->name('teacher.setting');
    
    Route::post('/teacher/update-password','TeacherController@update_password')->name('teacher.update-password');
    Route::get('teacher-logout','TeacherController@logout')->name('teacher-logout');
    
    #Student Login
    Route::get('/student-dashboard','StudentPannelController@index')->name('student-dashboard');
    
    Route::get('/students/setting','StudentPannelController@setting')->name('students.setting');
    
    Route::post('/students/update-password','StudentPannelController@update_password')->name('students.update-password');
    Route::get('/student-logout','StudentPannelController@logout')->name('student-logout');
    
    
    Route::get('/admin/delete-totalsit','TotalsitController@delete_totalsit')->name('totalsit.delete-totalsit');
    Route::resource('admin/totalsit','TotalsitController',['name'=>'totalsit']);
    
    
    #Reception Login
    Route::get('reception-dashboard','receptionPannelController@index')->name('reception-dashboard');
    Route::get('reception-logout','receptionPannelController@logout')->name('reception-logout');
    
    #Accounts Login
    Route::get('accounts-dashboard','accountsPannelController@index')->name('accounts-dashboard');
    Route::get('accounts-logout','accountsPannelController@logout')->name('accounts-logout');
    
    #Mothertongue Master route 
    Route::get('/admin/delete-mother-tongue', ['uses' => 'MothertongueController@delete_mother_tongue', 'as' => 'mothertongue.delete-mother-tongue']);
    Route::resource('admin/mothertongue','MothertongueController',['name'=>'mothertongue']);
    
    #Education Master route 
    Route::get('/admin/delete-education', ['uses' => 'EducationController@delete_education', 'as' => 'education.delete-education']);
    Route::resource('admin/education','EducationController',['name'=>'mothertongue']);
    
    #Parent list
    Route::get('admin/parent_list','ParentsController@index')->name('admin.parent_list');
    Route::post('admin/parent_filter','ParentsController@parent_list')->name('parent.parent-filter');
    Route::get('admin/parent/reset_password','ParentsController@reset_password');
    Route::get('admin/parent/deactivate','ParentsController@deactivate');
    Route::get('admin/parent/detail','ParentsController@detail');
    Route::get('admin/parent/show/{id}','ParentsController@show');
    
    Route::get('admin/parent/deactive_list','ParentsController@deactive_list');
    Route::post('admin/parent/get_deactive_list','ParentsController@get_deactive_list');
    
    
    #Registration route set
    Route::get('admin/registration/add-test-marks','RegistrationController@add_test_marks');
    Route::get('admin/registration/student_filter','RegistrationController@student_filter');
    Route::get('admin/registration/delete', 'RegistrationController@destroy');
    Route::post('admin/registration/update_information', 'RegistrationController@update_information');
    Route::get('admin/registration/save_selected', 'RegistrationController@save_selected');
    Route::get('admin/registration/selected_student', 'RegistrationController@selected_student');
    Route::post('admin/registration/filter_selected_student', 'RegistrationController@filter_selected_student');
    Route::resource('admin/registration','RegistrationController');
    Route::get('admin/registration/edit/{id}', 'RegistrationController@edit');
    Route::get('admin/registration/show/{id}', 'RegistrationController@show');
    Route::post('admin/registration/update/{id}', 'RegistrationController@update');
    
    Route::get('admin/configurations', 'RegistrationController@configurations')->name('admin-configurations');
    Route::post('admin/configurations', 'RegistrationController@configurations')->name('admin-configurations');
    Route::post('admin/configurations/{action}/{id}', 'RegistrationController@configurations');
    Route::get('admin/configurations/{action}/{id}', 'RegistrationController@configurations');
    

    #modctrl
    Route::get('/modCtrl','AdminController@modCtrl')->name('modCtrl');
    

    #transport route 
    Route::get('/admin/delete_transport', ['uses' => 'TrasportController@delete_transport', 'as' => 'transport.delete_transport']);
    Route::resource('admin/transport','TrasportController',['name'=>'transport']);
    Route::get('admin/Transport/vehicle_details', 'VehicleController@vehicle_details')->name('admin.vehicle_details');
    Route::get('admin/Transport/edit-vehicle_details/{id}', 'VehicleController@editVehicle')->name('admin.edit_vehicle_details');
    Route::get('admin/Transport/delete-vehicle_details', 'VehicleController@deleteVehicle')->name('admin.delete_vehicle_details');
     Route::get('admin/Transport/statusupdate_vehicle_details', 'VehicleController@statusupdatevehicle')->name('admin.statusupdate_vehicle_details');
    Route::post('admin/Transport/update-vehicle_details/{id}', 'VehicleController@updateVehicle')->name('admin.update_vehicle_details');
    Route::get('admin/Transport/view-vehicle_details', 'VehicleController@show')->name('admin.show_vehicle_details');
    Route::post('admin/Transport/add-vehicle_details', 'VehicleController@add_vehicle_details')->name('admin.add_vehicle_details');

    Route::get('admin/Transport/vehicle_service', 'VehicleController@vehicle_service')->name('admin.vehicle_service');
    Route::get('admin/Transport/view-vehicle_service', 'VehicleController@show_vehicle_service')->name('admin.show_vehicle_service');
    Route::get('admin/Transport/delete-vehicle_service', 'VehicleController@deleteVehicleService')->name('admin.delete_vehicle_service');
    Route::get('admin/Transport/statusupdate-vehicle_service', 'VehicleController@statusVehicleService')->name('admin.statusupdate_vehicle_service');
    Route::post('admin/Transport/add_vehicle_service', 'VehicleController@add_vehicle_service')->name('add_vehicle_service');
    Route::get('admin/Transport/edit_vehicle_service/{id}', 'VehicleController@editVehicleService')->name('admin.edit_vehicle_service');
    Route::post('admin/Transport/update-vehicle_service/{id}', 'VehicleController@updateVehicleservice')->name('admin.update_vehicle_service');

    Route::get('admin/Transport/trip_details', 'VehicleController@trip_details')->name('admin.trip_details');
    Route::get('admin/Transport/view-trip_details', 'VehicleController@show_trip_details')->name('admin.show_trip_details');
    Route::get('admin/Transport/delete-trip_details', 'VehicleController@deleteTripDetail')->name('admin.delete_trip_details');
    Route::get('admin/Transport/statusupdate-trip_details', 'VehicleController@status_trip_details')->name('admin.statusupdate_trip_details');
    Route::post('admin/Transport/add_trip_details', 'VehicleController@add_trip_details')->name('add_trip_details');
    Route::get('admin/Transport/edit_trip_details/{id}', 'VehicleController@edit_trip_details')->name('admin.edit_trip_details');
    Route::post('admin/Transport/update-trip_details/{id}', 'VehicleController@update_trip_details')->name('admin.update_trip_details');
    Route::get('admin/Transport/get_vehicle', 'VehicleController@get_vehicle')->name('admin.get_vehicle');

    

    Route::get('admin/Transport/vehicle_accident_details', 'VehicleController@vehicle_accident_details')->name('admin.vehicle_accident_details');
    Route::get('admin/Transport/view_accident_details', 'VehicleController@show_accident_details')->name('admin.show_accident_details');
    Route::get('admin/Transport/delete_accident_details', 'VehicleController@deleteAccidentDetail')->name('admin.delete_accident_details');
    Route::get('admin/Transport/statusupdate_accident_details', 'VehicleController@status_accident_details')->name('admin.status_accident_details');
    Route::post('admin/Transport/add_accident_details', 'VehicleController@add_accident_details')->name('add_accident_details');
    Route::get('admin/Transport/edit_accident_details/{id}', 'VehicleController@edit_accident_details')->name('admin.edit_accident_details');
    Route::post('admin/Transport/update_accident_details/{id}', 'VehicleController@update_accident_details')->name('admin.update_accident_details');


    Route::get('admin/Transport/vehicle_insurance_details', 'VehicleController@vehicle_insurance_details')->name('admin.vehicle_insurance_details');
    Route::get('admin/Transport/view_insurance_details', 'VehicleController@show_insurance_details')->name('admin.show_insurance_details');
    Route::get('admin/Transport/delete_insurance_details', 'VehicleController@delete_insurance_details')->name('delete_insurance_details');
    Route::post('admin/Transport/add_insurance_details', 'VehicleController@add_insurance_details')->name('admin.add_insurance_details');
    Route::get('admin/Transport/edit_insurance_details/{id}', 'VehicleController@edit_insurance_details')->name('admin.edit_insurance_details');
    Route::post('admin/Transport/update_insurance_details/{id}', 'VehicleController@update_insurance_details')->name('admin.update_insurance_details');
    Route::get('admin/Transport/insurance_status', 'VehicleController@insurance_status')->name('insurance_status');


    Route::get('admin/Transport/vehicle_pollution', 'VehicleController@vehicle_pollution')->name('admin.vehicle_pollution');
    Route::get('admin/Transport/view_pollution_details', 'VehicleController@show_pollution_details')->name('admin.show_pollution_details');
    Route::get('admin/Transport/delete_pollution_details', 'VehicleController@delete_pollution_details')->name('delete_pollution_details');
    Route::post('admin/Transport/add_pollution_details', 'VehicleController@add_pollution_details')->name('admin.add_pollution_details');
    Route::get('admin/Transport/edit_pollution_details', 'VehicleController@edit_pollution_details')->name('admin.edit_pollution_details');
    Route::post('admin/Transport/update_pollution_details', 'VehicleController@update_pollution_details')->name('admin.update_pollution_details');
    Route::get('admin/Transport/pollution_status', 'VehicleController@pollution_status')->name('admin.pollution_status');


    Route::get('admin/Transport/vehicle_permit', 'VehicleController@vehicle_permit')->name('admin.vehicle_permit');
    Route::get('admin/Transport/view_permit_details', 'VehicleController@show_permit_details')->name('admin.show_permit_details');
    Route::get('admin/Transport/delete_permit_details', 'VehicleController@delete_permit_details')->name('delete_permit_details');
    Route::post('admin/Transport/add_permit_details', 'VehicleController@add_permit_details')->name('admin.add_permit_details');
    Route::get('admin/Transport/edit_permit_details', 'VehicleController@edit_permit_details')->name('admin.edit_permit_details');
    Route::post('admin/Transport/update_permit_details', 'VehicleController@update_permit_details')->name('admin.update_permit_details');
    Route::get('admin/Transport/permit_status', 'VehicleController@permit_status')->name('permit_status');



    Route::get('admin/Transport/driver_details', 'VehicleController@driver_details')->name('admin.driver_details');
    Route::get('admin/Transport/view_driver_details', 'VehicleController@show_driver_details')->name('admin.show_driver_details');
    Route::get('admin/Transport/delete_driver_details', 'VehicleController@delete_driver_details')->name('delete_driver_details');
    Route::post('admin/Transport/add_driver_details', 'VehicleController@add_driver_details')->name('admin.add_driver_details');
    Route::get('admin/Transport/edit_driver_details', 'VehicleController@edit_driver_details')->name('admin.edit_driver_details');
    Route::post('admin/Transport/update_driver_details', 'VehicleController@update_driver_details')->name('admin.update_driver_details');
    Route::get('admin/Transport/driver_status', 'VehicleController@driver_status')->name('driver_status');

 
  
    
   
    Route::get('admin/Transport/route_details', 'VehicleController@route_details')->name('admin.route_details');
    Route::get('admin/Transport/view_route_details', 'VehicleController@show_route_details')->name('admin.show_route_details');
    Route::get('admin/Transport/delete_route_details', 'VehicleController@delete_route_details')->name('admin.delete_route_details');
    Route::post('admin/Transport/add_route_details', 'VehicleController@add_route_details')->name('admin.add_route_details');
    Route::get('admin/Transport/edit_route_details/{id}', 'VehicleController@edit_route_details')->name('admin.edit_route_details');
    Route::post('admin/Transport/update_route_details/{id}', 'VehicleController@update_route_details')->name('admin.update_route_details');
    Route::get('admin/Transport/route_status', 'VehicleController@route_status')->name('admin.route_status');



    Route::get('admin/Transport/stop_details', 'VehicleController@stop_details')->name('admin.stop_details');
    Route::get('admin/Transport/view_stop_details', 'VehicleController@show_stop_details')->name('admin.show_stop_details');
    Route::get('admin/Transport/delete_stop_details', 'VehicleController@delete_stop_details')->name('delete_stop_details');
    Route::post('admin/Transport/add_stop_details', 'VehicleController@add_stop_details')->name('admin.add_stop_details');
    Route::get('admin/Transport/edit_stop_details', 'VehicleController@edit_stop_details')->name('admin.edit_stop_details');
    Route::post('admin/Transport/update_stop_details', 'VehicleController@update_stop_details')->name('admin.update_stop_details');
    Route::get('admin/Transport/stop_status', 'VehicleController@stop_status')->name('stop_status');
    


    Route::get('admin/Transport/stop_route_mapping', 'VehicleController@stop_route_mapping')->name('admin.stop_route_mapping');
    Route::get('admin/Transport/view_route_mapping', 'VehicleController@show_route_mapping')->name('admin.show_route_mapping');
    Route::get('admin/Transport/delete_route_mapping', 'VehicleController@delete_route_mapping')->name('delete_route_mapping');
    Route::post('admin/Transport/add_route_mapping', 'VehicleController@add_route_mapping')->name('admin.add_route_mapping');
    Route::get('admin/Transport/edit_route_mapping', 'VehicleController@edit_route_mapping')->name('admin.edit_route_mapping');
    Route::post('admin/Transport/update_route_mapping', 'VehicleController@update_route_mapping')->name('admin.update_route_mapping');
    Route::get('admin/Transport/route_mapping_status', 'VehicleController@route_mapping_status')->name('route_mapping_status');




    Route::get('admin/Transport/route_assigning', 'VehicleController@route_assigning')->name('admin.route_assigning');
    Route::get('admin/Transport/view_route_assigning', 'VehicleController@show_route_assigning')->name('admin.show_route_assigning');
    Route::get('admin/Transport/delete_route_assigning', 'VehicleController@delete_route_assigning')->name('delete_route_assigning');
    Route::post('admin/Transport/add_route_assigning', 'VehicleController@add_route_assigning')->name('admin.add_route_assigning');
    Route::get('admin/Transport/edit_route_assigning', 'VehicleController@edit_route_assigning')->name('admin.edit_route_assigning');
    Route::post('admin/Transport/update_route_assigning', 'VehicleController@update_route_assigning')->name('admin.update_route_assigning');
    Route::get('admin/Transport/route_assigning_status', 'VehicleController@route_assigning_status')->name('route_assigning_status');



    Route::get('admin/Transport/vehicle_fuel_mgt', 'VehicleController@vehicle_fuel_mgt')->name('admin.vehicle_fuel_mgt');
    Route::get('admin/Transport/view_fuel_mgt', 'VehicleController@show_fuel_mgt')->name('admin.show_fuel_mgt');
    Route::get('admin/Transport/delete_fuel_mgt', 'VehicleController@delete_fuel_mgt')->name('delete_fuel_mgt');
    Route::post('admin/Transport/add_fuel_mgt', 'VehicleController@add_fuel_mgt')->name('admin.add_fuel_mgt');
    Route::get('admin/Transport/edit_fuel_mgt/{id}', 'VehicleController@edit_fuel_mgt')->name('admin.edit_fuel_mgt');
    Route::post('admin/Transport/update_fuel_mgt/{id}', 'VehicleController@update_fuel_mgt')->name('admin.update_fuel_mgt');
    Route::get('admin/Transport/fuel_mgt_status', 'VehicleController@fuel_mgt_status')->name('fuel_mgt_status');




    Route::get('admin/Transport/fuel_demand', 'VehicleController@fuel_demand')->name('admin.fuel_demand');
    Route::get('admin/Transport/view_fuel_demand', 'VehicleController@show_fuel_demand')->name('admin.show_fuel_demand');
    Route::get('admin/Transport/delete_fuel_demand', 'VehicleController@delete_fuel_demand')->name('delete_fuel_demand');
    Route::post('admin/Transport/add_fuel_demand', 'VehicleController@add_fuel_demand')->name('admin.add_fuel_demand');
    Route::get('admin/Transport/edit_fuel_demand/{id}', 'VehicleController@edit_fuel_demand')->name('admin.edit_fuel_demand');
    Route::post('admin/Transport/update_fuel_demand/{id}', 'VehicleController@update_fuel_demand')->name('admin.update_fuel_demand');
    Route::get('admin/Transport/fuel_demand_status', 'VehicleController@fuel_demand_status')->name('fuel_demand_status');


    Route::get('admin/Transport/vehicle_owner', 'VehicleController@vehicle_owner')->name('admin.vehicle_owner');
    Route::get('admin/Transport/view_vehicle_owner', 'VehicleController@show_vehicle_owner')->name('admin.show_vehicle_owner');
    Route::get('admin/Transport/delete_vehicle_owner', 'VehicleController@delete_vehicle_owner')->name('delete_vehicle_owner');
    Route::post('admin/Transport/add_vehicle_owner', 'VehicleController@add_vehicle_owner')->name('admin.add_vehicle_owner');
    Route::get('admin/Transport/edit_vehicle_owner/{id}', 'VehicleController@edit_vehicle_owner')->name('admin.edit_vehicle_owner');
    Route::post('admin/Transport/update_vehicle_owner/{id}', 'VehicleController@update_vehicle_owner')->name('admin.update_vehicle_owner');
    Route::get('admin/Transport/vehicle_owner_status', 'VehicleController@vehicle_owner_status')->name('vehicle_owner_status');


    Route::get('admin/Transport/vehicle_mgmt_report', 'VehicleController@vehicle_mgmt_report')->name('admin.vehicle_mgmt_report');

    #Reception Route
    Route::get('reception-dashboard','receptionPannelController@index')->name('reception-dashboard');
    Route::get('reception-logout','receptionPannelController@logout')->name('reception-logout');
    Route::get('admin/receiptionMaster', 'ReceiptionController@receiptionMaster')->name('admin.receiptionMaster');    
    Route::get('admin/receptionAddvisitor', 'ReceiptionController@receptionAddvisitor')->name('admin.receptionAddvisitor');    
    Route::post('admin/receptionAddvisitor', 'ReceiptionController@receptionAddvisitor')->name('admin.receptionAddvisitor');    
    Route::get('admin/receptionPhonecall', 'ReceiptionController@receptionPhonecall')->name('admin.receptionPhonecall');    
    Route::post('admin/receptionPhonecall', 'ReceiptionController@receptionPhonecall')->name('admin.receptionPhonecall');    
    Route::get('admin/receptionTodayPhonecall', 'ReceiptionController@receptionPhonecall')->name('admin.receptionTodayPhonecall');    
    Route::post('admin/receptionTodayPhonecall', 'ReceiptionController@receptionPhonecall')->name('admin.receptionTodayPhonecall');    

    Route::get('admin/receptionCouriorin', 'ReceiptionController@receptionCouriorin')->name('admin.receptionCouriorin');    
    Route::post('admin/receptionCouriorin', 'ReceiptionController@receptionCouriorin')->name('admin.receptionCouriorin');    
    Route::get('admin/receptionCouriorout', 'ReceiptionController@receptionCouriorout')->name('admin.receptionCouriorout');    
    Route::post('admin/receptionCouriorout', 'ReceiptionController@receptionCouriorout')->name('admin.receptionCouriorout');        
    Route::get('admin/receptionAdmission', 'ReceiptionController@receptionAdmission')->name('admin.receptionAdmission');
    Route::post('admin/receptionAdmission', 'ReceiptionController@receptionAdmission')->name('admin.receptionAdmission');    
    Route::get('admin/receptionComplain', 'ReceiptionController@receptionComplain')->name('admin.receptionComplain');    
    Route::post('admin/receptionComplain', 'ReceiptionController@receptionComplain')->name('admin.receptionComplain');        
    Route::get('admin/receptionGatepass', 'ReceiptionController@receptionGatepass')->name('admin.receptionGatepass'); 
    Route::post('admin/receptionGatepass', 'ReceiptionController@receptionGatepass')->name('admin.receptionGatepass'); 
  

    #Certificate route set
     Route::post('admin/create-certificate', 'CertificateController@allStudent')->name('admin.allStudent');
     Route::get('admin/create-certificate', 'CertificateController@allStudent')->name('admin.allStudent');
     Route::get('admin/edit-certificate', 'CertificateController@allStudent')->name('admin.edit-certificate');
     Route::get('admin/Certificate/studentidMaster', 'CertificateController@studentidMaster')->name('admin.studentidMaster');
     Route::post('admin/Certificate/studentidMaster', 'CertificateController@studentidMaster')->name('admin.studentidMaster');
    Route::get('admin/Certificate/studentidGen', 'CertificateController@studentidGen')->name('admin.studentidGen');    
    Route::post('admin/Certificate/studentidGen', 'CertificateController@studentidGen')->name('admin.studentidGen');    
    Route::get('admin/generate-cards/{std_id}', 'CertificateController@generateIDCardCore')->name('admin.generateid');    

    Route::get('admin/prev-certificate/{id_certificate}/{id_student}', 'CertificateController@prevStudentCertificate')->name('admin.prev-certificate');

    Route::get('admin/delete-records/{table}/{colom}/{ids}/{return_path}', 'ReceiptionController@globalDeleteRecords')->name('admin.delete-records');
    

#Exam Managment route set
     Route::get('admin/Exam/examAttendance', 'ExamController@examAttendance')->name('admin.examAttendance');
     Route::get('admin/Exam/examMaster', 'ExamController@examMaster')->name('admin.examMaster');
     Route::get('admin/Exam/examMaster', 'ExamController@examMaster')->name('admin.examMaster');
      Route::get('admin/Exam/examReport', 'ExamController@examReport')->name('admin.examReport');
      Route::get('admin/Exam/marksFeeding', 'ExamController@marksFeeding')->name('admin.marksFeeding');
      
      Route::get('admin/Exam/marksDetails', 'ExamController@marksDetails')->name('admin.marksDetails');
      
    Route::get('admin/Exam/studentPermotion', 'ExamController@studentPermotion')->name('admin.studentPermotion');
    
    Route::post('admin/Exam/studentPermotion', 'ExamController@studentPermotion')->name('admin.studentPermotion');


#Inventory route set
    Route::get('admin/Inventory/addVendor', 'InventoryController@addVendor')->name('admin.addVendor');
    Route::get('admin/Inventory/manageAssets', 'InventoryController@manageAssets')->name('admin.manageAssets');
    Route::get('admin/Inventory/raiseDemand', 'InventoryController@raiseDemand')->name('admin.raiseDemand');
    Route::get('admin/Inventory/purchaseNew', 'InventoryController@purchaseNew')->name('admin.purchaseNew');
    Route::get('admin/Inventory/purchaseReturn', 'InventoryController@purchaseReturn')->name('admin.purchaseReturn');
    Route::get('admin/Inventory/billStatus', 'InventoryController@billStatus')->name('admin.billStatus');
    Route::get('admin/Inventory/inventorySearch', 'InventoryController@inventorySearch')->name('admin.inventorySearch');

});


    #HR Managment route set
    Route::get('admin/Hr_management/addEmployee', 'HrmanagementController@addEmployee')->name('admin.addEmployee');
     Route::get('admin/Hr_management/financialYear', 'HrmanagementController@financialYear')->name('admin.financialYear');
    Route::get('admin/Hr_management/employeesList', 'HrmanagementController@employeesList')->name('admin.employeesList');
    
    Route::post('admin/Hr_management/employeesList', 'HrmanagementController@employeesList')->name('admin.employeesList');
  Route::post('admin/Hr_management/staffAttendanceReport', 'HrmanagementController@staffAttendanceReport')->name('admin.staffAttendanceReport');
   Route::post('admin/Hr_management/leaveList', 'HrmanagementController@leaveList')->name('admin.leaveList');
    Route::post('admin/Hr_management/leaveListReport', 'HrmanagementController@leaveListReport')->name('admin.leaveListReport');
   
     Route::get('admin/Hr_management/assignSalaryEmp', 'HrmanagementController@assignSalaryEmp')->name('admin.assignSalaryEmp');
     Route::post('admin/Hr_management/assignSalaryEmp', 'HrmanagementController@assignSalaryEmpsearch')->name('admin.assignSalaryEmp');
    Route::get('admin/Hr_management/createSalary', 'HrmanagementController@createSalary')->name('admin.createSalary');
    Route::get('admin/Hr_management/paySalaryEmp', 'HrmanagementController@paySalaryEmp')->name('admin.paySalaryEmp');
    Route::get('admin/Hr_management/salaryDetails/{id}', 'HrmanagementController@salaryDetails');
    Route::post('admin/Hr_management/salaryDetails/{id}', 'HrmanagementController@savesalary');
    Route::get('admin/Hr_management/runPayroll', 'HrmanagementController@runPayroll')->name('admin.runPayroll');
    Route::get('admin/Hr_management/reimburseClaim', 'HrmanagementController@reimburseClaim')->name('admin.reimburseClaim');
    Route::get('admin/Hr_management/advanceSalary', 'HrmanagementController@advanceSalary')->name('admin.advanceSalary');
    
    Route::get('admin/Hr_management/externalPayment', 'HrmanagementController@externalPayment')->name('admin.externalPayment');
     Route::get('admin/Hr_management/leaveSetup', 'HrmanagementController@leaveSetup')->name('admin.leaveSetup');
     Route::get('admin/Hr_management/leaveAssignEmp', 'HrmanagementController@leaveAssignEmp')->name('admin.leaveAssignEmp');
     
     Route::get('admin/Hr_management/taxDeductions', 'HrmanagementController@taxDeductions')->name('admin.taxDeductions');
      Route::get('admin/Hr_management/taxDeductionsReport', 'HrmanagementController@taxDeductionsReport')->name('admin.taxDeductionsReport');
      Route::get('admin/Hr_management/uploadDocument', 'HrmanagementController@uploadDocument')->name('admin.uploadDocument');
    Route::get('admin/Hr_management/markStaffAttendance', 'HrmanagementController@markStaffAttendance')->name('admin.markStaffAttendance');
    Route::get('admin/Hr_management/monthlySalary', 'HrmanagementController@monthlySalary')->name('admin.monthlySalary');
    Route::get('admin/Hr_management/staffAttendanceReport', 'HrmanagementController@staffAttendanceReport')->name('admin.staffAttendanceReport');
    Route::get('admin/Hr_management/empAttendanceReport', 'HrmanagementController@empAttendanceReport')->name('admin.empAttendanceReport');
    Route::post('admin/Hr_management/empAttendanceReport', 'HrmanagementController@empAttendanceReport');
    
    Route::get('admin/Hr_management/leaveList', 'HrmanagementController@leaveList')->name('admin.leaveList');
    Route::get('admin/Hr_management/myLeaveRequest', 'HrmanagementController@myLeaveRequest')->name('admin.myLeaveRequest');
    Route::get('admin/Hr_management/myLeavesList', 'HrmanagementController@myLeavesList')->name('admin.myLeavesList');
    Route::get('admin/Hr_management/empAttendance', 'HrmanagementController@empAttendance')->name('admin.empAttendance');
    Route::post('admin/Hr_management/empAttendance', 'HrmanagementController@empAttendance')->name('admin.empAttendance');
    
    Route::get('admin/Hr_management/leaveListReport', 'HrmanagementController@leaveListReport')->name('admin.leaveListReport');
    Route::post('admin/Hr_management/addemployee', 'addEmployeeController@addemployee')->name('admin/Hr_management/addemployee');
    Route::post('admin/Hr_management/store', 'financialyearController@store')->name('admin/Hr_management/store');
    Route::post('admin/Hr_management/update', 'financialyearController@update')->name('admin/Hr_management/update'); 
    Route::post('admin/Hr_management/update_employee', 'AddEmployeeController@update')->name('admin/Hr_management/update_employee');
    Route::post('change_status', 'HrmanagementController@change_status');
    Route::get('admin/Hr_management/allotofferletter','HrmanagementController@offerletter')->name('admin/Hr_management/allotofferletter'); 
    Route::post('get_title','HrmanagementController@get_title');
    Route::post('delete_record','AddEmployeeController@delete_record');

    Route::post('admin/EmployeeSalarySlip/salary_store','EmployeeSalarySlipController@store')->name('admin/EmployeeSalarySlip/salary_store');
    Route::post('admin/Hr_management/offer_letter/store','OfferLetterController@store')->name('admin/Hr_management/offer_letter/store');
    Route::post('attendance_mark','HrmanagementController@attendance_mark');
    Route::post('save_reimbursement','HrmanagementController@save_reimbursement');
    Route::post('save_advance_salary_request','HrmanagementController@save_advance_salary_request');
    Route::post('update_advance_salary','HrmanagementController@update_advance_salary');
    Route::post('save_leave_type','HrmanagementController@save_leave_type');
    Route::post('update_leave_type','HrmanagementController@update_leave_type');
    Route::post('assign_leave','HrmanagementController@assign_leave');
    Route::post('record_leavr_request','HrmanagementController@record_leavr_request');

    Route::post('approve','HrmanagementController@approve');

    Route::post('admin/Hr_management/monthlySalary', 'HrmanagementController@monthlySalary')->name('admin/Hr_management/monthlySalary');
    Route::post('afternoon', 'HrmanagementController@afternoon');
    Route::post('save_employee_attendance','HrmanagementController@save_employee_attendance');
    Route::post('save_employee_salary_data','HrmanagementController@save_employee_salary_data');
    Route::post('get_employee','HrmanagementController@get_employee');
    Route::post('get_staff','HrmanagementController@get_staff');
    Route::post('get_date','HrmanagementController@get_date');
    

    #Fee Managment route set
    Route::get('admin/Fee_management/fee_allocation', 'FeemanagementController@fee_allocation')->name('admin.fee_allocation');
    Route::post('admin/Fee_management/alc_store', 'FeemanagementController@alc_store')->name('Feemanagement.alc_store');
    Route::post('admin/Fee_management/feeheads_alc_store', 'FeemanagementController@feeheads_alc_store')->name('Feemanagement.feeheads_alc_store');

    //Route::get('admin/get-row-data/{table}/{id}/{value}', 'HostelController@get_row_data')->name('admin.edit-hostel');

   
     
    Route::get('admin/Fee_management/fee_group', 'FeemanagementController@fee_group')->name('admin.fee_group');
    Route::get('admin/Fee_management/feeconcession_setup', 'FeemanagementController@feeconcession_setup')->name('admin.feeconcession_setup');
    Route::get('admin/Fee_management/feefine_setup', 'FeemanagementController@feefine_setup')->name('admin.feefine_setup');
    Route::get('admin/Fee_management/feeheads_setup', 'FeemanagementController@feeheads_setup')->name('admin.feeheads_setup');
    Route::get('admin/Fee_management/feedue_summary', 'FeemanagementController@feedue_summary')->name('admin.feedue_summary');
    Route::get('admin/Fee_management/feedue_report', 'FeemanagementController@feedue_report')->name('admin.feedue_report');
    Route::get('admin/Fee_management/feerefund', 'FeemanagementController@feerefund')->name('admin.feerefund');
    Route::get('admin/Fee_management/feecheque_summary', 'FeemanagementController@feecheque_summary')->name('admin.feecheque_summary');
    Route::get('admin/Fee_management/fee_dailycollect', 'FeemanagementController@fee_dailycollect')->name('admin.fee_dailycollect'); 
    Route::get('admin/Fee_management/fee_invoice', 'FeemanagementController@fee_invoice')->name('admin.fee_invoice');
    Route::get('admin/Fee_management/feedue_list', 'FeemanagementController@feedue_list')->name('admin.feedue_list');
    Route::get('admin/Fee_management/fee_paymenthistory', 'FeemanagementController@fee_paymenthistory')->name('admin.fee_paymenthistory');

    // Route::post('admin/Fee_management/store', 'FeemanagementController@store')->name('Fee_management.store');
    //Route::post('admin/quiz/store', 'QuizController@store')->name('quiz.store');
     
    Route::get('admin/fee_reciepts', 'FeemanagementController@fee_reciepts')->name('admin.fee_reciepts');


    #SMS Module
    Route::post('/sms/school-template','SMSController@school_template')->name('sms.school-template');
    Route::get('/sms/school-template','SMSController@school_template')->name('sms.school-template');

    Route::post('/sms/email-template','SMSController@email_template')->name('sms.email-template');
    Route::get('/sms/email-template','SMSController@email_template')->name('sms.email-template');

    Route::post('/sms/bulk-email-sms','SMSController@bulk_email_sms')->name('sms.bulk-email-sms');
    Route::get('/sms/bulk-email-sms','SMSController@bulk_email_sms')->name('sms.bulk-email-sms');

    Route::post('/sms/bulk-email-counter','SMSController@bulk_email_counter')->name('sms.bulk-email-counter');
    Route::get('/sms/bulk-email-counter','SMSController@bulk_email_counter')->name('sms.bulk-email-counter');

    Route::post('/sms/messages','SMSController@manage_messages')->name('sms.messages');
    Route::get('/sms/messages','SMSController@manage_messages')->name('sms.messages');

    Route::post('/sms/staff-template','SMSController@staff_template')->name('sms.staff-template');
    Route::get('/sms/staff-template','SMSController@staff_template')->name('sms.staff-template');

    Route::post('/sms/guardian-template','SMSController@guardian_template')->name('sms.guardian-template');
    Route::get('/sms/guardian-template','SMSController@guardian_template')->name('sms.guardian-template');

    Route::post('/sms/groups-template','SMSController@groups_template')->name('sms.groups-template');
    Route::get('/sms/groups-template','SMSController@groups_template')->name('sms.groups-template');

    Route::post('/sms/students-template','SMSController@students_template')->name('sms.students-template');
    Route::get('/sms/students-template','SMSController@students_template')->name('sms.students-template');

    #appctrl
    Route::post('/admin/control-settings','AdminController@appCtrl')->name('appControl.control-settings');
    Route::get('/admin/control-settings','AdminController@appCtrl')->name('appControl.control-settings');


    #modctrl
    Route::post('/admin/module-settings','AdminController@modCtrl')->name('appControl.module-settings');
    Route::get('/admin/module-settings','AdminController@modCtrl')->name('appControl.module-settings');


    Route::get('/admin/accounts-booksentry', 'accountsPannelController@accountsBooksentry')->name('accounts.booksentry');
    Route::get('/admin/accounts-bsheet', 'accountsPannelController@accountsBsheet')->name('accounts.bsheet');
    Route::get('/admin/accounts-income-exp', 'accountsPannelController@accountsIncomeExp')->name('accounts.income-exp');
    Route::get('/admin/accounts-master', 'accountsPannelController@accountsMaster')->name('accounts.master');
    Route::get('/admin/accounts-pvcreate', 'accountsPannelController@accountsPvcreate')->name('accounts.pvcreate');
    Route::get('/admin/accounts-trialbalance', 'accountsPannelController@accountsTrialbalance')->name('accounts.trialbalance');

    #Fee Managment route set
    Route::get('admin/Fee_management/fee_allocation', 'FeemanagementController@fee_allocation')->name('admin.fee_allocation');
    Route::get('admin/Fee_management/fee_group', 'FeemanagementController@fee_group')->name('admin.fee_group');
    Route::get('admin/Fee_management/feeconcession_setup', 'FeemanagementController@feeconcession_setup')->name('admin.feeconcession_setup');
    Route::get('admin/Fee_management/feefine_setup', 'FeemanagementController@feefine_setup')->name('admin.feefine_setup');
    Route::get('admin/Fee_management/feeheads_setup', 'FeemanagementController@feeheads_setup')->name('admin.feeheads_setup');
    Route::get('admin/Fee_management/feedue_summary', 'FeemanagementController@feedue_summary')->name('admin.feedue_summary');
    Route::get('admin/Fee_management/feedue_report', 'FeemanagementController@feedue_report')->name('admin.feedue_report');
    Route::get('admin/Fee_management/feerefund', 'FeemanagementController@feerefund')->name('admin.feerefund');
    Route::get('admin/Fee_management/feecheque_summary', 'FeemanagementController@feecheque_summary')->name('admin.feecheque_summary');
    Route::get('admin/Fee_management/fee_dailycollect', 'FeemanagementController@fee_dailycollect')->name('admin.fee_dailycollect');
    
    Route::get('admin/Fee_management/fee_dailycollect', 'FeemanagementController@fee_dailycollect')->name('admin.fee_dailycollect');
    Route::get('admin/Fee_management/fee_invoice', 'FeemanagementController@fee_invoice')->name('admin.fee_invoice');
    Route::get('admin/Fee_management/feedue_list', 'FeemanagementController@feedue_list')->name('admin.feedue_list');
    Route::get('admin/Fee_management/fee_paymenthistory', 'FeemanagementController@fee_paymenthistory')->name('admin.fee_paymenthistory');
    
    Route::get('admin/fee_reciepts', 'FeemanagementController@fee_reciepts')->name('admin.fee_reciepts');

Route::get("/prev-certificate", function(){
   return view("pdf.std_certificates");
});






