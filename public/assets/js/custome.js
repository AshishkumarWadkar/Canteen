$(document).ready(function() {
    $('.datatable').DataTable({
        dom: 'Bfrtip',

        scrollCollapse: true,
        fixedColumns: {
            left: 1,
            right: 1
        },
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],

    });
});
