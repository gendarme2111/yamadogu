@extends('layout2')
@section('title','検索結果一覧')
@section('about','検索結果の表示')
@section('content')
<div class="mt-5">
    <div class="row">
    @foreach($products as $product)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$product->id}}"><img class="card-img-top img-fluid" src="{{asset($product->path)}}" alt="Responsive image"></a>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$product->name}}<br>
                    <small>{{$product->maker}}</small></h5>
                    <p class="card-text">{{$product->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection