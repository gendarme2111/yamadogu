@extends('layout')
@section('title','商品一覧')
@section('content')
<div class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img class="card-img-top" src="images_item/kutsu2.jpg" alt="">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                        </div>
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row justify-content-left">
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-2 mt-1">
                    <div class="card">
                        <img class="card-img-top" src="images_item/kutsu1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <dl>
                <dt>
                    <h2>TX5 ロー GTX
                        <small>La Sportiva</small>
                    </h2>
                <dt>
                <dd>
                    <h3>￥17,500(税込)<h3>
                </dd>
            </dl>
            <p class="text-justify">
            創業は1928年。北イタリア・ドロミテ山麓に今でも本社をおき、自然に囲まれた土地で山靴に向き合い、開発・製造を続けている〈LA SPORTIVA〉。これまでも多くの登山家が〈LA SPORTIVA〉のシューズを履き、ヒマラヤをはじめとした難所登山に挑んできた歴史からも、そのブランドに対する信頼性の高さは揺るぎないものがあります。その長きに渡るシューズ開発の過程で生まれた「マウンテニアリング」「クライミング」「マウンテンランニング」の３つのテクノロジーを融合させ誕生したのが、ラ・スポルティバの「トラバースXシリーズ（以後、TXシリーズ）」。
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="mt-5 text-center">
        <button class="btn btn-dark w-35" role="button" href="#"><strong>カートに入れる</strong></button>
    </div>
</div>
@endsection