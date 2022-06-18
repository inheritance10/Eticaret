<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function index($slug_urunadi){
        $urun = Urun::where('slug',$slug_urunadi)->firstOrFail();
        $kategoriler = $urun->kategoriler()->distinct()->get();
        return view('urun',compact('urun','kategoriler'));
    }

    public function urunAra(Request $request){
        $aranan_urun = $request->aranan_urun;
        $urunler = Urun::where('urunAdi','like', "%$aranan_urun%")
            ->orWhere('aciklama' ,'like', "%$aranan_urun%")
            ->paginate(2);
        $request->flash();
        return view('arama',compact('urunler'));
    }
}
