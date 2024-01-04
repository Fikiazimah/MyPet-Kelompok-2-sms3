@extends('components.layout') @section('title', 'Karyawan') <div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Ubah Data Karyawan</h2>
        </div>
    </div>
</div>
@section('content') <div class="box-header with-border"> <a href="/employees" class="btn btn-success btn-xs btn-flat"style="background-color: #ff4646; color: #fff;"><i
                class="fa fa-plus-circle"></i>
            << Kembali </a>
    </div>
    <br>

    <form action="/employees/perbarui/{{ $emp->id }}" method="POST"> 
        @method('put') 
        @csrf <div class="row">
            <div class="form-group"> <strong>Nama Lengkap:</strong> 
                <select name="nama_lengkap" name="form-control">
                <option value="" default>-- Choose --</option>
                <option value="PUTRI NURA INA" {{ old('nama_lengkap') == 'PUTRINURAINA' ? 'selected' : '' }}>PUTRI NUR AINA</option>
                <option value="AMANDA MULYASARI" {{ old('nama_lengkap') == 'AMANDAMULYASARI' ? 'selected': '' }}>AMANDA MULYASARI</option>
                <option value="FIKI AZIMAH" {{ old('nama_lengkap') == 'FIKIAZIMAH' ? 'selected' : '' }}>FIKI AZIMAH</option>
                <option value="CELINE QUEENTEROSA" {{ old('nama_lengkap') == 'CELINEQUEENTEROSA' ? 'selected' : '' }}>CELINE QUEENTEROSA</option>
                <option value="SITI NURAMALA" {{ old('nama_lengkap') == 'SITINURAMALA' ? 'selected' : '' }}>SITI NUR AMALA</option>
                </select>

                <div class="form-group"> <strong>Bagian:</strong> 
                    <select name="bagian" class="form-control">
                    <option value="" default>-- Choose --</option>
                        <option value="GROOMER" {{ old('bagian', $emp->bagian) == 'GROOMER' ? 'selected' : '' }}>
                            GROOMER</option>
                        <option value="CLEANLINESS" {{ old('bagian', $emp->bagian) == 'CLEANLINESS' ? 'selected' : '' }}>
                            CLEANLINESS</option>
                        <option value="Admin" {{ old('bagian', $emp->bagian) == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                            </select>
                </div>
                <div class="form-group"> <strong>Alamat:</strong> <input type="text" name="alamat"
                    class="form-control" value="{{ $emp->alamat }}"> </div>
                        
                <div class="form-group"> <strong>No Telepon:</strong> <input type="text" name="NoTelepon"
                        class="form-control" value="{{ $emp->NoTelepon }}"> </div>
                <div>
                    <button type="submit" class="btn btn-primary"style="background-color: #0000FF; color: #fff;">Update</button>
                </div>
            </div>
        </form>
        @endsection
