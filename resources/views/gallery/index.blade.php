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
    <livewire:gallery-filter :firstThreeRandomImages="$firstThreeRandomImages" :praticalInformations="$praticalInformations">

    </livewire:gallery-filter>
@endsection
@section('scripts')
    @livewireScripts
@endsection