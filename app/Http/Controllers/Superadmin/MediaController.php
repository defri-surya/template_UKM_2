<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use App\Sosmed;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sosmed::first();
        $json = json_decode($data, true);
        $sosmed = json_decode($json['sosmed'], true);
        $arraySosmed = $sosmed['sosmed'];
        return view('Superadmin.media.index', compact('data', 'arraySosmed'));
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
        $data = Sosmed::where('id', $id)->first();
        $json = json_decode($data, true);
        $sosmed = json_decode($json['sosmed'], true);
        $arraySosmed = $sosmed['sosmed'];
        return view('Superadmin.media.edit', compact('data', 'arraySosmed'));
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

        $sosmed = $data['sosmed'];
        $data['sosmed'] = json_encode(['sosmed' => $sosmed]);

        Sosmed::findOrFail($id)->update($data);

        toast('Sosial Media berhasil diperbaharui', 'success')->position('bottom-end');
        return redirect()->route('media.index');
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
