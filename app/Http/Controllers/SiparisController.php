<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiparisController extends Controller
{
    public function index()
    {
        return view('siparisler');
    }

    public function siparisDetay($id){
        return view('siparis-detay');
    }
}
