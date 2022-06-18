@extends('layouts.master')
@section('content')
    <div class="jumbotron text-center">
        <h1>404</h1>
        <h2>Aradığınız sayfa bulunamadı</h2>
        <a href="{{route('anasayfa.index')}}" class="btn btn-primary">
            Anasayfa
        </a>
    </div>
@endsection

