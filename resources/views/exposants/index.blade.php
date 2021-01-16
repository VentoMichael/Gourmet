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
    <div class="containerBecomeExposant">
        <div class="containerBecomeVigneron containerAllText">
            @get('textDescribeExposant')
        </div>
        <div class="containerButtonExpo">
            <a href="{{route('exposants.create')}}" class="btnCta btnExposant">Devenir exposant <span
                    class="arrowCta"></span></a>
        </div>
    </div>
    <livewire:exposant :rq="$rq" :firstThreeRandomImages="$firstThreeRandomImages" :praticalInformations="$praticalInformations">

    </livewire:exposant>
    </section>
@endsection
@section('scripts')
    @livewireScripts
@endsection