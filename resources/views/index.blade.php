<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @auth
  <title>Admin RPL | SMKN 4 Malang</title>
  @else
  <title>RPL | SMKN 4 Malang</title>
  @endauth
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icon -->
  <script src="https://code.iconify.design/3/3.0.1/iconify.min.js"></script>
  
  <!-- Favicons -->
  <link href="assets/img/backgorund-logo.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  @include('include.header')

  @auth

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
      <div class="opa">
          <div id="carouselExampleInterval" class="carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2500">
                  <div class="img" style="background-image: url(https://i0.wp.com/smkn4malang.sch.id/wp-content/uploads/2021/09/IMG20210503112245-scaled-e1632381195678.jpg?fit=2560%2C1075&ssl=1)"></div>
              </div>
              <div class="carousel-item" data-bs-interval="2500">
                  <div class="img" style="background-image: url(https://i0.wp.com/smkn4malang.sch.id/wp-content/uploads/2022/09/WhatsApp-Image-2022-09-28-at-09.16.19.jpeg?fit=1280%2C960&ssl=1)"></div>
              </div>
              <div class="carousel-item" data-bs-interval="2500">
                  <div class="img" style="background-image: url(https://smkn4malang.sch.id/wp-content/uploads/2020/03/2019_02_11_Sejarah-SMK-Negeri-4-Malang-yang-Lahir-dari-Tangan-Keuskupan-Malang.jpg);"></div>
              </div>
              </div>
              <div class="hai">
                  <div class="po">
                      <h1>Selamat Datang Di Website</h1>
                      <p>RPL Area SMKN 4 Malang</p>
                  </div>
              </div>
          </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="section-title">
            <h2>Apa itu RPL?</h2>
            <h5>
              <textarea name="" id="" cols="100" rows="5">
                Program keahlian yang mempersiapkan siswa menjadi tenaga terampil di bidang pemrogaman software. Siswa di bekali kemampuan dasar instalasi hardware dan software komputer, penguasaan bahasa pemrogaman (C++, Java, Python, JavaScript, PHP dsb), dan pengolahan database (Microsoft Acces, MySQL, dsb.)
              </textarea>
            </h5>
          </div>

          <div class="row content">
                <div class="col-lg-6">
              <a href="#materi" class="btn-learn-more">Materi</a>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->

      <!-- ======= materi Section ======= -->
      <section id="materi" class="services">  
        <div class="container">

          <div class="section-title">
            <h2>Materi</h2>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-palette"></i></div>
                <h4><a href="">UI/UX</a></h4>
                <p>Mengenalkan peserta didik dalam pembuatan desain aplikasi ataupun website yang sesuai dengan kebutuhan</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-laptop"></i></div>
                <h4><a href="">Web Development</a></h4>
                <p>Mengenalkan peserta didik dalam pemahaman dan pembuatan website</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box p">
                <div class="icon"><i class="bi bi-phone"></i></div>
                <h4><a href="">Mobile Development</a></h4>
                <p>Siswa diajarkan untuk membuat aplikasi yang kreatif dan inovatif</p>
              </div>
            </div>

            
          </div>
          
          <div class="row" style="display: flex; justify-content: center">

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-controller"></i></div>
                  <h4><a href="">Games Development</a></h4>
                  <p>Siswa diajarkan untuk mampu dalam memahami bagaimana cara membuat gim yang berkembang dengan zaman</p>
                </div>
              </div>
      
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                  <div class="icon"><box-icon color="#ffff" type='logo' name='meta'></box-icon></div>
                  <h4><a href="">VR</a></h4>
                  <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
              </div>
              
          </div>

        </div>
      </section><!-- End materi Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container">
          <div class="section-title-client">
            <h2>RPL Bekerja sama dengan</h2>
          </div>

          <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/sekawan.png" class="img-fluid" style="width: 200px" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/oracel.png" class="img-fluid" style="width: 200px" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/finger.png" class="img-fluid" style="width: 100px" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/cisco.png" class="img-fluid" style="width: 100px" alt="">
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Clients Section -->

      <!-- ======= Counts Section ======= -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="section-title">
            <h2>Portofolio</h2>
            <p>Hasil portofolio atau karya siswa-siswi SMK Negeri 4 Malang.</p>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Games</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/gadang.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Gadang 1</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/gadang.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/bareng-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Bareng 1</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/bareng-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Bareng 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/games-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>daddys-adventure</h4>
                <p>Karya Kelompok Kelas RPL A</p>
                <a href="assets/img/portfolio/games-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/kiduldalem.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Kiduldalem 2</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/kiduldalem.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/sdnbareng3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Bareng 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/sdnbareng3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/sukoharjo.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Sukoharjo 1</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/sukoharjo.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Faq Section ======= -->
      <section id="faq" class="faq">
        <div class="container-fluid">

          <div class="row">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

              <div class="content">
                <h3>Pertanyaan Yang <strong>Sering Diajukan</strong></h3>
              </div>

              <div class="accordion-list">
                <ul>
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Jurusan RPL Kerja Apa?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                      <p>
                        Jurusan RPL dapat bekerja sebagai develper IT, programmer, game developer, software tester
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Apa keunggulan jurusan RPL?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Pekerjaan nya yang relatif mudah dan santai, dapat dikerjakan dimanapun dan kapanpun menggunakan koneksi tentunya. Lebih terdepan dari jurusan lainnya dan orang awam diluar sana karena jurusan RPL lebih mengerti dan mendalami tentang teknologi.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Apakah jurusan RPL membutuhkan PC atau laptop? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Tidak harus, namun diusahakan agar memiliki PC agar tidak terlalu terhambat dalam melaksanakan tugas.
                      </p>
                    </div>
                  </li>

                </ul>
              </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://img.freepik.com/free-vector/organic-flat-people-asking-questions-illustration_23-2148906283.jpg?w=740&t=st=1671193787~exp=1671194387~hmac=228f4e699fc3c73f78376ec6f5fbc03cdd4745ee06154b5e33847e530354d5aa");'>&nbsp;</div>
          </div>

        </div>
      </section><!-- End Faq Section -->

      <!-- ======= Contact Section ======= -->
      <form action="{{ route('update_kontak') }}" method="POST">
        @method('put')
        @csrf
        <section id="contact" class="contact">
          <div class="container">
            <div class="section-title">
              <h2>Kontak <button type="submit">Simpan</button></h2>
              <p><textarea name="deskripsi" id="" cols="135" rows="5">
                Dapat menghubungi kami pada lokasi berikut.
              </textarea></p>
            </div>
          </div>

          <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0881917023917!2d112.62512201401486!3d-7.989828981893124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSMK%20Negeri%204%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1671188339715!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
          </div>

          <div class="container">

            <div class="row mt-5">

              <div class="col-lg-4">
                <div class="info">
                  <div class="address">
                    <i class="ri-map-pin-line"></i>
                    <h4>Lokasi:</h4>
                    <p>Jl. Tanimbar No.22, Kasin, Kec Klojen, Kota Malang, Jawa Timur, Indonesia</p>
                  </div>

                  <div class="email">
                    <i class="ri-mail-line"></i>
                    <h4>Email:</h4>
                    <p><input type="emai" name="email" value="{{ $kontak -> email }}" required></p>
                  </div>

                  <div class="phone">
                    <i class="ri-phone-line"></i>
                    <h4>Telepon:</h4>
                    <p><input type="tel" name="telepon" value="{{ $kontak -> telepon }}" required></p>
                  </div>

                </div>

              </div>

              <div class="col-lg-8 mt-5 mt-lg-0">

                <form @disabled(true) action="{{route('send_massage')}}" method="post" role="form" class="php-email-form">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama" disabled  style="cursor: not-allowed">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" disabled  style="cursor: not-allowed">
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subjek" disabled  style="cursor: not-allowed">
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" disabled  style="cursor: not-allowed"></textarea>
                  </div>
                  <div class="my-3">
                    {{-- <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Pesan anda berhasil terkirim. Terima kasih!</div> --}}
                  </div>
                  <div class="text-center"><button type="submit" disabled  style="cursor: not-allowed">Kirim Pesan</button></div>
                </form>

              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->
      </form>
    </main><!-- End #main -->

  @else
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
      <div class="opa">
          <div id="carouselExampleInterval" class="carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2500">
                  <div class="img" style="background-image: url(https://i0.wp.com/smkn4malang.sch.id/wp-content/uploads/2021/09/IMG20210503112245-scaled-e1632381195678.jpg?fit=2560%2C1075&ssl=1)"></div>
              </div>
              <div class="carousel-item" data-bs-interval="2500">
                  <div class="img" style="background-image: url(https://i0.wp.com/smkn4malang.sch.id/wp-content/uploads/2022/09/WhatsApp-Image-2022-09-28-at-09.16.19.jpeg?fit=1280%2C960&ssl=1)"></div>
              </div>
              <div class="carousel-item" data-bs-interval="2500">
                  <div class="img" style="background-image: url(https://smkn4malang.sch.id/wp-content/uploads/2020/03/2019_02_11_Sejarah-SMK-Negeri-4-Malang-yang-Lahir-dari-Tangan-Keuskupan-Malang.jpg);"></div>
              </div>
              </div>
              <div class="hai">
                  <div class="po">
                      <h1>Selamat Datang Di Website</h1>
                      <p>RPL Area SMKN 4 Malang</p>
                  </div>
              </div>
          </div>
      </div>
    </section><!-- End Hero -->

    <main id="main">

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container">

          <div class="section-title">
            <h2>Apa itu RPL?</h2>
            <h5>
              Program keahlian yang mempersiapkan siswa menjadi tenaga terampil di bidang pemrogaman software. Siswa di bekali kemampuan dasar instalasi hardware dan software komputer, penguasaan bahasa pemrogaman (C++, Java, Python, JavaScript, PHP dsb), dan pengolahan database (Microsoft Acces, MySQL, dsb.)
            </h5>
          </div>

          <div class="row content">
                <div class="col-lg-6">
              <a href="#materi" class="btn-learn-more">Materi</a>
            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->

      <!-- ======= materi Section ======= -->
      <section id="materi" class="services">  
        <div class="container">

          <div class="section-title">
            <h2>Materi</h2>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-palette"></i></div>
                <h4><a href="">UI/UX</a></h4>
                <p>Mengenalkan peserta didik dalam pembuatan desain aplikasi ataupun website yang sesuai dengan kebutuhan</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-laptop"></i></div>
                <h4><a href="">Web Development</a></h4>
                <p>Mengenalkan peserta didik dalam pemahaman dan pembuatan website</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box p">
                <div class="icon"><i class="bi bi-phone"></i></div>
                <h4><a href="">Mobile Development</a></h4>
                <p>Siswa diajarkan untuk membuat aplikasi yang kreatif dan inovatif</p>
              </div>
            </div>

            
          </div>
          
          <div class="row" style="display: flex; justify-content: center">

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                  <div class="icon"><i class="bi bi-controller"></i></div>
                  <h4><a href="">Games Development</a></h4>
                  <p>Siswa diajarkan untuk mampu dalam memahami bagaimana cara membuat gim yang berkembang dengan zaman</p>
                </div>
              </div>
      
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box">
                  <div class="icon"><box-icon color="#ffff" type='logo' name='meta'></box-icon></div>
                  <h4><a href="">VR</a></h4>
                  <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                </div>
              </div>
              
          </div>

        </div>
      </section><!-- End materi Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">
        <div class="container">
          <div class="section-title-client">
            <h2>RPL Bekerja sama dengan</h2>
          </div>

          <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/sekawan.png" class="img-fluid" style="width: 200px" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/oracel.png" class="img-fluid" style="width: 200px" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/finger.png" class="img-fluid" style="width: 100px" alt="">
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="assets/img/clients/cisco.png" class="img-fluid" style="width: 100px" alt="">
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Clients Section -->

      <!-- ======= Counts Section ======= -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="section-title">
            <h2>Portofolio</h2>
            <p>Hasil portofolio atau karya siswa-siswi SMK Negeri 4 Malang.</p>
          </div>

          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Games</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/gadang.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Gadang 1</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/gadang.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/bareng-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Bareng 1</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/bareng-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Bareng 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/games-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>daddys-adventure</h4>
                <p>Karya Kelompok Kelas RPL A</p>
                <a href="assets/img/portfolio/games-1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/kiduldalem.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Kiduldalem 2</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/kiduldalem.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/sdnbareng3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Bareng 3</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/sdnbareng3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <img src="assets/img/portfolio/sukoharjo.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>SDN Sukoharjo 1</h4>
                <p>Web</p>
                <a href="assets/img/portfolio/sukoharjo.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SDN Gadang 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Portfolio Section -->

      <!-- ======= Faq Section ======= -->
      <section id="faq" class="faq">
        <div class="container-fluid">

          <div class="row">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

              <div class="content">
                <h3>Pertanyaan Yang <strong>Sering Diajukan</strong></h3>
              </div>

              <div class="accordion-list">
                <ul>
                  <li>
                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Jurusan RPL Kerja Apa?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                      <p>
                        Jurusan RPL dapat bekerja sebagai develper IT, programmer, game developer, software tester
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Apa keunggulan jurusan RPL?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Pekerjaan nya yang relatif mudah dan santai, dapat dikerjakan dimanapun dan kapanpun menggunakan koneksi tentunya. Lebih terdepan dari jurusan lainnya dan orang awam diluar sana karena jurusan RPL lebih mengerti dan mendalami tentang teknologi.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Apakah jurusan RPL membutuhkan PC atau laptop? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Tidak harus, namun diusahakan agar memiliki PC agar tidak terlalu terhambat dalam melaksanakan tugas.
                      </p>
                    </div>
                  </li>

                </ul>
              </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://img.freepik.com/free-vector/organic-flat-people-asking-questions-illustration_23-2148906283.jpg?w=740&t=st=1671193787~exp=1671194387~hmac=228f4e699fc3c73f78376ec6f5fbc03cdd4745ee06154b5e33847e530354d5aa");'>&nbsp;</div>
          </div>

        </div>
      </section><!-- End Faq Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Kontak</h2>
            <p>{{ $kontak -> deskripsi }}</p>
          </div>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0881917023917!2d112.62512201401486!3d-7.989828981893124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6281b75ea5485%3A0x90fd5c6fcedf6acf!2sSMK%20Negeri%204%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1671188339715!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">

          <div class="row mt-5">

            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="ri-map-pin-line"></i>
                  <h4>Lokasi:</h4>
                  <p>Jl. Tanimbar No.22, Kasin, Kec Klojen, Kota Malang, Jawa Timur, Indonesia</p>
                </div>

                <div class="email">
                  <i class="ri-mail-line"></i>
                  <h4>Email:</h4>
                  <p>{{ $kontak -> email }}</p>
                </div>

                <div class="phone">
                  <i class="ri-phone-line"></i>
                  <h4>Telepon:</h4>
                  <p>{{ $kontak -> telepon }}</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <form action="{{route('send_massage')}}" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subjek" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan anda berhasil terkirim. Terima kasih!</div>
                </div>
                @if (session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{session()->get('berhasil')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @endauth
    
  <!-- ======= Footer ======= -->
  @include('include/footer')
    
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<style>
  .details-link {
    display: none
  }
</style>