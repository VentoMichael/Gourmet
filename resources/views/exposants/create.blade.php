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
                            @get('titlePage')
                        </h2>
                    </div>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <div class="containerAllText">
                    @get('textPresentation')
                </div>
                <div>
                    <a href="{{route('exposants.create')}}" class="btnCta">Devenir exposant <span
                            class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <div class="containerBecomeExposant">
        <div class="containerBecomeVigneron containerAllText">
            @get('textDescribeExposant')
        </div>
        <div class="containerButtonExpo">
            <p class="btnCta priceBecomeExpo" style="cursor:inherit;">Le prix du billet
                : {{$praticalInformations->first()->priceTicketExposant}} €</p>
        </div>
    </div>
    <section class="containerFormulary" id="form">
        <h2 aria-level="2" class="hidden">
            Formulaire de contact
        </h2>
        @livewire('new-exposant')
    </section>
@endsection
