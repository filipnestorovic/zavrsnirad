<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{config('services.stripe.publishable_key')}}');
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#stripe_payment_form');
</script>
