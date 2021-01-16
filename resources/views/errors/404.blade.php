@extends('layouts.app')
@section('content')
    @php
        $praticalInformations = App\Models\PraticalInfos::all();
    @endphp
    <section class="sectionContainerHome">
    <div class="containerHome">
        <div class="containerPresentationHome">
            @include('partials.ctaTicket')
            @include('partials.logo')
            <div class="containerTitleHome">
                <div>
                    <h2 aria-level="2" class="titleExposant">
                        Erreur 404
                    </h2>
                </div>
            </div>
        </div>
        <div class="containerTextHome">
            <div class="containerAllText">
                Oops ! Je n'ai rien trouvé, cela veut dire tout simplement que la page demandée n'existe pas.
            </div>
            <div>
                <a href="{{route('dashboard.index')}}" class="btnCta">Je retourne à la page d'accueil <span
                        class="arrowCta"></span></a>
            </div>
        </div>
    </div>
</section>
@endsection
