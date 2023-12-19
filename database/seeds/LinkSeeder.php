<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Link')->insert([
            [
                'url_marketplace' => '{"link": ["www.shoppe.co.id"]}',
                'wa_admin' => '+628123456789',
            ]
        ]);
    }
}
