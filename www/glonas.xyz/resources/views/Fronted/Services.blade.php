@extends('Fronted.Loyats')
@section('Serviceinfo')
    <div class="container marketing" id="Service">
            @if(isset($data))
                @php $iterator = 1;
    $iteratorArr = array(); @endphp
                @foreach($data as $item)
                        @if($iterator == 1)
                            @php
                            $iteratorArr[0] = 'order-md-first';
                            $iteratorArr[1] = 'order-md-last';
                            $iterator = 0;
                            @endphp
                            @elseif($iterator == 0)
                            @php
                            $iteratorArr[0] = 'order-md-last';
                            $iteratorArr[1] = 'order-md-first';
                            $iterator = 1;
                    @endphp
                @endif
                <div class="row featurette">
                    <div class="featurette-item-block col-lg-7 col-md-12 col-sm-12 @php echo$iteratorArr[0];@endphp">
                        <h2 class="featurette-heading">{{$item->name}}</h2>
                        <p class="lead">{{$item->content}}</p>
                        <a href="{{$item->link}}" class="btn btn-outline-dark" role="button">Это интересно!</a>
                    </div>
                    <div class="featurette-item-img col-lg-5 col-md-12 col-sm-12 @php echo$iteratorArr[1];@endphp">
                        @if(!empty($item->file_link))
                            <img class="featurette-image img-fluid mx-auto"  alt="{{$item->file_name}}" style="width: 500px; height: 400px;" src="{{$item->file_link}}" data-holder-rendered="true">
                        @endif
                    </div>
                </div>
                <hr class="featurette-divider">
                @endforeach
            @endif
    </div>
    @endsection
<script src="{{asset('js/main.js')}}"></script>
