<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Hewan;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = [];

    //kalo disini (function nya) diganti ica nanti di viewnya jadi $this->ica->nama_hewan paham gak?lumayan pa
    //okeh deh

    public function hewan(){
        //id_hewan ini yang ada di tabel transaksi
        return $this->belongsTo(Hewan::class,'id_hewan');
    }
}
