@extends('layout.app')

@section('content')
    <div class="card mt-5 mx-auto" style="width: 40rem">
        <div class="card-header">
            Halo, {{ Auth::user()->name }}
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        {{-- <th scope="col">Foto</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($penggunas as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>
                                {{$item->nama}}
                            </td>
                            {{-- <td>
                                <img src="{{ Storage::url($item->photo) }}" alt="">
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <th>Belum Ada Data</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Akses Pengguna</a>
        </div>
    </div>
@endsection