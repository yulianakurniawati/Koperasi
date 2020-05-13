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
                                <h3 class="panel-title">Data Laporan Bulanan</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Laporan</span>
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
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Rincian</th>
                                            <th>Pemasukan</th>
                                            <th>Pengeluaran</th>
                                            <th>Saldo</th>
                                            <th>Bulan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_laporan as $laporan)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$laporan->rincian}}</td>
                                            <td>{{$laporan->saldo_masuk}}</td>
                                            <td>{{$laporan->saldo_keluar}}</td>
                                            <td>{{$laporan->saldo_akhir}}</td>
                                            <td>{{$laporan->bulan}}</td>
                                            <td>
                                                <a href="/laporan/{{$laporan->id}}/edit" class="btn btn-warning btn-sm my-2">Edit</a>
                                                <a href="/laporan/{{$laporan->id}}/delete" class="btn btn-danger btn-sm my-2"
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Pemasukan Simpanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/laporan/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="rincian">Rincian</label>
                    <input name="rincian" type="" class="form-control" id="rincian" 
                    placeholder="Rincian">
                </div>

                <div class="form-group">
                    <label for="saldo_masuk">Pemasukan</label>
                    <input name="saldo_masuk" type="text" class="form-control" id="saldo_masuk" 
                    placeholder="Saldo Masuk">
                </div>

                <div class="form-group">
                    <label for="saldo_keluar">Pengeluaran</label>
                    <input name="saldo_keluar" type="text" class="form-control" id="saldo_keluar" 
                    placeholder="Saldo Masuk">
                </div>

                <div class="form-group">
                    <label for="saldo_akhir">Saldo</label>
                    <input name="saldo_akhir" type="text" class="form-control" id="saldo_akhir" 
                    placeholder="Saldo Masuk">
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