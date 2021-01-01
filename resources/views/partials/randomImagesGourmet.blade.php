<div class="containerImagesHome">
    @foreach($randomImages as $randomImage)
        <img src="{{$randomImage->image}}" alt="{{$randomImage->alt}}">
    @endforeach
</div>
