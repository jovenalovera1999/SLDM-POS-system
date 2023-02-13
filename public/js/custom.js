$(document).ready(function() {
    $("#custom-table").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });

    function calculateTotal() {
        let discounts = {
            pwd: 0.20,
            seniorCitizen: 0.20
        }
        
        let paymentMethod = $("#payment_method").val();
        let medicalFee = $("#medical_fee").val();
        let discount = $("#discount").val();
        let amount = $("#amount").val();
        let totalAmountPaid = $("#total_amount_paid").val();
        let change = $("#change").val();

        let discounted = 0;

        if(discount == "PWD") {
            discounted = medicalFee - (medicalFee * discounts.pwd);
            totalAmountPaid = discounted;
            change = amount - discounted;
        } else if(discount = "Senior Citizen") {
            discounted = medicalFee - (medicalFee * discount.seniorCitizen);
            totalAmountPaid = discounted;
            change = amount - discounted;
        } else {
            totalAmountPaid = medicalFee;
            change = amount - totalAmountPaid;
        }

        $("#card_payment_method").val() = paymentMethod;
        $("#card_medical_fee").val() = medicalFee;
        $("#card_discount").val() = discount;
        $("#card_amount").val() = amount;
        $("#card_total_amount_paid").val() = totalAmountPaid;
        $("#card_change").val() = change;
    }
});