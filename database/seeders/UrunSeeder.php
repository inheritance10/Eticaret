<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Urun;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create();

        Urun::getQuery()->delete();

        for($i=0 ;$i<30 ;$i++){
            $urunAdi = $faker->sentence(2);
            $urun = Urun::create([
                'urunAdi' => $urunAdi,
                'slug' => Str::slug($urunAdi),
                'aciklama' => $faker->sentence(20),
                'fiyati' => $faker->randomFloat(3,1,20)
            ]);

            $detay = $urun->detay()->create([
                'goster_slider' => rand(0,1),
                'goster_gunun_firsati' => rand(0,1),
                'goster_one_cikan' => rand(0,1),
                'goster_cok_satan' => rand(0,1),
                'goster_indirimli' => rand(0,1),
            ]);
        }

    }
}
