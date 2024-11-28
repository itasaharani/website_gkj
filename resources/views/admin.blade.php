@extends('layouts.main')
@section('title','Home Admin')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Dashboard Admin</h1>
    <div class="row g-4">
        <!-- Card Pengumuman -->
        <div class="col-md-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="mdi mdi-newspaper display-4"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Pengumuman</h5>
                        <p class="fs-3 fw-bold">{{ $totalPengumuman }}</p>
                        <p class="mb-0">Pengumuman terbaru</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Feedback -->
        <div class="col-md-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="mdi mdi-comment-outline display-4"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Feedback</h5>
                        <p class="fs-3 fw-bold">{{ $totalFeedback }}</p>
                        <p class="mb-0">Feedback terbaru</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Renungan -->
        <div class="col-md-4">
            <div class="card bg-info text-white shadow">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="mdi mdi-book-open-page-variant display-4"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Renungan Mingguan</h5>
                        <p class="fs-3 fw-bold">{{ $totalRenungan }}</p>
                        <p class="mb-0">Renungan minggu ini</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
