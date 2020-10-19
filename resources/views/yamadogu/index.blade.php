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
    <div class="text-center font-italic mt-5">
        <h1>NEW ARRIVAL</h1>
    </div>
    <div class="mt-5">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mt-5">
                <div class="card">
                   <a href="/detail/{{$product->id}}"> <img class="card-img-top img-fluid" src="{{asset($product->path)}}" alt="Responsive image"></a>
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
        <div class="text-center font-italic mt-5">
            <h1>RECOMMEND</h1>
        </div>
    </div>
    <div class="mt-5">
        <div class="row">
            @foreach($recommends as $recommend)
            <div class="col-md-3 mt-5">
                <div class="card">
                    <a href="/detail/{{$recommend->id}}"><img class="card-img-top img-fluid" src="{{asset($recommend->path)}}" alt="Responsive image"></a>
                    <div class="card-body">
                        <h4 class="card-title text-center">{{$recommend->name}}</h4>
                        <p class="card-text">{{$recommend->title}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="mt-5 text-center">
            <button class="btn btn-dark w-35" role="button" href="#"><strong>お薦め一覧</strong></button>
        </div>
    </div>
</div>
@endsection