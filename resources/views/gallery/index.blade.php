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
                            Revivez notre derniére édition
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
                    Au marché des gourmets d’Amay, nous receuillons <b>les meilleus moments</b> des différents marchés
                    sous <b>différents clichés</b>, listés ci-dessous.
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
            Méthode de filtrage
        </h2>
        <form action="#">
            <div class="containerFiltersAll containerFilterGallery">
                <div class="containerFilters">
            <span class="pageFilter filterItemPage">
                <label for="filterPage">Nombre d'items par page</label>
                <select name="filterPage" id="filterPage">
                    <option value="9" selected>9</option>
                    <option value="15">15</option>
                    <option value="24">24</option>
                </select>
            </span>
                    <div class="containerButtonGallery">
                        <button class="buttonGallery">
                            Appliquer les filtres
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section>
        <h2 aria-level="2" class="hidden">
            Gallerie d'images
        </h2>
        <div class="containerImagesGallery">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
            <img src="resources/img/sausage.jpg"
                 srcset="resources/img/sausage_small.jpg 320w, resources/img/sausage.jpg 640w"
                 sizes="100vw" alt="Image de saucissons">
        </div>
        <div class="containerPaginate containerPaginateGallery">
            <ul class="listPaginate">
                <li class="currentPaginate">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    ...
                </li>
                <li>
                    <a href="#">12</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
