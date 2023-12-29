@extends('components.layout')
@section('title', 'Transaksi')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Ubah Data Transaksi</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('transaksis.index') }}" class="btn btn-success btn-xs btn-flat"style="background-color: #ff4646; color: #fff;">
            <i class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>
    <form action="{{ route('transaksis.update', [$Trans->id]) }}" method="POST">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>Id Transaksi:</strong>
                <input type="text" name="id_transaksi" class="form-control" value="{{ $Trans->id_transaksi }}">
            </div>
            <div class="form-group">
                <strong>Id Karyawan:</strong>
                <input type="text" name="id_karyawan" class="form-control" value="{{ $Trans->id_karyawan }}">
            </div>
            <div class="form-group">
                <strong>Nama Hewan:</strong>
                {{-- input text nip dibuat hidden untuk proses post request di controller --}}
                <input type="text" name="nama_hewan" class="form-control" value="{{ $Trans->nama_hewan }}" hidden>
                {{-- input text yang hanya untuk tampilan saja, disabled dan tanpa nama --}}
                <input type="text" class="form-control" value="{{ $Trans->nama_hewan }}">
            </div>
            <div class="form-group">
                <strong>Nama Pemilik:</strong>
                <input type="text" name="nama_pemilik" class="form-control" value="{{ $Trans->nama_pemilik }}">
            </div>
            <div class="form-group">
                <strong>Tanggal Penitipan:</strong>
                <input type="date" name="tanggal_penitipan" class="form-control" value="{{ $Trans->tanggal_penitipan }}">
            </div>
            <div class="form-group">
                <strong>Tanggal Pengembalian:</strong>
                <input type="date" name="tanggal_pengembalian" class="form-control" value="{{ $Trans->tanggal_pengembalian }}">
            </div>
            <div class="form-group">
                <strong>Lama Penitipan:</strong>
                <input type="text" name="lama_penitipan" class="form-control" value="{{ $Trans->lama_penitipan }}">
            </div>
            <div class="form-group">
                <strong>Biaya Per Hari:</strong>
                <input type="text" name="harga_perhari" class="form-control" value="{{ $Trans->harga_perhari }}">
            </div>
            <div class="form-group">
                <strong>Total:</strong>
                <input type="text" name="total" class="form-control" value="{{ $Trans->total }}">
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary"style="background-color: #0000FF; color: #fff;">Update</button>
            </div>
        </div>
    </form>
@endsection
