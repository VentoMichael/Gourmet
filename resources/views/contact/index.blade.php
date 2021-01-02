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
                            @get('titlePresentation')
                        </h2>
                    </div>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <div class="containerAllText">
                    @get('textpresentation')
                </div>
                <div>
                    <a href="{{route('tickets.index')}}" class="btnCta">Acheter un billet <span class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="containerFormulary">
        <h2 aria-level="2" class="hidden">
            Formulaire de contact
        </h2>
        <div class="informationsContact">
            <p class="titleForm">
                @get('titleOfGourmets')
            </p>
            <ul role="list">
                @foreach($praticalInformations as $praticalInformation)
                <li role="listitem" class="infoContactDate">{{$praticalInformation->startDate}} & {{$praticalInformation->endDate}}</li>
                <li role="listitem" class="infoContactPlace">{{$praticalInformation->place}}, {{$praticalInformation->postalCode}}, {{$praticalInformation->region}}</li>
                <li role="listitem" class="infoContactMail"><a href="mailto:marchedesgourmets@gmail.com">{{$praticalInformation->email}}</a>
                </li>
                <li role="listitem" class="infoContactWebsite"><a href="{{$praticalInformation->website}}">{{$praticalInformation->website}}</a></li>
                <li role="listitem" class="infoContactPhone"><a href="tel:{{$praticalInformation->phone}}">{{$praticalInformation->phone}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="formContactContainer">
            <form action="#" method="get" class="formContact">
                <div>
                    <div class="containerInput">
                        <label for="nameSurname">Nom et prénom </label>
                        <input type="text" name="nameSurname" id="nameSurname" required placeholder="Lardo Marco">
                    </div>
                    <div class="containerInput">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required placeholder="lardomarco@gmail.com">
                    </div>
                </div>
                <div>
                    <div class="containerInput">
                        <label for="subject">Sujet </label>
                        <input type="text" name="subject" id="subject" placeholder="Combien d'exposants seront admis ...">
                    </div>
                </div>
                <div>
                    <div class="containerInput">
                        <label for="message">Message </label>
                        <textarea id="message" name="message" placeholder="Commentaires éventuels ..." rows="10"></textarea>
                    </div>
                </div>
                <div class="form-example">
                    <button type="submit" class="btnCta btnContact">Envoyer un message<span class="arrowCta"></span></button>
                </div>
            </form>
        </div>
    </section>
@endsection
