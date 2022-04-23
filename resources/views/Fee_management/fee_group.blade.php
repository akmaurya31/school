 @extends('layouts.admin_header')
    @section('title', 'Create Hostel Fee')
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
                  <a href="#">Group & Head</a>
               </li>
            </ul>
            <div class="page-toolbar">
               <a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
               <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
               </a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-xs-12">
            <section class="tile sec-ht-350">
               <!-- tile header -->
               <div class="tile-header bg-blue dvd dvd-btm modal-action">
                  <h1 class="custom-font">
                     <strong>Groupname Master</strong>
                  </h1>
                  <a role="button" id="get-first-modal" tabindex="0">Create new</a>
               </div>
               <!-- /tile header -->
               <!-- tile body-->
               <div class="tile-body ak_table ak_table2 ak_dtablestyle">
                  <div class="table_ws_nowrap">
                     <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
                        <thead>
                           <tr>
                              <th class="stl_th1"></th>
                              <th class="stl_th2">SL</th>
                              <th class="stl_th3">Group Name</th>
                              <th class="stl_th10 action_icons_th">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                            
                           @foreach($GroupMaster as $key)
                           <tr>
                              <td></td>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $key->group_name }}</td>
                              <td>
                                 <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                                 <button class="btn badge badge-warning" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-xs-12">
            <section class="tile sec-ht-350">
               <!-- tile header -->
               <div class="tile-header bg-blue dvd dvd-btm modal-action">
                  <h1 class="custom-font">
                     <strong>Headname Master</strong>
                  </h1>
                  <a role="button" id="get-second-modal" tabindex="0" >Create new</a>
               </div>
               <!-- /tile header -->
               <!-- tile body-->
               <div class="tile-body ak_table ak_table2 ak_dtablestyle">
                  <div class="table_ws_nowrap">
                     <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
                        <thead>
                           <tr>
                              <th class="stl_th1"></th>
                              <th class="stl_th2">SL</th>
                              <th class="stl_th3">Head Name</th>
                              <th class="stl_th10 action_icons_th">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach($HeadnameMaster as $key)
                           <tr>
                              <td></td>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $key->head_name }}</td>
                              <td>
                                 <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                                 <button class="btn badge badge-warning" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-xs-12">
            <section class="tile sec-ht-350">
               <!-- tile header -->
               <div class="tile-header bg-blue dvd dvd-btm modal-action">
                  <h1 class="custom-font">
                     <strong>Head Master</strong>
                  </h1>
                  <a role="button" id="get-third-modal" tabindex="0">Create new</a>
               </div>
               <!-- /tile header -->
               <!-- tile body-->
               <div class="tile-body ak_table ak_table2 ak_dtablestyle">
                  <div class="table_ws_nowrap">
                     <table class="table table-bordered table-responsive mb-0 data_tbl--feature">
                        <thead>
                       
                           <tr>
                              <th class="stl_th1"></th>
                              <th class="stl_th2">SL</th>
                              <th class="stl_th4">Head Name</th>
                              <th class="stl_th5">Rate</th>
                              <th class="stl_th6">Frequency</th>
                              <th class="stl_th10 action_icons_th">Actions</th>
                           </tr>
                           
                        </thead>
                        <tbody> @foreach($HeadMaster as $key)
                           <tr>
                             
                              <td></td>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $key->head_name }}</td>
                              <td>{{ $key->rate }}</td>
                              <td>{{ $key->frequency }}</td>
                              <td>
                                 <button class="btn badge badge-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                                 <button class="btn badge badge-warning" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                              </td>
                             
                           </tr> @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- /tile body-->
            </section>
         </div>
      </div>
   </div>
   <p class="cright">&copy; Copyright 2020, All Right Reserved</p>
</section>



<!-- create concession group detials -->
<div id="formModal1" class="modal fade">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="ak_tile_subhead">
               <h2> Group Name Setup </h2>
            </div>
         </div>
         <form>
            <div class="modal-body row">
               <div class="form-group col-sm-4 col-xs-12">
                  <label for="grpName">Group Name</label> 
               </div>
               <div class="form-group col-sm-8 col-xs-12">
                  <input type="text" class="form-control" name="grpName" id="grpName" placeholder="grp1">     
               </div>
            </div>
            <div class="modal-footer">
               <button type="reset" class="btn btn-red">Reset</button>
               <button type="submit" class="btn btn-blue">Create<i class="fa fa-floppy-o"></i></button>
            </div>
         </form>
      </div>
   </div>
</div>


<!-- create concession group detials -->
<div id="formModal2" class="modal fade">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="ak_tile_subhead">
               <h2> Head Name Setup </h2>
            </div>
         </div>
         <form>
            <div class="modal-body row">
               <div class="form-group col-sm-4 col-xs-12">
                  <label for="grpName">Head Name</label> 
               </div>
               <div class="form-group col-sm-8 col-xs-12">
                  <input type="text" class="form-control" name="grpName" id="grpName" placeholder="grp1">     
               </div>
            </div>
            <div class="modal-footer">
               <button type="reset" class="btn btn-red">Reset</button>
               <button type="submit" class="btn btn-blue">Create<i class="fa fa-floppy-o"></i></button>
            </div>
         </form>
      </div>
   </div>
</div>


<div id="formModal3" class="modal fade">
   <div class="modal-dialog w-tbl-70" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
            <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="ak_tile_subhead">
               <h2> Head  Setup </h2>
            </div>
         </div>
        <!-- ------------ -->
        <form>
        <div class="modal-body row">
          <div class="tile-body ak_table ak_table2 ak_dtablestyle">
            <div class="table_ws_nowrap">
               <table class="table table-bordered table-responsive mb-0">
                <thead>
                  <tr>
                    <th class="stl_th1">Head Name</th>
                    <th class="stl_th2">Rate</th>
                    <th class="stl_th2">Frequency</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><label for="transportTxt">Transport fees</label></td>
                    <td><input type="number" maxlength="6" min="0" class="form-control" name="transportTxt" id="transportTxt"></td>
                    <td>
                       <select class="form-control" name="selectSel" required> 
              <option>Annual</option> 
              <option>Quarterly</option>
              <option>Half Yearly</option>
            </select>          
          </td>
                  </tr>
                  <tr>
                    <td><label for="tutionTxt">Tution fees</label></td>
                    <td><input type="number" maxlength="6" min="0" class="form-control" name="tutionTxt" id="tutionTxt"></td>
                    <td>
                       <select class="form-control" name="selectSel" required> 
              <option>Annual</option> 
              <option>Quarterly</option>
              <option>Half Yearly</option>
            </select>          
          </td>
                  </tr>  
                  <tr>
                    <td><label for="annualTxt">Annual fees</label></td>
                    <td><input type="number" maxlength="6" min="0" class="form-control" name="annualTxt" id="annualTxt"></td>
                    <td>
                       <select class="form-control" name="selectSel" required> 
              <option>Annual</option> 
              <option>Quarterly</option>
              <option>Half Yearly</option>
            </select>          
          </td>
                  </tr>

                


                </tbody>
              </table>
               
              </div>
            </div>
          </div>
        
         </form>
      </div>
        <!-- ------------ -->

        <div class="modal-footer">
               <button type="reset" class="btn btn-red">Reset</button>
               <button type="submit" class="btn btn-blue">Create<i class="fa fa-floppy-o"></i></button>
            </div>
      </div>
   </div>
</div>


<!--/ Application Content -->
<!-- ============================================
============== Vendor JavaScripts ===============
============================================= -->
@section('footer_scripts')

<script type="text/javascript">
$(function(){
  $("#get-second-modal").click(function(e){
    e.preventDefault();
    $('#formModal2').modal('show'); 
  });


  $("#get-first-modal").click(function(e){
    e.preventDefault();
    $('#formModal1').modal('show'); 
  });


  $("#get-third-modal").click(function(e){
    e.preventDefault();
    $('#formModal3').modal('show'); 
  });

  // var modalID = "#"+$(this).attr("data-modalID"); 
  //   console.log(modalID);
  //   $(modalID).modal('show');


});
  
</script>

@endsection

@endsection
