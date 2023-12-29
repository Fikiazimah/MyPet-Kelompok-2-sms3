@extends('components.layout')
@section('title', 'Transaksi')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Data Transaksi</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('transaksis.index') }}" class="btn btn-success btn-xs btnflat"style="background-color: #ff4646; color: #fff;"><i class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <strong>Id Transaksi:</strong>
            {{ $Trans->id_transaksi }}
        </div>
        <div class="form-group">
            <strong>Id Karyawan:</strong>
            {{ $Trans->id_karyawan }}
        </div>
        <div class="form-group">
            <strong>Nama Hewan:</strong>
            {{ $Trans->nama_hewan }}
        </div>
        <div class="form-group">
            <strong>Nama Pemilik:</strong>
            {{ $Trans->nama_pemilik }}
        </div>
        <div class="form-group">
            <strong>Tanggal Penitipan:</strong>
            {{ $Trans->tanggal_penitipan }}
        </div>
        <div class="form-group">
            <strong>Tanggal Pengembalian:</strong>
            {{ $Trans->tanggal_pengembalian }}
        </div>
        <div class="form-group">
            <strong>Lama Penitipan:</strong>
            {{ $Trans->lama_penitipan }}
        </div>
        <div class="form-group">
            <strong>Biaya Per Hari:</strong>
            {{ $Trans->harga_perhari }}
        </div>
        <div class="form-group">
            <strong>Total:</strong>
            {{ $Trans->total }}
        </div>
    </div>
@endsection
