@extends('layout')
@section('title','ウェア一覧')
@section('content')
<div class="container">
    <div class="text-sm-center font-italic mt-5">
        <h1>CLOTHING OUTDOOR</h1>
    </div>
</div>
<div class="mt-5">
    <div class="row">
    @foreach($wears as $wear)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$wear->id}}"><img class="card-img-top" src="{{asset($wear->path)}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title text-center">{{$wear->name}}<br>
                    <small>{{$wear->maker}}</small></h4>
                    <p class="card-text">{{$wear->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection