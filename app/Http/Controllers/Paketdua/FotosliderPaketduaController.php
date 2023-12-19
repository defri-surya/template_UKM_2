<?php

namespace App\Http\Controllers\Paketdua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class FotosliderPaketduaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profile::first();
        return view('Paketdua.fotoslider.edit', compact('data'));
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
        //
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
        $data = Profile::find($id);
        return view('Paketdua.fotoslider.edit', compact('data'));
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
        $data = $request->all();

        if ($request->has('foto1')) {
            $foto = $request->foto1;
            $new_foto = time() . 'profil' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/profil/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto1'] = $tujuan_uploud . $new_foto;
        }
        if ($request->has('foto2')) {
            $foto = $request->foto2;
            $new_foto = time() . 'profil' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/profil/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto2'] = $tujuan_uploud . $new_foto;
        }
        if ($request->has('foto3')) {
            $foto = $request->foto3;
            $new_foto = time() . 'profil' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/profil/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto3'] = $tujuan_uploud . $new_foto;
        }

    Profile::findOrFail($id)->update($data);

    toast('Profile berhasil diubah', 'success')->position('bottom-end');
    return redirect()->route('fotosliderpaketdua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
