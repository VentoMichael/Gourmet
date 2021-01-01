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
                        <h2 aria-level="2">
                            Le marché des gourmets
                        </h2>
                    </div>
                    <div class="containerTitle">
                        <p class="textTitle">
                        <span>
                            produits des terroirs européens
                        </span>
                        </p>
                        <p class="marketTitle">
                        <span>
                            21<sup>e</sup> marché
                        </span>
                        </p>
                    </div>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <p>
                    Le Marché des Gourmets est <b>un événement annuel</b> organisé par le Rotary Club de Flémalle sur le
                    prestigieux site <b>de Val-Saint-Lambert à la salle des moines</b> afin d'obtenir des fonds pour
                    aider
                    <b>les plus démunis.</b>
                </p>
                <p>
                    Depuis lors, la fréquentation n'a cessé d'augmenter pour <b>atteindre 4000 visiteurs</b> et
                    plusieurs
                    pays et régions se sont succédé comme notamment : l'Irlande, le Portugal, l'Italie et tant d’autres.
                </p>
                <div>
                    <a href="{{route('expoBecome.index')}}" class="btnCta">Devenir exposant <span
                            class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <div class="containerAimHome">
        <section>
            <div class="containerTextTitleAim">
                <div class="containerImageHome">
                    <img src="resources/img/sausage.jpg"
                         srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                         sizes="100vw" alt="Image de saucissons">
                </div>
                <div class="containerText">
                    <h2 aria-level="2">
                        Qu'est ce que l'on y retrouve ?
                    </h2>
                    <p>
                        Le marché des gourmets vous propose <b>une large gamme de produits</b> comestible (charcuteries,
                        vins,
                        fromages
                        …), une gamme que <b>vous ne trouverez pas ailleurs,</b> car nos commerçants viennent des quatre
                        coins
                        du
                        monde.
                    </p>
                    <div class="containerCtaButton">
                        <a href="{{route('tickets.index')}}" class="btnCta btnCtaResto">Acheter un billet <span
                                class="arrowCta"></span></a>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="containerTextTitleAim containerTextTitleAimSecond">
                <div class="containerImageHome">
                    <img src="resources/img/market.jpg"
                         srcset="resources/img/market_small.jpg 320w, resources/img/market.jpg 640w"
                         sizes="100vw" alt="Image récente du salon du marché des gourmets">
                </div>
                <div class="containerText">
                    <h2 aria-level="2">
                        Les années passées
                    </h2>
                    <p>
                        Le marché des gourmets existe depuis plus de 20 ans. Dans le but de vous faire plaisir, <b>une
                            trentaine
                            d’exposants</b> y présenteront divers produits, mais également pour y passer un <b>délicieux
                            moment de
                            dégustations</b> et de rencontres et ce dans la bonne humeur bien sûr !
                    </p>
                    <div class="containerCtaButton">
                        <a href="{{route('tickets.index')}}" class="btnCta">Acheter un billet <span
                                class="arrowCta"></span></a>
                    </div>
                </div>

            </div>

        </section>
        <section>
            <div class="containerTextTitleAim">
                <div class="containerImageHome">
                    <img src="resources/img/restaurant.jpg"
                         srcset="resources/img/restaurant_small.jpg 320w, resources/img/restaurant.jpg 640w"
                         sizes="100vw" alt="Image d'un sandwiche">
                </div>
                <div class="containerText">
                    <h2 aria-level="2">
                        Notre restaurant
                    </h2>
                    <p>Le marché des gourmets vous propose une carte digne de ce nom. <b>Prix généralement faible et
                            varié</b>
                        dans le
                        goût, nous mettons tout en oeuvre pour que votre visite se passe pour le mieux.
                    </p>
                    <div class="containerCtaButton">
                        <a href="{{route('restaurant.index')}}" class="btnCta btnCtaResto">Notre restaurant <span
                                class="arrowCta"></span></a>
                    </div>
                </div>

            </div>

        </section>
    </div>
    <section class="sectionContainerSlide">
        <div class="slider">
            <div class="containerTitleSlide">
                <h2 aria-level="2">
                    3 exposants aléatoire
                </h2>
                <div class="arrowsSlide">
                    <a class="prev" id="prev"></a>
                    <a class="next" id="next"></a>
                </div>
            </div>
            <div class="slideshow-container">
                @foreach($exposantsFirstThree as $exposantFirstThree)
                    <section class="mySlides fade">
                        <div class="containerSlide">
                            <div>
                                <h3 aria-level="3">
                                    {{$exposantFirstThree->shop_name}}
                                </h3>
                                <p class="regionExposant">
                                    {{$exposantFirstThree->country}}
                                </p>
                                <div class="containerImagesHome">
                                    <img src="{{$exposantFirstThree->firstPicRepresentExpo}}"
                                         alt="Image d'un exposant">
                                    <img src="{{$exposantFirstThree->secondPicRepresentExpo}}"
                                         alt="Deuxième image d'un exposant">
                                    <img src="{{$exposantFirstThree->thirdPicRepresentExpo}}"
                                         alt="Troisième image d'un exposant">
                                </div>
                            </div>
                            <div class="containerTextExposant">
                                <p class="textExposant">
                                    {{$exposantFirstThree->product_description}}</p>
                                <div>
                                    <a href="{{route('expoShow.index')}}"
                                       class="btnCta">{{$exposantFirstThree->shop_name}}<span
                                            class="arrowCta"></span></a>
                                </div>
                            </div>
                        </div>
                    </section>
                @endforeach
                <div class="containerAllExposants">
                    <a href="{{route('exposants.index')}}" class="btnCta">Tous les exposants <span
                            class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
<script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>
