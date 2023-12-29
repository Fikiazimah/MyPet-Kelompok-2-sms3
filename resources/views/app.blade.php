<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyPet Kota Tegal</title>
    <link
        href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ruparupa.com%2Fblog%2Fcara-memilih-tempat-penitipan-hewan%2F&psig=AOvVaw1danFpu1hwAcOEVbLb92EH&ust=1700207723920000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCJDUv7yFyIIDFQAAAAAdAAAAABAF"
        rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-
z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQ
XFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css
">
</head>
<style>
    body {
        background-color: #a4d9f4;
        /* Warna abu-abu muda untuk latar belakang body */
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyPet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle 
navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('home') }}"><i
                                class="fa fa-home"></i> Home</a>
                    </li>
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('employees.index') }}"><i class="fas fa-user"></i>
                                Employee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('hewans.index') }}"><i class="fa fa-paw"></i>
                                Hewan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transaksis.index') }}"><i class="fas fa-chart-bar"></i>
                                Data Transaksi</a>
                        </li>
                    @endif
                    @if (Auth::user()->role == 'pimpinan')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('absens.index') }}"><i class="far fa-calendar-alt"></i>
                                Absensi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('transaksis.index') }}"><i class="fas fa-chart-bar"></i>
                                Detail Transaksi</a>
                        </li>
                    @endif
                    @if (Auth::user()->role == 'client')
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-star"></i>
                            Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-code"></i>
                            Layanan</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="dropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/logout" class="btn btn-outline-warning me-2">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-user-gear"></i>
                            Hi - {{ Auth::user()->name }}</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundl
        e.min.js" integrity="sha384-
        C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
        < /scr
        ipt >
            <
            script
        src = "https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js" > <
            /script> <
        script >
            new DataTable('#listdata');
    </script>
</body>

</html>
