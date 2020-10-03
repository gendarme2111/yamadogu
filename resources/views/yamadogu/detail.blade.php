@extends('layout')
@section('title','商品詳細')
@section('content')
<div class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    @for($i=0; $i<count($photos); $i++)
                    @if($i==0)
                    <div class="carousel-item active">
                        <div class="card">
                            <img class="card-img-top" src="{{asset($photos[$i]->path)}}" alt="">
                        </div>
                    </div>
                    @else
                    <div class="carousel-item">
                        <div class="card">
                            <img class="card-img-top" src="{{asset($photos[$i]->path)}}" alt="">
                        </div>
                    </div>
                    @endif
                    @endfor
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-left">
               @foreach($photos as $photo)
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="{{asset($photo->path)}}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <dl>
                <dt>
                    <h2>{{$product->name}}
                        <small>{{$product->maker}}</small>
                    </h2>
                <dt>
                <dd>
                    <h3>￥{{$product->price}}(税込)<h3>
                </dd>
            </dl>
            <p class="text-justify">
            {{$product->detail}}
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="mt-5 text-center">
        <button class="btn btn-dark w-35" role="button" href="#"><strong>カートに入れる</strong></button>
    </div>
</div>
@endsection