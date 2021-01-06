<div class="containerImagesHome">
    @foreach($firstThreeRandomImages as $randomImage)
        <img src="{{ asset('storage/'.$randomImage->image) }}" alt="{{$randomImage->alt}}">
    @endforeach
</div>
