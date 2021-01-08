@extends('layouts.app')
@section('content')
    <section class="sectionContainerHome">
        <div class="containerHome">
            <div class="containerPresentationHome">
                @include('partials.ctaTicket')
                <div class="logo logoHome" role="banner">
                    <img src="../resources/svg/Logo_club.png" alt="Logo des marchés des gourmets">
                </div>
                <div class="containerTitleHome">
                    <div>
                        <h2 aria-level="2" class="titleExposant">
                            Page de paiement afin de devenir exposant
                        </h2>
                    </div>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <div class="containerAllText">
                    Vous souhaitez devenir exposant afin de présenter et vendre vos meilleurs produits locaux ? C'est le bon endroit, il ne reste plus qu'à terminer l'achat.
                </div>
            </div>
        </div>
    </section>
    <section class="containerPayment">
        <div class="cardImage">
            <img src="{{asset('resources/svg/tickets.svg')}}" alt="Pictogramme de billet">
        </div>
        <div class="cardPayment containerAllText">
            <h2>
                Le montant total s'éleve à {{$amount / 100}}€
            </h2>
            <form action="{{route('checkout.credit-card')}}/#form" method="post" id="payment-form">
                @csrf
                <div class="form-group">
                    <div class="card-header">
                        <label for="card-element">
                            Saisissez les informations relatives à votre carte de crédit
                        </label>
                    </div>
                    <div class="card-body">
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                        <input type="hidden" name="plan" value=""/>
                    </div>
                </div>
                <div class="card-footer form-example">
                    <button
                        id="card-button"
                        class="btnCta btnContact"
                        type="submit"
                        data-secret="{{ $intent }}"
                    >Envoyer ma candidature<span class="arrowCta"></span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>

        const stripe = Stripe('{{ env('PUBLIC_API_STRIPE') }}', {locale: 'fr'}); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card'); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function (event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        const form = document.getElementById('payment-form');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
                .then(function (result) {
                    console.log(result);
                    if (result.error) {
                        // Inform the user if there was an error.
                        const errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        console.log(result);
                        form.submit();
                    }
                });
        });
    </script>
@endsection
