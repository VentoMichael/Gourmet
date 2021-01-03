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
                    <a href="{{route('tickets.create')}}" class="btnCta">Acheter un billet <span class="arrowCta"></span></a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="containerMenu">
            <h2 aria-level="2">
                @get('titleMenu')
            </h2>
            <div class="containerRestaurant">
                @foreach($restaurant as $r)
                    <section class="containerPrincipalMeat">
                        <h3 aria-level="3" class="menuPrincipalMeat">
                            {{$r->dish_section}}
                        </h3>
                        <ul role="list">
                            <li role="listitem">
                                {{$r->title_dish}} ({{$r->description_dish}})<span>{{$r->price_dish}} €</span>
                            </li>
                        </ul>
                    </section>
                    <section class="containerPrincipalMeat containerSandwichs">
                        <h3 aria-level="3" class="menuSandwichs">
                            Sandwichs
                        </h3>
                        <ul role="list">
                            <li role="listitem">
                                Dagobert
                                <span>5€</span>
                            </li>
                            <li role="listitem">
                                Campagnard (Brie, miel, lardons, roquette)
                                <span>5€</span>
                            </li>
                            <li role="listitem">
                                Italien (Jambon fumé, roquette, tomate confite)
                                <span>5€</span>
                            </li>
                        </ul>
                    </section>
                    <section class="containerPrincipalMeat">
                        <h3 aria-level="3" class="menuDesserts">
                            Desserts
                        </h3>
                        <ul role="list">
                            <li role="listitem">
                                Mousse au chocolat, caramel au beurre salé
                                <span>5€</span>
                            </li>
                            <li role="listitem">
                                Tiramisu au spéculoos et fruits rouges
                                <span>5€</span>
                            </li>
                        </ul>
                    </section>
                @endforeach
            </div>
            <div>
                <a href="{{route('tickets.create')}}" class="btnCta MenuCta">Acheter un billet <span
                        class="arrowCta"></span></a>
            </div>
        </div>
    </section>
@endsection
