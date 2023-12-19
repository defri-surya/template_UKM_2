<?php

namespace App\Http\Controllers\Paketdua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Str;

class ProfilePaketduaController extends Controller
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
        return view('Paketdua.profile.edit', compact('data'));
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
        return view('Paketdua.profile.edit', compact('data'));
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
        
        $auto = "?autoplay=1";
            $url = $request->video;
            $jml1 = strlen($url);
            if($jml1 == 52)
            {
                $youtube_inti = $url;
            }else{
                $url_limit = substr($url, 0, 43);
                $youtube_url = Str::of($url_limit)->replace("watch?v=", "embed/");
                $fix_url = Str::before($youtube_url, '?autoplay=1');
                $youtube_inti = $fix_url;
            }
            $data['video'] = $youtube_inti;

        Profile::findOrFail($id)->update($data);

        toast('Profile berhasil diubah', 'success')->position('bottom-end');
        return redirect()->route('profilepaketdua.index');
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
