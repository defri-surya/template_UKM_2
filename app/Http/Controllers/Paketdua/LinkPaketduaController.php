<?php

namespace App\Http\Controllers\Paketdua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Link;
use App\Linkpaketdua;

class LinkPaketduaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Link::paginate(1);
        $linkpaketdua = Linkpaketdua::paginate(10);

        return view('Paketdua.link.index', compact('linkpaketdua'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Paketdua.link.create');
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
            'marketplase' => 'required',
            'wa' => 'required',
        ]);
        $linkpaketdua = $request->all();

        Linkpaketdua::create($linkpaketdua);
        toast('Data Link Paket Dua Berhasil Ditambahkan','success')->position('buttom-end');
        return redirect()->route('linkpaketdua.index');
        
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
        $linkpaketdua = Linkpaketdua::findOrFail($id);

        return view('Paketdua.link.edit', compact('linkpaketdua'));
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
            'marketplase' => 'required',
            'wa'          => 'required',
        ]);

        $data = $request->all();
        
        Linkpaketdua::findOrFail($id)->update($data);

        toast('Link Paket Dua berhasil diubah', 'success')->position('bottom-end');
        return redirect()->route('linkpaketdua.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linkpaketdua = Linkpaketdua::findOrFail($id);
        $linkpaketdua->delete();

        toast('Data Link  Berhasil Dihapus', 'info');
        return redirect()->route('linkpaketdua.index');
    }
}
