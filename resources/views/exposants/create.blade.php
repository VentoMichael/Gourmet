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
            <p class="btnCta priceBecomeExpo" style="cursor:inherit;">Le prix du billet
                : {{$praticalInformations->first()->priceTicketExposant}} €</p>
        </div>
    </div>
    <section class="containerFormulary">
        <h2 aria-level="2" class="hidden">
            Formulaire de contact
        </h2>
        <div class="formContactContainer formBecomeContainer">
            <form action="#" method="get" class="formContact formBecomeExpo" role="form" aria-label="Achat de billets">
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="nameMarket">Nom du commerce</label>
                        <input type="text" name="nameMarket" id="nameMarket" required
                               placeholder="Vins noble de Sicile">
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="phone">Téléphone</label>
                        <input type="text" name="phone" id="phone" placeholder="0494 827 265">
                    </div>
                </div>
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required placeholder="lardomarco@gmail.com">
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="website">Site internet</label>
                        <input type="text" name="website" id="website" placeholder="https://noblesicile.com">
                    </div>
                </div>
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="localisation">Adresse et n°</label>
                        <input type="text" name="localisation" id="localisation" required
                               placeholder="Rue blanche, 3, bp 2">
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="country">Pays</label>
                        <select name="country" class="selectTicket selectCountry" id="country">
                            @foreach($countries as $countrie)
                                <option value="{{$countrie->name}}">{{$countrie->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="postalCode">Code postal</label>
                        <input type="number" name="postalCode" id="postalCode" required
                               placeholder="Rue blanche, 3, bp 2">
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="tags">Tags</label>
                        <select name="tags" class="selectTicket selectCountry" id="tags">
                            @foreach($tags as $tag)
                                <option value="{{$tag->name}}">{{$tag->name}}</option>
                            @endforeach
                            <option value="" disabled selected hidden class="defaultSelectOption">Vins</option>
                            <option value="vins">Vins</option>
                            <option value="cheese">Fromages</option>
                        </select>
                    </div>
                </div>
                <div class="containerButtonsRadio">
                    <p>Je participe déjà à d'autres salons en Belgique</p>
                    <div class="containerButtonRadio">
                        <div class="buttonRadio">
                            <input type="radio" id="participateSaloon" name="participateSaloon" value="yes">
                            <label for="participateSaloon">Oui</label>
                        </div>
                        <div class="buttonRadio">
                            <input type="radio" id="dontParticipateSaloon" name="participateSaloon" value="no">
                            <label for="dontParticipateSaloon">Non</label>
                        </div>
                    </div>
                </div>
                <div class="containerButtonsRadio">
                    <p>Avez vous au moins un produit certifié bio ?</p>
                    <div class="containerButtonRadio">
                        <div class="buttonRadio">
                            <input type="radio" id="productBio" name="productBio" value="yes">
                            <label for="productBio">Oui</label>
                        </div>
                        <div class="buttonRadio">
                            <input type="radio" id="notProductBio" name="productBio" value="no">
                            <label for="notProductBio">Non</label>
                        </div>
                    </div>
                </div>
                <div class="containerTextAreaBecomeExpo">
                    <div class="containerInput containerInputTextArea">
                        <label for="descriptifProducts">Descriptif des produits que je souhaiterais présenter durant le
                            salon</label>
                        <textarea id="descriptifProducts" name="descriptifProducts"
                                  placeholder="Ce sont des vins typiques de la Sicile, réaliser près du volcan Etna, le vin est autant meilleur que les vins fabriqués autre part que près d'un volcan ..."
                                  rows="10"></textarea>
                    </div>
                    <span>256 caractères max</span>
                </div>
                <div class="containerTextAreaBecomeExpo containerCommentsOrgany">
                    <div class="containerInput containerInputTextArea">
                        <label for="commentsOrganizers">Commentaires pour les organisateurs</label>
                        <textarea id="commentsOrganizers" name="commentsOrganizers"
                                  placeholder="Commentaire(s) éventuel(s) ..."
                                  rows="10"></textarea>
                    </div>
                    <span>256 caractères max</span>
                </div>
                <div class="form-example">
                    <button type="submit" class="btnCta btnContact">Envoyer ma candidature<span class="arrowCta"></span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
