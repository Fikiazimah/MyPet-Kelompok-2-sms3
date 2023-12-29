@extends('components.layout') @section('title', 'Karyawan') <div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Detail Data Karyawan</h2>
        </div>
    </div>
</div>

@section('content') <div class="box-header with-border"> <a href="/employees" class="btn btn-success btn-xs btn-flat"style="background-color: #ff4646; color: #fff;"><i
                class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>

    <div class="row">
        <div class="form-group"> <strong>Id Karyawan:</strong> {{ $emp->id_karyawan }} </div>
        <div class="form-group"> <strong>Nama Lengkap:</strong> {{ $emp->nama_lengkap }} </div>
        <div class="form-group"> <strong>Bagian:</strong> {{ $emp->bagian }} </div>
        <div class="form-group"> <strong>Alamat:</strong> {{ $emp->alamat }} </div>
        <div class="form-group"> <strong>No Telepon:</strong> {{ $emp->NoTelepon }} </div>
    </div>
    @endsection
