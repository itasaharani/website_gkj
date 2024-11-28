@extends('layouts.main')

@section('title', 'Edit Struktur Organisasi')

@section('content')
<main class="main">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Struktur Organisasi</h2>
        
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <div class="row">
            <!-- Left Column for Ketua, Sekretaris & Bendahara, and Bidang -->
            <div class="col-md-6">
                <div class="row">
                    <!-- Tabel Ketua -->
                    <div class="col-md-12 mb-4">
                        <h3>Ketua</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ketua as $k)
                                    <tr>
                                        <td>{{ $k->jabatan }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editKetuaModal{{ $k->id }}">Edit</button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Ketua -->
                                    <div class="modal fade" id="editKetuaModal{{ $k->id }}" tabindex="-1" aria-labelledby="editKetuaModalLabel{{ $k->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editKetuaModalLabel{{ $k->id }}">Edit Ketua</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('updateKetua', $k->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="nama">Nama Ketua:</label>
                                                            <input type="text" name="nama" class="form-control" value="{{ $k->nama }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jabatan">Jabatan Ketua:</label>
                                                            <input type="text" name="jabatan" class="form-control" value="{{ $k->jabatan }}" readonly>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update Ketua</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabel Sekretaris & Bendahara -->
                    <div class="col-md-12 mb-4">
                        <h3>Sekretaris & Bendahara</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ketua</th>
                                    <th>Sekretaris</th>
                                    <th>Bendahara</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sekretarisBendahara as $sb)
                                    <tr>
                                        <td>{{ $sb->ketua->nama }}</td>
                                        <td>{{ $sb->sekretaris }}</td>
                                        <td>{{ $sb->bendahara }}</td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editSekretarisBendaharaModal{{ $sb->id }}">Edit</button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Sekretaris & Bendahara -->
                                    <div class="modal fade" id="editSekretarisBendaharaModal{{ $sb->id }}" tabindex="-1" aria-labelledby="editSekretarisBendaharaModalLabel{{ $sb->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editSekretarisBendaharaModalLabel{{ $sb->id }}">Edit Sekretaris & Bendahara</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('updateSekretarisBendahara', $sb->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="sekretaris">Sekretaris:</label>
                                                            <input type="text" name="sekretaris" class="form-control" value="{{ $sb->sekretaris }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="bendahara">Bendahara:</label>
                                                            <input type="text" name="bendahara" class="form-control" value="{{ $sb->bendahara }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update Sekretaris & Bendahara</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabel Bidang -->
                    <div class="col-md-12">
                        <h3>Bidang</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Bidang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bidang as $b)
                                    <tr>
                                        <td>{{ $b->nama_bidang }}</td>
                                        <td>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBidangModal{{ $b->id }}">Edit</button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Bidang -->
                                    <div class="modal fade" id="editBidangModal{{ $b->id }}" tabindex="-1" aria-labelledby="editBidangModalLabel{{ $b->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editBidangModalLabel{{ $b->id }}">Edit Bidang</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('updateBidang', $b->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="nama_bidang">Nama Bidang:</label>
                                                            <input type="text" name="nama_bidang" class="form-control" value="{{ $b->nama_bidang }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update Bidang</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Right Column for Komisi -->
            <div class="col-md-6">
                <!-- Tabel Komisi -->
                <h3>Komisi</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Komisi</th>
                            <th>Anggota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($komisi as $k)
                            <tr>
                                <td>{{ $k->nama_komisi }}</td>
                                <td>{{ $k->anggota }}</td>
                                <td>
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editKomisiModal{{ $k->id }}">Edit</button>
                                </td>
                            </tr>

                            <!-- Modal Edit Komisi -->
                            <div class="modal fade" id="editKomisiModal{{ $k->id }}" tabindex="-1" aria-labelledby="editKomisiModalLabel{{ $k->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editKomisiModalLabel{{ $k->id }}">Edit Komisi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('updateKomisi', $k->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="nama_komisi">Nama Komisi:</label>
                                                    <input type="text" name="nama_komisi" class="form-control" value="{{ $k->nama_komisi }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="anggota">Anggota:</label>
                                                    <input type="text" name="anggota" class="form-control" value="{{ $k->anggota }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Update Komisi</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
