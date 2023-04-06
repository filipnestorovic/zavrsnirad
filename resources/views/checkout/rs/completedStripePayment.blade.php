<html>
<head>
    <script src="{{ asset('/') }}shared_files/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<h1 id="stripeMsg"></h1>
<h1>
  <span id="timer" style="display: none;">
    You will be redirected in <span id="time">5</span> seconds.
  </span>
</h1>
<script>
    const stripe = Stripe('{{config('services.stripe.publishable_key')}}');

    async function checkStatus() {
        const clientSecret = new URLSearchParams(window.location.search).get(
            "payment_intent_client_secret"
        );

        if (!clientSecret) {
            return;
        }

        const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

        let redirectUrl = '';
        switch (paymentIntent.status) {
            case "succeeded":
                redirectUrl = '{{$thankyouUrl}}';//thankyouUrl
                showMessage("Payment succeeded!");
                break;
            case "processing":
                redirectUrl = '{{ url()->previous() }}';//wait
                showMessage("Your payment is processing.");
                break;
            case "requires_payment_method":
                redirectUrl = '{{ url()->previous() }}';
                showMessage("Your payment was not successful, please try again.");
                break;
            default:
                redirectUrl = '{{ url()->previous() }}';
                showMessage("Something went wrong.");
                break;
        }

        function showMessage(message) {
            $('#stripeMsg').html(message).show();
            $('#timer').show();
        }

        let counter = 5;
        let interval = setInterval(function() {
            counter--;
            $('#time').text(counter);
            if (counter <= 0) {
                clearInterval(interval);
                return;
            }
        }, 1000);

        setTimeout(() => {
            window.location.replace(redirectUrl);
        }, 5000);

    }

    checkStatus();
</script>
</body>
</html>
