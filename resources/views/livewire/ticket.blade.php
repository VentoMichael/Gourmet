<section class="containerFormulary">
    <h2 aria-level="2" class="hidden">
        Formulaire d'achat de billet(s)
    </h2>
    <div class="informationsContact" wire:loading.class="containerExposantLoad" id="form">
        <p class="titleForm">
            Mon panier
        </p>
        <ul class="titleForm containerShoppingCart" role="list">
            <li class="infoBuyTicket" wire:model="ticketCount" role="listitem">{{$ticketCount}} ticket</li>
            <li class="infoBuyPrice" role="listitem">{{$praticalInformations->first()->priceTicketVisitor}}€ l'unité
            </li>
        </ul>
        <p class="itemTotalPrice">
            TOTAL : {{$ticketPrice * $ticketCount}} €
        </p>
    </div>
    <div class="formContactContainer">
        @if(Session::has('success'))
            <div class="successMessage">
                <img src="{{asset('resources/svg/checked.svg')}}" alt="Îcone de validation">
                <p>{{Session::get('success')}}</p>
            </div>
        @endif
        <form aria-label="Achat de billets" role="form" method="POST" action="{{route('tickets.store')}}"
              class="formContact">
            @csrf
            <div>
                <div class="containerInput">
                    <label for="name_surname">Nom et prénom <span class="error">*</span></label>
                    <input type="text" value="{{old("name_surname")}}" name="name_surname" id="name_surname" required
                           placeholder="Lardo Marco">
                    <p class="error">{{$errors->first('name_surname')}}</p>
                </div>
                <div class="containerInput">
                    <label for="phone">Téléphone <span class="error">*</span></label>
                    <input type="text" value="{{old("phone")}}" name="phone" id="phone" required
                           placeholder="0494 827 265">
                    <p class="error">{{$errors->first('phone')}}</p>
                </div>
            </div>
            <div>
                <div class="containerInput">
                    <label for="email">Email <span class="error">*</span></label>
                    <input type="email" value="{{old("email")}}" name="email" id="email" required
                           placeholder="lardomarco@gmail.com">
                    <p class="error">{{$errors->first('email')}}</p>
                </div>
            </div>
            <div>
                <div class="containerInput">
                    <label for="ticketCount">Ticket(s) <span class="error">*</span></label>
                    <select wire:model="ticketCount" name="ticketCount" class="selectTicket" id="ticketCount">
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
                    <p class="error">{{$errors->first('ticketCount')}}</p>
                </div>
            </div>
            <div>
                <div class="containerInput">
                    <label for="comment">Message</label>
                    <textarea id="message" name="comment"
                              placeholder="Commentaires éventuels ..."
                              rows="10">{{old("comment")}}</textarea>
                    <p class="error">{{$errors->first('comment')}}</p>
                </div>
            </div>
            <div class="form-example">
                <button id="checkout-button" type="submit" role="button" aria-pressed="false" class="btnCta btnContact">
                    Acheter un billet<span class="arrowCta"></span>
                </button>
            </div>
        </form>
    </div>
</section>
