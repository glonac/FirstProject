@extends('Fronted.Loyats')
@section('section-main')
    <div class="container-fluid " id="HeaderOge">
        <div class="container" style="height: 100%;">
            <div class="description" style="position: absolute;bottom: 0;">
                <h1>    Комплексная подготовка к ОГЭ</h1>
                <p>
                </p>
                <button class="btn  btn-light" href="OGE" >Оставить заявку онлайн!</button>
            </div>
        </div>
    </div>
    <div class="container-fluid" id ="TextOge" >
        <div class="container row justify-content-center">
                <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    {{$data->name}}
                </h3>
                <div class="post" >
                    {!!  $data->content!!}
            </div>
        </div>
    </div>
    <script type="text/javascript" src='js/main.js'></script>
    @endsection
