@extends('layouts.app')

@section('title', 'Renungan Mingguan')

@section('content')
<main class="main">
    <div class="container mt-5">
        <h2 class="text-center">Renungan Mingguan</h2>
        <div class="row mt-4">
            @foreach ($renungan as $r)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('renungan.detail', $r->id) }}" class="text-decoration-none">
                        <div class="card shadow-sm h-100">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">{{ $r->judul }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted"><strong>Ayat:</strong> {{ $r->ayat }}</p>
            
                                <p class="text-truncate" style="max-width: 100%;">{{ Str::limit($r->konten, 100, '...') }}</p>

                                <p class="text-muted" style="font-size: 0.9rem;">{{ \Carbon\Carbon::parse($r->tanggal)->format('d F Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
