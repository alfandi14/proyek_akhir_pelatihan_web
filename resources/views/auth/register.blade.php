<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>


    <div class="container">
        <div class="card mx-auto mt-4" style="width: 30rem">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form action="{{ route('daftar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <span>
                    Sudah Punya Akun ? <a href="{{ route('login') }}">Masuk</a>
                </span>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>