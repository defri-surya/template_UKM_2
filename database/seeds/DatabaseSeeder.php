<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(SosmedSeeder::class);
        $this->call(YoutubeSeeder::class);
        $this->call(faqSeeder::class);
    }
}
