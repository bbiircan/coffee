<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stories')->insert([
            'title'=>'Our Story',
            'text'=>'Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea',
            'description'=>'Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/4326743/1S301LBHapxj_KfPxR8KmA8436/ocr',
            'topic'=>'Our Vision',
            'content'=>'Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor',
            'icon'=>'fa-check',
            'list'=>'Lorem ipsum dolor sit amet'
        ]);
    }
}
