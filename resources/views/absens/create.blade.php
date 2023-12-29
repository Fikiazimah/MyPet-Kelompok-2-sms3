@extends('components.layout')
@section('title', 'Daftar Hadir')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Tambah Data</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="/absens" class="btn btn-success btn-xs btn-flat" style="background-color: #ff4646; color: #fff;"><i class="fa fa-pluscircle"></i>
            << Kembali </a>
    </div>
    <br>
    <form action="{{ route('absens.store') }}" method="POST" style="padding: 15px; border-radius: 5px;">
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>Nama Karyawan:</strong>
                <input type="text" name="nama_karyawan" class="form-control" value="{{ old('nama_karyawan') }}">
            </div>
            <div class="form-group">
                <strong>Bagian:</strong>
                <select name="bagian" class="form-control">
                    <option value="" default>-- Choose --</option>
                    <option value="GROOMING" {{ old('bagian') == 'GROOMING' ? 'selected' : '' }}>GROOMING</option>
                    <option value="CLEANLINESS" {{ old('bagian') == 'CLEANLINESS' ? 'selected': '' }}>CLEANLINESS</option>
                    <option value="ADMIN" {{ old('bagian') == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                </select>
            </div>
            <div class="form-group">
                <strong>Keterangan</strong>
                <div>
                    <input type="radio" id="hadir" name="keterangan" value="Hadir" autocomplete="off">
                    <label for="hadir">Hadir</label>
                </div>
                <div>
                    <input type="radio" id="tidak_hadir" name="keterangan" value="Tidak hadir" autocomplete="off">
                    <label for="tidak_hadir">Tidak hadir</label>
                </div>
            <div>
                <br>
                <button type="submit" class="btn btn-secondary"style="background-color: #0000FF; color: #fff;">Simpan</button>
            </div>
        </div>
    </form>
@endsection
