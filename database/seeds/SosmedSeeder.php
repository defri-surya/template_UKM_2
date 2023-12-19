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
                'sosmed' => '{"sosmed": ["www.shoppe.co.id"]}',
            ]
        ]);
    }
}
