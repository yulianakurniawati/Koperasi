<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index(Request $request)
    {
        $data_tabungan = \App\Tabungan::orderBy('nama', 'asc')->get();
        return view('tabungan.index',['data_tabungan' => $data_tabungan]);
    }

    public function create(Request $request)
    {
        $tabungan = \App\Tabungan::create($request->all());
        return redirect('/tabungan')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $tabungan = \App\Pemasukan::find($id);
        return view('tabungan.edit',['tabungan' => $tabungan]);
        
    }

    public function update(Request $request, $id)
    {
        $tabungan = \App\Pemasukan::find($id);
        $tabungan->update($request->all());
        return redirect('/tabungan')->with('sukses','Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $tabungan = \App\Pemasukan::find($id);
        $tabungan->delete();
        return redirect('/tabungan')->with('sukses', 'Data berhasil dihapus!');
    }

}
