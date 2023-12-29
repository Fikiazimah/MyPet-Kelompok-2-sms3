<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $absen = Absen::orderBy('id', 'desc')->paginate(5);
        return view('absens.index', compact('absen'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('absens.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'bagian' => 'required',
            'keterangan' => 'required',
        ]);
        $absen = Absen::create([
            'nama_karyawan' => $request->nama_karyawan,
            'bagian' => $request->bagian,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/absens')->with('success', 'Absen created successfully.');
    }
    public function show(string $id)
    {
        $absen = Absen::findOrFail($id);
        return view('absens.show', compact('absen'));
    }
    public function edit(string $id)
    {
        $absen = Absen::findOrFail($id);
        return view('absens.edit', compact('absen'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_karyawan' => 'required',
            'bagian' => 'required',
            'keterangan' => 'required',
        ]);

        $absen = Absen::findOrFail($id);
        $absen->update($request->all());
        return redirect('/absens')->with('success', 'Absen updated successfully.');
    }
    public function destroy(string $id)
    {
        $absen = Absen::where('id', $id)->delete();
        return redirect('/absens')->with('success', 'Absen deleted successfully.');
    }
}
