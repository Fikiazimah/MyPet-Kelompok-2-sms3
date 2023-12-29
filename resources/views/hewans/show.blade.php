@extends('components.layout')
@section('title', 'Hewan/Hewans')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Detail Data Hewan</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('hewans.index') }}" class="btn btn-success btn-xs btnflat"style="background-color: #0000FF; color: #fff;"><i class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <strong>Nama Hewan:</strong>
            {{ $hewan->nama_hewan }}
        </div>
        <div class="form-group">
            <strong>Jenis:</strong>
            {{ $hewan->jenis }}
        </div>
        <div class="form-group">
            <strong>Umur:</strong>
            {{ $hewan->umur }}
        </div>
        <div class="form-group">
            <strong>Ciri:</strong>
            {{ $hewan->ciri }}
        </div>
        <div class="form-group">
            <strong>Foto:</strong>
            <img style="max-width:130px;" src="{{ url('foto'). '/'.$hewan->foto }}"/>
            
        </div>
        <div class="form-group">
            <strong>Nama Pemilik:</strong>
            {{ $hewan->nama_pemilik }}
        </div>
        <div class="form-group">
            <strong>Jenis Kelamin:</strong>
            {{ $hewan->jenis_kelamin }}
        </div>
    </div>
@endsection
