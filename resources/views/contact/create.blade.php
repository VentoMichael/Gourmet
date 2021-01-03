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
                    <a href="{{route('tickets.create')}}" class="btnCta">Acheter un billet <span class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="containerFormulary" id="createMsg">
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
            @if(Session::has('success'))
                <div class="successMessage">
                    <img src="{{asset('resources/svg/checked.svg')}}" alt="Îcone de validation">
                    <p>{{Session::get('success')}}</p>
                </div>
            @endif
            <form aria-label="Création d'un message" role="form" method="POST" action="{{route('contact.store')}}" class="formContact">
                @csrf
                <div>
                    <div class="containerInput">
                        <label for="name_surname">Nom et prénom <span class="error">*</span></label>
                        <input type="text" value="{{old("name_surname")}}" name="name_surname" id="name_surname" required placeholder="Lardo Marco">
                        <p class="error">{{$errors->first('name_surname')}}</p>
                    </div>
                    <div class="containerInput">
                        <label for="email">Email <span class="error">*</span></label>
                        <input type="email" value="{{old("email")}}" name="email" id="email" required placeholder="lardomarco@gmail.com">
                        <p class="error">{{$errors->first('email')}}</p>
                    </div>
                </div>
                <div>
                    <div class="containerInput">
                        <label for="subject">Sujet <span  class="error">*</label>
                        <input type="text" value="{{old("subject")}}" name="subject" id="subject" placeholder="Combien d'exposants seront admis ...">
                        <p class="error">{{$errors->first('subject')}}</p>
                    </div>
                </div>
                <div>
                    <div class="containerInput">
                        <label for="comment">Message </label>
                        <textarea id="message" name="comment" placeholder="Commentaires éventuels ..." rows="10">{{old("comment")}}</textarea>
                    </div>
                </div>
                <div class="form-example">
                    <button type="submit" class="btnCta btnContact">Envoyer un message<span class="arrowCta"></span></button>
                </div>
            </form>
        </div>
    </section>
@endsection
