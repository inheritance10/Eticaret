<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Kullanici extends Authenticatable
{

    use SoftDeletes;


    protected $table = 'kullanici';


    protected $fillable = [
      'adSoyad','sifre','email','aktivasyonAnahtari','aktifMi'
    ];

    protected $hidden = [
           'sifre','aktivasyonAnahtari'
    ];
}
