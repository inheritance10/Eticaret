@extends('layouts.master')
@section('title','Anasayfa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        @foreach($kategoriler as $kategori)
                            <a href="{{route('kategori.index',$kategori->slug)}}" class="list-group-item"><i class="fa fa-arrow-circle-o-right"></i>{{$kategori->kategoriAdi}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for($i = 0 ;$i < count($urunler_slider); $i++)
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="{{$i == 0 ? 'active' : ''}}"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach($urunler_slider as $index => $urun_detay)
                            <div class="item {{$index == 0 ?'active' : ''}}">
                                <img src="http://lorempixel.com/640/400/food/1" alt="...">
                                <div class="carousel-caption">
                                    {{$urun_detay->urun->urunAdi}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="{{route('urun.index',$urunler_gunun_firsati->slug)}}">
                            <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Flh3.googleusercontent.com%2FO0sxQEeXuLQ1bUOj5WwW5rZKV6_wmDnDQcoGuUINbUEoL8JFujW9tSXZ03P97K82XCUtOd-AoyGJL5vfJ-51seMG8o8%3Dw640-h400-e365-rj-sc0x00ffffff&imgrefurl=https%3A%2F%2Fchrome.google.com%2Fwebstore%2Fdetail%2Fasus-back-to-school%2Fkbcpjdnhidlifjmpabmkdaplfboicgon%3Fhl%3Dtr&tbnid=QP5wZG7CDyRQfM&vet=12ahUKEwi8t8Wj9LH4AhVt_rsIHZlzD_MQMygCegUIARCAAQ..i&docid=q5awiYrA2L1IYM&w=640&h=400&itg=1&q=640x400&ved=2ahUKEwi8t8Wj9LH4AhVt_rsIHZlzD_MQMygCegUIARCAAQ" class="img-responsive">
                            {{$urunler_gunun_firsati->urunAdi}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($urunler_one_cikan as $one_cikan)
                            <div class="col-md-3 product">
                                <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                                <p><a href="#">{{$one_cikan->urun->urunAdi}}</a></p>
                                <p class="price">{{$one_cikan->urun->fiyati}}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($urunler_cok_satan as $cok_satan)
                            <div class="col-md-3 product">
                                <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                                <p><a href="#">{{$cok_satan->urun->urunAdi}}</a></p>
                                <p class="price">{{$cok_satan->urun->fiyati}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($urunler_indirimli as $indirimli)
                            <div class="col-md-3 product">
                                <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>
                                <p><a href="#">{{$indirimli->urun->urunAdi}}</a></p>
                                <p class="price">{{$indirimli->urun->fiyati}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
