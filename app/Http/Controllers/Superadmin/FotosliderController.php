<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class FotosliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::first();
        return view('Superadmin.fotoslider.index', compact('data'));
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
        $data = Slider::find($id);
        return view('Superadmin.fotoslider.edit', compact('data'));
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
            'foto_1' => 'image|mimes:jpg,png,jpeg|max:500',
            'foto_2' => 'image|mimes:jpg,png,jpeg|max:500',
            'foto_3' => 'image|mimes:jpg,png,jpeg|max:500',
        ]);

        $data = $request->all();

        if ($request->has('foto_1')) {
            $foto = $request->foto_1;
            $new_foto = time() . 'slider' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/slider/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto_1'] = $tujuan_uploud . $new_foto;
        }
        if ($request->has('foto_2')) {
            $foto = $request->foto_2;
            $new_foto = time() . 'slider' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/slider/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto_2'] = $tujuan_uploud . $new_foto;
        }
        if ($request->has('foto_3')) {
            $foto = $request->foto_3;
            $new_foto = time() . 'slider' . $foto->getClientOriginalName();
            $tujuan_uploud = 'upload/slider/';
            $foto->move($tujuan_uploud, $new_foto);
            $data['foto_3'] = $tujuan_uploud . $new_foto;
        }

        Slider::findOrFail($id)->update($data);

        toast('Slider berhasil diubah', 'success')->position('bottom-end');
        return redirect()->route('fotoslider.index');
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
