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
                            Le billet qui vous fera voyager
                        </h2>
                    </div>
                </div>
                <div class="containerImagesHome">
                    <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                    <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                    <img src="resources/img/ja-ma--gOUx23DNks-unsplash.jpg"
                         srcset="resources/img/ja-ma--gOUx23DNks-unsplash_small.jpg 320w, resources/img/ja-ma--gOUx23DNks-unsplash.jpg 640w"
                         sizes="100vw" alt="Image du salon du marché des gourmets">
                </div>
            </div>
            <div class="containerTextHome">
                <p>
                    Lors de cette visite du marché des Gourmets, vous pourrez <b>savourer des plats</b> venus d’un peu
                    partout dans le monde, rencontrer <b>des personnes passionnées</b> et acheter les <b>produits de
                        qualités</b> qui vous ont goûté.
                </p>
                <p>
                    Cette 21<sup>e</sup> édition au Val-Saint-Lambert ne vous décevra pas.
            </div>
        </div>
    </section>
    <section class="containerFormulary">
        <h2 aria-level="2" class="hidden">
            Formulaire d'achat de billet(s)
        </h2>
        <div class="informationsContact">
            <p class="titleForm">
                Mon panier
            </p>
            <ul class="titleForm containerShoppingCart" role="list">
                <li class="infoBuyTicket" role="listitem">1 ticket</li>
                <li class="infoBuyPrice" role="listitem">6€ l'unité</li>
            </ul>
            <p class="itemTotalPrice">
                TOTAL : 6.00€
            </p>
        </div>
        <div class="formContactContainer">
            <form action="#" method="get" class="formContact" role="form" aria-label="Achat de billets">
                <div>
                    <div class="containerInput">
                        <label for="nameSurname">Nom et prénom </label>
                        <input type="text" name="nameSurname" id="nameSurname" required placeholder="Lardo Marco">
                    </div>
                    <div class="containerInput">
                        <label for="phone">Téléphone</label>
                        <input type="text" name="phone" id="phone" required placeholder="0494 827 265">
                    </div>
                </div>
                <div>
                    <div class="containerInput">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required placeholder="lardomarco@gmail.com">
                    </div>
                </div>
                <div>
                    <div class="containerInput">
                        <label for="ticket">Ticket(s)</label>
                        <select name="ticket" class="selectTicket" id="ticket">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="containerInput">
                        <label for="message">Message </label>
                        <textarea id="message" name="message" placeholder="Commentaires éventuels ..."
                                  rows="10"></textarea>
                    </div>
                </div>
                <div class="form-example">
                    <button type="submit" role="button" aria-pressed="false" class="btnCta btnContact">Acheter un billet<span class="arrowCta"></span>
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
