<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($slug_kategoriadi){
        $kategori = Kategori::where('slug',$slug_kategoriadi)->firstOrFail();
        $alt_kategori = Kategori::where('ust_id',$kategori->id)->get();

        $urunler = $kategori->urunler()->distinct()->get();

        return view('kategori',compact('kategori','alt_kategori','urunler'));
    }
}
