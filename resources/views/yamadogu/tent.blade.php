@extends('layout2')
@section('title','アウトドア雑貨一覧')
@section('about','CAMPING')
@section('content')
<div class="mt-5">
    <div class="row">
    @foreach($tents as $tent)
        <div class="col-md-3 mt-5">
            <div class="card">
                <a href="/detail/{{$tent->id}}"><img class="card-img-top img-fluid" src="{{asset($tent->path)}}" alt="Responsive image"></a>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$tent->name}}<br>
                    <small class="font-italic">{{$tent->maker}}</small></h5>
                    <p class="card-text">{{$tent->title}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection