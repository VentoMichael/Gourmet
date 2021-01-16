@extends('layouts.app')
@section('content')
    <section class="sectionContainerHome">
        <div class="containerHome">
            <div class="containerPresentationHome">
                @include('partials.ctaTicket')
                @include('partials.logo')
                <div class="containerTitleHome">
                    <div>
                        <h2 aria-level="2" class="titleExposant">
                            Page de paiement afin de participer au marché des gourmets
                        </h2>
                    </div>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <div class="containerAllText">
                    Vous souhaitez participer au marché des gourmets afin de venir voir ou acheter les meilleurs
                    produits locaux ?
                    Vous êtes au bon endroit, finalisez l'achat et vous ne le regretterez pas !
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
            <form action="{{route('checkoutVisitor.credit-card')}}/#form" method="post" id="payment-form">
                @csrf
                <div class="form-group">
                    <div class="card-header">
                        <label for="card-element">
                            Saisissez les informations relatives à votre carte de crédit
                        </label>
                    </div>
                    <div class="card-body">
                        <div id="card-element">
                        </div>
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
                    >Finaliser mon achat<span class="arrowCta"></span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>const stripe = Stripe('{{ env('PUBLIC_API_STRIPE') }}',{locale: 'fr'});const elements=stripe.elements(),cardElement=elements.create("card"),cardButton=document.getElementById("card-button"),clientSecret=cardButton.dataset.secret;cardElement.mount("#card-element"),cardElement.addEventListener("change",function(e){const t=document.getElementById("card-errors");e.error?t.textContent=e.error.message:t.textContent=""});const form=document.getElementById("payment-form");form.addEventListener("submit",function(e){e.preventDefault(),stripe.handleCardPayment(clientSecret,cardElement,{payment_method_data:{}}).then(function(e){if(console.log(e),e.error){document.getElementById("card-errors").textContent=e.error.message}else console.log(e),form.submit()})});</script>
@endsection
