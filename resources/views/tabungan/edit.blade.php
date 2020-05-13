@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-14">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Pemasukan Simpanan</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/tabungan/{{$tabungan->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama" 
                                placeholder="Nama" value="{{$tabungan->nama}}">        
                                </div>
                
                                <div class="form-group">
                                <label for="jenis_pemasukan">Jenis Pemasukan</label>
                                <input name="jenis_pemasukan" type="text" class="form-control" id="jenis_pemasukan" 
                                placeholder="Jenis Pemasukan" value="{{$tabungan->jenis_pemasukan}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="saldo_masuk">Saldo</label>
                                    <input name="saldo_masuk" type="text" class="form-control" id="saldo_masuk"
                                    placeholder="Saldo" value="{{$tabungan->saldo_masuk}}">
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input name="tanggal" type="text" class="form-control" id="tanggal" 
                                    placeholder="Tanggal" value="{{$tabungan->tanggal}}">            
                                </div>

                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <input name="bulan" type="text" class="form-control" id="bulan" 
                                    placeholder="Bulan" value="{{$tabungan->bulan}}">            
                                </div>
                                
                                <button type="submit" class="btn btn-warning">Ubah Data</button>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
       
