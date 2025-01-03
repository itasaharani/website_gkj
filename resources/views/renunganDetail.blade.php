<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GKJ Sedayu</title>
  <meta name="description" content="GKJ Sedayu - Church Website">
  <meta name="keywords" content="GKJ Sedayu, Church, Religious, Yogyakarta, Indonesia">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">GKJ Sedayu</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle"><span>Profile Gereja</span></a>
            <ul>
              <li class="active"><a href="/sejarah">Sejarah Gereja</a></li>
              <li><a href="/visiMisi">Visi dan Misi</a></li>
              <li><a href="/struktur">Struktur</a></li>
              <li><a href="/#pendeta">Pendeta</a></li>
            </ul> 
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle"><span>Ibadah</span></a>
            <ul>
              <li><a href="/#schedule">Jadwal Ibadah</a></li>
              <li><a href="/renungan">Renungan Mingguan</a></li>
            </ul> 
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle"><span>Informasi</span></a>
            <ul>
              <li><a href="/#pengumumans">Pengumuman</a></li>
              <li><a href="/#contact">Contact & Feedback</a></li>
            </ul> 
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="btn-getstarted" href="/admin">Login Admin</a>

    </div>
</header>
<section>
  <main class="main">
    <div class="container mt-5">
      <center><h3 class="mb-4">Renungan Mingguan</h3></center>
      <div class="card border-0 shadow-sm p-4 rounded" style="background-color: #f9f9f9;">
        <div class="card-body text-center">
          <!-- Judul Renungan -->
          <h2 class="text-primary mb-3" style="font-weight: 700; font-family: 'Bodoni Moda', serif;">{{ $renungan->judul }}</h2>
          
          <!-- Ayat -->
          <p class="fst-italic text-secondary" style="font-size: 1.1rem;">"<strong>{{ $renungan->ayat }}</strong>"</p>
          
          <!-- Konten -->
          <p class="mt-4 text-dark" style="font-size: 1rem; line-height: 1.8;">
            {{ $renungan->konten }}
          </p>
          
          <!-- Penulis -->
          <p class="mt-3"><strong>Oleh:</strong> {{ $renungan->oleh }}</p>
          
          <!-- Tanggal -->
          <small class="text-muted d-block mt-2" style="font-style: italic;"> 
            {{ $renungan->tanggal ? $renungan->tanggal->format('d M Y') : 'Tanggal tidak tersedia' }}
          </small>
        </div>
      </div>
    </div>
  </main>
</section>
