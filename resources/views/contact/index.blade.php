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
                            Une question ou une envie spéciale ?
                        </h2>
                    </div>
                </div>
                <div class="containerImagesHome">
                    <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                    <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                    <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                </div>
            </div>
            <div class="containerTextHome">
                <p>
                    Le Marché des Gourmets est disponible pour <b>toute question</b>, une envie spéciale ou même une <b>simple
                        envie de discuter ?</b>
                </p>
                <p>
                    Alors, n’hésitez pas à nous rendre visite au Val-Saint-Lambert lors de cette 21<sup>e</sup> édition.
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
                Le marché des gourmets
            </p>
            <ul role="list">
                <li role="listitem" class="infoContactDate">24, 25 mars 2021</li>
                <li role="listitem" class="infoContactPlace">À la salle des moines, Val-Saint-Lambert, 4450 Amay</li>
                <li role="listitem" class="infoContactMail"><a href="mailto:marchedesgourmets@gmail.com">marchedesgourmets@gmail.com</a>
                </li>
                <li role="listitem" class="infoContactWebsite"><a href="www.marchedesgourmets.be">www.marchedesgourmets.be</a></li>
                <li role="listitem" class="infoContactPhone"><a href="tel:+32494827265">0494 827 265</a></li>
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
