@extends('layouts.app')
@section('title', 'Visi dan Misi')

@section('content')
<style>
    @media print {
        body {
            margin: 0; /* Menghilangkan margin */
            padding: 0; /* Menghilangkan padding */
            color: #000; /* Mengatur warna teks menjadi hitam untuk cetakan */
        }

        .main {
            background-color: #fff; /* Mengatur latar belakang menjadi putih untuk cetakan */
        }

        .btn {
            display: none; /* Sembunyikan tombol cetak pada tampilan cetak */
        }

        /* Sesuaikan ukuran font atau elemen lainnya jika perlu */
        h2 {
            font-size: 24px; /* Ukuran font yang lebih besar saat dicetak */
        }

        .card {
            page-break-inside: avoid; /* Mencegah pemisahan kartu saat mencetak */
        }
    }
</style>
<main class="main">
    <div class="container mt-5">
    <div class="text-left"> <!-- Mengurangi jarak atas tombol cetak -->
        <button class="btn btn-primary btn-cetak" onclick="window.print()" style="background-color: #28a745; color: white;">
          <i class="fas fa-print"></i> 
        </button>
      </div>
        <h2 class="text-center mb-4">Visi dan Misi GKJ Sedayu</h2>

        <div class="card mb-4">
            <div class="card-body">
                <h4 class="card-title">Visi</h4>
                <p class="card-text">
                    Tumbuh Bersama Mewujudkan Damai Sejahtera 
                    (Kolose 2:7; Yesaya 37:31; Yeremia 29:11).
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Misi</h4>
                <ol class="card-text">
                    <li>
                        Mewujudkan Iman dan kasih Kristus
                        <ul>
                            <li>Melaksanakan pelayanan gerejawi berbasis kebutuhan warga gereja</li>
                            <li>Meningkatkan perhatian dan pelayanan antar warga gereja dengan saling asah, asih, dan asuh</li>
                        </ul>
                    </li>
                    <li>
                        Mewujudkan Kesejahteraan Warga Jemaat
                        <ul>
                            <li>Meningkatkan kesehatan warga gereja</li>
                            <li>Meningkatkan perekonomian warga gereja</li>
                            <li>Membantu peningkatan pendidikan warga gereja</li>
                            <li>Meningkatkan peran serta budaya dalam ibadah</li>
                        </ul>
                    </li>
                    <li>
                        Mewujudkan Gereja yang Bersaksi dan Berkarya di Tengah Masyarakat
                        <ul>
                            <li>Mendorong warga gereja berperan aktif di masyarakat</li>
                            <li>Membekali warga gereja menjadi pelopor perdamaian</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</main>
@endsection

<!-- Tambahkan CSS Kustom -->
<style>
    .main {
        background-color: #f8f9fa; /* Latar belakang abu-abu terang */
        padding: 20px;
    }

    h2 {
        font-weight: bold; /* Mengatur ketebalan font */
        color: #343a40; /* Warna teks gelap */
    }

    .card {
        border: none; /* Menghilangkan border */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        border-radius: 8px; /* Sudut yang membulat */
    }

    .card-title {
        color: #007bff; /* Warna teks biru untuk judul */
    }

    .card-text {
        font-size: 16px; /* Ukuran font untuk teks */
        line-height: 1.6; /* Jarak antar baris */
    }

    ol {
        margin-left: 20px; /* Margin untuk daftar */
    }
</style>
