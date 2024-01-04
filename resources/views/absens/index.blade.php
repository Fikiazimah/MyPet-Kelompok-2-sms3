@extends('components.layout')
@section('title', 'Absen')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Data Kehadiran</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border" style="margin-bottom: 10px;">
        <a href="home" class="btn btn-success btn-xs btn-flat"style="background-color: #ff4646; color: #fff;"><i
                class="fa fa-pluscircle"></i>
            << Kembali </a>
    </div>

    <div class="box-header with-border" style="margin-bottom: 20px;">
        <a href="{{ route('absens.create') }}"
            class="btn btn-success btn-xs btn-flat"style="background-color: #0000FF; color: #fff;"><i
                class="fa fa-plus-circle"></i>
            Tambah Data
        </a>
    </div>

    <br>
    <div class="box-body table-responsive">
        <table class="table-stiped table-bordered table">
            <thead>
                <tr>
                    <th width="5%" style="background-color: #fdf8c6;">No</th>
                    <th style="background-color: #fdf8c6;">Tanggal</th>
                    <th style="background-color: #fdf8c6;">Nama Lengkap</th>
                    <th style="background-color: #fdf8c6;">Bagian</th>
                    <th style="background-color: #fdf8c6;">Keterangan</th>
                    <th width="20%" style="background-color: #fdf8c6;"><i class="fas fa-cog">Action</i></th>
                </tr>
            </thead>
            @foreach ($absen as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->nama_karyawan }}</td>
                    <td>{{ $item->bagian }}</td>
                    <td><span style="background-color: #4cd470; "class="btn btn-primary">{{ $item->keterangan }}</span></td>
                    <td>
                        <a href="{{ route('absens.show', [$item->id]) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('absens.edit', [$item->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form class="d-inline" action="{{ route('absens.destroy', [$item->id]) }}" method="POST"
                            onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {{ $absen->links() }}
@endsection
