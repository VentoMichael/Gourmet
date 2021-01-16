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
                            {{$exposant->shop_name}}
                        </h2>
                    </div>
                    <p class="regionExposant">
                        {{$exposant->country->name}}
                    </p>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <div class="containerTextHome containerAllText">
                    {{$exposant->product_description}}
                </div>
                @include('partials.buyTicket')
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
                        {{$exposant->country->name}}
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
