@extends('layout')
@section('title','商品一覧')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 border-top">
        <p class="text-center mt-4 pb-2">カートに入っている商品</p>
            @if(Session::exists('carts'))
            @foreach(Session::get('carts') as $cart)
            @if($cart->orderNum!=0)
            <div class="row border-top border-bottom">
                <div class="col-md-3">
                    <img src="{{asset($cart->path)}}" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div>
                        <h2>{{$cart->name}}</h2> 
                        <h4>{{$cart->maker}}</h4>
                        <h5>￥{{$cart->price}}</h5>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center"> 
                    <form action="/orderNumChange" method="post">
                    @csrf
                        <select id="orderNum" name="orderNum" onchange="submit(this.option)">
                            @for($i=0;$i<6;$i++)
                            @if($cart->orderNum==$i)
                            <option value="{{$i}}" selected>{{$i}}</option>
                            @else
                            <option value="{{$i}}">{{$i}}</option>
                            @endif
                            @endfor
                            <input type="hidden" name="jan" value="{{$cart->jan}}">
                        </select>
                    </form>
                </div>
            </div>
            @else
            @endif
            @endforeach
            @else
            <div class="text-center border-top pt-5 pb-5">
                <p>カートには何も保存されていません</p>
            </div>
            @endif
        </div>
        <div class="col-md-8 border-top border-bottom pt-2">
            <h4 class="text-right">合計：￥
            @if(Session::exists('carts'))
            <?php $totalprice=0; ?>
            @foreach(Session::get('carts') as $cart)
            <?php $total = 0; 
                $total += ($cart->price)*($cart->orderNum) ;
                $totalprice += $total;
            ?>
            @endforeach  
            <?php echo($totalprice);?>   
            @else
            <?php $total=0;
            echo($total); 
            ?> 
            @endif
            </h4>
        </div> 
        <div class="container">
            <div class="mt-5 text-center">
                <button class="btn btn-dark w-35" role="button" href="#"><strong>購入する</strong></button>
            </div>
        </div>
        <div class="container">
            <div class="mt-5 text-center">
                <a class="btn btn-dark w-35" role="button" href="{{route('sessionOut')}}"><strong>カートを空にする</strong></a>
            </div>
        </div>
    </div>
</div>
@endsection