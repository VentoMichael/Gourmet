@extends('layouts.app')
@section('content')
    <section class="sectionContainerHome">
        <div class="containerHome">
            <div class="containerPresentationHome containerHomeCta">
                @include('partials.ctaTicket')
                <div class="logo logoHome" role="banner">
                    <img src="../resources/svg/Logo_club.png" alt="Logo des marchés des gourmets">
                </div>
                <div class="containerTitleHome">
                    <div>
                        <h2 aria-level="2">
                            @get('titlePage')
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
                            @get('numberEdition')
                        </span>
                        </p>
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
    <div class="containerAimHome">
        <section>
            <div class="containerTextTitleAim">
                <div class="containerImageHome">
                    <img src="@get('imageFirstSection')" alt="@get('altFirstSection')">
                </div>
                <div class="containerText">
                    <h2 aria-level="2">
                        @get('titleFirstSection')
                    </h2>
                    <div class="containerAllText">
                        @get('textFirstSection')
                    </div>
                    <div class="containerCtaButton">
                        <a href="{{route('tickets.create')}}" class="btnCta btnCtaResto">Acheter un billet <span
                                class="arrowCta"></span></a>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="containerTextTitleAim containerTextTitleAimSecond">
                <div class="containerImageHome">
                    <img src="@get('imageSecondSection')"
                         alt="@get('altSecondSection')">
                </div>
                <div class="containerText">
                    <h2 aria-level="2">
                        @get('titleSecondSection')
                    </h2>
                    <div class="containerAllText">
                        @get('textSecondSection')
                    </div>
                    <div class="containerCtaButton">
                        <a href="{{route('tickets.create')}}" class="btnCta">Acheter un billet <span
                                class="arrowCta"></span></a>
                    </div>
                </div>

            </div>

        </section>
        <section>
            <div class="containerTextTitleAim">
                <div class="containerImageHome">
                    <img src="@get('imageThirdSection')" alt="@get('altThirdSection')">
                </div>
                <div class="containerText">
                    <h2 aria-level="2">
                        @get('titleThirdSection')
                    </h2>
                    <div class="containerAllText">
                        @get('textThirdSection')
                    </div>
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
                @if($exposantsFirstThree->count() > 1)
                    <div class="arrowsSlide">
                        <a class="prev" id="prev"></a>
                        <a class="next" id="next"></a>
                    </div>
                @endif
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
                                    {{$exposantFirstThree->country->name}}
                                </p>
                                @include('partials.randomImagesGourmet')
                            </div>
                            <div class="containerTextExposant">
                                <p class="textExposant containerAllText">
                                    {{$exposantFirstThree->product_description}}
                                </p>
                                <div>
                                    <a href="{{route('exposants.show',[$exposantFirstThree->shop_name])}}"
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
