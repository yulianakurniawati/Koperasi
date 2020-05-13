@extends('layouts.master')

@section('content')
    
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-14">
                    <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pemasukan Angsuran</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Pemasukan</span>
                                    <button type="button" class="btn" data-toggle="modal" 
                                    data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(session('sukses'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-check-circle"></i> {{ session('sukses') }}
                                </div>
                                @endif
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Pemasukan</th>
                                            <th>Saldo</th>
                                            <th>Angsuran_ke</th>
                                            <th>Tanggal</th>
                                            <th>Bulan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pemasukan_angsuran as $angsuran_masuk)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$angsuran_masuk->nama}}</td>
                                            <td>{{$angsuran_masuk->jenis_pemasukan}}</td>
                                            <td>{{$angsuran_masuk->saldo_masuk}}</td>
                                            <td>{{$angsuran_masuk->angsuran_ke}}</td>
                                            <td>{{$angsuran_masuk->tanggal}}</td>
                                            <td>{{$angsuran_masuk->bulan}}</td>
                                            <td>
                                                <a href="/pemasukan/{{$angsuran_masuk->id}}/edit" class="btn btn-warning btn-sm my-2">Edit</a>
                                                <a href="/pemasukan/{{$angsuran_masuk->id}}/delete" class="btn btn-danger btn-sm my-2"
                                                    onclick="return confirm('Yakin akan dihapus ?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END TABLE HOVER -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Pemasukan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/pemasukan/create" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input name="nama" type="text" class="form-control" id="nama" 
                  placeholder="Nama">
                </div>

                <div class="form-group">
                    <label for="jenis_pemasukan">Jenis Pemasukan</label>
                    <input name="jenis_pemasukan" type="" class="form-control" id="jenis_pemasukan" 
                    placeholder="Jenis Pemasukan">
                </div>

                <div class="form-group">
                    <label for="saldo_masuk">Saldo</label>
                    <input name="saldo_masuk" type="text" class="form-control" id="saldo_masuk" 
                    placeholder="Saldo">
                </div>

                <div class="form-group">
                    <label for="angsuran_ke">Angsuran-ke</label>
                    <input name="angsuran_ke" type="" class="form-control" id="angsuran_ke" 
                    placeholder="Jenis Pemasukan">
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="text" class="form-control" id="tanggal"
                    placeholder="Tanggal">
                </div>

                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input name="bulan" type="text" class="form-control" id="bulan"
                    placeholder="Bulan">
                </div>

        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
    </div>
    </div>
</div>

@endsection