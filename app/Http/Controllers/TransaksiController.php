<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Profile;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index ()
    {
        $transaksi = Transaksi::with('detailtransaksi')->paginate(10);
        return view('Superadmin.transaksi.index', compact('transaksi'));
    }

    public function show ($id)
    {
        $nota = Transaksi::with('detailtransaksi')->findOrFail($id);
        $data = Profile::first();
        return view('Superadmin.transaksi.show', compact('nota', 'data'));
    }

    public function update (Request $request, $id)
    {
        $nota = Transaksi::findOrFail($id);
        $nota->status_pembayaran = 'Lunas';
        $nota->save();
        return redirect()->route('transaksi.index');
    }
}
