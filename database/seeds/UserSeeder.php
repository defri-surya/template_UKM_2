<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'role' => 'superadmin',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Paketdua',
                'email' => 'paketdua@mail.com',
                'role' => 'paketdua',
                'password' => Hash::make('password'),
            ]
        ]);

        DB::table('profiles')->insert([
            'deskripsi' => 'PT Kala Citra Nuswantara berdiri sejak tahun 2016 sebagai perusahaan Perseroan Terbatas yang bergerak dibidang layanan Informasi dan Komunikasi, focus dalam industry Periklanan, Digital Campaign, Penelitian, Pengembangan dan Konsultasi Keilmuan Sosial-Politik-Budaya. Oleh sebab itu PT Kala Citra Nuswantara selalu memberikan kualitas terbaik dalam pengembangan potensi, ide, kreativitas, kecerdasan dan ketelitian. PT Kala Citra Nuswantara berkomitmen untuk terus memperkuat dan meningkatkan kualitas perusahaan dengan fokus dalam penyediaan dasar-dasar pelayanan jasa, kecakapan dan keahlian intelektual, serta mampu menjawab tantangan dalam berbagai sektor melalui kemampuan perusahaan dalam membangun relasi sebagai mitra internal, juga mampu melayani pemangku kepentingan yang membutuhkan (pemerintah, masyarakat dan swasta).',
            'alamat' => 'Jl. Garuda No.18 B, Pelem Mulong, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198',
            'nama' => 'PT KALA CITRA NUSWANTARA',
            'email' => 'ukm@gmail.com',
            'phone' => '62858989082',
        ]);
    }

    //asli
    // public function run()
    // {
    //     DB::table('users')->insert([
    //         'name' => 'Admin',
    //         'email' => 'admin@mail.com',
    //         'password' => Hash::make('password'),
    //     ]);

    //     DB::table('profiles')->insert([
    //         'alamat' => 'Jl. Garuda No.18 B, Pelem Mulong, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198',
    //         'email' => 'ukm@gmail.com',
    //         'phone' => '62858989082',
    //         'video' => 'www.youtube.com',
    //         'ytb' => 'www.youtube.com',
    //         'fb' => 'www.facebook.com',
    //         'ig' => 'www.instagram.com',
    //     ]);


    // }
}
