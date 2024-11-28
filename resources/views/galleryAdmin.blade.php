@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Gallery Foto</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Link ke gambar dengan glightbox -->
                <a class="glightbox" data-gallery="images-gallery" href="{{ asset('storage/' . $photo->photo) }}">
                    <img src="{{ asset('storage/' . $photo->photo) }}" class="img-fluid" alt="Gallery Image">
                </a>
                <div class="card-body">
                    <!-- Tombol Edit -->
                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $photo->id }}">Edit</a>

                    <!-- Form Hapus Foto -->
                    <form action="{{ route('gallery.destroy', $photo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus foto ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Edit Foto -->
        <div class="modal fade" id="editModal{{ $photo->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $photo->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $photo->id }}">Edit Foto Gallery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('gallery.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="photo">Foto</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                            </div>
                            <div class="form-group mt-2">
                                <img src="{{ asset('storage/' . $photo->photo) }}" width="150" alt="Foto Lama">
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
    </div>
</div>
@endsection
