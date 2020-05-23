
@extends('Fronted.Loyats')
@section('EGE')
    <div class="container-fluid " id ="HeaderEge" >
        <div class="d-flex justify-content-between  " >
            <div class="col-md-4 blog-main" id="TextEge">
                <h3 class="pb-3 mb-3 font-italic ">
                    {{$data->name}}
                </h3>
                <div class="post " >
                    {!!  $data->content!!}
                </div>
            </div>
        </div>
    </div>
    @endsection
