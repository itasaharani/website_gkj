@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Pengumuman Admin</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tombol Tambah Pengumuman -->
    <div class="mb-4">
        <a href="{{ route('pengumuman.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Tambah Pengumuman
        </a>
    </div>

    <!-- Tabel Pengumuman -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Periode Hingga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengumumans as $pengumuman)
            <tr>
                <td>{{ $pengumuman->judul }}</td>
                <td>{{ $pengumuman->tanggal }}</td>
                <td>{{ $pengumuman->periode_hingga }}</td>
                <td>
                    <!-- Button untuk memunculkan modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPengumumanModal{{ $pengumuman->id }}">
                        Edit Pengumuman
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="editPengumumanModal{{ $pengumuman->id }}" tabindex="-1" aria-labelledby="editPengumumanModalLabel{{ $pengumuman->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPengumumanModalLabel{{ $pengumuman->id }}">Edit Pengumuman</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="judul">Judul</label>
                                            <input type="text" name="judul" id="judul" class="form-control" value="{{ $pengumuman->judul }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="konten">Konten</label>
                                            <textarea name="konten" id="konten" class="form-control" required>{{ $pengumuman->konten }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal Pengumuman</label>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $pengumuman->tanggal }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="periode_hingga">Periode Hingga</label>
                                            <input type="date" name="periode_hingga" id="periode_hingga" class="form-control" value="{{ $pengumuman->periode_hingga }}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Form Hapus Pengumuman -->
                    <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Tambahkan Bootstrap JS dan FontAwesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection
