 $(function () {
            $('.js-basic-example').DataTable({
                "order": [[ 0, "desc" ]],
                responsive: true
            });

            //Exportable table
            $('.js-exportable').DataTable({
                "order": [[ 0, "desc" ]],
                dom: 'Bfrtip',
                responsive: true,
                buttons: [
                    'copy', 'excel',  'pdf', 'print'
                ]

            });
        });