<section id="gallery">
    <h2 aria-level="2" class="hidden">
        Gallerie d'images
    </h2>
    <div>
        <form action="{{route('gallery.index')}}">
            <div class="containerFiltersAll containerFilterGallery">
                <div class="containerFilters">
                    <span class="pageFilter filterItemPage filterGallery">
                        <label for="filterPage">Nombre d'items par page</label>
                        <select wire:model="filterPage" name="filterPage" id="filterPage">
                            <option value="10" selected>10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                    </span>
                    <noscript>
                        <div class="containerButtonGallery">
                            <button class="buttonGallery">
                                Appliquer les filtres
                            </button>
                        </div>
                    </noscript>
                </div>
            </div>
        </form>
        <div wire:loading.class="containerExposantLoad" class="containerImagesGallery">
            @foreach($galleries as $galley)
                <img src="{{asset('storage/'.$galley->image)}}" alt="{{$galley->alt}}">
            @endforeach
        </div>
        <div class="containerPaginate">
            {{ $galleries->links() }}
        </div>
    </div>
</section>
