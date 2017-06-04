jQuery(document).ready(function($) {

    $("#onderwijsTable").dataTable({
        "stateSave":true,
        "searching": false,
        "bInfo": false,
        "bLengthChange":false,
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