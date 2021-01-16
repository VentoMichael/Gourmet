@extends('layouts.app')
@section('content')
    <section class="sectionContainerHome">
        <div class="containerHome">
            <div class="containerPresentationHome">
                @include('partials.ctaTicket')
                @include('partials.logo')
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
                @include('partials.buyTicket')
            </div>
        </div>
    </section>
    <section>
        <div class="containerMenu">
            <h2 aria-level="2">
                @get('titleMenu')
            </h2>
            <div class="containerRestaurant">
                @foreach($restaurant as $key => $value)
                    <section class="containerPrincipalMeat">
                        @if($key != $oldRestaurant['dish_section'])
                            <h3 aria-level="3" class="menuPrincipalMeat">
                                {{$key}}
                            </h3>
                        @endif
                        <ul role="list">
                            @foreach($value as $v)
                                <li role="listitem">
                                    {{$v->title_dish}} ({{$v->description_dish}})<span>{{$v->price_dish}} €</span>
                                </li>
                            @endforeach
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
