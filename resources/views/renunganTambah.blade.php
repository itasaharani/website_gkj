@extends('layouts.main')

@section('title', 'Tambah Renungan Mingguan')

@section('content')
<main class="main">
    <div class="container mt-5">
        <h2 class="text-center">Tambah Renungan Mingguan</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('renungan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Renungan" required>
            </div>
            <div class="mb-3">
                <label for="ayat" class="form-label">Ayat</label>
                <input type="text" name="ayat" id="ayat" class="form-control" placeholder="Masukkan Ayat Renungan" required>
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <textarea name="konten" id="konten" class="form-control" rows="5" placeholder="Masukkan Isi Renungan" required></textarea>
            </div>
            <div class="mb-3">
                <label for="oleh" class="form-label">Oleh</label>
                <input type="text" name="oleh" id="oleh" class="form-control" placeholder="Masukkan Nama Penulis Renungan" required>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Simpan Renungan</button>
            </div>
        </form>
    </div>
</main>
@endsection
