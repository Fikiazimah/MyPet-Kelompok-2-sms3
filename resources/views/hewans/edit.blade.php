@extends('components.layout')
@section('title', 'Hewan/hewans')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Ubah Data Hewan</h2>
        </div>
    </div>
</div>

@section('content')
    <div class="box-header with-border">
        <a href="{{ route('hewans.index') }}" class="btn btn-success btn-xs btn-flat" style="background-color: #ff4646; color: #fff;">
            <i class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>

    <form action="{{ route('hewans.update', [$hewan->id]) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="form-group">
                <strong>Nama Hewan:</strong>
                {{-- input text nip dibuat hidden untuk proses post request di controller --}}
                <input type="text" name="nama_hewan" class="form-control" value="{{ $hewan->nama_hewan }}" hidden>
                {{-- input text yang hanya untuk tampilan saja, disabled dan tanpa nama --}}
                <input type="text" class="form-control" value="{{ $hewan->nama_hewan }}" disabled readonly>
            </div>
            <div class="form-group">
                <strong>Jenis:</strong>
                <input type="text" name="jenis" class="form-control" value="{{ $hewan->jenis }}">
            </div>
            <div class="form-group">
                <strong>Umur:</strong>
                <input type="text" name="umur" class="form-control" value="{{ $hewan->umur }}">
            </div>
            <div class="form-group">
                <strong>Ciri:</strong>
                <input type="text" name="ciri" class="form-control" value="{{ $hewan->ciri }}">
            </div>
            <div class="form-group">
                <strong>Foto</strong><br>
                <img style="max-width:100px;" src="{{ url('foto'). '/'.$hewan->foto }}"/>
                <input type="file" name="foto" class="form-control" value="">
                    
            </div>
            <div class="form-group">
                <strong>Nama Pemilik:</strong>
                <input type="text" name="nama_pemilik" class="form-control" value="{{ $hewan->nama_pemilik }}">
            </div>
            <div class="form-group">
                <strong>No Telp Pemilik:</strong>
                <input type="text" name="no_telp_pemilik" class="form-control" value="{{ $hewan->no_telp_pemilik }}">
            </div>
            <div class="form-group">
                <strong>Jenis Kelamin:</strong>
                <select name="jenis_kelamin" class="form-control">
                    <option value="" default>-- Choose --</option>
                    <option value="Jantan" {{ $hewan->jenis_kelamin == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                    <option value="Betina" {{ $hewan->jenis_kelamin == 'Betina' ? 'selected': '' }}>Betina</option>
                </select>
            </div>
            <div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
