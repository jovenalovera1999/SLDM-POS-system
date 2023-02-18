$(document).ready(function() {
    $("#custom-table").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });
});

let option = {
    animation: true,
    delay: 3000
}

let toastAlertSuccess = document.getElementById("toast_success");
let bsToastAlertSuccess = new bootstrap.Toast(toastAlertSuccess, option);
bsToastAlertSuccess.show();

let toastAlertFail = document.getElementById("toast_fail");
let bsToastAlertFail = new bootstrap.Toast(toastAlertFail, option);
bsToastAlertFail.show();