@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>
                Buat Pengguna
            </span>
            <div>
                <a href="{{ route('pengguna.index') }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('pengguna.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror"">
                </div>
                <div class="form-group">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Umur</label>
                    <input type="number" name="umur" value="{{ old('umur') }}" class="form-control @error('umur') is-invalid @enderror">
                </div>
                <div class="form-group">
                    @error('umur')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control @error('alamat') is-invalid @enderror"">{{ old('alamat') }}</textarea>
                </div>
                <div class="form-group">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Photo <small class="text-danger">* Optional</small></label>
                    <input type="file" name="photo" id="" class="form-control @error('photo') is-invalid @enderror"">
                </div>
                    @error('photo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection