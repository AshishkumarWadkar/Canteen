
<button id="rzp-button1" hidden>Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{ $response['razorpayId'] }}", // Enter the Key ID generated from the Dashboard
        "amount": "{{ $response['amount'] }}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "{{ $response['currency'] }}",
        "name": "{{ $response['name'] }}",
        "description": "{{ $response['description'] }}",
        "image": "https://example.com/your_logo", // You can give your logo url
        "order_id": "{{ $response['orderId'] }}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1


        "handler": function(response) {
            // After payment successfully made response will come here
            // send this response to Controller for update the payment response
            // Create a form for send this data
            // Set the data in form
            document.getElementById('rzp_paymentid').value = response.razorpay_payment_id;
            document.getElementById('rzp_orderid').value = response.razorpay_order_id;
            document.getElementById('rzp_signature').value = response.razorpay_signature;
            document.getElementById('plan').value = {{ $response['plan'] }};
            // // Let's submit the form automatically
            document.getElementById('submit_payment').click();
        },
        "prefill": {
            "name": "{{ $response['name'] }}",
            "email": "{{ $response['email'] }}",
            "contact": "{{ $response['contactNumber'] }}"
        },
        "notes": {

        },
        "theme": {
            "color": "#ffede7"
        }
    };
    var rzp1 = new Razorpay(options);
    window.onload = function() {
        document.getElementById('rzp-button1').click();


    };

    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }

</script>
<div style="height: 100vh; width:100%;">
<!-- This form is hidden -->
<form class="mt-5" action="{{ route('payment.complete') }}" method="POST" hidden>
    @csrf
    <input type="text" class="form-control" id="rzp_paymentid" name="rzp_paymentid">
    <input type="text" class="form-control" id="rzp_orderid" name="rzp_orderid">
    <input type="text" class="form-control" id="rzp_signature" name="rzp_signature">
    <input type="text" class="form-control" id="plan" name="plan">

    <button type="submit" id="submit_payment" class="btn btn-primary">Submit</button>
</form>
</div>

