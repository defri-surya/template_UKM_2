<?php

namespace App\Http\Controllers\Paketdua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Str;

class ProdukPaketduaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::paginate(10);
        return view('Paketdua.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paketdua.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);
        $data = $request->all();
        $data['slug'] = Str::slug($data['nama'], '-');

        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time() . 'produk' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/produk/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto'] = $tujuan_uploud . $new_foto;
        }

        if ($request->has('foto2')) {
            $foto2 = $request->foto2;
            $new_foto = time() . 'produk' . $foto2->getClientOriginalName();
            $tujuan_uploud = 'upload/produk/';
            $foto2->move($tujuan_uploud, $new_foto);
            $data['foto2'] = $tujuan_uploud . $new_foto;
        }

        if ($request->has('foto3')) {
            $foto3 = $request->foto3;
            $new_foto = time() . 'produk' . $foto3->getClientOriginalName();
            $tujuan_uploud = 'upload/produk/';
            $foto3->move($tujuan_uploud, $new_foto);
            $data['foto3'] = $tujuan_uploud . $new_foto;
        }

        Produk::create($data);

        toast('Data Produk Berhasil Ditambahkan', 'success')->position('bottom-end');
        return redirect()->route('Paketdua.index');
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
        $produk = Produk::findOrFail($id);
        
        return view('Paketdua.produk.edit', compact('produk'));
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
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($data['nama'], '-');
        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time() . 'produk' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/produk/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto'] = $tujuan_uploud . $new_foto;
        }

        if ($request->has('foto2')) {
            $foto2 = $request->foto2;
            $new_foto = time() . 'produk' . $foto2->getClientOriginalName();
            $tujuan_uploud = 'upload/produk/';
            $foto2->move($tujuan_uploud, $new_foto);
            $data['foto2'] = $tujuan_uploud . $new_foto;
        }

        if ($request->has('foto3')) {
            $foto3 = $request->foto3;
            $new_foto = time() . 'produk' . $foto3->getClientOriginalName();
            $tujuan_uploud = 'upload/produk/';
            $foto3->move($tujuan_uploud, $new_foto);
            $data['foto3'] = $tujuan_uploud . $new_foto;
        }

        Produk::findOrFail($id)->update($data);;

        toast('Data Produk Berhasil Diubah', 'success')->position('bottom-end');
        return redirect()->route('Paketdua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        toast('Data Produk Berhasil Dihapus', 'info')->position('bottom-end');
        return redirect()->route('Paketdua.index');
    }
}
