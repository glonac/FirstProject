@extends('fronted.Loyats')
@section('news-show')

    <div class="container-fluid" id ="Text" >
    <div class="container row justify-content-center">
        <div class="col-md-8 col-lg-9 blog-main ">
            <h3 class="pb-3 mb-4">
@foreach($articlesShow as $item)
         {{$item->name}}</h3>
            <img class="featurette-image img-fluid mx-auto"  alt="{{$item->url}}" style="width: 500px;" src="{{$item->url}}" data-holder-rendered="true">
    {!!$item->content !!}
@endforeach
@endsection
