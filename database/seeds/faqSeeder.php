<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class faqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('f_a_q_s')->insert([
            [
                'pertanyaan' => 'Bagaimana cara melakukan pembelian / pemesanan barang ?',
                'jawaban' => 'Cara pesan/beli barang bisa Anda lihat secara lengkap pada Cara Pembelian yang berada di bagian paling bawah website ini (Bagian FEATURES).',
            ],
            [
                'pertanyaan' => 'Apakah total harga yang tertera pada akhir proses pemesanan ("checkout") selesai adalah harga akhir yang harus saya bayar. Tidak ada tagihan lain ?',
                'jawaban' => 'Tidak. Harga yang tertera di kasir/checkout ketika proses pemesanan sukses/selesai adalah harga yang sudah termasuk ongkir (ongkos kirim). Bila Anda berbelanja secara online melalui website ini, sistem secara otomatis mencantumkan/memasukkan ongkos kirim dalam harga total.',
            ],
            [
                'pertanyaan' => 'Bagaimana cara pembayarannya ?',
                'jawaban' => 'Untuk penentuan metode pambayaran Anda harus menanyakan pada Admin(Pengelola) via Whatsapp. Kami telah menyantumkan link Whatsapp pada halaman Invoice/Bukti Transaksi. Untuk informasi mengenai metode pembayaran bisa ditanyakan melalui kontak langsung dengan kami pada link Whatsapp yang sudah kami sediakan.',
            ],
        ]);
    }
}
