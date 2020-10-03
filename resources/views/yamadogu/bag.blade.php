@extends('layout')
@section('title','バッグ一覧')
@section('content')
<div class="container">
    <div class="text-sm-center font-italic mt-5">
        <h1>BACK PACKS</h1>
    </div>
</div>
<div class="mt-5">
    <div class="row">
    @foreach($bags as $bag)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$bag->id}}"><img class="card-img-top" src="{{asset($bag->path)}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title text-center">{{$bag->name}}<br>
                    <small>{{$bag->maker}}</small></h4>
                    <p class="card-text">{{$bag->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection