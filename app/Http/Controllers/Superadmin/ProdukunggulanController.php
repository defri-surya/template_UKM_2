<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Produkunggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukunggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkunggulans = Produkunggulan::all();
        return view('Superadmin.produkunggulan.index', compact('produkunggulans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Superadmin.produkunggulan.create');
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
            'deskripsi' => 'required',
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($data['nama'], '-');
        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time() . 'produkunggulan' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/produkunggulan/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto'] = $tujuan_uploud . $new_foto;
        }
        Produkunggulan::create($data);
        toast('Data Produk Unggulan Berhasil Ditambahkan', 'success')->position('bottom-end');
        return redirect()->route('produkunggulan.index');
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
        $produkunggulan = Produkunggulan::findOrFail($id);
        return view('Superadmin.produkunggulan.edit', compact('produkunggulan'));
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
            'deskripsi' => 'required',
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($data['nama'], '-');
        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time() . 'produkunggulan' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/produkunggulan/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto'] = $tujuan_uploud . $new_foto;
        }
        Produkunggulan::findOrFail($id)->update($data);
        toast('Data Produk Unggulan Berhasil Diubah', 'success')->position('bottom-end');
        return redirect()->route('produkunggulan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produkunggulan::findOrFail($id)->delete();

        toast('Data Produk Unggulan Berhasil Dihapus', 'info')->position('bottom-end');
        return redirect()->route('produkunggulan.index');
    }
}