@extends('layouts.app')
@section('title','Profile Gereja')
@section('content')

<style>
    @media print {
      /* Hilangkan elemen yang tidak diperlukan saat dicetak */
      .btn-cetak, nav, footer {
        display: none;
      }

      /* Mengatur margin halaman cetak menjadi nol */
      @page {
        margin-top: ;: 5px;
      }

      /* Menghapus margin body untuk cetak */
      body {
        margin: 5px;
      }
    }
  </style>

<main>

  <section class="sejarah">
  <div class="container" data-aos="fade-up"> <!-- Ubah margin-top dari 5 ke 10px -->
    <div class="row gy-4 justify-content-center">
      
      <!-- Tombol Cetak -->
      <div class="text-left"> <!-- Mengurangi jarak atas tombol cetak -->
        <button class="btn btn-primary btn-cetak" onclick="window.print()" style="background-color: #28a745; color: white;">
          <i class="fas fa-print"></i> 
        </button>
      </div>

       <center><h2 style="font-weight: bold;">Sejarah GKJ Sedayu</h2></center>
      <div class="col-lg-12">
        <h2 style="font-weight: bold;">Pra Pendewasaan</h2>
      <p style="text-align: justify;" >Nama GKJ Sedayu ketika masih pepanthan dari GKJ Rewulu adalah GKJ Rewulu pepanthan Sedayu bersama dengan pepanthan Sengon, pepanthan Kaliurang, dan pepanthan Sungapan. Ketika masih GKJ Rewulu pepanthan Sedayu, dapat dianalogikan sebagai kepompong. Oleh sebab itu, kesejarahan GKJ Sedayu tidak terlepas dari kesejarahan GKJ Rewulu, untuk itu perlu diketahui juga secara singkat tentang GKJ Rewulu yang ada hubungannya dengan GKJ Sedayu.</p>
        <p style="text-align: justify;" >Awal pekabaran injil di GKJ Rewulu adalah pada tahun 1918 yang dilakukan oleh Tn. Thomas Vandervein, yang adalah seorang sinder pabrik gula Rewulu. Tn. Thomas Vandervein pertama kali melakukan pekabaran injil kepada 7 orang buruh pabrik. Pekabaran injil yang dilakukan oleh Tn. Thomas Vandervein berjalan kurang aktif setelah istrinya meninggal, kemudian tugas tersebut diteruskan oleh seorang pendeta berkebangsaan Belanda yang bernama Pdt. Domunne Peter Annlar. Seiring berjalannya waktu, pabrik gula Rewulu mengalami kebangkrutan sehingga para buruh dipindahkan ke daerah Jebugan. Jemaat yang menjadi cikal bakal GKJ Rewulu di antaranya bapak Karso Dikromo, bapak Kerto Wiharjo, bapak Mangun Pawiro, bapak Wijo Sudarmo, bapak Karyodiyono, bapak Senuk, bapak Wongso Darmo, bapak Wiro Dikromo, dan ibu Taruna Jaya.</p>
        <p style="text-align: justify;" >Pada saat itu jemaat tersebut belum dapat bediri sendiri sehingga masih berada dalam binaan GKJ Gondokusuman Yogyakarta. Pada tahun 1920, GKJ Gondokusuman mengutus seorang guru Injil untuk menggembalakan jemaat di Rewulu, yaitu bapak Cokro Atmodjo. Dalam pekabaran Injil di Rewulu, bapak Cokro Atmodjo menggunakan kesenian daerah seperti wayang, karawitan, dan tari-tarian sebagai sarana pekabaran Injil. Pekabaran Injil juga dilakukan dengan membuka Sekolah Minggu (Sunday School) di sekolah Zending Vorvolk School (Sekolah Dasar).  Sejak dibina oleh bapak Cokro Atmodjo jemaat GKJ Rewulu mulai berkembang baik dari segi kualitas maupun kuantitas.</p>
        <p style="text-align: justify;" >NPada tahun 1927 didirikan gedung gereja dengan dinding bambu di Dusun Gancahan V, Sidomulyo, Godean, yang sebelumnya peribadatan dilaksanakan di rumah Tn. Thomas Vandervein yang terletak didusun Pirak Bulus, Sidomulyo, Godean. Pada tahun 1929 gedung gereja diperbaharui menjadi dinding tembok. Pada saat itu nama gereja terkenal dengan nama Gereja Sawo karena di depan gereja terdapat pohon sawo yang besar. </p>
        <p>Pada tahun 1939, bapak Cokro Atmodjo pindah tugas ke GKJ Wates sehingga pekabaran injil dilanjutkan oleh bapak Adam Thomas yang berasal dari Wonosari dan bapak Darno Wasito.  Pada tahun 1940 didirikanlah gedung gereja secara permanen dengan memugar tempat ibadah yang pertama di dusun Gancahan V dan sekaligus menjadi pepanthan GKJ Ngento-ento. Pada tanggal 1 Januari 1960 GKJ Ngento-ento mendewasakan pepanthan Rewulu dengan nama GKJ Rewulu.</p>
        <p style="text-align: justify;" >Awal pertumbuhan GKJ Sedayu (GKJ Rewulu Pepanthan Sedayu) dimulai pada sekitar tahun 1935-1942 di Dusun Sundi Kidul, Kalurahan Argorejo, Kecamatan Sedayu. Perintisnya adalah bapak R. Niti Suwiryo dengan anaknya bapak Pardi Martohardjono dibantu oleh bapak R. Cokro Atmodjo dan bapak Adam Thomas dari GKJ Rewulu. Berhubung Bapak Pardi Martohardjono pindah ke Ngulakan, Wates, maka pelayanan digantikan oleh bapak R. Widyo Suwiryo dari Patangpuluhan, Yogyakarta. Adapun Pendeta yang melayani pada waktu itu masih berkebangsaan Belanda bernama Pendeta Van Renen. Karena kondisi sosial politik saat itu yang tidak memungkinkan untuk mengadakan kegiatan kebaktian, maka kebaktian terpaksa terhenti untuk beberapa waktu. Baru kemudian pada tahun 1950, kebaktian diadakan lagi di rumah keluarga Ibu Wonosentono, di Dusun Sundi Kidul, Argorejo, Sedayu, dengan diikuti oleh keluarga Ngabei Pawirodihardjo, keluarga Sastro Suwito, keluarga Mardi Sentono, dan beberapa orang sekitarnya, yang dilayani oleh bapak Pendeta Siswodwidjo dari GKJ Ngento-ento. </p>
        <p style="text-align: justify;"  >Pada tahun 1962-1966, kebaktian dipindahkan ke dusun Purwomarto, di rumah ibu Sastro Suwita, didukung para pemuda dan pemudi yang dibina oleh bapak Pendeta Siswondo serta majelis GKJ Rewulu bapak Adi Prasetyo, kebaktian pada awalnya hanya dimulai dengan 5 keluarga, yaitu keluarga ibu Sastro Suwito, ibu Wonosentono, bapak Edy Pracoyo, bapak Wakiyat, dan bapak Mardi Sentono. Mulai tahun 1967-1968, dengan semakin bertambahnya warga jemaat, kebaktian dipindahkan lagi ke tempat yang lebih luas yaitu di Pendopo rumah almarhum dr. Bambang Soewito yang terletak di sebelah timur rumah ibu Sastro Suwito. Ini semua terselenggara berkat prakarsa bapak R. Soemono. Majelis gereja saat itui adalah bapak Edy Pracoyo, bapak Wakiyat, bapak Mardi Sentono, dan dibantu majelis dari GKJ Rewulu yaitu bapak Sayid, bapak Noto Atmodjo, bapak Karto Utomo, dan lain-lain, dengan pendeta bapak Siswondo dari GKJ Rewulu. Koster GKJ Rewulu pepanthan Sedayu yang pertama adalah bapak Cokro Sumarto.</p>
        <p style="text-align: justify;" >Pada tahun 1969, bapak Pendeta Siswondo pindah untuk melayani di GKJ Karanganyar, Surakarta. Kemudian pelayanan dilanjutkan oleh bapak Asa Wakijan (Guru Agama dari PGAAK Yogyakarta) dibantu oleh ibu Boniathun sebagai guru Sekolah Minggu, dan majelis gereja setempat. Pada saat itu jumlah warga jemaat GKJ Rewulu Pepanthan Sedayu mengalami pertumbuhan yang cukup besar dengan adanya baptisan massal sekitar 75 orang dari wilayah Kecamatan Sedayu hasil binaan bapak Hadiwidjaja selaku pimpinan diakonia umum Yogyakarta, serta hasil pelayanan dari bapak Asa Wakijan. Hamba Tuhan yang melayani baptisan massal tersebut adalah bapak Pendeta Sardjuki S.Th. dari GKJ Gondokusuman, Yogyakarta.</p>
        <p style="text-align: justify;" >Salah satu keputusan yang sangat penting bagi umat Kristen di kecamatan Sedayu adalah Keputusan Sidang Pleno DPRKGR Kelurahan Argorejo yang memberikan hak penggunaan tanah kas desa kelurahan Argorejo seluas 500 m2 (yang dipakai sebagai koplakan itu) yang terletak di dusun Purwomarto untuk digunakan sebagai gedung gereja. Itu semua terlaksana berkat campur tangan Tuhan Allah Bapa lewat bapak dan ibu Yudo Atmodjo melalui perjuangan yang gigih di DPRKGR selaku wakil ketua dan anggota Parkindo sejak tahun 1963.</p>
        <p style="text-align: justify;" >Sejak saat itu dimulailah pembangunan gedung gereja yang sebagian besar biaya dan tenaganya dilakukan secara gotong royong oleh warga jemaat setempat dan dibantu oleh pemuda dari klasis Yogyakarta Barat serta siswa PGAAK Yogyakarta. Pembangunan dimulai dengan pengurukan tanah sedalam 2 meter yang yang dipakai sebagai tempat penampungan kotoran sapi dan kerbau yang disebut Koplakan.</p>
        <p style="text-align: justify;" >Proses inilah yang dianalogikan sebagai proses metamorphosis dalam fase kepompong. Selanjutnya kepompong bukan akhir dari proses metamorphosis. Kepompong harus menetas menjadi kupu-kupu untuk menjalani kehidupan selanjutnya sebagai analogi dari GKJ Rewulu Pepanthan Sedayu menjadi dewasa lalu menjadi GKJ Sedayu, menjadi gereja yang dewasa dan mandiri.</p>
        </div>

      <!-- Konten Pendewasaan -->
      <div class="col-lg-12">
      <h2 style="font-weight: bold;">Pendewasaan</h2>
        <p style="text-align: justify;"> Pada tahun 1975 keadaan jemaat GKJ Rewulu Pepanthan Sedayu semakin tumbuh dan berkembang berkat pelayanan yang gigih dari beberapa warga jemaat dengan Ketua Majelis pada saat itu Bapak Drs. Soemono, serta tambahan tenaga pelayanan Bapak Drs. Widjongko hingga tahun 1989 menjelang pendewasaan. Kemudian tanggal 31 Oktober 1990 GKJ Rewulu Pepanthan Sedayu didewasakan oleh GKJ Rewulu menjadi GKJ Sedayu dengan 3 pepanthan yaitu: (1) Pepanthan Sungapan; (2) Pepanthan Sengon (Samben, Puluhan ); dan (3) Pepanthan Kaliurang. </p>
        <p style="text-align: justify;"> Selama lebih kurang 6 tahun sejak didewasakan GKJ Sedayu dilayani oleh Pendeta Konsulen bapak Pendeta Soetikno dari GKJ Medari. Atas berkat Tuhan Yang Maha Kasih serta bimbingan dari bapak Pendeta Soetikno maka pada hari Sabtu Legi tanggal 2 Nopember 1996 telah ditahbiskan bapak R. Wiji Santosa, STh. sebagai pendeta GKJ Sedayu yang pertama. GKJ Sedayu dengan jumlah Majelis 13 orang dan jumlah warga dewasa ± 465. Inilah proses lahirnya GKJ Sedayu menjadi gereja yang dewasa dan mandiri bersama-sama dengan pepanthannya. . </p>
        <p style="text-align: justify;"> GKJ Sedayu yang dilayani oleh bapak Pendeta R Wiji Santoso S.Th memiliki beberapa wilayah yang mengadakan sarasehan atau pemahaman alkitab yaitu Purwomarto, Sundi, Sengon Samben, Sengon Puluhan, Griya Kencana Permai, Sedayu Permai, Sungapan Demangan, dan Kaliurang yang meliputi Pedes, Kaliurang, Karanglo serta Panggang. Selain kegiatan di kelompok masing-masing, juga diadakan kegiatan bersama seperti PA yang terpusat, Sekolah Minggu gabungan. . </p>
        <p style="text-align: justify;"> Dalam perjalanan pelayanan, GKJ Sedayu juga ikut andil dalam nguri-nguri kebudayaan setempat, seperti mocopat, karawitan, gejog lesung, dan keroncong. GKJ Sedayu dalam program kerjanya mengadakan pelayanan kesehatan yang dilakukan oleh warga jemaat yang mempunyai latarbelakang pendidikan kesehatan. . </p>
        <p style="text-align: justify;">Komisi-komisi yang ada di GKJ Sedayu membantu tugas pelayanan antara lain: Komisi Liturgi, Komisi Seni Budaya, Komisi Paduan Suara, Komisi Anak, Komisi Pra Remaja-Remaja-Pemuda, Komisi Warga Dewasa-lansia, Komisi Rumah Tangga dan Pembangunan, Komisi Pelayanan Umum/ Diakonia yang meliputi Pralenan, Pemberdayaan Warga dan Wanita, Kesehatan, Pemerhati (warga rimatan). </p>
        <p style="text-align: justify;"> Pada tahun 2015, Tuhan memakai bapak Pdt. R Wiji Sansoto, S.Th untuk melayani di aras pelayanan yang lebih luas, dan dipanggil untuk menjadi PPK (Pendeta Pelayan Khusus) di Sinode GKJ. Untuk itu pada tahun 2016, GKJ Sedayu mempunyai keinginan untuk memiliki pendeta yang melayani penuh waktu di GKJ Sedayu, sehingga membentuk program pemanggilan pendeta ke-2 dan pada tanggal 7 Maret 2019 GKJ Sedayu menahbiskan pendeta ke-2 yaitu Pdt, Surono, S.Th. </p>
      </div>
    </div>

   
  </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection
