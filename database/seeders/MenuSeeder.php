<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'title'=>'Black Coffee',
            'description'=>'Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/5480190/TJolqfuDr4osta0tDYoiBQ796/ocr',
            'icon'=>'menu-price',
        ]);
        DB::table('menus')->insert([
            'title'=>'Chocolete Coffee',
            'description'=>'Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/3890460/x_EcHXSvW4a6lQK67tFzZQ1025/ocr',
            'icon'=>'menu-price',
        ]);
        DB::table('menus')->insert([
            'title'=>'Coffee With Milk',
            'description'=>'Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/1577772/u91UVEkAhZRtiMGotn1grA1141/ocr',
            'icon'=>'menu-price',
        ]);
    }
}
