<div class="containerFiltersAll containerExpo">
    <div class="containerFilters">
        <form action="#">
            <div class="container3firstFilters">
                        <span class="countriesFilter">
                            <label for="country">Pays</label>
                            <select name="country" id="country">
                                    <option value="" disabled selected>Pays</option>
                                @foreach($exposants as $exposant)
                                    <option value="{{$exposant->country}}">{{$exposant->country}}</option>
                                @endforeach
                            </select>
                        </span>
                <span class="productsFilter">
                            <label for="product">Produits</label>
                            <select name="product" id="product">
                                <option value="" disabled selected>Produit</option>
                                @foreach($exposants as $exposant)
                                    <option value="{{$exposant->product->name}}">{{$exposant->product->name}}</option>
                                @endforeach
                            </select>
                        </span>
                <span class="pageFilter">
                            <label for="filterPage">Nombre d'item</label>
                            <select name="filterPage" id="filterPage">
                                <option value="4" selected>4</option>
                                <option value="12">12</option>
                                <option value="20">20</option>
                            </select>
                        </span>
            </div>
            <button>
                Appliquer les filtres
            </button>
        </form>
        <form action="#">
            <span class="searchFilter searchFilterId" id="searchFilter" role="search">
                <label id="expoSearchLabel" for="expo-searchId">Chercher un exposant</label>
                <input wire:model="search" class="search expo-searchId" type="search" spellcheck="false"
                       id="expo-searchId"
                       name="exposantName"
                       placeholder="Rob Harry ...">
                <button class="buttonSearch hidden">Rechercher l'exposant</button>
            </span>
        </form>
    </div>
</div>
