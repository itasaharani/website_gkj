@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Jadwal Gereja</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Tombol Tambah Jadwal -->
    <div class="mb-4">
        <a href="/tambahJadwal" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Tambah Jadwal Kebaktian
        </a>
    </div>

    <!-- Tampilkan Jadwal Berdasarkan Lokasi -->
    @php
        $groupedJadwals = $jadwals->groupBy('location');
    @endphp

    @foreach($groupedJadwals as $location => $jadwalsByLocation)
        <h3 class="mt-5">{{ $location }}</h3> <!-- Tampilkan Nama Lokasi -->

        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>Minggu</th>
                        <th>Pelayan Firman</th>
                        <th>Imam</th>
                        <th>Bahasa Pengantar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwalsByLocation as $jadwal)
                        <tr>
                            <td>{{ $jadwal->week }}</td>
                            <td>{{ $jadwal->pelayan_firman }}</td>
                            <td>{{ $jadwal->imam }}</td>
                            <td>{{ $jadwal->language }}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $jadwal->id }}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>

                                <!-- Tombol Hapus -->
                                <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?');">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit Jadwal -->
                        <div class="modal fade" id="editModal{{ $jadwal->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $jadwal->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel{{ $jadwal->id }}">Edit Jadwal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <!-- Input Lokasi -->
                                            <div class="form-group mb-3">
                                                <label for="location">Nama Lokasi</label>
                                                <input type="text" class="form-control" id="location" name="location" value="{{ $jadwal->location }}" required>
                                            </div>

                                            <!-- Input Minggu -->
                                            <div class="form-group mb-3">
                                                <label for="week">Minggu ke</label>
                                                <select class="form-control" id="week" name="week" required>
                                                    <option value="I" {{ $jadwal->week == 'I' ? 'selected' : '' }}>I</option>
                                                    <option value="II" {{ $jadwal->week == 'II' ? 'selected' : '' }}>II</option>
                                                    <option value="III" {{ $jadwal->week == 'III' ? 'selected' : '' }}>III</option>
                                                    <option value="IV" {{ $jadwal->week == 'IV' ? 'selected' : '' }}>IV</option>
                                                    <option value="V" {{ $jadwal->week == 'V' ? 'selected' : '' }}>V</option>
                                                </select>
                                            </div>

                                            <!-- Input Pelayan Firman -->
                                            <div class="form-group mb-3">
                                                <label for="pelayan_firman">Pelayan Firman</label>
                                                <input type="text" class="form-control" id="pelayan_firman" name="pelayan_firman" value="{{ $jadwal->pelayan_firman }}" required>
                                            </div>

                                            <!-- Input Imam -->
                                            <div class="form-group mb-3">
                                                <label for="imam">Imam</label>
                                                <input type="text" class="form-control" id="imam" name="imam" value="{{ $jadwal->imam }}" required>
                                            </div>

                                            <!-- Input Bahasa -->
                                            <div class="form-group mb-3">
                                                <label for="language">Bahasa Pengantar</label>
                                                <input type="text" class="form-control" id="language" name="language" value="{{ $jadwal->language }}" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</div>

<!-- Tambahkan Bootstrap dan FontAwesome JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@endsection
