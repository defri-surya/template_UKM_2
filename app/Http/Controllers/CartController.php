<?php

namespace App\Http\Controllers;

use App\Detailtransaksi;
use App\Produk;
use App\Profile;
use App\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function listkeranjangbeli(Request $request)
    {
        $data = Profile::first();
        $carts = json_decode($request->cookie('rp-carts'), true);
        // $carts = Keranjangbeli::where($request->produkid)->where('status', 'Keranjang')->get();
        // dd($carts);
        if ($carts == null) {
            alert()->info('Keranjang Belanja Masih Kosong');
            return redirect()->route('ukm');
        }
        // dd($carts);
        // foreach ($carts as $key => $item) {
            //     $produk = Product::find($item['produk_id']);
            //     if ($produk['stok'] <= 0) {
                //         unset($carts[$key]);
                //         $cookie = cookie('rp-carts', json_encode($carts), 2880);
                //         alert()->info('Produk Yang Dipilih Sudah Tidak Tersedia', 'Pilih Produk Lainnya');
                //         return redirect()->route('listkeranjangbelanja')->cookie($cookie);
                //     }
                // }
                $produk = Produk::where('id', $request->produkid)->get();
                // $warna = Warna::where('id', $request->produkid)->get();
                // $ukuran = Size::where('id', $request->produkid)->get();

        $provinsi = app('App\Http\Controllers\RajaongkirController')->get_province();
        // dd($provinsi);
        $carts = json_decode(request()->cookie('rp-carts'), true);
        // dd($carts);
        // if ($carts == null) {
        //     toast('Keranjang Masih Kosong', 'info');
        //     return redirect()->route('welcome');
        // }

        // $id = auth()->user()->id;
        // $userdetail = UserDetail::where('user_id', $id)->first();

        // dd($userdetail);
        // dd($carts);

        // hitung berat
        $totalberat = 0;
        foreach ($carts as $r) {
            $totalberat += $r['berat'];
        }
        $berat = $totalberat * 1000;

        // hitung total price
        $totalprice = 0;
        foreach ($carts as $r) {
            $totalprice += $r['harga'] * $r['qty'];
        }
        $jmlqty = 0;
        foreach ($carts as $r) {
            $jmlqty += $r['qty'];
        }
        // dd($jmlqty);
        // $jml = count($carts);
        // dd(Str::random(15));

        return view('front.cart', compact('carts', 'provinsi', 'berat', 'totalprice', 'jmlqty', 'data'));
    }

    public function hapuscart($key)
    {
        $carts = json_decode(request()->cookie('rp-carts'), true);
        unset($carts[$key]);
        // dd($carts);
        $cookie = cookie('rp-carts', json_encode($carts), 2880);
        return redirect()->back()->cookie($cookie);
    }

    public function prosesbeli(Request $request)
    {
        // DB::beginTransaction();
        // try {
            
            $carts = json_decode(request()->cookie('rp-carts'), true);
            // dd($carts);
            // $produk = Produk::find($carts['produk_id']);
            // dd($request->all());
            $beli = Transaksi::create([
                'tgl_transaksi' => date('Y-m-d H:i:s'),
                'kode_invoice' => Str::random(15),
                'alamat_asal' => 'bantul',
                'nama_customer' => $request->nama_customer,
                'tlp_customer' => $request->tlp_customer,
                'alamat_customer' => $request->alamat_customer,
                'kurir' => $request->kurir,
                'ongkir' => $request->ongkoskirim,
                'subtotal' => $request->subtotal,
                'total_harga' => $request->totalharga,
                'total_qty' => $request->totalqty,
                'total_berat' => $request->totalberat,
                'status_pembayaran' => 'Menunggu Pembayaran',
                'provinsi' => $request->provinsi,
                'kabupaten' => $request->namakota,
                'prov_id' => $request->province_id,
                'kab_id' => $request->kota_id,
            ]);


            foreach ($carts as $row) {
                Detailtransaksi::create([
                    'transaksi_id' => $beli->id,
                    'produk_id' => $row['produk_id'],
                    'foto' => $row['foto'],
                    'nama_produk' => $row['nama'],
                    'harga' => $row['harga'],
                    'qty' => $row['qty'],
                ]);
            }

            DB::commit();

            $carts = [];
            //KOSONGKAN DATA KERANJANG DI COOKIE
            $cookie = cookie('rp-carts', json_encode($carts), 2880);
            //REDIRECT KE HALAMAN FINISH TRANSAKSI
            alert()->success('Transaksi Sukses','Silahkan Melakukan Konfirmasi Pembayaran');
            return redirect()->route('buktiTransaksi', $beli->id)->cookie($cookie);
        // } catch (\Exception $e) {
        //     //JIKA TERJADI ERROR, MAKA ROLLBACK DATANYA
        //     DB::rollback();
        //     //DAN KEMBALI KE FORM TRANSAKSI SERTA MENAMPILKAN ERROR
        //     return redirect()->back()->with(['error' => $e->getMessage()]);
        // }
    }
}
