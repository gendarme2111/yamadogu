@extends('layout2')
@section('title','シューズ一覧')
@section('about','OUTDOOR SHOES')
@section('content')
<div class="mt-5">
    <div class="row">
    @foreach($shoes as $shoe)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$shoe->id}}"><img class="card-img-top" src="{{asset($shoe->path)}}" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$shoe->name}}<br>
                    <small>{{$shoe->maker}}</small></h5>
                    <p class="card-text">{{$shoe->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection