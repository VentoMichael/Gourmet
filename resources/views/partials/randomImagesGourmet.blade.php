<div class="containerImagesHome">
    @foreach($firstThreeRandomImages as $randomImage)
        <img src="{{$randomImage->image}}" alt="{{$randomImage->alt}}">
    @endforeach
</div>
