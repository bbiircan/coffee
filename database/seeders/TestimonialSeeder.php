<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'title'=>'Client Name',
            'job'=>'Profession',
            'description'=>'Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/7180798/327hcWlg6q7boSQfw9x5SQ4493/ocr',
        ]);
        DB::table('testimonials')->insert([
            'title'=>'Client Name',
            'job'=>'Profession',
            'description'=>'Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/7179254/kvCyFQiBFcsthWiGx8xiXA4605/ocr',
        ]);
        DB::table('testimonials')->insert([
            'title'=>'Client Name',
            'job'=>'Profession',
            'description'=>'Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/7700599/XWoSU8kcv0KQSHdvKDotNg4638/ocr',
        ]);
        DB::table('testimonials')->insert([
            'title'=>'Client Name',
            'job'=>'Profession',
            'description'=>'Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita',
            'image'=>'https://avatars.mds.yandex.net/get-images-cbir/6078543/o8fPpxdseI8i-4VfDEsViQ4704/ocr',
        ]);
    }
}
