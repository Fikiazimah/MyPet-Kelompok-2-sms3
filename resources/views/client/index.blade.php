@extends('appclient')
@section('main')
    <style>
        /* Gaya untuk paragraf */
        .paragraf {
            font-family: 'MV Boli', sans-serif;
            /* Ganti dengan font lain jika diinginkan */
            color: #3d1f14;
            /* Warna coklat tua */
            margin-top: -30px; /* Sesuaikan dengan jarak yang diinginkan */
        }
    </style>
    <div class="row home" style="height:600px;">
        <div class="container text-center">
            <h1 style="margin-top: 500px;">Selamat Datang di MyPET Hotels</h1>
        </div>
    </div>
        <div class="container text-center">
            <h3><p class="paragraf">Tempat Penitipan Hewan Yang Penuh Perhatian Dan Cinta</p></h3>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner container">
            <div class="row bg-dark">
                <div class="carousel-item active">
                    <img src="images/hewan 1.jpeg" class="d-block mx-auto" alt="..."
                        style="max-width: 400px; height: 350px;">
                </div>
                <div class="carousel-item">
                    <img src="images/hewan 2.jpg" class="d-block mx-auto" alt="..."
                        style="max-width: 400px; height: 350px;">
                </div>
                <div class="carousel-item">
                    <img src="images/hewan 3.jpg" class="d-block mx-auto" alt="..."
                        style="max-width: 400px; height: 350px;">
                </div>
                <div class="carousel-item">
                    <img src="images/hewan 4.jpg" class="d-block mx-auto" alt="..."
                        style="max-width: 400px; height: 350px;">
                </div>
                <div class="carousel-item">
                    <img src="images/hewan 5.png" class="d-block mx-auto" alt="..."
                        style="max-width: 400px; height: 350px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="row address mt-5">
            <div class="container text-center">
                <h2>Alamat Kami</h2>
                <p><u>JL. Pulo, Desa Kajen Rt 02 Rw 05, Kec. Talang, Kab. Tegal</u></p>

                <p><a href="https://maps.app.goo.gl/cyjxQxcN9qikt97z5" target="_blank">Lihat di Google Maps</a></p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d247.54773816947866!2d109.13619272690109!3d-6.918815473390398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTUnMDguMCJTIDEwOcKwMDgnMTAuNCJF!5e0!3m2!1sid!2sid!4v1703589616757!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    @endsection
