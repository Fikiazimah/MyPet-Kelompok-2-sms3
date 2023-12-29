@extends('components.layout')
@section('title', 'Admin')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Data Karyawan</h2>
        </div>
    </div>
</div 
@section('content')>
<div class="box-header with-border" style="margin-bottom: 10px;">
    <a href="home" class="btn btn-success btn-xs btn-flat"style="background-color: #ff4646; color: #fff;"><i class="fa fa-plus-circle"></i>
        << Kembali </a>
</div>

<div class="box-header with-border">
    <a href="/employees/tambah" class="btn btn-success btn-xs btn-flat"style="background-color: #0000FF; color: #fff;"><i class="fa fa-plus-circle"></i>
        Tambah Data
    </a>
    </div>
    <br>
    <div class="box-body table-responsive">
        <table class="table-stiped table-bordered table">
            <thead>
                <tr>
                    <th width="5%" style="background-color: #fdf8c6;">No</th>
                    <th style="background-color: #fdf8c6;">Id Karyawan</th>
                    <th style="background-color: #fdf8c6;">Nama Lengkap</th>
                    <th style="background-color: #fdf8c6;">Bagian</th>
                    <th style="background-color: #fdf8c6;">Alamat</th>
                    <th style="background-color: #fdf8c6;">No Telepon</th>
                    <th style="background-color: #fdf8c6;">Aksi</th>
                </tr>
            </thead>
            @foreach ($emp as $item)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{ $item->id_karyawan }}</td>
                    <td>{{ $item->nama_lengkap }}</td>
                    <td>{{ $item->bagian }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->NoTelepon }}</td>
                    <td>
                        <a href="/employees/tampil/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/employees/ubah/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/employees/hapus/{{$item->id}}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin akan menghapus data?')">Delete
                        </a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    {{ $emp->links() }}
@endsection
