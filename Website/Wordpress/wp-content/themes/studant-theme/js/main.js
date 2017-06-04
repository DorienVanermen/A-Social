jQuery(document).ready(function($) {

    $("#onderwijsTable").dataTable({
        "stateSave":false,
        "searching": false,
        "bInfo": false,
        "autoWidth": false,
        "bLengthChange":false,
        "pageLength": 25,
        "iDisplayLength": 25,
        "scrollX": true,
        "language": {
            "loadingRecords": "Laden...",
            "lengthMenu": "Aantal rijen _MENU_",
            "paginate": {
                "first":      "Eerste",
                "last":       "Laatste",
                "next":       "Volgende",
                "previous":   "Vorige"
            },
            "aria": {
                "sortAscending":  "Stijgend",
                "sortDescending": "Dalend"
            },
        },
    });

});