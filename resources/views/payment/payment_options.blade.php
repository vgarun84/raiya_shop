<form action="{{ route('shop.charge') }}" method="post" id="payment-form">
    @csrf
    <div class="form-group">
        <label for="card-element">
            Credit or debit card
        </label>
        <div id="card-element">
            <!-- sStripe Element inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>
    
    <div class="mt-5">
        <input type="hidden" name="product_id" value="{{$product->id}}" />
        <button type="submit" class="btn btn-warning">Pay now</button>
    </div>
</form>
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe("{{ config('services.stripe.key') }}");
    var elements = stripe.elements();
    var cardElement = elements.create('card');

    cardElement.mount('#card-element');

    var form = document.getElementById('payment-form');
    var cardErrors = document.getElementById('card-errors');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(cardElement).then(function(result) {
            if (result.error) {
                cardErrors.textContent = result.error.message;
            } else {
                stripeTokenHandler(result.token);
            }
        });
    });

    function stripeTokenHandler(token) {
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        form.submit();
    }
</script>
