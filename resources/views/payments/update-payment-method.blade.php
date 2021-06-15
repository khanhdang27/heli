@extends('layout.app')

@section('content')
<div class="d-flex align-items-center bg-auth">
    <div class="container">
        <div class="row justify-content-center">

            <div class="py-5 my-5 bg-secondary col-12 col-md-8 col-xl-6 my-5 border rounded border-dark">
                <div class="d-flex align-items-center">
                    <div>Featured</div>
                    <img class="ml-auto" src="{{asset('images/ic/card-pay.svg')}}" width="40">
                </div>
                
                <div class="d-flex justify-content-between">
                    <label for="card-holder-name">Card Holder</label>
                    <input class="w-75 form-control" id="card-holder-name" 
                        type="text"
                        style="text-transform:uppercase">
                    
                </div> 
                <div class="my-3">
                    <div class="border rounded p-2" id="card-element"></div>
                </div>
                
                <button class="btn btn-primary mt-2" id="card-button" data-secret="{{ $intent->client_secret }}">
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


@endsection
