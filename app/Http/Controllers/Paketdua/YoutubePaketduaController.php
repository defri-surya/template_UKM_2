<?php

namespace App\Http\Controllers\Paketdua;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Str;

class YoutubePaketduaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profile::first();
        return view('Paketdua.youtube.edit', compact('data'));
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
        //
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
        return redirect()->route('youtubepaketdua.index');
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
