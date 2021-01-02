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
                <div>
                    <a href="{{route('exposants.create')}}" class="btnCta">Devenir exposant <span
                            class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <div class="containerBecomeExposant">
        <div class="containerBecomeVigneron containerAllText">
            @get('textDescribeExposant')
        </div>
        <div class="containerButtonExpo">
            <a href="{{route('exposants.create')}}" class="btnCta btnExposant">Devenir exposant <span
                    class="arrowCta"></span></a>
        </div>
    </div>
    <section class="sectionContainerExposants">
        <h2 aria-level="2" class="hidden">
            Les différents Exposants
        </h2>
        <div class="containerFiltersAll containerExpo">
            <div class="containerFilters">
                <form action="#">
                    <div class="container3firstFilters">
                <span class="countriesFilter">
                    <label for="country">Pays</label>
                    <select name="country" id="country">
                            <option value="" disabled selected>Pays</option>
                        @foreach($exposants as $exposant)
                            <option value="{{$exposant->country}}">{{$exposant->country}}</option>
                        @endforeach
                    </select>
                </span>
                        <span class="productsFilter">
                    <label for="product">Produits</label>
                    <select name="product" id="product">
                        <option value="" disabled selected>Produit</option>
                        @foreach($exposants as $exposant)
                            <option value="{{$exposant->product->name}}">{{$exposant->product->name}}</option>
                        @endforeach
                    </select>
                </span>
                        <span class="pageFilter">
                    <label for="filterPage">Nombre d'item</label>
                    <select name="filterPage" id="filterPage">
                        <option value="4" selected>4</option>
                        <option value="12">12</option>
                        <option value="20">20</option>
                    </select>
                </span>
                    </div>
                    <button>
                        Appliquer les filtres
                    </button>
                </form>
                <form action="#">
                    <span class="searchFilter searchFilterId" id="searchFilter" role="search">
                        <label id="expoSearchLabel" for="expo-searchId">Chercher un exposant</label>
                        <input class="search expo-searchId" type="search" spellcheck="false" id="expo-searchId"
                               name="exposantName"
                               placeholder="Rob Harry ...">
                        <button class="buttonSearch hidden">Rechercher l'exposant</button>
                    </span>
                </form>
            </div>
        </div>
        <div class="containerExposants">
            @foreach($exposants as $exposant)
                <section class="containerExposant">
                    <div>
                        <img src="{{$exposant->product->icone}}" alt="{{$exposant->product->alt}}">
                        <h3 aria-level="3">
                            {{$exposant->shop_name}}
                        </h3>
                        <p class="textRegionExposant">{{$exposant->country}}</p>
                        <p class="containerAllText">
                            {{$exposant->product_description}}
                        </p>
                        @if($exposant->tags->count() > 1)
                            <div class="tagsContainer containerAllText">
                                @foreach($exposants as $exposant)
                                    <div class="moduleTag">
                                        {{$exposant->country}}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div>
                        <a href="{{route('exposants.show',['exposant'=>$exposant])}}" class="btnCta">{{$exposant->shop_name}}<span
                                class="arrowCta"></span></a>
                    </div>
                </section>
            @endforeach
        </div>
        <div class="containerPaginate">
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
<script type="text/javascript" src="{{ asset('js/formSearch.js') }}"></script>
