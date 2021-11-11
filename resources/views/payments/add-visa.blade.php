@extends('layout.app')
@section('title','Payment')
@section('content')
    <div class="body-content">
        <div class="container-fluid text-center top-news-page">
            @lang('keywords.addVisaCard')
        </div>
        <div class="container-fluid text-primary pb-5">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-lg-7 col-xl-4">
                    <h1 class="text-center my-5 font-weight-bold">@lang('keywords.addVisaCard')</h1>
                    <div class="card border-0">
                        <div class="text-primary">
                            <div class="form-group h4">
                                <label for="card-holder-name" class="font-weight-bold">Card Holder</label>
                                <input class="form-control border-primary ip-payment"
                                       id="card-holder-name" type="text" style="text-transform:uppercase"
                                        placeholder="Enter cardholder's full name">
                            </div>
                            <label class="h4 font-weight-bold" for="card-holder-name">Enter Card Number</label>
                            <div class="form-group">
                                <div class="ip-payment pt-3 border border-primary rounded p-2"
                                     id="card-element"></div>
                            </div>
                            <button class="btn btn-primary py-3 px-4 h4 shadow w-100 my-5 font-weight-bold"
                                    id="card-button" data-secret="{{ $intent->client_secret }}">
                                Add card
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script type="application/javascript" src="https://js.stripe.com/v3/"></script>

    <script type="application/javascript">
        const stripe = Stripe("{{ config('app.stripe_key') }}");

        const elements = stripe.elements();
        elements.update({locale: 'en'});
        const cardElement = elements.create('card', {
            hidePostalCode: true
        });

        cardElement.mount('#card-element');
    </script>
    <script type="application/javascript">
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;


        cardButton.addEventListener('click', async (e) => {
            const {setupIntent, error} = await stripe.confirmCardSetup(
                clientSecret,
                {
                    payment_method: {
                        card: cardElement,
                        billing_details: {name: cardHolderName.value}
                    }
                }
            );

            if (error) {
                toastr["error"](error.message);
            } else {
                console.info('success: ', setupIntent.payment_method);
                axios.post("{{ route('site.store-card') }}", {
                    payment_method: setupIntent.payment_method,
                })
                    .then(function (response) {
                        toastr["success"]("@lang('keywords.addSuccessCard')");
                        window.location.href = "{{URL::route('site.user.wallet')}}"
                    })
                    .catch(function (error) {
                        toastr["error"]("@lang('keywords.addErrorCard')");
                    });
            }
        });

    </script>

@endpush
@endsection
