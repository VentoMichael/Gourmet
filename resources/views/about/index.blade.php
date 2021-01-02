@extends('layouts.app')
@section('content')
    <section class="sectionContainerHome">
        <div class="containerHome">
            <div class="containerPresentationHome">
                @include('partials.ctaTicket')
                <div class="logo logoHome" role="banner">
                    <img src="{{asset('resources/svg/Logo_club.png')}}" alt="Logo des marchés des gourmets">
                </div>
                <div class="containerTitleHome containerAllText">
                    <div>
                        <h2 aria-level="2" class="titleExposant">
                            @get('titlePage')
                        </h2>
                    </div>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerCtaPresentation">
                <div class="containerAllText">
                    @get('presentationRotaryClub')
                </div>
                <div>
                    <a href="{{route('tickets.index')}}" class="btnCta">Acheter un billet <span class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 aria-level="2" class="hidden">
            À propos de nous
        </h2>
        <div class="containerAboutUs">
            <section class="containerAboutUsWhySection">
                <img src="@get('imageWhyAboutUs')" alt="@get('textAlternativeWhyAboutUs')">
                <h3 aria-level="3">
                    @get('titleWhyAboutUs')
                </h3>
                <div class="containerAllText">
                    @get('textWhyAboutUs')
                </div>
            </section>
            <section class="containerAboutUsHowSection">
                <img src="@get('imageHowAboutUs')" alt="@get('textAlternativeHowAboutUs')">
                <h3 aria-level="3">
                    @get('titleHowAboutUs')
                </h3>
                <div class="containerAllText">
                    @get('textHowAboutUs')
                </div>
            </section>
        </div>
        <div>
            <section class="containerAbout">
                <h3 aria-level="3" class="hidden">
                    Notre historique
                </h3>
                <div class="containerHistorical">
                    <img src="{{$oneRandomImage->first()->image}}" alt="{{$oneRandomImage->first()->alt}}">
                    <div>
                        <div class="containerAllText">
                            @get('textAboutUs')
                        </div>
                        <div>
                            <a href="{{route('exposants.index')}}" class="btnCta">Nos exposants <span
                                    class="arrowCta"></span></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
