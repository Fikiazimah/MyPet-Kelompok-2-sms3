<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $Trans = Transaksi::orderBy('id', 'desc')->paginate(5);
        return view('transaksis.index', compact('Trans'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('transaksis.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required',
            'id_karyawan' => 'required',
            'nama_hewan' => 'required',
            'nama_pemilik' => 'required',
            'tanggal_penitipan' => 'required',
            'tanggal_pengembalian' => 'required',
            'lama_penitipan' => 'required',
            'harga_perhari' => 'required',
            'total' => 'required',
        ]);

        $Trans = Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_karyawan' => $request->id_karyawan,
            'nama_hewan' => $request->nama_hewan,
            'nama_pemilik' => $request->nama_pemilik,
            'tanggal_penitipan' => $request->tanggal_penitipan,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'lama_penitipan' => $request->lama_penitipan,
            'harga_perhari' => $request->harga_perhari,
            'total' => $request->total,
        ]);

        return redirect('/transaksis')->with('success', 'Transaksi created successfully.');
    }
    public function show(string $id)
    {
        $Trans = Transaksi::findOrFail($id);
        return view('transaksis.show', compact('Trans'));
    }
    public function edit(string $id)
    {
        $Trans = Transaksi::findOrFail($id);
        return view('transaksis.edit', compact('Trans'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_transaksi' => 'required',
            'id_karyawan' => 'required',
            'nama_hewan' => 'required',
            'nama_pemilik' => 'required',
            'tanggal_penitipan' => 'required',
            'tanggal_pengembalian' => 'required',
            'lama_penitipan' => 'required',
            'harga_perhari' => 'required',
            'total' => 'required',
        ]);
        $Trans = Transaksi::findOrFail($id);
        $Trans->update($request->all());

        return redirect('/transaksis')->with('success', 'Lecturers updated successfully.');
    }
    public function destroy(string $id)
    {
        $Trans = Transaksi::where('id', $id)->delete();
        return redirect('/transaksis')->with('success', 'Transaksi deleted successfully.');
    }
}
