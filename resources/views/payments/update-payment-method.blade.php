@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center bg-auth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-xl-6 my-5 border rounded border-secondary">
                
                <input id="card-holder-name" type="text">

                <!-- Stripe Elements Placeholder -->
                <div id="card-element"></div>
                
                <button id="card-button" data-secret="{{ $intent->client_secret }}">
                    Update Payment Method
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe("{{ config('app.stripe_key') }}");

    const elements = stripe.elements();
    const cardElement = elements.create('card',{
        hidePostalCode : true
    });

    cardElement.mount('#card-element');
</script>

<script> 

const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');
const clientSecret = cardButton.dataset.secret;


cardButton.addEventListener('click', async (e) => {
    const { setupIntent, error } = await stripe.confirmCardSetup(
        clientSecret,
        {
            payment_method: {
                card: cardElement,
                billing_details: { name: cardHolderName.value }
            }
        }
    );

    if (error) {
        console.error("error: ",error);
    } else {
        console.info('success: ',setupIntent.payment_method );
        axios.post("{{ route('site.payment.add-payment') }}", {
            payment_method: setupIntent.payment_method,
        })
        .then(function (response) {
            console.log(response);
            location.reload();
        })
        .catch(function (error) {
            console.log(error);
        });
    }
});

</script>