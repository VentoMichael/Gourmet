<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="Marché des gourmets - Produits locaux">
    <meta name="description"
          content="Des exposants venus partout de l'europe pour vous proposez les meilleurs produits locaux."/>
    <meta name="keywords" content="Vins, fromages, marché, exposants, billets">
    <meta name="language" content="French">
    <meta name="author" content="Vento Michael"/>
    <title>
        {{ 'Gourmets' }}
        {{ Request::is('/') ? " | Accueil" : "" }}
        {{ Request::is('exposants/*') || Request::is('exposants') ? ' | Exposants' : "" }}
        {{ Request::is('gallery') ? ' | Album photos' : "" }}
        {{ Request::is('restaurant') ? ' | Restaurant' : "" }}
        {{ Request::is('about') ? ' | À propos de nous' : "" }}
        {{ Request::is('contact') ? ' | Contact' : "" }}
        {{ Request::is('tickets') ? ' | Billets' : "" }}
    </title>
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<header>
    <a href="{{route('dashboard.index')}}">
        <h1 aria-level="1" class="principalTitle">Le marché des gourmets</h1>
    </a>
    <h2 aria-level="2" class="hidden">
        Informations d'en-tête
    </h2>
    <nav class="navbar navbarId" id="navbar" role="navigation">
        <h3 aria-level="3" class="hidden">
            Navigation Principale
        </h3>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
            <div class="mobile-menu__icon"></div>
        </label>

        <div class="mobile-menu__container">
            <ul class="menu menuId mobile-menu__list" id="menu">
                <li>
                    <a href="{{route('dashboard.index')}}">
                        <p class="principalTitle titlePageMenu">Le marché des gourmets</p>
                    </a>
                </li>
                <li class="mobile-menu__item {{ Request::is('/') ? "current_page_item" : "" }}"
                    aria-current="{{ Request::is('/') ? "page" : "" }}">
                    <a class="mobile-menu__link" href="{{route('dashboard.index')}}">
                        Accueil
                    </a>
                </li>
                <li class="mobile-menu__item {{ Request::is('exposants/*') || Request::is('exposants') ? "current_page_item" : "" }}">
                    <a class="mobile-menu__link" href="{{route('exposants.index')}}">
                        Exposants
                    </a>
                </li>
                <li class="mobile-menu__item {{ Request::is('gallery') ? "current_page_item" : "" }}"
                    aria-current="{{ Request::is('gallery') ? "page" : "" }}">
                    <a class="mobile-menu__link" href="{{route('gallery.index')}}">
                        Photos
                    </a>
                </li>
                <li class="mobile-menu__item {{ Request::is('restaurant') ? "current_page_item" : "" }}"
                    aria-current="{{ Request::is('restaurant') ? "page" : "" }}">
                    <a class="mobile-menu__link" href="{{route('restaurant.index')}}">
                        Restaurant
                    </a>
                </li>
                <li class="mobile-menu__item {{ Request::is('about') ? "current_page_item" : "" }}"
                    aria-current="{{ Request::is('about') ? "page" : "" }}">
                    <a class="mobile-menu__link" href="{{route('about.index')}}">
                        À propos
                    </a>
                </li>
                <li class="mobile-menu__item {{ Request::is('contact') ? "current_page_item" : "" }}"
                    aria-current="{{ Request::is('contact') ? "page" : "" }}">
                    <a class="mobile-menu__link" href="{{route('contact.create')}}">
                        Contact
                    </a>
                </li>
                <li class="containerBtnTickets btnTicketsMenu"
                    aria-current="{{ Request::is('ticket') ? "page" : "" }}">
                    <a class="mobile-menu__link btnTickets" href="{{route('tickets.create')}}">
                        Billets
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="containerBckgImages">
    <img src="{{asset('resources/img/cheese_small.png')}}" alt="Cheese" class="cheese"
         srcset="{{asset('resources/img/cheese.png')}} 1800w" sizes="(max-width: 1500px) 300px, 400px">
    <img src="{{asset('resources/img/coldcuts_small.png')}}" srcset="{{asset('resources/img/coldcuts.png')}} 1800w"
         sizes="(max-width: 1500px) 300px, 400px" alt="Coldcuts" class="coldcuts">
    <img src="{{asset('resources/img/wine_small.png')}}" srcset="{{asset('resources/img/wine.png')}} 1800w"
         sizes="(max-width: 1500px) 300px, 400px" alt="Wine bottle" class="wineBckg">
</div>
<main>
    @yield('content')
</main>
<footer>
    <h2 aria-level="2" class="hidden">
        Informations du pied de page
    </h2>
    <section>
        <h3 aria-level="3" class="hidden">
            Informations pratiques
        </h3>
        <div class="containerPracticalInformation">
            <section>
                <div>
                    <div class="pictoDateFooter">
                    </div>
                    <h4 aria-level="4" class="titleDateFooter">
                        Quand ?
                    </h4>
                </div>
                <div class="textPracticalInformation">
                    <p>
                        {{$praticalInformations->first()->startDate}}
                    </p>
                    <p>
                        {{$praticalInformations->first()->endDate}}
                    </p>
                </div>
            </section>
            <section>
                <div>
                    <div class="pictoPriceFooter">
                    </div>
                    <h4 aria-level="4" class="titlePriceFooter">
                        Prix ?
                    </h4>
                </div>
                <div class="textPracticalInformation">
                    <p>
                        Entrée simple : {{$praticalInformations->first()->priceTicketVisitor}} €
                    </p>
                    <p>
                        Entrée gratuite pour les moins de 16 ans.
                    </p>
                </div>
            </section>
            <section itemscope itemtype="https://schema.org/Place">
                <div>
                    <div class="pictoLocationFooter">
                    </div>
                    <h4 aria-level="4" class="titleLocationFooter">
                        Où ?
                    </h4>
                </div>
                <div class="textPracticalInformation" itemprop="address" itemscope itemtype="https://schema.org/Place">
                    <div>
                        <p>
                            {{$praticalInformations->first()->place}}
                        </p>
                        <p itemprop="streetAddress">
                            <span
                                itemprop="postalCode">{{$praticalInformations->first()->postalCode}}</span> {{$praticalInformations->first()->region}}
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <a href="{{route('dashboard.index')}}">
        <img class="logoFooter" src="../resources/svg/Logo_club.png" alt="Redirection vers la page d'acceuil">
    </a>
    <div role="banner">

        <p class="actualityFooter"><a href="#" class="containerActualityFooter">Suivez notre actualité sur :<img
                    src="../resources/svg/facebook.svg"
                    class="logoFcb" alt="logo Facebook"></a>
        </p>
    </div>
    <small>Placé sous le patronage de : Simonis Isabelle, Mottard Paul-Emile et Javaux Jean-Michel</small>
</footer>
@livewireScripts
@yield('scripts')
</body>
</html>
