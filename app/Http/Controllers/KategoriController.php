<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\UrunDetails;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($slug_kategoriadi){
        $kategori = Kategori::where('slug',$slug_kategoriadi)->firstOrFail();
        $alt_kategori = Kategori::where('ust_id',$kategori->id)->get();



        $order = request('order');
        if($order == 'coksatanlar'){
              $urunler = $kategori->urunler()
                  ->distinct()
                  ->join('urun_details','urun_details.urun_id','uruns.id')
                  ->orderBy('urun_details.goster_cok_satan','desc')
                  ->paginate(4);
        }else if($order == 'yeni'){
            $urunler = $kategori->urunler()
                ->distinct()
                ->orderByDesc('updated_at')
                ->paginate(4);
        }else {
            $urunler = $kategori->urunler()->distinct()->paginate(4);
        }
        return view('kategori',compact('kategori','alt_kategori','urunler'));
    }
}
