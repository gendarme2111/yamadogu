@extends('layout')
@section('title','商品一覧')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 border-top">
        <p class="text-center mt-4 pb-2">カートに入っている商品</p>
            <div class="row border-top border-bottom">
                <div class="col-md-3">
                    <img src="/images_item/kutsu1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div>
                        <h2>TX5 ロー GTX</h2> 
                        <h4>La Sportiva</h4>
                        <h5>￥17500</h5>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center"> 
                    <select>
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="col-md-3">
                    <img src="/images_item/t1.jpg" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                    <div>
                        <h2>TX5 ロー GTX</h2> 
                        <h4>La Sportiva</h4>
                        <h5>￥17500</h5>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center"> 
                    <select>
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-8 border-top border-bottom pt-2">
            <h4 class="text-right">合計：26780円</h4>
        </div> 
        <div class="container">
            <div class="mt-5 text-center">
                <button class="btn btn-dark w-35" role="button" href="#"><strong>購入する</strong></button>
            </div>
        </div>
    </div>
</div>
@endsection