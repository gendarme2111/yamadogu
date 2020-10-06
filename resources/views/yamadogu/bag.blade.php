@extends('layout2')
@section('title','ザック一覧')
@section('about','BACK PACKS')
@section('content')
<div class="mt-5">
    <div class="row">
    @foreach($bags as $bag)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$bag->id}}"><img class="card-img-top" src="{{asset($bag->path)}}" alt=""></a>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$bag->name}}<br>
                    <small>{{$bag->maker}}</small></h>
                    <p class="card-text">{{$bag->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection