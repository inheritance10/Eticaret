<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\UrunDetails;

use App\Models\Urun;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $kategoriler = Kategori::whereRaw('ust_id is null')->get()->take(8);
        $urunler_slider = UrunDetails::with('urun')->where('goster_slider',1)->take(5)->get();

        $urunler_gunun_firsati = Urun::select('uruns.*')->
            join('urun_details','urun_details.urun_id','uruns.id')
            ->where('urun_details.goster_gunun_firsati',1)
            ->orderBy('updated_at','desc')
            ->first();

        //one cikanlar ,cok satanlar ,indirimli ürünleride gunun firsati sorugusu
        //gibi çekebiliriz.Güncelleme tarihini göre.

        $urunler_one_cikan = UrunDetails::with('urun')
            ->where('goster_one_cikan',1)
            ->take(4)->get();

        $urunler_cok_satan = UrunDetails::with('urun')
            ->where('goster_cok_satan',1)
            ->take(4)->get();

        $urunler_indirimli = UrunDetails::with('urun')
            ->where('goster_indirimli',1)
            ->take(4)->get();



        return view('anasayfa',compact('kategoriler','urunler_slider','urunler_gunun_firsati','urunler_one_cikan','urunler_cok_satan','urunler_indirimli'));
    }
}
