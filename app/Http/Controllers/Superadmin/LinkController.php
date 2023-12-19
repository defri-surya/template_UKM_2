<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Link;
use App\Profile;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profile::first();
        $data = Link::first();
        $json = json_decode($data, true);
        $link = json_decode($json['url_marketplace'], true);
        $arrayLink = $link['link'];

        return view('Superadmin.link.index', compact('arrayLink', 'profil', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Superadmin.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
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
        $data = Link::where('id', $id)->first();
        $json = json_decode($data, true);
        $link = json_decode($json['url_marketplace'], true);
        $arrayLink = $link['link'];
        return view('Superadmin.link.edit', compact('data', 'arrayLink'));
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

        $link = $data['url_marketplace'];
        $data['url_marketplace'] = json_encode(['link' => $link]);

        Link::findOrFail($id)->update($data);

        toast('Link Marketplace berhasil diperbaharui', 'success')->position('bottom-end');
        return redirect()->route('link.index');
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
