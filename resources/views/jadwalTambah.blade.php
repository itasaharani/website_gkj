@extends('layouts.main')

@section('content')
<div class="container">
    <h3>Tambah Jadwal Gereja Baru</h3>

    <!-- Tampilkan pesan error jika ada -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Tambah Jadwal -->
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="location">Nama Lokasi</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Masukkan Nama Lokasi" maxlength="50" required>
        </div>

        <div class="form-group mb-3">
            <label for="week">Minggu ke</label>
            <select class="form-control" id="week" name="week" required>
                <option value="" disabled selected>Pilih Minggu</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="pelayan_firman">Pelayan Firman</label>
            <input type="text" class="form-control" id="pelayan_firman" name="pelayan_firman" placeholder="Masukkan Nama Pelayan Firman" maxlength="100" required>
        </div>

        <div class="form-group mb-3">
            <label for="imam">Imam</label>
            <input type="text" class="form-control" id="imam" name="imam" placeholder="Masukkan Nama Imam" maxlength="50" required>
        </div>

        <div class="form-group mb-3">
            <label for="language">Bahasa Pengantar</label>
            <input type="text" class="form-control" id="language" name="language" placeholder="Masukkan Bahasa Pengantar" maxlength="20" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<!-- Tambahkan Bootstrap dan FontAwesome JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@endsection
