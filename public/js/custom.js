$(document).ready(function() {
    $("#custom-table").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });

    $(".toast").toast("show");
});