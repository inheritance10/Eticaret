<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class KullaniciController extends Controller
{
    public function girisform()
    {
        return view('layouts.kullanici.girisform');
    }

    public function kayitform(){
        return view('layouts.kullanici.kayitform');
    }

    public function kayitol(Request $request){
        $validated = $request->validate([
            'ad_soyad' => 'required',
            'email' => 'required|email|unique:kullanici',
            'sifre' => 'required|confirmed|min:5|max:15'
        ]);


        $kullanici = Kullanici::create([
            'adSoyad' => $request->ad_soyad,
             'email' => $request->email,
             'sifre' => Hash::make($request->sifre),
             'aktivasyonAnahtari' => Str::random(60),
             'aktifMi' => 0
         ]);

         auth()->login($kullanici);
         return redirect(route('anasayfa.index'));
    }
}
