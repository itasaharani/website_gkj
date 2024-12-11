@extends('layouts.app')
@section('title','Home')
@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Selamat datang di situs resmi GKJ Sedayu!</h1>
            <p data-aos="fade-up" data-aos-delay="100"> Kami senang Anda berkunjung. Temukan informasi dan kegiatan terbaru di sini.</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
             
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="https://i0.wp.com/sinodegkj.or.id/wp-content/uploads/2023/01/kisspng-san-sebastian-church-bible-christian-church-gospel-church-vector-5ad95549581590.0892014715241925853608.png?fit=350%2C350&ssl=1" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background" >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p><span>Learn More</span> <span class="description-title">About Us</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/gkj.jpg" class="img-fluid mb-4" alt="">
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              Tentang GKJ Rewulu
              GKJ Rewulu, yang berdiri sejak 1918, bermula dari pekabaran Injil oleh Tn. Thomas Vandervein kepada buruh Pabrik Gula Rewulu. Dengan pertumbuhan jemaat yang pesat, gereja ini resmi berdiri sendiri pada tahun 1960. Mengusung tradisi budaya dalam pelayanan, GKJ Rewulu menggunakan kesenian daerah seperti wayang dan karawitan sebagai media pekabaran Injil, sambil terus berkomitmen pada pelayanan komunitas.
              </p>
              <a href="/sejarah" class="text-decoration-underline">Klik di sini untuk mengetahui lebih lanjut tentang Sejarah GKJ Rewulu</a>.
    
                <!-- <li><i class="bi bi-check-circle-fill"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li> -->
                
             

              <div class="position-relative mt-4">
                <img src="https://img.youtube.com/vi/myluY9z4-zA/maxresdefault.jpg" class="img-fluid" alt="YouTube Video">
                <a href="https://youtu.be/myluY9z4-zA" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


    <section id="pendeta" class="pendeta section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
    <h2>Pendeta Gereja</h2>
    <p><span>Pendeta</span> <span class="description-title">Di GKJ Sedayu<br></span></p>
</div><!-- End Section Title -->

<div class="container">
    <div class="row justify-content-center gy-4">

        @foreach($pendetas as $pendeta)
            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <!-- Pastikan foto menggunakan path yang benar dari storage/public -->
                        <img src="{{ asset('storage/' . $pendeta->photo) }}" class="img-fluid" alt="Foto Pendeta">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3>{{ $pendeta->name }}</h3>
                        <span>Pendeta</span>
                    </div>
                </div>
            </div><!-- End Chef Team Member -->
        @endforeach

    </div>
</div>

</section><!-- /pendeta Section -->



   <!-- Schedule Section -->
   <section id="schedule" class="schedule section light-background">
    <!-- Section Title -->
    <div class="container section-title text-center" data-aos="fade-up">
        <h2>Jadwal Gereja</h2>
        <p><span>Lihat</span> <span class="description-title">Jadwal Kebaktian Gereja</span></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            @foreach($jadwals->groupBy('location') as $location => $jadwalsByLocation)
            <div class="col-md-6 mb-4">
                <div class="card text-dark bg-light">
                    <div class="card-header text-center" style="background-color: #ECF5FA; color: #5B9BD5;">
                        <strong>{{ $location }}</strong>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-muted mb-3">Ibadah dimulai pukul <strong>07:00</strong></p>
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Pelayan Firman</th>
                                    <th scope="col">Imam</th>
                                    <th scope="col">Pengantar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jadwalsByLocation as $jadwal)
                                <tr>
                                    <td>{{ $jadwal->week }}</td>
                                    <td>{{ $jadwal->date }}</td>
                                    <td>{{ $jadwal->pelayan_firman }}</td>
                                    <td>{{ $jadwal->imam }}</td>
                                    <td>{{ $jadwal->language }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- /Schedule Section -->


<!-- pengumumans Section -->
<section id="pengumumans" class="pengumumans section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Pengumuman</h2>
        <p>Pengumuman <span class="description-title">Terbaru</span></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Check if there are pengumumans -->
        @if($pengumumans->isEmpty())
            <p>Tidak ada pengumuman yang tersedia.</p>
        @else
            <div class="row gy-4 justify-content-center">
                @foreach ($pengumumans as $pengumuman)
                    <div class="col-lg-4">
                        <div class="pengumuman-item">
                            <div class="pengumuman-content">
                                <h3>{{ $pengumuman->judul }}</h3>
                                <p>{{ Str::limit($pengumuman->konten, 100) }}</p>
                                <a href="{{ route('pengumuman.show', $pengumuman->id) }}" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section><!-- End pengumumans Section -->



<!-- <section id="gallery" class="gallery section light-background">


<div class="container section-title" data-aos="fade-up">
  <h2>Gallery</h2>
  <p><span>Dokumentasi</span> <span class="description-title">Kegiatan Gereja</span></p>
</div>

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "centeredSlides": true,
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 0
          },
          "768": {
            "slidesPerView": 3,
            "spaceBetween": 20
          },
          "1200": {
            "slidesPerView": 5,
            "spaceBetween": 20
          }
        }
      }
    </script>
    <div class="swiper-wrapper align-items-center">
      @foreach ($photos as $photo)
        <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="{{ asset('storage/' . $photo->photo) }}">
            <img src="{{ asset('storage/' . $photo->photo) }}" class="img-fluid" alt="Gallery Image">
          </a>
        </div>
      @endforeach
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section>allery Section -->



    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
          <iframe style="width: 100%; height: 400px; border: 5px solid #ffffff;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1dxxxxx!2d110.2573779!3d-7.8137539!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af9f5a436412f:0xf6a7467d94b4e6e4!2sGKJ+Sedayu!5e0!3m2!1sid!2sid!4vxxxxxx" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Wates KM. 12, Kalakan, Purwomarto, Argorejo, Sedayu, Bantul, Yogyakarta</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 813 2622 8120</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>gkjsedayu@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Mon-Fri</strong> 8.00 AM - 2.00 PM || <strong>Sat:</strong> 9.00 AM - 1.00 PM ||
                <strong>Sun:</strong> 7.00 AM - 9.00 AM </p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="{{ route('feedback.store') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
        @csrf
          <div class="row gy-4">
          <strong><h2>Help us improve! Share your feedback with us</h2></strong>
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name, anonim its okay" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>
  @endsection

  