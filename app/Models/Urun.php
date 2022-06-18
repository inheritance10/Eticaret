<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Urun extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function kategoriler(){
        //çoka çok ilişki
        return $this->belongsToMany('App\Models\Kategori','kategori_urun');
    }

    public function detay(){
        return $this->hasOne('App\Models\UrunDetay');
    }
}
