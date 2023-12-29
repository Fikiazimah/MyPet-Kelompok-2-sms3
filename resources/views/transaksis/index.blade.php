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
<div class="box-header with-border" style="margin-bottom: 10px;">
    <a href="home" class="btn btn-success btn-xs btn-flat"style="background-color: #ff4646; color: #fff;"><i class="fa fa-pluscircle"></i>
        << Kembali </a>
</div>

    <div class="box-header with-border">
        <a href="{{ route('transaksis.create') }}" class="btn btn-success btn-xs btnflat"style="background-color: #0000FF; color: #fff;"><i class="fa fa-plus-circle"></i>
            Tambah Data
        </a>
    </div>
    <br>
    <div class="box-body table-responsive">
        <table class="table-stiped table-bordered table">
            <thead>
                <tr>
                    <th width="5%" style="background-color: #fdf8c6;">No</th>
                    <th style="background-color: #fdf8c6;">Id Transaksi</th>
                    <th style="background-color: #fdf8c6;">Id Karyawan</th>
                    <th style="background-color: #fdf8c6;">Nama Hewan</th>
                    <th style="background-color: #fdf8c6;">Nama Pemilik</th>
                    <th style="background-color: #fdf8c6;">Tanggal Penitipan</th>
                    <th style="background-color: #fdf8c6;">Tanggal Pengembalian</th>
                    <th style="background-color: #fdf8c6;">Lama Penitipan</th>
                    <th style="background-color: #fdf8c6;">Harga Per Hari</th>
                    <th style="background-color: #fdf8c6;">Total</th>
                    <th width="20%" style="background-color: #fdf8c6;"><i class="fas fa-cog">Action</i></th>
                </tr>
            </thead>
            @foreach ($Trans as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $item->id_transaksi}}</td>
                    <td>{{ $item->id_karyawan}}</td>
                    <td>{{ $item->nama_hewan}}</td>
                    <td>{{ $item->nama_pemilik}}</td>
                    <td>{{ $item->tanggal_penitipan}}</td>
                    <td>{{ $item->tanggal_pengembalian}}</td>
                    <td>{{ $item->lama_penitipan}}</td>
                    <td>{{ $item->harga_perhari}}</td>
                    <td>{{ $item->total}}</td>
                    <td>
                        <a href="{{route('transaksis.show',[$item->id]) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{route('transaksis.edit',[$item->id])}}" class="btn btn-primary btn-sm">Edit</a>
                        
                        <form class="d-inline" action="{{route('transaksis.destroy', [$item->id])}}"
                            method="POST" onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                            
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $Trans->links() }}
@endsection
