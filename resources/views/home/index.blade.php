@extends('app')

@section('content')
    <style>
        /* Gaya untuk judul */
        .judul {
            font-family: 'Times New Roman', sans-serif;
            color: #0e0ebb; /* Warna hijau */
            font-weight: bold;
            font-size: 2em; /* Ukuran font 2 kali lebih besar dari font standar */
        }

        /* Gaya untuk paragraf */
        .paragraf {
            font-family: 'MV Boli', sans-serif; /* Ganti dengan font lain jika diinginkan */
            color: #3d1f14; /* Warna coklat tua */
            font-size: 1.5em; /* Ukuran font 1.5 kali lebih besar dari font standar */
        }
    </style>

    <div class="px-4 py-5 text-center position-relative">
        <img class="d-block mx-auto mb-4" src="{{ asset('storage/assets/mypet.png') }}" alt=""
            width="600px" height="500px">
        
        <div class="position-absolute top-50 start-50 translate-middle" style="margin-top: 250px;">
            <h1 class="judul">HOTEL FOR ANIMALS</h1>
            <div class="col-lg-6 mx-auto">
                <p class="paragraf">Tempat Penitipan Hewan Yang Penuh Perhatian Dan Cinta</p>
            </div>
        </div>
    </div>
@endsection
