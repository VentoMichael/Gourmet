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
    <section class="containerFormulary" id="form">
        <h2 aria-level="2" class="hidden">
            Formulaire de contact
        </h2>
        <div class="formContactContainer formBecomeContainer">
            @if(Session::has('success'))
                <div class="successMessage">
                    <img src="{{asset('resources/svg/checked.svg')}}" alt="Îcone de validation">
                    <p>{{Session::get('success')}}</p>
                </div>
            @endif
            <form aria-label="Formulaire pour devenir exposant" role="form" method="POST"
                  action="{{route('exposants.store')}}" class="formContact formBecomeExpo">
                @csrf
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="shop_name">Nom du commerce <span class="error">*</span></label>
                        <input value="{{old("shop_name")}}" type="text" name="shop_name" id="shop_name" required
                               placeholder="Vins noble de Sicile">
                        <p class="error">{{$errors->first('shop_name')}}</p>
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="phone">Téléphone <span class="error">*</span></label>
                        <input value="{{old("phone")}}" required type="text" name="phone" id="phone" placeholder="0494 827 265">
                        <p class="error">{{$errors->first('phone')}}</p>
                    </div>
                </div>
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="email">Email <span class="error">*</span></label>
                        <input value="{{old("email")}}" type="email" name="email" id="email" required
                               placeholder="lardomarco@gmail.com">
                        <p class="error">{{$errors->first('email')}}</p>
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="website">Site internet <span class="error">*</span></label>
                        <input value="{{old("website")}}" required type="text" name="website" id="website"
                               placeholder="https://noblesicile.com">
                        <p class="error">{{$errors->first('website')}}</p>
                    </div>
                </div>
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="location">Adresse et n° <span class="error">*</span></label>
                        <input value="{{old("location")}}" type="text" name="location" id="location" required
                               placeholder="Rue blanche, 3, bp 2">
                        <p class="error">{{$errors->first('location')}}</p>
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="country">Pays <span class="error">*</span></label>
                        <select name="country" required class="selectTicket selectCountry" id="country">
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        <p class="error">{{$errors->first('country')}}</p>
                    </div>
                </div>
                <div class="containerInputLabel">
                    <div class="containerInput containerInputBecomeExpo">
                        <label for="postalCode">Produit proposé <span class="error">*</span></label>
                        <select name="proposed_product" required class="selectTicket selectCountry" id="proposed_product">
                            <option value="" disabled selected hidden class="defaultSelectOption">Séléctionner un produit
                            </option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                        <small class="noProductFound">Votre produit n'est pas présent ? <a
                                href="{{route('contact.create')}}/#createMsg">J'envoie un message pour intégrer mon produit</a></small>
                        <p class="error">{{$errors->first('proposed_product')}}</p>
                    </div>

                    <div class="containerInput containerInputBecomeExpo">
                        <label for="tags">Tag(s)</label>
                        <select required multiple name="tags[]"
                                class="tagsContainerSelect selectTicket selectCountry tagsContainerSelectWithout"
                                id="tags">
                            <option value="" disabled selected hidden class="defaultSelectOption">Séléctionner un/des
                                tag(s)
                            </option>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        <small class="noProductFound">Ce champs n'est pas obligatoire mais fortement recommandé</small>
                        <p class="error">{{$errors->first('tags')}}</p>
                    </div>
                </div>
                <div class="containerInputLabel containerTagsRepresentation">
                    <div class="containerButtonsRadio containerInput containerInputBecomeExpo">
                        <p>Je participe déjà à d'autres salons en Belgique</p>
                        <div class="containerButtonRadio">
                            <div class="buttonRadio">
                                <input type="radio" id="participateSaloon" name="participateSaloon" value="1">
                                <label for="participateSaloon">Oui</label>
                            </div>
                            <div class="buttonRadio">
                                <input type="radio" id="dontParticipateSaloon" name="participateSaloon" value="0">
                                <label for="dontParticipateSaloon">Non</label>
                            </div>
                            <p class="error">{{$errors->first('participateSaloon')}}</p>
                        </div>
                    </div>
                    <div class="containerButtonsRadio containerInput containerInputBecomeExpo">
                        <p>Avez vous au moins un produit bio ? <span class="error">*</span></p>
                        <div class="containerButtonRadio">
                            <div class="buttonRadio">
                                <input required type="radio" id="productBio" name="productBio" value="1">
                                <label for="productBio">Oui</label>
                            </div>
                            <div class="buttonRadio">
                                <input required type="radio" id="noProductBio" name="productBio" value="0">
                                <label for="notProductBio">Non</label>
                            </div>
                            <p class="error">{{$errors->first('productBio')}}</p>
                        </div>
                    </div>
                </div>
                <div class="containerTextAreaBecomeExpo">
                    <div class="containerInput containerInputTextArea">
                        <label for="product_description">Descriptif des produits que je souhaiterais présenter durant le
                            salon <b class="error">*</b></label>
                        <textarea required maxlength="256" id="product_description"
                                  name="product_description"
                                  placeholder="Ce sont des vins typiques de la Sicile, réaliser près du volcan Etna, le vin est autant meilleur que les vins fabriqués autre part que près d'un volcan ..."
                                  rows="5">{{old("product_description")}}</textarea>
                        <p class="error">{{$errors->first('product_description')}}</p>
                    </div>
                    <span>256 caractères max</span>
                </div>
                <div class="containerTextAreaBecomeExpo containerCommentsOrgany">
                    <div class="containerInput containerInputTextArea">
                        <label for="commentsOrganizers">Commentaires pour les organisateurs</label>
                        <textarea id="commentsOrganizers" name="commentsOrganizers"
                                  placeholder="Commentaire(s) éventuel(s) ..."
                                  rows="5">{{old("commentsOrganizers")}}</textarea>
                        <p class="error">{{$errors->first('commentsOrganizers')}}</p>
                    </div>
                </div>
                <div class="form-example">
                    <button type="submit" class="btnCta btnContact">Envoyer ma candidature<span class="arrowCta"></span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
