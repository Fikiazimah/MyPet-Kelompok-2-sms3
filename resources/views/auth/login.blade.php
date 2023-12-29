<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    background-color:rgb(139, 84, 111); /* Light green background color */
}

.card.login-form {
    padding: 150px;
    background-color: #e6d9f8; /* Light purple form background color */
    box-shadow: 0px 0px 10px 0px #000000;
    border-radius: 10px;
}

.btn-primary {
    background-color: #cc99ff; /* Light purple button background color */
    border-color: #cc99ff; /* Match the background color */
}

.btn-primary:hover {
    background-color: #b366ff; /* Darker purple color on hover */
}

.register-link a {
    color: #ff6666; /* Light red link color */
    font-weight: bold; /* Make the link bold */
}

.register-link a:hover {
    text-decoration: underline; /* Underline the link on hover */
}

    </style>
</head>

<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card login-form">
                    <h2 class="text-center mt-3">Login</h2>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('auth') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" value="{{ old('email') }}" class="form-control" id="email"
                                name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <p class="register-link mt-2">Belum punya akun? <a href="/register">Daftar di sini</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>