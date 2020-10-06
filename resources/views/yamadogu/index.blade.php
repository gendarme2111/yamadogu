@extends('layout')
@section('title','トップページ')
@section('headerimg')
    <div class="jumbotron" style="background:url(images/hotaka01.jpg); background-size:cover;">
        <div class="col-md-6 px-0 mx-auto">
            <h1 class="display-5 font-italic">Welcome to your favorite online mountain store</h1>
            <p class="lead my-3">Our goal is that you enjoy a safe equipment in which you feel comfortable and to enjoy your outdoor activities.The satisfaction of our customers is our absolute maximum.  </p>
        </div>
    </div>
@endsection
@section('content')
<div class="container">
    <div class="text-sm-center font-italic mt-5">
        <h1>NEW ARRIVAL</h1>
    </div>
    <div class="mt-5">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mt-5">
                <div class="card">
                   <a href="/detail/{{$product->id}}"> <img class="card-img-top" src="{{asset($product->path)}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title text-center">{{$product->name}}<br>
                        <small>{{$product->maker}}</small></h4>
                        <p class="card-text">{{$product->title}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="mt-5 text-center">
            <a class="btn btn-dark w-35" role="button" href="{{route('new')}}"><strong>新商品一覧</strong></a>
        </div>
    </div>
    <div class="container">
        <div class="text-sm-center font-italic mt-5">
            <h1>RECOMMEND</h1>
        </div>
    </div>
    <div class="mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">La Sportiva</h4>
                        <p class="card-text">La Spotiva人気のM5の待望の新作です。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/t1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">Nanga</h4>
                        <p class="card-text">Nanga速乾性のインナーシャツです。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/t2.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">AROE rea</h4>
                        <p class="card-text">AROE REA人気のエオTの新作です。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/t1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">Nanga</h4>
                        <p class="card-text">Nanga速乾性のインナーシャツです。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">La Sportiva</h4>
                        <p class="card-text">La Spotiva人気のM5の待望の新作です。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/t1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">Nanga</h4>
                        <p class="card-text">Nanga速乾性のインナーシャツです。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/t2.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">AROE rea</h4>
                        <p class="card-text">AROE REA人気のエオTの新作です。</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images_item/t1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">Nanga</h4>
                        <p class="card-text">Nanga速乾性のインナーシャツです。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mt-5 text-center">
            <button class="btn btn-dark w-35" role="button" href="#"><strong>お薦め一覧</strong></button>
        </div>
    </div>
</div>
@endsection