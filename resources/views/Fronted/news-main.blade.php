@extends('fronted.Loyats')
@section('news-main')
    <div class="container-fluid" id ="mainText" >
        <div class="container row justify-content-center">
            <div class="col-md-8 col-lg-9 blog-main ">
                <h3 class="pb-3 mb-4 font-italic ">
                    Статьи</h3>
                @if($articlesList!=null)
                    @foreach($articlesList as $item)
                    <h3>{{$item->name}}</h3>
                        <img class="featurette-image img-fluid mx-auto" id="newsfoto" alt="{{$item->url}}" style="width: 500px; " src="{{$item->url}}" data-holder-rendered="true">
                        {!! $item->discription !!}
                        <a href="{{route('articles-show',$item->id)}}" class="btn btn-outline-dark " role="button">Читать далее</a>
                        <h3 class="pb-3 mb-4 font-italic border-bottom "></h3>
        @endforeach
        @endif
        </div>
        </div>
    </div>
@endsection
