<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrunDetails extends Model
{


    use HasFactory;
    protected $table = 'urun_details';

    public $timestamps = false;

    public function urun(){
        return $this->belongsTo('App\Models\Urun');
    }
}
