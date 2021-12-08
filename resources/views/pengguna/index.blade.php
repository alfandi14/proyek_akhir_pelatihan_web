@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <span>
                Pengguna
            </span>
            <div>
                <a href="{{ route('pengguna.create') }}" class="btn btn-primary">+</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <div class="form-group">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
                </div>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($penggunas as $item)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>
                                {{$item->nama}}
                            </td>
                            <td>
                                {{$item->umur}}
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('pengguna.edit', $item->id) }}" class="btn btn-success">Edit</a>
                                <a href="{{ route('pengguna.show', $item->id) }}" class="btn btn-warning mx-5">Show</a>
                                <form action="{{ route('pengguna.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapusnya ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection