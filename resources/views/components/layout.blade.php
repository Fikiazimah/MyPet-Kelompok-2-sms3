<!DOCTYPE html>

<head>
    <title>MyPet | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .card {
        background-color: #fcd5fc;
    }

    .box {
        background-color: #d8dbfa;
        padding: 10px;
        border-radius: 10px;
    }

    body {
        background-color: #fcd5fc;
    }
     /* Gaya tambahan untuk container */
    .container-fluid {
        background-color: #fcd5fc;
    }
</style>
</head>

<body>
    {{-- Belajar bootstrap grid di https://www.petanikode.com/bootstrap-grid/ --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        @include('components/message')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
