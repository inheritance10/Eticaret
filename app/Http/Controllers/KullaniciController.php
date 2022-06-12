<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function girisform()
    {
        return view('kullanici.girisform');
    }

    public function kayitform(){
        return view('kullanici.kayitform');

    }
}
