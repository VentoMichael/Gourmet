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
                            {{$exposant->shop_name}}
                        </h2>
                    </div>
                    <p class="regionExposant">
                        {{$exposant->country}}
                    </p>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <div class="containerTextHome containerAllText">
                    {{$exposant->product_description}}
                </div>
                <div>
                    <a href="{{route('exposants.create')}}" class="btnCta">Devenir exposant <span
                            class="arrowCta"></span></a>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="containerMenu containerPersoExpo">
            <h2 aria-level="2" class="hidden">
                Informations personnelles de Vins nobles de Sicile
            </h2>
            <div class="containerInformationsPerso">
                <div>
                    <p class="label">
                        Nom du commerce
                    </p>
                    <p class="infoPersoExpo">
                        {{$exposant->shop_name}}
                    </p>
                </div>
                <div>
                    <p class="label">
                        Adresse et n°
                    </p>
                    <p class="infoPersoExpo">
                        {{$exposant->location}}
                    </p>
                </div>
                <div>
                    <p class="label">
                        Email
                    </p>
                    <p class="infoPersoExpo">
                        <a href="mailto:{{$exposant->email}}"></a>{{$exposant->email}}
                    </p>
                </div>
                <div>
                    <p class="label">
                        Pays
                    </p>
                    <p class="infoPersoExpo">
                        {{$exposant->country}}
                    </p>
                </div>
                <div>
                    <p class="label">
                        Téléphone
                    </p>
                    <p class="infoPersoExpo">
                        <a href="tel:+{{$exposant->phone}}">{{$exposant->phone}}</a>
                    </p>
                </div>
                <div>
                    <p class="label">
                        Site internet
                    </p>
                    <p class="infoPersoExpo">
                        <a href="{{$exposant->website}}"></a>{{$exposant->website}}
                    </p>
                </div>
                <div>
                    <p class="label">
                        Descriptif des produits
                    </p>
                    <p class="infoPersoExpo containerAllText">{{$exposant->product_description}}</p>
                </div>

            </div>
            <div class="containerExpoPlaceTagInfo">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.353993366886!2d4.29603331574703!3d50.88015827953696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c16fcb77f069%3A0xf913948a7a585e16!2sZone1%20Research%20Park%20120%2C%201731%20Asse!5e0!3m2!1sfr!2sbe!4v1607590415394!5m2!1sfr!2sbe"
                        width="400" style="border:0; height: 300px" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                    <div class="containerTagsExpo">
                        <p class="label">
                            Tags associé aux produits
                        </p>
                        <div class="containerModulesTagsExpo">
                            @foreach($exposant->tags as $e)
                                <div class="moduleTag moduleTagExpo">
                                    {{$e->name}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btnCta MenuCta ctaExpoPerso ctaVisitWebsite">Visiter son site internet <span
                                class="arrowCta"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
