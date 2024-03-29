<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Produkunggulan;
use App\Gallery;
use App\Kategoriproduk;
use App\Link;
use App\Produk;
use App\Profile;
use App\Slider;
use App\Sosmed;
use App\Transaksi;
use App\Youtube;
use PDF;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $produkunggulan = Produkunggulan::all();
        $gallery = Gallery::latest()->limit(8)->get();
        $kategoriproduk = Kategoriproduk::all();
        $produk = Produk::latest()->limit(3)->get();
        $dataProfil = Profile::first();
        $slider = Slider::first();
        $youtube = Youtube::first();

        $sosmed = Sosmed::first();

        $faq1 = FAQ::where('id', 1)->first();
        $faq2 = FAQ::where('id', 2)->first();
        $faq3 = FAQ::where('id', 3)->first();

        return view('front.home', compact('produkunggulan', 'gallery', 'kategoriproduk', 'dataProfil', 'produk', 'slider', 'youtube', 'sosmed', 'faq1', 'faq2', 'faq3'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function profil()
    {
        $dataProfil = Profile::first();
        $sosmed = Sosmed::first();
        return view('front.profil', compact('dataProfil', 'sosmed'));
    }

    public function gallery()
    {
        $dataProfil = Profile::first();
        $gallery = Gallery::paginate(12);
        $sosmed = Sosmed::first();
        return view('front.gallery', compact('gallery', 'dataProfil', 'sosmed'));
    }

    public function katalogproduk()
    {
        $dataProfil = Profile::first();
        // $kategoriproduk = Kategoriproduk::all();
        // $produk = Kategoriproduk::with('produk')->paginate(9);
        $produk = Produk::all();
        $sosmed = Sosmed::first();

        return view('front.produk', compact('dataProfil', 'produk', 'sosmed'));
    }

    public function detailproduk($slug)
    {
        $dataLink = Link::first();
        $dataProfil = Profile::first();
        $produk = Produk::where('slug', $slug)->first();
        $sosmed = Sosmed::first();

        $jsonLink = json_decode($dataLink, true);
        $link = json_decode($jsonLink['url_marketplace'], true);
        $arrayLink = $link['link'];

        return view('front.detailproduk', compact('produk', 'dataLink', 'dataProfil', 'sosmed', 'arrayLink'));
    }

    public function detailprodukunggulan($slug)
    {
        $data = Profile::first();
        $produkunggulan = Produkunggulan::where('slug', $slug)->first();
        return view('front.detailprodukunggulan', compact('produkunggulan', 'data'));
    }

    public function keranjangbeli(Request $request)
    {
        $carts = json_decode($request->cookie('rp-carts'), true);

        if ($carts && array_key_exists($request->produkid, $carts)) {
            alert()->info('Barang Telah Dikeranjang Anda', 'Silahkan Lanjutkan Transaksi');
            return redirect()->back();
        } else {
            $produk = Produk::find($request->produkid);
            // dd($produk);
            $carts[$request->produkid] = [
                'qty' => 1,
                'produk_id' => $produk->id,
                'foto' => $produk->foto,
                'nama' => $produk->nama,
                'berat' => 1,
                'harga' => $produk->harga,
            ];
        }
        // dd($produk[$request->produkid]);
        // Keranjangbeli::create($produk[$request->produkid]);

        $cookie = cookie('rp-carts', json_encode($carts), 2880);
        // dd($carts);

        return redirect()->route('listkeranjangbelanja')->cookie($cookie);
    }

    public function invoice($id)
    {
        $nota = Transaksi::with(['detailtransaksi'])->find($id);
        $data = Profile::first();
        return view('front.invoice', compact('data', 'nota'));
    }

    public function print_invoice($id)
    {
        $nota = Transaksi::with(['detailtransaksi'])->find($id);
        $data = Profile::first();
        $pdf = PDF::loadView('front.invoice-print', compact('data'), ['nota' => $nota])->setOptions(['defaultFont' => 'sans-serif'], ['enable_remote' => true]);
        return $pdf->download('invoice_' . $nota->kode_invoice . '_' . $nota->tgl_transaksi . '.pdf');
    }
}
