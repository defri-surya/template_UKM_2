<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Kategoriproduk;
use Illuminate\Http\Request;

class KategoriprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriproduks = Kategoriproduk::paginate(10);
        return view('Superadmin.kategori.index', compact('kategoriproduks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = $request->all();

        Kategoriproduk::create($data);

        toast('Data Kategori berhasil ditambahkan', 'success')->position('bottom-end');
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriproduk = Kategoriproduk::findOrFail($id);
        return view('Superadmin.kategori.edit', compact('kategoriproduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $data = $request->all();

        $kategoriproduk = Kategoriproduk::findOrFail($id);
        $kategoriproduk->update($data);

        toast('Data Kategori berhasil diubah', 'success')->position('bottom-end');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriproduk = Kategoriproduk::findOrFail($id);
        $kategoriproduk->delete();

        toast('Data Kategori berhasil dihapus', 'info')->position('bottom-end');
        return redirect()->route('kategori.index');
    }
}