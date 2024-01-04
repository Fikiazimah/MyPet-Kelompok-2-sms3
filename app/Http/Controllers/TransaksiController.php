<?php

namespace App\Http\Controllers;

use App\Models\{Transaksi,Hewan};//buat narik model lebih dari 1 pake kurung kurawal
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransaksiController extends Controller
{
    public function index()
    {
        //nah kita mulai pake relasi di ORM nya.
        //with ini buat bikin relasi tanpa kita pake fungsi join
        $Trans = Transaksi::with(['hewan'])->orderBy('created_at', 'desc')->paginate(5);//hahaha error terus manda |huhu
        return view('transaksis.index', compact('Trans'))->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
    public function create()
    {
        //nah kita panggil dulu data hewanya
        //kenapa dipanggil? biar bisa fetching data di halaman create transaksi
        $hewan = Hewan::all();
        return view('transaksis.create',compact('hewan'));
        //oke? |oke
    }
    public function store(Request $request)
    {
        $request->validate([
            
            'hewan' => 'required',
            'nama_pemilik' => 'required',
            'tanggal_penitipan' => 'required',
            'tanggal_pengembalian' => 'required',
            'lama_penitipan' => 'required',
            'harga_perhari' => 'required',
            'total' => 'required',
        ]);

        $Trans = Transaksi::create([
            'id_transaksi' => $this->gen_id(),
            'id_hewan' => $request->hewan,// ini disesuikan ya sama name="hewan"
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
        $hewan = Hewan::all();
        return view('transaksis.edit', compact('Trans','hewan'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_hewan' => 'required',
            'nama_pemilik' => 'required',
            'tanggal_penitipan' => 'required',
            'tanggal_pengembalian' => 'required',
            'lama_penitipan' => 'required',
            'harga_perhari' => 'required',
            'total' => 'required',
        ]);
        $Trans = Transaksi::find($id);
        $Trans->update($request->all());

        return redirect('/transaksis')->with('success', 'Lecturers updated successfully.');
    }
    public function destroy(string $id)
    {
        $Trans = Transaksi::where('id', $id)->delete();
        return redirect('/transaksis')->with('success', 'Transaksi deleted successfully.');
    }

    public function gen_id()
    {
        //ini kode buat generate kode transaksi
        $query = Transaksi::selectRaw("RIGHT(MAX(id_transaksi),4) as kode")
        ->orderBy('id','DESC')
        ->first();

        if(!empty($query)){
            $kode = intval($query->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodejadi = "MYPET".date('Ym').str_pad($kode,4,"0",STR_PAD_LEFT);

        return $kodejadi;
    }
}
