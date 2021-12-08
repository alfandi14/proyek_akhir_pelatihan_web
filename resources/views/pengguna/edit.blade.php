@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>
                Edit Pengguna
            </span>
            <div>
                <a href="{{ route('pengguna.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="{{ $pengguna->nama }}" class="form-control @error('nama') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="number" name="umur" value="{{ $pengguna->umur }}" class="form-control @error('umur') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control @error('alamat') is-invalid @enderror">{{ $pengguna->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Photo <small class="text-danger">* Kosongkan bila tidak ingin diganti</small></label>
                    <input type="file" name="photo" id="" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection