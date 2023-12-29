<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HewanController extends Controller
{
    public function index()
    {
        $hewan = Hewan::orderBy('id', 'desc')->paginate(5);
        return view('hewans.index', compact('hewan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('hewans.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_hewan' => 'required',
            'jenis' => 'required',
            'umur' => 'required',
            'ciri' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'nama_pemilik' => 'required',
            'jenis_kelamin' => 'required',
        ], [
            'foto.required' => 'Silahkan masukkan foto',
            'foto.mimes' => 'Foto hanya diperbolehkan berekstensi PNG, JPG, JPEG'
        ]);

        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $newName = 'SRM' . date('Ymdhis') . '.' . rand() . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $newName);
        }

        $hewan = Hewan::create([
            'nama_hewan' => $request->nama_hewan,
            'jenis' => $request->jenis,
            'umur' => $request->umur,
            'ciri' => $request->ciri,
            'foto' => $newName,
            'nama_pemilik' => $request->nama_pemilik,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        $hewan->save();

        return redirect('/hewans')->with('success', 'Hewan created successfully.');
    }
    public function show(string $id)
    {
        $hewan = Hewan::findOrFail($id);
        return view('hewans.show', compact('hewan'));
    }
    public function edit(string $id)
    {
        $hewan = Hewan::findOrFail($id);
        return view('hewans.edit', compact('hewan'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_hewan' => 'required',
            'jenis' => 'required',
            'umur' => 'required',
            'ciri' => 'required',
            'nama_pemilik' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $hewan = Hewan::findOrFail($id);

        $hewan->nama_hewan = $request->nama_hewan;
        $hewan->jenis = $request->jenis;
        $hewan->umur = $request->umur;
        $hewan->ciri = $request->ciri;
           
        if($request->hasFile('foto')){
            $request->validate([ 
                'foto' => 'required|image|mimes:png,jpg,jpeg',
            ],[
                'foto.mimes' => 'Foto hanya diperbolehkan berekstensi PNG, JPG, JPEG'
            ]);

            $foto_file = $request->file('foto');
            $newName = date('Ymdhis') . '.' . rand() . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('foto'), $newName);

            $hewan->foto = $newName;
            
        }

        
        $hewan->nama_pemilik = $request->nama_pemilik;
        $hewan->jenis_kelamin = $request->jenis_kelamin;
        $hewan->save();


        return redirect('/hewans')->with('success', 'Hewans updated successfully.');
    }
    public function destroy(string $id)
    {
        $data = Hewan::where('id', $id)->first();
        File::delete(public_path('foto') . '/'.$data->foto);

        $hewan = Hewan::where('id', $id)->delete();
        return redirect('/hewans')->with('success', 'Hewans deleted successfully.');
    }
}
