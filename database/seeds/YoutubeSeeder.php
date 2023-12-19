<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtubes')->insert([
            [
                'video' => 'https://www.youtube.com/watch?v=mcNMNQ4V4yo&t=3s',
            ]
        ]);
    }
}
