 
     $(document).ready(function() {
        var data__table = $('#datatable1, .data_tbl--feature').DataTable( {
           
            columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            select: {
                style:    'multi+shift',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]],
            autoFill: {
                columns: ':not(:first-child)'
            },     
    
            dom: '<"ak_topbtns"B><"ak_btrow"lf><"ak_table-responsive"<"ak_table-responsive_inner"rt>><"ak_ftrrow"ip>',
             
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'csv',
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: ':visible'
                    },
                    
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: 'th:not(:first-child)'
                    },
                    
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                },
                'colvis',
                {
                    text: '<i class="fa fa-trash"></i> Delete',
                    className: 'btn btn-danger',
                    action: function ( e, dt, node, config ) {
                        if (!confirm('Are you sure?')) {
                            return false;
                        }
                        var targetIdsArray = [];
                        var current_table = node.closest('.dataTables_wrapper').find('table');
                        current_table.find('tbody tr').each(function(){
                            if ($(this).hasClass('selected')) {
                                targetIdsArray.push($(this).attr('target-module-id'))
                            }
                        });
                        if (!targetIdsArray) {
                            return false;
                        }
                        
                        var targetIds = targetIdsArray.toString();
                        $.ajax({
                            method: "GET",
                            url: '/admin/bulk-operations/delete/'+current_table.attr('table-type')+'/'+targetIds+'/'+current_table.attr('returnpath'),
                            dataType:'json',
                            success: function(response)
                            {
                                console.log(response);
                                alert('Success!');
                                window.location.replace(response.return_path);
                            },error:function(){
                                alert('Server Error!');
                            }
                        });                        
                    }
                }
                
            ],
           // "scrollX": true,
            //"scrollY": "400px",
         
            
    "initComplete": function(settings, json) {
        $('.dataTables_scrollBody thead tr').css({visibility:'collapse'});
    },
     "pagingType": "simple_numbers",
    "language": {
        "lengthMenu": "Display <span> _MENU_ </span> Items",
        "zeroRecords": "<p class='text-center'>No Record Found</p>",
    }   
        } );
      
    } );
   