<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col col-10 col-md-8 col-lg-6">
                <div class="card p-4 shadow">
                    <div class="card-title text-center">
                        <h2>Register</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3">
                                <label for="idname" class="form-label">Name</label>
                                <input id="idname" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="idemail" class="form-label">Email</label>
                                <input id="idemail" name="email" type="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="idpassword" class="form-label">Password</label>
                                <input id="idpassword" name="password" type="password" class="form-control" placeholder="Create a password" required>
                            </div>
                            <div class="mb-3">
                                <label for="idcpassword" class="form-label">Confirm Password</label>
                                <input id="idcpassword" name="password_confirmation" type="password" class="form-control" placeholder="Confirm your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>