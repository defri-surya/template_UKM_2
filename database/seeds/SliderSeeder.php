<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            [
                'foto_1' => 'upload/slider/1702959740slidernoimageavailable.png',
                'foto_2' => 'upload/slider/1702959740slidernoimageavailable.png',
                'foto_3' => 'upload/slider/1702959740slidernoimageavailable.png',
            ]
        ]);
    }
}
