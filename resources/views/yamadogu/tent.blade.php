@extends('layout')
@section('title','その他商品一覧')
@section('content')
<div class="container">
    <div class="text-sm-center font-italic mt-5">
        <h1>CAMPING</h1>
    </div>
</div>
<div class="mt-5">
    <div class="row">
    @foreach($tents as $tent)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$tent->id}}"><img class="card-img-top" src="{{asset($tent->path)}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title text-center">{{$tent->name}}<br>
                    <small>{{$tent->maker}}</small></h4>
                    <p class="card-text">{{$tent->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection