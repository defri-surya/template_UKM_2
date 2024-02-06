<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SosmedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosmeds')->insert([
            [
                'facebook' => 'www.facebook.com',
                'instagram' => 'www.instagram.com',
                'twitter' => 'www.twitter.com',
                'youtube' => 'www.youtube.com',
                'tiktok' => 'www.tiktok.com',
                'pinterest' => 'www.pinterest.com',
            ]
        ]);
    }
}
