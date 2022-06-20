<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\SepetController;
use App\Http\Controllers\OdemeController;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\KullaniciController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('anasayfa',[AnasayfaController::class,'index'])
    ->name('anasayfa.index');

//KATEGORİ ROUTE TANIMLAMASI
Route::get('kategori/{slug_kategoriadi}',[KategoriController::class,'index'])
    ->name('kategori.index');

//ürünler route
Route::get('urun/{slug_urunadi}',[UrunController::class,'index'])
    ->name('urun.index');

Route::post('urun-ara',[UrunController::class,'urunAra'])
    ->name('urun_ara');

Route::get('urun-ara',[UrunController::class,'urunAra']);

//sepet route
Route::get('sepet',[SepetController::class,'index'])
    ->name('sepet.index');

//ODEME ROUTE
Route::get('odeme',[OdemeController::class,'index'])
    ->name('odeme.index');

//SİPARİŞLER ROUTE
Route::get('siparisler',[SiparisController::class,'index'])
    ->name('siparisler.index');

Route::get('siparisler/{id}',[SiparisController::class,'siparisDetay'])
    ->name('siparis-detay.index');


Route::get('test/mail', function (){
    $kullanici = \App\Models\Kullanici::find(1);

    return new App\Mail\KullaniciKayitMail($kullanici);
});

//KULLANICI ROUTE

Route::prefix('kullanici')->group(function (){
    Route::get('girisyap',[KullaniciController::class,'girisform'])
        ->name('girisform.index');

    Route::get('kayitol',[KullaniciController::class,'kayitform'])
        ->name('kayitform.index');

    Route::post('kayitol',[KullaniciController::class,'kayitol'])
        ->name('kayitol');

    Route::get('/aktiflestir/{anahtar}',[KullaniciController::class,'aktiflestir'])
        ->name('aktiflestir');
});












Route::get('/', function () {
    return view('welcome');
});
