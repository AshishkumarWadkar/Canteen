<style>
    .loader {
 position: relative;
 width: 2.5em;
 height: 2.5em;
 transform: rotate(165deg);
}

.loader:before, .loader:after {
 content: "";
 position: absolute;
 top: 50%;
 left: 50%;
 display: block;
 width: 0.5em;
 height: 0.5em;
 border-radius: 0.25em;
 transform: translate(-50%, -50%);
}

.loader:before {
 animation: before8 2s infinite;
}

.loader:after {
 animation: after6 2s infinite;
}

@keyframes before8 {
 0% {
  width: 0.5em;
  box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
 }

 35% {
  width: 2.5em;
  box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);
 }

 70% {
  width: 0.5em;
  box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);
 }

 100% {
  box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
 }
}

@keyframes after6 {
 0% {
  height: 0.5em;
  box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
 }

 35% {
  height: 2.5em;
  box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);
 }

 70% {
  height: 0.5em;
  box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);
 }

 100% {
  box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
 }
}

.loader {
 position: absolute;
 top: calc(50% - 1.25em);
 left: calc(50% - 1.25em);
}
</style>
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
<div class="loader"></div>
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

