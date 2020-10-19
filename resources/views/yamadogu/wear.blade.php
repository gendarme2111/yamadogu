@extends('layout2')
@section('title','ウェア一覧')
@section('about','OUTDOOR CLOTHING')
@section('content')
<div class="mt-5">
    <div class="row">
    @foreach($wears as $wear)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$wear->id}}"><img class="card-img-top img-fluid" src="{{asset($wear->path)}}" alt="Responsive image"></a>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$wear->name}}<br>
                    <small class="font-italic">{{$wear->maker}}</small></h5>
                    <p class="card-text">{{$wear->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection