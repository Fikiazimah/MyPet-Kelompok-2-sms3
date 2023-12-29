@extends('components.layout')
@section('title', 'Hewan/hewans')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Tambah Data Hewan</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="/hewans" class="btn btn-success btn-xs btn-flat"style="background-color: #ff4646; color: #fff;"><i class="fa fa-pluscircle"></i>
            << Kembali </a>
    </div>
    <br>
    <form action="{{ route('hewans.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>Nama Hewan:</strong>
                <input type="text" name="nama_hewan" class="form-control" value="{{ old('nama_hewan') }}">
            </div>
            <div class="form-group">
                <strong>Jenis:</strong>
                <input type="text" name="jenis" class="form-control" value="{{ old('jenis') }}">
            </div>
            <div class="form-group">
                <strong>Umur:</strong>
                <input type="text" name="umur" class="form-control" value="{{ old('umur') }}">
            </div>
            <div class="form-group">
                <strong>Ciri:</strong>
                <input type="text" name="ciri" class="form-control" value="{{ old('ciri') }}"
                    placeholder="contoh : mata kuning, pupil hitam, dll">
            </div>
            <div class="form-group">
                <strong>Foto</strong>
                <input type="file" name="foto" class="form-control" value="{{ old('foto') }}">
                    
            </div>
            <div class="form-group">
                <strong>Nama Pemilik:</strong>
                <input type="text" name="nama_pemilik" class="form-control" value="{{ old('nama_pemilik') }}">
            </div>
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <select name="jenis_kelamin" class="form-control">
                    <option value="" default>-- Choose --</option>
                    <option value="Jantan" {{ old('jenis_kelamin') == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                    <option value="Betina" {{ old('jenis_kelamin') == 'Betina' ? 'selected': '' }}>Betina</option>
                </select>
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary"style="background-color: #0000FF; color: #fff;">Simpan</button>
            </div>
        </div>
    </form>
@endsection
