@extends('layouts.master')
@section('title',$urun->urunAdi)

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa.index')}}">Anasayfa</a></li>
            @foreach($kategoriler as $kategori)
                <li>
                    <a href="{{route('kategori.index',$kategori->slug)}}">
                        {{$kategori->kategoriAdi}}
                    </a>
                </li>
            @endforeach

            <li class="active">{{$urun->urunAdi}}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.usetechs.com%2FUpload%2FSayfa%2Furun-gorselleri-logo.jpg&imgrefurl=https%3A%2F%2Fwww.usetechs.com%2Fe-ticaret%2Furun-gorselleri&tbnid=JHhVbAHMc60CdM&vet=12ahUKEwjxobqGkKj4AhWSm_0HHVPxCgIQMygAegUIARC2AQ..i&docid=7B7f1JkVXNv3BM&w=600&h=600&q=%C3%BCr%C3%BCn%20resmi&ved=2ahUKEwjxobqGkKj4AhWSm_0HHVPxCgIQMygAegUIARC2AQ">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/2"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/3"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="http://lorempixel.com/60/60/food/4"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{$urun->urunAdi}}</h1>
                    <p class="price">{{$urun->fiyati}} $</p>
                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">??r??n A????klamas??</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active alert alert-info" id="t1">
                        {{$urun->aciklama}}
                    </div>
                    <div role="tabpanel" class="tab-pane alert alert-success" id="t2">
                        Hen??z yorum yap??lmad??
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
