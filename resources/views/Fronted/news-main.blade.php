<div class="row">
    @if($newsList!=null)
        @foreach($newsList as $item)
            <a href="{{route('news-show',$item->id)}}">{{$item->name}}</a>
        @endforeach
    @endif
</div>

