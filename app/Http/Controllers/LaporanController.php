<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $data_laporan = \App\Laporan::all();
        return view('laporan.index',['data_laporan' => $data_laporan]);
    }

    public function create(Request $request)
    {
        $laporan = \App\Laporan::create($request->all());
        return redirect('/laporan')->with('sukses','Data berhasil ditambahkan!');
    }
}
