@extends('layouts.main')

@section('content')
<div class="container">
     <!-- Form Tambah Jadwal -->
     <h3>Tambah Jadwal Gereja Baru</h3>
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="location">Nama Lokasi</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Nama Lokasi" required>
        </div>
        <div class="form-group">
            <label for="week">Minggu ke</label>
            <select class="form-control" id="week" name="week" required>
                <option value="">Pilih Minggu</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
            </select>
        </div>
        <div class="form-group">
            <label for="time">Waktu Kebaktian</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="language">Bahasa Pengantar</label>
            <input type="text" class="form-control" id="language" name="language" placeholder="Bahasa Pengantar" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


</div>

<!-- Tambahkan Bootstrap dan FontAwesome JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@endsection
