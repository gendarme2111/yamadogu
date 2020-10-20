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
                    <img src="{{asset($cart->path)}}" class="img-fluid img-thumbnail" alt="Responsive image">
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
            <button type="button" class="btn btn-dark btn-block w-50 mx-auto" role="button" data-toggle="modal" data-target="#Modal"><strong>購入する</strong></button>
            </div>
            <!-- モーダル -->
            <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title mx-auto mt-3" id="Modal"><h4>購入商品の確認</h4></div>
                </div>
                <div class="modal-body mx-auto w-lg-75">
                    @if(Session::exists('carts'))
                    <table class="table table-borderless">
                        <thread>
                            <tr class="d-flex">
                                <th class="col-xs-3"></th>
                                <th class="col-xs-2"></th>
                                <th class="col-xs-1"></th>
                                <th class="col-xs-2"></th>
                            </tr>
                        </thread>
                        @foreach(Session::get('carts') as $cart)
                        @if($cart->orderNum!=0)
                        <tr>
                            <td><h5>{{$cart->name}}</h5></td>
                            <td><h5>￥{{$cart->price}}</h5></td>
                            <td><h5>{{$cart->orderNum}}点</h5></td>
                            <td><h5>＝　￥{{$cart->price*$cart->orderNum}}</h5></td>
                        </tr>     
                        @else
                        @endif
                        @endforeach
                    </table>
                        @else
                        <div class="text-center pt-5 pb-5">
                            <p>カートには何も保存されていません</p>
                        </div>
                        @endif
                    </div>
                    <div class="mx-auto">
                        <h4>合計：￥
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
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                        <button type="button" class="btn btn-primary w-25">購入する</button>
                    </div>
                </div>
            </div>
            <!-- モーダル終了 -->
        </div>
        <div class="container px-0">
            <div class="mt-5 text-center">
                <a class="btn btn-dark w-50" role="button" href="{{route('sessionOut')}}"><strong>カートを空にする</strong></a>
            </div>
        </div>
    </div>
</div>
@endsection