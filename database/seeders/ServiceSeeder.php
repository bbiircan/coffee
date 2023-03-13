<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title'=>'Fastest Door Delivery',
            'description'=>'Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima erat tempor',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/7188445/L4HO4Wi9Ke6SO7jXwYd9Pg9462/ocr',
            'icon'=>'fa-truck',
        ]);
        DB::table('services')->insert([
            'title'=>'Fresh Coffee Beans',
            'description'=>'Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima erat tempor',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/6963950/8JfcGV6H7jr9fLHV-3wXGg9539/ocr',
            'icon'=>'fa-coffee',
        ]);
        DB::table('services')->insert([
            'title'=>'Best Quality Coffee',
            'description'=>'Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima erat tempor',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/8312026/GmGSC32P1QyIaTzwnVLqLw9576/ocr',
            'icon'=>'fa-award',
        ]);
        DB::table('services')->insert([
            'title'=>'Online Table Booking',
            'description'=>'Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima erat tempor',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/6494446/FYQPFi_DlpHuSC0tZ6qeYw9607/ocr',
            'icon'=>'fa-table'
        ]);
    }
}
