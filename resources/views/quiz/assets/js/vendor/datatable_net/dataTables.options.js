 
     $(document).ready(function() {
        $('#datatable1, .data_tbl--feature').DataTable( {
           
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
                'print',
                'colvis'
                
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
   