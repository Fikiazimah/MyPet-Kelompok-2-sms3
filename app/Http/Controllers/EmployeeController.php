<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // membuat objek adm dari class Admin yang mengambil seluruh data dan dibuat pagination
        // untuk selanjutnya setting pagination di app/providers/AppServiceProvider.php method boot()
        // dan juga tambahkan code paginate di view index
        $emp = Employee::orderBy('id', 'desc')->paginate(5);
        return view('employees.index', compact('emp'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function tambah()
    {
        return view('employees.create');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'bagian' => 'required',
            'alamat' => 'required',
            'NoTelepon' => 'required',
        ]);

        $emp = Employee::create([
            'nama_lengkap'=>$request->nama_lengkap,
            'bagian'=>$request->bagian,
            'alamat'=>$request->alamat,
            'NoTelepon'=>$request->NoTelepon,
        ]);

        // bisa juga langsung menggunakan request all untuk create data
        // Emloyee::create($request->all());
        return redirect('/employees')->with('success', 'employees created successfully.');
    }

    public function ubah($id)
    {
        $emp = Employee::findOrFail($id);
        return view('employees.edit', compact('emp'));
    }

    public function perbarui(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'bagian' => 'required',
            'alamat' => 'required',
            'NoTelepon' => 'required',
        ]);

        $emp = Employee::findOrFail($id);

        $emp->update($request->all());

        return redirect('/employees')->with('success', 'employees updated successfully.');
    }

    public function tampil($id)
    {
        $emp = Employee::findOrFail($id); 
        return view('employees.show', compact('emp'));
    }

    public function hapus($id)
    {

        $emp = Employee::where('id', $id)->delete(); 
        return redirect('/employees')->with('success', 'Employees deleted successfully.');
    }
}
