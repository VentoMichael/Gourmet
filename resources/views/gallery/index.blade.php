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
                <a href="{{route('tickets.index')}}" class="btnCta">Acheter un billet <span class="arrowCta"></span></a>
            </div>
        </div>
    </section>
    @livewire('gallery-filter')
@endsection
