<?php

namespace App\Http\Controllers;

use App\views;
use Illuminate\Http\Request;

class viewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = views::all();
        return view('views.index', compact('views'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('views.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        views::create($request->all());
       return redirect('/views')->with('status','Data penduduk berhasil di tambah!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\views  $views
     * @return \Illuminate\Http\Response
     */
    public function show(views $views)
    {
        return view('views.show', compact('views'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\views  $views
     * @return \Illuminate\Http\Response
     */
    public function edit(views $views)
    {
        return view('views.edit',compact('views'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\views  $views
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, views $views)
    {
        views::where('id', $views->id)
        ->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'Alamat' => $request->alamat,
            'rt' => $request->rw,
            'rw' => $request->rw,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);

        return redirect('/views')->with('status','Data penduduk berhasil di ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\views  $views
     * @return \Illuminate\Http\Response
     */
    public function destroy(views $views)
    {
        views::destroy($views->id);
        return redirect('/views')->with('status','Data penduduk berhasil di hapus!!!');
    }
}
