<?php

namespace App\Http\Controllers\Paketdua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;

class GalleryPaketduaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        return view('Paketdua.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paketdua.gallery.create');
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
            'judul' => 'required',
        ]);

        $data = $request->all();
        // dd($data);
        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time() . 'gallery' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/gallery/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto'] = $tujuan_uploud . $new_foto;
        }

        Gallery::create($data);

        toast('Data Gallery Berhasil Ditambahkan', 'success')->position('bottom-end');
        return redirect()->route('gallerypaketdua.index');
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
        $gallery = Gallery::findOrFail($id);
        return view('Paketdua.gallery.edit', compact('gallery'));
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
            'judul' => 'required',
        ]);

        $data = $request->all();
        // dd($data);
        if ($request->has('foto')) {
            $foto = $request->foto;
            $new_foto = time() . 'gallery' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/gallery/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto'] = $tujuan_uploud . $new_foto;
        }

        $gallery = Gallery::findOrFail($id);
        $gallery->update($data);

        toast('Data Gallery Berhasil Diubah', 'success')->position('bottom-end');
        return redirect()->route('gallerypaketdua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        toast('Data Gallery Berhasil Dihapus', 'info');
        return redirect()->route('gallerypaketdua.index');
    }
}
