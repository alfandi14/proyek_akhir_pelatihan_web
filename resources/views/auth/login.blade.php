<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>


    <div class="container">
        <div class="card mx-auto mt-4" style="width: 30rem">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="{{ route('masuk') }}" method="POST">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
                    @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Login</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <span>
                    Belum Punya Akun ? <a href="{{ route('register') }}">Daftar</a>
                </span>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>