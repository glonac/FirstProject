<div class="row">
    @if($articlesList!=null)
        @foreach($articlesList as $item)
            <a href="{{route('articles-show',$item->id)}}">{{$item->name}}</a>
        @endforeach
    @endif
</div>

