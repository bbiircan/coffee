<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'adress'=>'123 Street, New York, USA',
            'phone'=>'+1234567890',
            'email'=>'info@example.com',
            'twitter'=>'fa-twitter',
            'facebook'=>'fa-facebook-f',
            'linkedin'=>'fa-linkedin-in',
            'instagram'=>'fa-instagram'
        ]);
    }
}
