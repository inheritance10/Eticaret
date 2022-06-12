<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $id = DB::table('kategoris')->insertGetId(
           [
               'kategoriAdi' => 'Elektronik',
               'slug' => 'elektronik'
           ]);

       DB::table('kategoris')->insert([
           'kategoriAdi' => 'Bilgisayar/Tablet',
           'slug' => 'bilgisayar-tablet',
           'ust_id' => $id
       ]);

        $id = DB::table('kategoris')->insert(
            ['kategoriAdi' => 'Telefon',
            'slug' => 'telefon',
                'ust_id' => $id
            ]);

        DB::table('kategoris')->insert([
            'kategoriAdi' => 'TV ve Ses Sistemleri',
            'slug' => 'tv-ve-ses-sistemleri',
            'ust_id' => $id
        ]);
        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Kamera',
            'slug' => 'kamera',
            'ust_id' => $id
        ]);


        $id = DB::table('kategoris')->insertGetId(
            [
                'kategoriAdi' => 'Kitap',
                'slug' => 'kitap'
            ]);

        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Edebiyat',
            'slug' => 'edebiyat',
            'ust_id' => $id
        ]);

        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Çocuk',
            'slug' => 'cocuk',
            'ust_id' => $id
        ]);
        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Bilgisayar',
            'slug' => 'bilgisayar',
            'ust_id' => $id
        ]);

        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Sınavlara Hazırlık',
            'slug' => 'sinavlara-hazirlik',
            'ust_id' => $id
        ]);

        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Kozmetik',
            'slug' => 'kozmetik'
        ]);
        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Giyim',
            'slug' => 'giyim'
        ]);
        DB::table('kategoris')->insert([
            'kategoriAdi' => 'Mobilya',
            'slug' => 'mobilya'
        ]);

    }
}
