<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profile::first();
        // return view('Superadmin.profile.index', compact('data'));
        return view('Superadmin.profile.edit', compact('data'));
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
        return view('Superadmin.profile.edit', compact('data'));
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
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $data = $request->all();
        if ($request->has('logo')) {
            $logo = $request->logo;
            $new_foto = time() . 'profil' . $logo->getClientOriginalName();
            $tujuan_uploud = 'upload/profil/';
            $logo->move($tujuan_uploud, $new_foto);
            $data['logo'] = $tujuan_uploud . $new_foto;
        }

        Profile::findOrFail($id)->update($data);

        toast('Profile berhasil diubah', 'success')->position('bottom-end');
        return redirect()->route('profile.index');
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
