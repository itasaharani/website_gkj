@extends('layouts.main')

@section('title', 'Kelola Renungan Mingguan')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Kelola Renungan Mingguan</h2>
    <a href="/renungancreate" class="btn btn-success mb-3"><i class="fas fa-plus-circle"></i>Tambah Renungan</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Ayat</th>
                <th>Konten</th>
                <th>Oleh</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($renungan as $r)
                <tr>
                    <td>{{ $r->judul }}</td>
                    <td>{{ $r->ayat }}</td>
                    <td>{{ Str::limit($r->konten, 50) }}</td>
                    <td>{{ $r->oleh }}</td>
                    <td>{{ $r->tanggal ? $r->tanggal->format('d/m/Y') : '-' }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="#" 
                           class="btn btn-warning btn-edit" 
                           data-id="{{ $r->id }}" 
                           data-judul="{{ $r->judul }}" 
                           data-ayat="{{ $r->ayat }}" 
                           data-konten="{{ $r->konten }}" 
                           data-oleh="{{ $r->oleh }}" 
                           data-tanggal="{{ $r->tanggal ? $r->tanggal->format('Y-m-d') : '' }}" 
                           data-url="{{ route('renungan.update', $r->id) }}" 
                           data-bs-toggle="modal" 
                           data-bs-target="#editRenunganModal">
                            Edit
                        </a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('renungan.destroy', $r->id) }}" method="POST" style="display:inline;">
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

<!-- Modal Edit Renungan -->
<div class="modal fade" id="editRenunganModal" tabindex="-1" aria-labelledby="editRenunganModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editRenunganForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editRenunganModalLabel">Edit Renungan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editJudul" class="form-label">Judul</label>
                        <input type="text" name="judul" id="editJudul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="editAyat" class="form-label">Ayat</label>
                        <input type="text" name="ayat" id="editAyat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="editKonten" class="form-label">Konten</label>
                        <textarea name="konten" id="editKonten" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editOleh" class="form-label">Oleh</label>
                        <input type="text" name="oleh" id="editOleh" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" id="editTanggal" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Tambahkan Bootstrap dan FontAwesome JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.btn-edit');
        const editForm = document.getElementById('editRenunganForm');
        const editJudul = document.getElementById('editJudul');
        const editAyat = document.getElementById('editAyat');
        const editKonten = document.getElementById('editKonten');
        const editOleh = document.getElementById('editOleh');
        const editTanggal = document.getElementById('editTanggal');

        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id = this.dataset.id;
                const judul = this.dataset.judul;
                const ayat = this.dataset.ayat;
                const konten = this.dataset.konten;
                const oleh = this.dataset.oleh;
                const tanggal = this.dataset.tanggal;
                const url = this.dataset.url;

                // Set data ke dalam modal
                editJudul.value = judul;
                editAyat.value = ayat;
                editKonten.value = konten;
                editOleh.value = oleh;
                editTanggal.value = tanggal;

                // Update action form dengan URL yang sesuai
                editForm.action = url;
            });
        });
    });
</script>
