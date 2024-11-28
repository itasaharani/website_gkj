@extends('layouts.main')
@section('title','Tambah Pengumuman')
@section('content')
    <h2>Buat Pengumuman Baru</h2>
    <form action="{{ route('pengumuman.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="konten">Konten</label>
            <textarea name="konten" id="konten" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Pengumuman</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="periode_hingga">Periode Hingga</label>
            <input type="date" name="periode_hingga" id="periode_hingga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
