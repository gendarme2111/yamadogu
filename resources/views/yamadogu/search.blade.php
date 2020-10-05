@extends('layout')
@section('title','新商品一覧')
@section('content')
<div class="container">
    <div class="text-sm-center font-italic mt-5">
        <h1>検索結果の表示</h1>
    </div>
</div>
<div class="mt-5">
    <div class="row">
    @foreach($products as $product)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$product->id}}"><img class="card-img-top" src="{{asset($product->path)}}" alt=""></a>
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
@endsection