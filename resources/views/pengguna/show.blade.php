@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>
                Detail Pengguna
            </span>
            <div>
                <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" readonly value="{{ $pengguna->nama }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Umur</label>
                <input type="text" readonly value="{{ $pengguna->umur }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" readonly value="{{ $pengguna->alamat }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Photo</label>
                <img src="{{ Storage::url($pengguna->photo) }}" alt="">
            </div>
        </div>
    </div>
@endsection