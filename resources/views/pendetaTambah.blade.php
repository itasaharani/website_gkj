@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Tambah Pendeta</h1>

    <form action="{{ route('pendeta.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama Pendeta</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama pendeta" required>
        </div>

        <div class="form-group mt-2">
            <label for="photo">Foto Pendeta</label>
            <input type="file" class="form-control" id="photo" name="photo" required>
            <small class="form-text text-muted">Pilih foto pendeta (gambar .jpg, .jpeg, .png, maksimal 2MB)</small>
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Tambah Pendeta</button>
            <a href="{{ route('pendeta.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection
