<?php

namespace App\Http\Controllers;

use App\Mail\KullaniciKayitMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Kullanici;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use function PHPUnit\Framework\isNull;

class KullaniciController extends Controller
{
    public function girisform()
    {
        return view('kullanici.girisform');
    }

    public function kayitform(){
        return view('kullanici.kayitform');
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


        //mail gönderim işlemi
         Mail::to($request->email)->send(new KullaniciKayitMail($kullanici));

         //eğer kayıt işlemi başarılı ise login gerçekleşsin
         auth()->login($kullanici);
         return redirect(route('anasayfa.index'));
    }

    public function aktiflestir($anahtar){
        $kullanici = Kullanici::
        where('aktivasyonAnahtari',$anahtar)
            ->first();
        if(!isNull($kullanici)){
            $kullanici->aktivasyonAnahtari = null;
            $kullanici->aktifMi = 1;
            $kullanici->save();
            return redirect(route('anasayfa.index'))->with('hesapAktif','Kullanıcı kaydınız aktifleştirildi');
        }
    }

}
