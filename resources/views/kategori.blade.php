@extends('layouts.master')
@section('title',$kategori->kategoriAdi)

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa.index')}}">Anasayfa</a></li>
            <li><a href="#">{{$kategori->kategoriAdi}}</a></li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$kategori->kategoriAdi}}</div>
                    <div class="panel-body">
                        @if(count($alt_kategori) > 0)
                            <h3>Alt Kategoriler</h3>
                            <div class="list-group categories">
                                @foreach($alt_kategori as $altKategori)
                                    <a href="{{route('kategori.index',$altKategori->slug)}}" class="list-group-item"><i class="fa fa-arrow-circle-right"></i> {{$altKategori->kategoriAdi}}</a>
                                @endforeach
                            </div>
                        @else
                            <div class="alert alert-danger p-3">
                                Bu kategoride alt kategori yoktur
                            </div>
                        @endif

                        <h3>Fiyat Aralığı</h3>
                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 100-200
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 200-300
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="products bg-content">
                    <div class="row">
                        @if(count($urunler) == 0)
                            <div class="alert alert-danger p-3">
                                Bu kategoride ürün yoktur
                            </div>
                        @else
                            Sırala
                            <a href="#" class="btn btn-default">Çok Satanlar</a>
                            <a href="#" class="btn btn-default">Yeni Ürünler</a>
                            <hr>
                            @foreach($urunler as $urun)
                                <div class="col-md-3 product">
                                    <a href="{{route('urun.index',$urun->slug)}}"><img src="http://lorempixel.com/400/400/food/1">Ürün resmi</a>
                                    <p><a href="{{route('urun.index',$urun->slug)}}">{{$urun->urunAdi}}</a></p>
                                    <p class="price">{{$urun->fiyati}}$</p>
                                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
