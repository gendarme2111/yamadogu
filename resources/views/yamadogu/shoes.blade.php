@extends('layout')
@section('title','シューズ一覧')
@section('content')
<div class="container">
    <div class="text-sm-center font-italic mt-5">
        <h1>OUTDOOR SHOES</h1>
    </div>
</div>
<div class="mt-5">
    <div class="row">
    @foreach($shoes as $shoe)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$shoe->id}}"><img class="card-img-top" src="{{asset($shoe->path)}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title text-center">{{$shoe->name}}<br>
                    <small>{{$shoe->maker}}</small></h4>
                    <p class="card-text">{{$shoe->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection