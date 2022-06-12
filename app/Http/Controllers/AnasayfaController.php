<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index(){
        $kategoriler = Kategori::whereRaw('ust_id is null')->get()->take(8);
        return view('anasayfa',compact('kategoriler'));
    }
}
