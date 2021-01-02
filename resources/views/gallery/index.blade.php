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
            @foreach($randomImages as $randomImage)
                <img src="{{$randomImage->image}}" alt="{{$randomImage->alt}}">
            @endforeach
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
