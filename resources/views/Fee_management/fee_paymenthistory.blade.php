 @extends('layouts.admin_header')
    @section('title', 'Create Hostel Fee')
    @section('content')
    
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
<a href="index.html">Payment History</a>
</li>
</ul>
<div class="page-toolbar">
<a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
<i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
</a>
</div>
</div>
</div>
<div class="akform_holder">
<div class="row">
  <div class="col-sm-8 col-xs-12">
    <!-- tile -->
    <section class="tile">
    
    <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font"><i class="fa fa-search"></i><strong>Search Student</strong></h1>
    </div>
    <!-- /tile header -->
    
    <!-- tile body -->
    <div class="tile-body ht-adjust-300">
      <!-- <form role="form" class="box"> -->
        <div class="row">
          <div class="form-group col-sm-6 col-xs-12">
            <label for="admissionNoInp">Admission Number</label>
            <input type="text" class="form-control" name="s_registered" id="s_registered" required>
          </div>
          <div class="form-group col-sm-6 col-xs-12">
            <div class="btn-align-row">
            <button type="button" data-value="" class="btn btn-blue Assigned"><i class="fa fa-search"></i>Assign</button>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="tile-body search_results">
            <div class="profile-picture col-xs-6">
              <img src="http://oracleinfotech.in/demoschool/schoolmgt/assets/images/ici-avatar.jpg" alt="" class="img-responsive">
            </div>
            <div class="search_results--lists  stu_div">
              <!-- <div><span>Name</span><span>Dhananjay</span></div>
              <div><span>FName</span><span>Mehrotr11a</span></div>
              <div><span>Reg No</span><span>12345</span></div>
              <div><span>Roll No</span><span>12345</span></div>
              <div><span>Class</span><span>Nursery Daffodil</span></div>
              <div><span>Section</span><span>B</span></div> -->
            </div>
          </div>
        </div>
      <!-- </form> -->
    </div>                        
    <!-- /tile body -->
    </section>
    <!-- /tile -->
  </div>
  <div class="col-sm-4 col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <i class="fas fa-history"></i>
    <strong>Payment History</strong></h1>
    </div>
    <!-- /tile header -->
    <!-- tile body-->
    <div class="tile-body">
      <div class="row">
        <!-- tile body-->
        <div class="tile-body ak_table ak_table2 ak_dtablestyle">
          <div class="table_ws_nowrap tbl--cst__scroll tbl-pay-history">
            <table class="table table-bordered table-responsive mb-0">
              <thead>
                <tr>
                  <th class="stl_th2">Date</th>
                  <th class="stl_th3">Rec No</th>
                  <th class="stl_th4">Paid Amount</th>
                  <th class="stl_th5">Status</th>
                  <th class="stl_th6">Remarks</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>13/10/2020</td>
                  <td>19</td>
                  <td>101232.00</td>
                  <td>Success</td>
                  <td>lorem ipsum remarks data to show how data looks</td>
                </tr>
                <tr>
                  <td>13/10/2020</td>
                  <td>19</td>
                  <td>101232.00</td>
                  <td>Success</td>
                  <td>lorem ipsum remarks data to show how data looks</td>
                </tr>
                <tr>
                  <td>13/10/2020</td>
                  <td>19</td>
                  <td>101232.00</td>
                  <td>Success</td>
                  <td>lorem ipsum remarks data to show how data looks</td>
                </tr>
                <tr>
                  <td>13/10/2020</td>
                  <td>19</td>
                  <td>101232.00</td>
                  <td>Success</td>
                  <td>lorem ipsum remarks data to show how data looks</td>
                </tr>
                <tr>
                  <td>13/10/2020</td>
                  <td>19</td>
                  <td>101232.00</td>
                  <td>Success</td>
                  <td>lorem ipsum remarks data to show how data looks</td>
                </tr>
                <tr>
                  <td>13/10/2020</td>
                  <td>19</td>
                  <td>101232.00</td>
                  <td>Success</td>
                  <td>lorem ipsum remarks data to show how data looks</td>
                </tr>
                <tr>
                  <td>13/10/2020</td>
                  <td>19</td>
                  <td>101232.00</td>
                  <td>Success</td>
                  <td>lorem ipsum remarks data to show how data looks</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /tile body-->
        </div>
      </div>
    </section>
  </div>
</div>
<div class="row">
  <div class="col-sm-8 col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm">
    <h1 class="custom-font">
    <i class="fas fa-list"></i>
    <strong>Details</strong></h1>
    </div>
    <!-- /tile header -->
      <!-- tile body-->
    <div class="tile-body">
      <div class="row">
        <div class="form-group col-sm-6 col-xs-12">
          <label for="acdYear">Academic Year *</label>
          <select class="form-control ak_select2" name="session" id="session" required> 
              @foreach($sessionmaster as $key)
              <option value="{{$key->id}}">{{ $key->title }}</option>
              @endforeach 
            </select>
        </div>

        <div class="form-group col-sm-6 col-xs-12">
          <label for="class">Wing *</label>
          <select class="form-control ak_select2" name="wing" id="wing" required>
            <option value='1'>Junior Wing 1</option>
            <option value='2'>Junior Wing 2</option>
            <option value='3'>Senior WING 1</option>
            <option value='4'>Senior WING 2</option>
          </select>
        </div>
        
       

        <div class="form-group col-sm-6 col-xs-12">
          <label for="class">Class *</label>
          <select class="form-control ak_select2" name="class" id="class" required> 
              @foreach($classes as $key)
              <option value="{{$key->id}}">{{ $key->title }}</option>
              @endforeach 
            </select>
        </div>
        
        <div class="form-group col-sm-6 col-xs-12">
          <label for="sems">Semesters *</label>
          <select class="form-control ak_select2" name="semester" id="semester" required>
            <option>Semester 1</option>
            <option>Semester 2</option>
            <option>Semester 3</option>
          </select>
        </div>
        
        <div class="form-group col-sm-6 col-xs-12">
          <label for="class">Section *</label>
          <select class="form-control ak_select2" name="section" name="section" required>
            <option>A</option>
            <option>B</option>
            <option>C</option>
          </select>
        </div>
        <div class="submit-holder form-group col-sm-12"> 
          <button type="button" class="btn btn-blue bfilters">Filters<i class="fa fa-filter"></i></button> 
        </div>
      </div>
    </div>  
    <div class="tile-body ak_table ak_table2 ak_dtablestyle">
    <div class="table_ws_nowrap">
       <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
        <thead>
          <tr>
            <th class="stl_th1"></th>
            <th class="stl_th2">SL</th> 
            <th class="stl_th4">Reg No</th>
            <th class="stl_th5">Name</th>
            <th class="stl_th6">Class</th>
            <th class="stl_th7">Section</th>
            <th class="stl_th8">Action</th>
          </tr>
        </thead>
        <tbody id="student_div">
       
          <tr>
            <td></td>
            <td>1</td> 
            <td>4130</td>
            <td>Hardik Lohia</td>
            <td>V</td>
            <td>A</td>
            <td>
              <button class="btn badge badge-warning" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
            </td>
          </tr>

          
        </tbody>
      </table>
    </div>

    <div class="ak_table ak_table2 ak_dtablestyle">
        <div class="table_ws_nowrap tbl--cst__scroll">
          <table class="table table-bordered table-responsive tbl-fee-details mb-0">
            <thead>
              <tr>
                <th class="stl_th1">Head Name</th>
                <th class="stl_th2">
                  <input type="checkbox" name="chkApr" id="chkApr">
                  <div>Apr</div>
                </th>
                <th class="stl_th3">
                  <input type="checkbox" name="chkMay" id="chkMay">
                  <div>May</div>
                </th>
                <th class="stl_th4">
                  <input type="checkbox" name="chkJun" id="chkJun">
                  <div>Jun</div>
                </th>
                <th class="stl_th5">
                  <input type="checkbox" name="chkJul" id="chkJul">
                  <div>Jul</div>
                </th>
                <th class="stl_th8">
                  <input type="checkbox" name="chkAug" id="chkAug">
                  <div>Aug</div>
                </th>
                <th class="stl_th9">
                  <input type="checkbox" name="chkSep" id="chkSep">
                  <div>Sep</div>
                </th>
                <th class="stl_th10">
                  <input type="checkbox" name="chkOct" id="chkOct">
                  <div>Oct</div>
                </th>
                <th class="stl_th11">
                  <input type="checkbox" name="chkNov" id="chkNov">
                  <div>Nov</div>
                </th>
                <th class="stl_th12">
                  <input type="checkbox" name="chkDec" id="chkDec">
                  <div>Dec</div>
                </th>
                <th class="stl_th13">
                  <input type="checkbox" name="chkJan" id="chkJan">
                  <div>Jan</div>
                </th>
                <th class="stl_th14">
                  <input type="checkbox" name="chkFeb" id="chkFeb">
                  <div>Feb</div>
                </th>
                <th class="stl_th15">
                  <input type="checkbox" name="chkMar" id="chkMar">
                  <div>Mar</div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="checkbox" name="chkTransport" id="chkTransport">
                  Transport fees</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="chkCharges" id="chkCharges">
                  Annual Charge</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="chkDev" id="chkDev">
                  Development Fund</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td>32</td>
                <td>33</td>
                <td>34</td>
                <td>35</td>
                <td>36</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="chkExam" id="chkExam">
                  Exam/Ass Fee</td>
                <td>37</td>
                <td>38</td>
                <td>39</td>
                <td>40</td>
                <td>41</td>
                <td>42</td>
                <td>43</td>
                <td>44</td>
                <td>45</td>
                <td>46</td>
                <td>47</td>
                <td>48</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="chkEMS" id="chkEMS">
                  Smart EMS</td>
                <td>49</td>
                <td>50</td>
                <td>51</td>
                <td>52</td>
                <td>53</td>
                <td>54</td>
                <td>55</td>
                <td>56</td>
                <td>57</td>
                <td>58</td>
                <td>59</td>
                <td>60</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="chkSMS" id="chkSMS">
                  ERP SMS</td>
                <td>62</td>
                <td>63</td>
                <td>64</td>
                <td>65</td>
                <td>66</td>
                <td>67</td>
                <td>68</td>
                <td>69</td>
                <td>70</td>
                <td>71</td>
                <td>72</td>
                <td>73</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" name="chkTution" id="chkTution">
                  Tution fees</td>
                <td>74</td>
                <td>75</td>
                <td>76</td>
                <td>77</td>
                <td>78</td>
                <td>79</td>
                <td>80</td>
                <td>81</td>
                <td>82</td>
                <td>83</td>
                <td>84</td>
                <td>85</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    </div>
    </section>
    
  </div>
  <div class="col-sm-4 col-xs-12">
    <section class="tile">
      <!-- tile header -->
    <div class="tile-header bg-blue dvd dvd-btm modal-action">
    <h1 class="custom-font">
    <i class="fas fa-info-circle"></i>
    <strong>Payment Information</strong></h1>
    </div>
    <!-- /tile header -->
    <!-- tile body-->
<form role="form" method='post' class="box" action="{{ route('Feemanagement.tp_store') }}" novalidate>
         {{ csrf_field() }}
    <div class="tile-body">
      <div class="row">
        <div class="form-group col-sm-6 col-xs-12">
          <label for="fine">Fine *</label>
          <input type="number" class="form-control" name="fine" id="fine" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="fine">Concession *</label>
          <input type="number" class="form-control" name="concession" id="concession" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12 flex-col">
          <label for="waveChk">Wave Off</label>
          <input type="checkbox" name="wave" id="wave"  required>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="totFee">Total Fees</label>
          <input type="number" class="form-control" id="totalfee" name="totalfee" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="paymentInp">Payment</label>
          <input type="number" class="form-control" id="payment" name="payment" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="balanceInp">Balance</label>
          <input type="number" class="form-control" name="balance" id="balance" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12">
          <label for="remarksInp">Remarks</label>
          <input type="text" class="form-control" id="remarks" name="remarks"  required>
        </div>
        <div class="form-group col-sm-6 col-xs-12" id="payModeSelDiv">
          <label for="payModeSel">Pay Mode*</label>
          <select class="form-control ak_select2" name="paymode" id="paymode" required>
            <option value="">Select</option>
            <option value="CASH">CASH</option>
            <option value="CHEQUE">CHEQUE</option>
            <option value="ONLINE">ONLINE</option>
            <option value="CARD">CARD</option>
          </select>
        </div>
        <div class="form-group col-sm-6 col-xs-12" id="chequeNoDiv" >
          <label for="chequeInp">Cheque Number</label>
          <input type="number" class="form-control" id="chequeInp" name="chequeInp" maxlength="6" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12" id="utrNoDiv">
          <label>UTR Number</label>
          <input type="text" class="form-control" id="utrNoInp" name="utrNoInp" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12" id="cardNoDiv">
          <label for="cardNoInp">Card Number</label>
          <input type="number" class="form-control" id="cardNoInp" name="cardNoInp" required>
        </div>
        <div class="form-group col-sm-6 col-xs-12" id="cardTypeDiv">
          <label for="cardType">Card Type</label>
          <select class="form-control ak_select2"   id="cardType"  name="cardType" required>
            <option value="CASH">Credit Card</option>
            <option value="CHEQUE">Debit Card</option>
          </select>
        </div>
        <div class="form-group col-sm-6 col-xs-12" id="bankNameDiv">
          <label for="bankNameSel">Bank</label>
          <select class="form-control ak_select2"   id="bankNameSel" name="bankNameSel" required>
            <option value="CASH">SBI</option>
            <option value="CHEQUE">ICICI</option>
            <option value="ONLINE">HDFC</option>
          </select>
        </div>
        <div class="form-group col-sm-6 col-xs-12" id="onDateDiv">
          <label for="onDateSel">Date</label>
            <div class='input-group datepicker ' data-format="L">
              <input type='text' id="onDateSel"  name="onDateSel"  class="form-control" required />
              <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
              </span>
            </div>
        </div>
        <div class="submit-holder">
          <div class="row">
          <div class="col-sm-12 form__button--action">
          <div>
          <!-- <a href="{{ route('admin.fee_reciepts') }}"> </a> --> 
          <button type="submit" class="btn btn-blue">Pay Now</button> 
          </div>
          </div> 
          </div>
        </div>
      </div>  
    </div>
</form>
    </section>
  </div>
</div>
</div>
</div>
</div>
<p class="cright">&copy; Copyright 2020, All Right Reserved</p>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<!-- view data -->
<div id="viewModal" class="modal fade ak_modal-style">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue">
          <h3 class="modal-title custom-font">Quick View</h3>
          <a class="modal-close" href="" data-dismiss="modal"><i class="fa fa-close"></i></a>
      </div>
      <div class="modal-body">
        <div class="quickvie-holder">             
              <div class="quick_info">
                  <ul>
                      <li class="qi-item id-2"><b>Name:</b> <span id="registrationNo_qv">Hardik Lohia</span></li>
                      <li class="qi-item id-2"><b>Reg Date</b> <span id="frmDate_qv">10/10/2020</span></li>
                      <li class="qi-item id-2"><b>Reg No</b> <span id="toDate_qv">4130</span></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="modal-footer">
          <!-- <a role="button" href="http://oracleinfotech.in/demoschool/schoolmgt/admin/staff/6" class="btn btn-blue" target="_blank" id="view_url">View Full Details</a> -->
          <a role="button" class="btn btn-danger" data-dismiss="modal">Close</a>
      </div>
    </div>
      <!-- modal content -->
    </div>
</div>
<!-- /view Data -->
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"></script>')</script> -->
@section('footer_scripts')
<script>
$(function(){
  //alert('asfasf');
  $("#modalClick").on('click',function(){
    $("#formModal").modal('show');
  });

  $(".Assigned").on('click',function(){
    //$("#formModal").modal('show');
    var ad=$('#s_registered').val();
 				//activate(1);
				$.ajax({
					type : 'GET',
					data : {s_registered : ad},
					url  : 'studentDetails',
					dataType: 'html',
					success:function(response)
					{
            var obj = $.parseJSON(response);
            var rs=obj.data;  
            var div1="<div><span>Reg No</span><span>"+rs.s_registered+"</span></div>";
            var div2="<div><span>Name</span><span>"+rs.s_first_name+rs.s_last_name+"</span></div>";
            var div3="<div><span>Class</span><span>"+rs.s_class_id+"</span></div>";  
            var students=div1+div2+div3; 
             $('.stu_div').html(students);
					}
        });         
  });


  $(".bfilters").on('click',function(){
    //$("#formModal").modal('show');
    var session=$('#session').val();
    var wing=$('#wing').val();
    var bclass=$('#class').val(); 
 				//activate(1);
				$.ajax({
					type : 'GET',
					data : {session:session,wing:wing,bclass:bclass},
					url  : 'studentDetails',
					dataType: 'html',
					success:function(response)
					{
            var obj = $.parseJSON(response);
            var rs=obj.data;  
            var htm='';
            $.each(rs, function(k, v){  
              k=k+1;
            htm +="<tr><td></td><td>"+k+"</td><td>"+v.s_registered+"</td><td>"+v.s_first_name+v.s_last_name+"</td><td>"+v.s_class_id+"</td><td>V</td><td>A</td><td></td></tr>";  
				  	}); 
            $('#student_div').html(htm);
					}
        });         
  });

});

</script> 
@endsection
