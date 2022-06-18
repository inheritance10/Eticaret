@extends('layouts.master')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li>
                <a href="{{route('anasayfa.index')}}">
                    Anasayfa
                </a>
            </li>
        </ol>

        <div class="products bg-content">
            <div class="row">
                @if(count($urunler) == 0)
                    <div class="col-md-12 text-center">
                        Aradığınız ürün bulunamadı
                    </div>
                @endif
                @foreach($urunler as $urun)
                    <div class="col-md-3 products">
                        <a href="{{route('urun.index',$urun->slug)}}">
                            <img src="" alt="{{$urun->urunAdi}}">
                        </a>
                        <p>
                            <a href="{{route('urun.index',$urun->slug)}}">
                                {{$urun->urunAdi}}
                            </a>
                        </p>
                        <p class="price">{{$urun->fiyati}} $</p>
                    </div>
                @endforeach
            </div>
            {{$urunler->links()}}
        </div>
    </div>


@endsection
