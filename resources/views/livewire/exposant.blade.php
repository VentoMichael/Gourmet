<section class="sectionContainerExposants">
    <h2 aria-level="2" class="hidden">
        Les différents Exposants
    </h2>
    <div class="containerFiltersAll containerExpo">
        <div class="containerFilters">
            <form action="{{route('exposants.index')}}">
                <div class="container3firstFilters">
                        <span class="countriesFilter">
                            <label for="country_id">Pays</label>
                            <select wire:model="country_id" name="country_id" id="country">
                                    <option value="" selected>Pays</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </span>
                    <span class="productsFilter">
                            <label for="product_id">Produits</label>
                            <select wire:model="product_id" name="product_id" id="product">
                                <option value="" selected>Produit</option>
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </span>
                    <span class="pageFilter">
                            <label for="filterPage">Nombre d'item</label>
                            <select wire:model="filterPage" name="filterPage" id="filterPage">
                                <option value="6" selected>6</option>
                                <option value="9">9</option>
                                <option value="12">12</option>
                            </select>
                        </span>
                </div>
                <span class="searchFilter searchFilterId" id="searchFilter" role="search">
                        <label id="expoSearchLabel" for="expo-searchId">Chercher un exposant</label>
                        <input wire:model="exposantName" class="search expo-searchId" type="search" spellcheck="false"
                               id="expo-searchId"
                               name="exposantName"

                               @if($exposantRandom)
                               placeholder="{{$exposantRandom->shop_name}} ...">
                    @else
                        placeholder="Rechercher un exposant ...">
                    @endif
                        <button class="buttonSearch hidden">Rechercher l'exposant</button>
                    </span>
                <noscript>
                    <button>
                        Appliquer les filtres
                    </button>
                </noscript>
            </form>
        </div>
    </div>
    <div>
        <div class="containerExposants">
            @forelse($exposants as $exposant)
                <section wire:loading.class="containerExposantLoad" class="containerExposant">
                    <div>
                        <img src="{{asset('storage/'.$exposant->product->icone)}}" alt="{{$exposant->product->alt}}">
                        <h3 aria-level="3">
                            {{$exposant->shop_name}}
                        </h3>
                        <p class="textRegionExposant">{{$exposant->country->name}}</p>
                        <p class="containerAllText">
                            {{$exposant->product_description}}
                        </p>
                        @if($exposant->tags->count() > 1)
                            <div class="tagsContainer containerAllText">
                                    @foreach($exposant->tags as $exposantTag)
                                        <div class="moduleTag">
                                            {{$exposantTag->name}}
                                        </div>
                                    @endforeach
                            </div>
                        @endif
                    </div>
                    <div>
                        <a href="{{route('exposants.show',['exposant'=>$exposant])}}"
                           class="btnCta">{{$exposant->shop_name}}<span
                                class="arrowCta"></span></a>
                    </div>
                </section>
            @empty
                <section wire:loading.class="containerExposantLoad" class="containerExposant">
                    <div>
                        <img src="{{asset('resources/svg/idea.svg')}}" alt="Pictogramme d'une ampoule">
                        <h3 aria-level="3">
                            Aucun exposant trouvé avec cette recherche
                        </h3>
                        <p class="containerAllText" style="margin-top: 10px;">
                            Oops, je n'ai rien trouvé ! Essayer une autre recherche ou <a
                                href="{{route('exposants.index')}}">rafraichissez la page</a>
                        </p>
                    </div>
                </section>
            @endforelse
        </div>
        <div class="containerPaginate">
            {{ $exposants->links() }}
        </div>
    </div>
</section>
