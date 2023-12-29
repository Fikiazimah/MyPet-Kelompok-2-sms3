@extends('components.layout')
@section('title', 'Daftar Hadir')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Detail Data Dosen</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('absens.index') }}"
            class="btn btn-success btn-xs btnflat"style="background-color: #ff4646; color: #fff;"><i
                class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>
    <div class="row" style="border-radius: 5px;">
        <div class="form-group">
            <strong>Nama Karyawan:</strong>
            {{ $absen->nama_karyawan }}
        </div>
        <div class="form-group">
            <strong>Bagian:</strong>
            {{ $absen->bagian }}
        </div>
        <div class="form-group">
            <strong>Keterangan:</strong>
            {{ $absen->keterangan }}
        </div>
    </div>
@endsection
