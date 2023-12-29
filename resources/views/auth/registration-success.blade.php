<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(139, 84, 111);
        }

        .login-container {
            margin-top: 5%;
        }

        .card.login-form {
            padding: 150px;
            background-color: #e6d9f8;
            /* Light purple form background color */
            box-shadow: 0px 0px 10px 0px #000000;
            border-radius: 10px;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2>Registration Successful</h2>
                <p class="mt-3">
                    Terima kasih telah mendaftar! Akun Anda telah berhasil dibuat.
                    Kembali dan silahkan masuk.
                </p>
                <a href="{{ route('auth') }}" class="btn btn-primary mt-3">Go to Login</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
