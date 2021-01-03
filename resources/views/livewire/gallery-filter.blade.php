<section>
    <h2 aria-level="2" class="hidden">
        Gallerie d'images
    </h2>
    <div>

    <form action="#">
        <div class="containerFiltersAll containerFilterGallery">
            <div class="containerFilters">
            <span class="pageFilter filterItemPage filterGallery">
                <label for="filterPage">Nombre d'items par page</label>
                <select wire:model="perpage" name="filterPage" id="filterPage">
                    <option value="9" selected>9</option>
                    <option value="12">12</option>
                    <option value="18">18</option>
                </select>
            </span>
                <div class="containerButtonGallery">
                    <button class="buttonGallery">
                        Appliquer les filtres
                    </button>
                </div>
            </div>
        </div>
    </form>
        <div wire:loading.class="containerExposantLoad" class="containerImagesGallery">
            @foreach($galleries as $galley)
                <img src="{{$galley->image}}" alt="{{$galley->alt}}">
            @endforeach
        </div>
        <div class="containerPaginate">
            {{ $galleries->links() }}
        </div>
    </div>
</section>