@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Daftar Pendeta</h1>
    <a href="/pendetaTambah" class="btn btn-primary mb-3">Tambah Pendeta</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendetas as $pendeta)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pendeta->name }}</td>
                <td><img src="{{ asset('storage/' . $pendeta->photo) }}" width="100" alt="Foto Pendeta"></td>
                <td>
                    <!-- Tombol untuk membuka modal edit -->
                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $pendeta->id }}">Edit</a>

                    <!-- Form Hapus Pendeta -->
                    <form action="{{ route('pendeta.destroy', $pendeta->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus pendeta ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Edit untuk setiap pendeta -->
@foreach ($pendetas as $pendeta)
<div class="modal fade" id="editModal{{ $pendeta->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $pendeta->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $pendeta->id }}">Edit Pendeta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form untuk edit pendeta -->
                <form action="{{ route('pendeta.update', $pendeta->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama Pendeta</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $pendeta->name }}" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="photo">Foto Pendeta</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                        <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                    </div>

                    <div class="form-group mt-2">
                        <img src="{{ asset('storage/' . $pendeta->photo) }}" width="150" alt="Foto Pendeta">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
