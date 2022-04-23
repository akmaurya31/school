function quickConfirm(message='', url, blockdel=0){
    if (blockdel == 0) {
        swal({
          title: message != '' ? message : 'Are you sure want to delete?',
          text: "",
          icon: "error",
          buttons: true
        }).then(function(response) {
            if (response == true) {
                window.location.replace(url);           
            }
        });        
    }else{
        swal({
          title: 'Sorry you cannot delete this record!',
          text: "",
          icon: "error",

        }); 
    }

	return false;

}


function getQuickViewModel(type, id){
    jQuery.ajax({
        method: "GET",
        url: '/admin/edit-'+type+'/'+id+'?from_ajax=1',
        dataType:'json',
        success: function(response)
        {
        	var table = '';
        	table += '<div class="table-responsive">';
	        	table += '<table class="table table-bordered">';
				$.each(response, function(k, v) {
					if (k != 'city') {
					    table += '<tr><th>'+k.replace('_', ' ').toUpperCase()+'</th><td>'+v+'</td></tr>';	
					}
				});        	
				table += '</table>';
			table += '</div>';
			$("#myViewContentModal .modal-body").html(table);
        	$("#myViewContentModal").modal('show');

        },error:function(){

        }
    });
}

$(document).on('keyup', 'input[type="number"]', function(){
    if ($(this).hasClass('phone')) {
        if ($(this).val().length > 10) {
            alert('Enter Correct Phone Number!');
            $(this).val('');
        }
    }
});

$(document).ready(function(){
  $('.global-select2-new').select2();  
});


$(document).ready(function(){
  $('.dynamic-hostel, .dynamic-block, .dynamic-floor, .dynamic-room, .dynamic-bed, .dynamic-student').select2();  
  var blockClone = $('.dynamic-block').clone();
  var floorClone = $('.dynamic-floor').clone();
  var roomClone = $('.dynamic-room').clone();
  var bedClone = $('.dynamic-bed').clone();
  var studentClone = $('.dynamic-student').clone();

  $('.dynamic-block, .dynamic-floor, .dynamic-room, .dynamic-bed, .dynamic-student').find('option[hide-options="1"]').remove();
  
  $('.dynamic-hostel').on("change", function(e) { 
    var _form = $(this).closest('form');
    _form.find('.dynamic-block, .dynamic-floor, .dynamic-room, .dynamic-bed').val('').trigger('change');
    _form.find('.dynamic-block option[hide-options="1"]').remove(); 
    var selectedBlock = blockClone.find('option[id-hostel="'+$(this).val()+'"]').clone();
    _form.find('.dynamic-block').append(selectedBlock);   
  });

  $('.dynamic-block').on("change", function(e) { 
    var _form = $(this).closest('form');
    _form.find('.dynamic-floor, .dynamic-room, .dynamic-bed, .dynamic-student').val('').trigger('change');
    _form.find('.dynamic-floor option[hide-options="1"], .dynamic-student option[hide-options="1"]').remove(); 
    var selectedFloor = floorClone.find('option[id-block="'+$(this).val()+'"]').clone();
    var selectedStudent = studentClone.find('option[id-block="'+$(this).val()+'"]').clone();

    _form.find('.dynamic-floor').append(selectedFloor);   
    _form.find('.dynamic-student').append(selectedStudent);   

    var mess_amt = $(this).find('option:selected', this).attr('total-rent');
    _form.find('input[name="mess_amt"]').val(mess_amt)
  });

  $('.dynamic-floor').on("change", function(e) { 
    var _form = $(this).closest('form');
    _form.find('.dynamic-room, .dynamic-bed').val('').trigger('change');
    _form.find('.dynamic-room option[hide-options="1"]').remove(); 
    var selectedRoom = roomClone.find('option[id-floor="'+$(this).val()+'"]').clone();
    _form.find('.dynamic-room').append(selectedRoom);   
  });

  $('.dynamic-room').on("change", function(e) { 
    var _form = $(this).closest('form');
    _form.find('.dynamic-bed').val('').trigger('change');
    _form.find('.dynamic-bed option[hide-options="1"]').remove(); 
    var selectedBed = bedClone.find('option[id-room="'+$(this).val()+'"]').clone();
    var roomAmt = $(this).find('option:selected', this).attr('room-amt');
    _form.find('.dynamic-bed').append(selectedBed);   
    _form.find('input[name="room_amt"]').val(roomAmt)
  });


  $('.toggle-hidden').on("change", function(e) { 
    var target=$(this).attr('target');
    var target_field=$(this).attr('target-field');

    if ($(this).val() == target_field) {
      $('#section--'+target).removeClass('hidden');
    }else{
      $('#section--'+target).addClass('hidden');      
    }
  });
  
  $('select[name="vehicle_type"]').on("change", function(e) { 
    if ($(this).val() == 'no-vehicle') {
      $('#section--vehicle-number').addClass('hidden');
    }else{
      $('#section--vehicle-number').removeClass('hidden');      
    }
  });

  $('select[name="id_type"]').on("change", function(e) { 
    if ($('input[name="id_number"]').val().length > 0) {
      var card_digits = $('input[name="id_number"]').val().length; 
      if ($(this).val() == 'aadhar_card' && card_digits != 16) {
        swal({
          title: 'Aadhar card numnber should be 16 digits',
          text: "Invalid Data",
          icon: "error",
          button: "OK",
        });    
        $('input[name="id_number"]').val('');
      }else if ($(this).val() == 'pan_card' && card_digits != 10) {
        swal({
          title: 'PAN card numnber should be 10 digits',
          text: "Invalid Data",
          icon: "error",
          button: "OK",
        });    
        $('input[name="id_number"]').val('');
      }else if ($(this).val() == 'driving_licence' && card_digits != 15) {
        swal({
          title: 'Driving Licence numnber should be 15 digits',
          text: "Invalid Data",
          icon: "error",
          button: "OK",
        });          
        $('input[name="id_number"]').val('');
      }      
    }
  });

  $('input[name="id_number"]').on("blur", function(e) { 
    var card_selected = $('select[name="id_type"]').val();
    var card_digits = $(this).val().length; 
    if ($(this).val().length > 0 && card_selected.length > 0) {
      if (card_selected == 'aadhar_card' && card_digits != 16) {
        swal({
          title: 'Aadhar card numnber should be 16 digits',
          text: "Invalid Data",
          icon: "error",
          button: "OK",
        });    
        $(this).val('');
      }else if (card_selected == 'pan_card' && card_digits != 10) {
        swal({
          title: 'PAN card numnber should be 10 digits',
          text: "Invalid Data",
          icon: "error",
          button: "OK",
        });    
        $(this).val('');
      }else if (card_selected == 'driving_licence' && card_digits != 15) {
        swal({
          title: 'Driving Licence numnber should be 15 digits',
          text: "Invalid Data",
          icon: "error",
          button: "OK",
        });          
        $(this).val('');
      }      
    }
  });
  
});

function countMessAmt(){
  var b_f = $('input[name="bf_current_rent"]').val() != '' ? parseFloat($('input[name="bf_current_rent"]').val()) : 0;
  var lunch = $('input[name="lunch_current_rent"]').val() != '' ? parseFloat($('input[name="lunch_current_rent"]').val()) : 0;
  var dinner = $('input[name="dinner_current_rent"]').val() != '' ? parseFloat($('input[name="dinner_current_rent"]').val()) : 0;
  $('input[name="total_rent"]').val(b_f+lunch+dinner);
}

$(document).ready(function() {
  var summernoteSelector = $('.summernote-init');
  var height = summernoteSelector.attr('doc-height') ? parseInt(summernoteSelector.attr('doc-height')) : 200;
  summernoteSelector.summernote({
    height: height,
    focus: true
  });
});


jQuery(document).ready(function($){
  $('.tags-area a').each(function(){
    $(this).click(function(){
      var selection = document.getSelection();
      var cursorPos = selection.anchorOffset;
      var oldContent = selection.anchorNode.nodeValue;
      var toInsert = $(this).find('span').attr('tag-val');
      var newContent = oldContent.substring(0, cursorPos) + toInsert + oldContent.substring(cursorPos);
      selection.anchorNode.nodeValue = newContent;
    });
  });
});


function toggleCertificateTab(certificate) {
  $('#toggle-certificate-header').text(certificate+' certificate');
  $('#toggle-certificate-header').css({'text-transform': 'capitalize'});
  $('select[name="certificate_type"] option[value="'+certificate+'"]').prop('selected', true);
}

$(document).ready(function(){
  $('select#branch-selection, select[name="template_idcard"]').select2();

  var branchClone = $("select#branch-selection").clone();
  var templateCardClone = $('select[name="template_idcard"]').clone();

  $('select#branch-selection, select[name="template_idcard"]').find('option[hide-options="1"]').remove();

  $('select[name="applicant_type"]').on("change", function(e) { 
    var _form = $(this).closest('form');
    _form.find('select#branch-selection, select[name="template_idcard"]').val('').trigger('change');
    _form.find('select#branch-selection option[hide-options="1"], select[name="template_idcard"] option[hide-options="1"]').remove(); 
    var selectedBranch = branchClone.find('option[for-branch="'+$(this).val()+'"]').clone();
    var selectedTemplateCard = templateCardClone.find('option[for-card="'+$(this).val()+'"]').clone();
    _form.find('select#branch-selection').append(selectedBranch);   
    _form.find('select[name="template_idcard"]').append(selectedTemplateCard);   
  });

});

(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));

$(document).ready(function() {
  $("input.number-inpt").inputFilter(function(value) {
    return /^\d*$/.test(value);    // Allow digits only, using a RegExp
  });
});

$(document).on('submit', '#print-card-form', function(e) {
  e.preventDefault();
  var table = $('#card-template-listing');

  var std_ids = [];
  table.find('tbody tr').each(function(){
    if ($(this).hasClass('selected')) {
      std_ids.push(parseInt($(this).attr('id-student')));
    }
  });
  
  if(std_ids.length === 0){
    alert('Please select student to generate ID Cards.');
    return ;
  }

  var print_date = $(this).find('input[name="print_date"]').val();

  jQuery.ajax({
      method: "GET",
      url: base_url+'/admin/generate-cards/'+std_ids.toString(),
      dataType:'json',
      data: {
        'print_date': print_date
      }, 
      success: function(response)
      {
        $.each(response.certificates, function(k, v) {
          $("#viewCertificatesModal .modal-body").append(v+"<br/><br/>");          
        });
        
        $("#viewCertificatesModal").modal('show');
      },error:function(){

      }
  });


});


$(function (){
  if($('input[name="saved_success"]').length > 0 ){
    swal({
      title: $('input[name="saved_success"]').val(),
      text: "Entry Saved",
      icon: "success",
      button: "OK",
    });    
  }
});    


$(function (){
  if($('input[name="error_message"]').length > 0 ){
    swal({
      title: $('input[name="error_message"]').val(),
      text: "",
      icon: "error",
    });    
  }
});    
