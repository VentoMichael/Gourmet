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
                            Des bénévoles dans le but d’aider
                        </h2>
                    </div>
                </div>
                @include('partials.randomImagesGourmet')
            </div>
            <div class="containerTextHome">
                <p>
                    Le Marché des Gourmets est une initiative du Rotary Club de Flémalle afin de <b>soutenir</b> des
                    associations locales, nationales, voire internationales <b>d'aide aux plus démunis.</b> Tous les
                    bénéfices du Marché sont intégralement <b>distribués à ces associations.</b>
                </p>
                <p>
                    Alors, n’hésitez pas à nous rendre visite au Val-Saint-Lambert lors de cette 21<sup>e</sup> édition.
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
                <img src="resources/svg/question.svg" alt="Picto d'un point d'interrogation">
                <h3 aria-level="3">
                    Pourquoi ?
                </h3>
                <div>
                    <p>
                        Afin de <b>soutenir</b> des associations locales, nationales et internationales pour aider les
                        plus démunis. Tous les bénéfices du Marché sont intégralement <b>distribués à des
                            associations.</b>
                    </p>
                </div>
            </section>
            <section class="containerAboutUsHowSection">
                <img src="resources/svg/how.svg" alt="Picto representant le mot comment">
                <h3 aria-level="3">
                    Comment ?
                </h3>
                <div>
                    <p>
                        Une initiative réunissant plus de <b>30 exposants passionnés,</b> ils donnent tous les jours <b>le
                            meilleurs d’eux-mêmes</b> pour vous proposer <b>des produits sains et de qualité.</b>
                    </p>
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
                    <div class="containerAboutText">
                        <p>
                            <b>Depuis plus de 20 ans,</b> nous organisons le marché des Gourmets, chaque année, dans
                            lesquels <b>une trentaine d’exposants</b> vous proposent leurs meilleurs produits <b>d’une
                                qualité irréprochable.</b>
                        </p>
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
