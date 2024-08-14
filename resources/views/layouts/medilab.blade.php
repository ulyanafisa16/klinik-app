<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>klinik Kalisari</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/medilab/assets/img/logo.png">
    <link href="/medilab/assets/img/logo.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/medilab/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/medilab/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/medilab/assets/css/style.css" rel="stylesheet">

    <!-- Custom styles for this template-->


    <!-- Custom styles for this page -->

    <!-- =======================================================
  * Template Name: Medilab
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a
                    href="mailto:kalisarihealthcare@gmail.com">kalisarihealthcare@gmail.com</a>
                <i class="bi bi-phone"></i>0822 9999 6577
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="https://www.tiktok.com/@klinikkalisarihealthcare?_t=8o8muvNKE8l&_r=1" class="tiktok"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.instagram.com/kalisarihealthcare/" class="instagram"><i
                        class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="#">
                    <img src="{{ asset('medilab/assets/img/logo.png') }}" alt="Kalisari Logo" class="img-fluid"
                        style="height: 100px; margin-right: 10px;">
                    <span style="letter-spacing: 5px"> Kalisari </span>
                    <h5 style="weight: 10px; margin-left: 57px">Healthcare</h5>
                </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="/medilab/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#doctors">Dokter</a></li>
                    @guest
                        <li><a class="nav-link scrollto" href="/login">Masuk</a></li>
                    @else
                        <li><a class="nav-link scrollto" href="/login">{{ auth()->user()->name }}</a></li>
                    @endguest
                    <li><a href="/logout" class="btn-get-started scrollto">
                        Keluar</a></li>
                    {{-- <li class="nav-link dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @auth
                                @php
                                    $initial = strtoupper(substr(auth()->user()->name, 0, 1));
                                @endphp
                                <div class="img-profile rounded-circle d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px; background-color: #f8f9fc; color: #4e73df; font-size: 24px;">
                                    {{ $initial }}
                                </div>
                            @else
                                <img class="img-profile rounded-circle" style="width: 50px; height: 50px;"
                                    src="{{ asset('sbadmin2/img/undraw_profile.png') }}">
                            @endauth
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown" style="background-color: rgb(255, 255, 255)">
                            {{-- <a class="dropdown-item" href="/profil/create">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profil
                            </a> --}}
                            {{-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/login" style=" text-align:center;">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Login
                            </a> --}}
                            {{-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout" style="align-items: center; justify-content: center;">
                               
                                Logout
                            </a>
                        </div>
                    </li> --}} 
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Register</span>
                Pasien</a> --}}

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to Kalisari Healthcare</h1>
            <h2>KLINIK PRATAMA SAHABAT KELUARGA</h2>
            <a href="#appointment" class="btn-get-started scrollto">REGISTRASI PASIEN</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose Klinik Kalisari?</h3>
                            <p>
                                Klinik Pratama Kalisari Healthcare (KHC) sebagai penyelenggara layanan
                                kesehatan yang berdedikasi, kami hadir dengan misi utama untuk memberikan
                                pelayanan kesehatan yang prima dengan konsep kenyamanan dalam berobat
                                dan harga yang terjangkau. Kami percaya bahwa akses terhadap pelayanan
                                kesehatan berkualitas tidak seharusnya menjadi beban finansial yang berat bagi
                                masyarakat
                            </p>
                            <div class="text-center">
                                {{-- <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>

                                        <p>Memberikan pelayanan kesehatan yang terjangkau, berkualitas
                                            dan komprehensif kepada masyarakat</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>

                                        <p>Edukasi kesehatan dan pencegahan penyakit melalui program
                                            promosi kesehatan</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <p>Menjalin kerjasama dengan mitra dan pihak terkait untuk
                                            meningkatkan aksesibilitas layanan kesehatan</p>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-balance-scale"></i>
                            <span>AKUNTABILITAS</span>
                            <p>KOMITMEN</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="far fa-shield-alt"></i>
                            <span>LOYALITAS</span>
                            <p>INTEGRITAS</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-hands-helping"></i>
                            <span>SOLIDARITAS</span>
                            <p>ADAPTABILITAS</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-lightbulb"></i>
                            <span>RESPONSIF</span>
                            <p>INOVATIF</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Layanan Poli</h2>
                    <p>Siap melayani sesuai keluhan anda</p>
                </div>

                <div class="row">
                    @foreach ($poli as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                <h4><a href=""> {{ $item->nama }}</a></h4>
                                <p>{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Services Section -->
        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Dokter</h2>
                    <p>Klinik kami siap melayani anda dengan dokter-dokter yang profesional</p>
                </div>

                <div class="row">
                    @foreach ($dokter as $item)
                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start">
                                <div class="pic">
                                    @if ($item->foto == null)
                                        <img class="img-fluid" src="/medilab/assets/img/doctors/doctors-1.jpg"
                                            alt="">
                                    @else
                                        <img src="{{ Storage::url($item->foto) }}" class="img-fluid" alt="">
                                    @endif
                                </div>
                                <div class="member-info">
                                    <h4>{{ $item->nama_dokter }}</h4>
                                    <span>Dokter {{ $item->spesialis }}</span>
                                    <p>{{ $item->kampus }}</p>
                                    <div class="social">
                                        <a href="{{ $item->twitter }}"><i class="ri-twitter-fill"></i></a>
                                        <a href="{{ $item->facebook }}"><i class="ri-facebook-fill"></i></a>
                                        <a href="{{ $item->instagram }}"><i class="ri-instagram-fill"></i></a>
                                        <a href="{{ $item->tiktok }}"> <i class="ri-tiktok-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Doctors Section -->
        <!-- ======= Appointment Section ======= -->
        <section id="appointment" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>REGISTRASI PASIEN</h2>
                    <p>Silahkan melakukan REGISTRASI terlebih dahulu</p>
                </div>
                @include('flash::message')
                @yield('content')
            </div>
        </section><!-- End Appointment Section -->



        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Pertanyaan yang Sering Diajukan</h2>
                    <p>Kenyamanan pasien is number one</p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Apa saja layanan yang ditawarkan oleh klinik? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Klinik kami menyediakan berbagai layanan, termasuk pemeriksaan umum, vaksinasi,
                                    Khitan, dan perawatan khusus.
                                    Tim profesional kami yang berpengalaman siap memenuhi semua kebutuhan kesehatan
                                    Anda.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Jam berapa klinik operasional?
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    <a>Poli Umum : Senin - Sabtu = 08.00 - 20.00</a>
                                    <a>Poli Gigi : Senin - Sabtu = 14.00 - 20.00</a>
                                    <a>Poli KIA  : Kamis & Sabtu = 08.00 - 14.00</a>
                                    <a>Laboratorium : Senin - Sabtu = Pagi : 08.00 - 20.00
                                                                      Sore : 16.00 - 20.00
                                    </a>
                                    <a>Hari Minggu dan tanggal Merah libur</a>
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Bagaimana cara mendaftar online? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Anda dapat daftar di menu REGISTRASI PASIEN,
                                    Kami menawarkan penjadwalan online yang nyaman
                                    untuk menyesuaikan dengan gaya hidup Anda yang sibuk.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Apakah pasien bisa langsung datang ke
                                klinik tanpa daftar online? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, kami menerima pasien tanpa daftar online.
                                    Namun, untuk memastikan waktu tunggu yang minimal,
                                    kami merekomendasikan untuk daftar online terlebih dahulu.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Apakah klinik menerima asuransi? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, kami menerima sebagian besar rencana asuransi utama.
                                    Silakan hubungi kantor kami untuk memastikan apakah rencana asuransi Anda diterima.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->


        
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    {{-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt=""> --}}
                                    <h3>${response.name}</h3>
                                    <h4>${response.subject}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        ${response.message}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Febiadi Hakim</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Kliniknya bersih, tenaga kesehatannya ramah, pelayanannya oke banget untuk di
                                        wilayah Jakarta,, recommended untuk tempat berobat.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Permata George</h3>
                                    <h4>Store Owner</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Baru pertama kesini, liat info dari aplikasi primaku krn lagi cari tempat untk
                                        imunisasi anak. Pas dateng ke klinik, tempatnya bersih, staff ramah, bisa parkir
                                        motor dan parkir 2 mobil. Penanganannya juga cepat .
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Rayi Langi</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Terimakasih Kalisari healtcare puas banget pelayanannya dokternya dr.dinda Ika
                                        Putri ramah banget penjelasannya sangat detail dan mudah dipahami.perawat,bagian
                                        lab ,farmasi dan semua staffnya beneran ramah banget .klinik terdebest warga
                                        harga terjangkau semoga sukses selalu Kalisari healtcare dan besok bisa jadi
                                        rumah sakit. recomended yg mau berobat bisa home visit juga bagi yg sulit datang
                                        ke klinik the best pokoknya .
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Ragil Pamungkas</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Dokter nya ramah, klinik nya bersih, pelayanan bagus, rekomend banget buat
                                        perawatan gigi di klinik ini.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Riris Ambarsari</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Klinik bersih, pelayanan sangat bagus, belum lagi dapet promo untuk vaksinasi
                                        bayi.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Irwan K</h3>
                                    <h4></h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Pelayanannya ramah, tempatnya bersih & dokternya informatif.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

                    </div>
                <div class="swiper-pagination"></div>
                </div>
            
            </div>
        </section><!-- End Testimonials Section -->

        <section id="ulasan" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>ULASAN PASIEN</h2>
                    <p>Berikan Ulasan Terbaik Kalian</p>
                </div>
                @include('form_ulasan')
               
            </div>
        </section><!-- End Appointment Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title">
                    <h2>Fasilitas</h2>
                    <p>Fasilitas dan kegiatan Klinik Kalisari Health Care</p>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery1.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery1.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery2.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery3.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery3.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery4.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery4.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery5.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery6.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery6.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery7.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery7.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="/medilab/assets/img/gallery/galery8.jpg" class="galelry-lightbox">
                                <img src="/medilab/assets/img/gallery/galery8.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Silahkan Hubungi Klinik Kami</p>
                </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.837107195792!2d106.8566782!3d-6.3330687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed8b9c14261b%3A0xbaca66ee48dd8659!2sKlinik%20Pratama%20Kalisari%20Healthcare!5e0!3m2!1sen!2sid!4v1685873078762!5m2!1sen!2sid"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl.Kalisari No.20.Kel. Kalisari Kec.Pasar Rebo - Jakarta Timur</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>kalisarihealthcare@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>0822 9999 6577</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-6 col-md-6 d-flex justify-content-center">
                                <img src="/medilab/assets/img/klinik.jpg" class="img-fluid custom-img"
                                    alt="Image 1">
                            </div>
                            <div class="col-6 col-md-6 d-flex justify-content-center">
                                <img src="/medilab/assets/img/klinik2.jpg" class="img-fluid custom-img"
                                    alt="Image 2">
                            </div>
                        </div>


                    </div>

                </div>

            </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Kalisari Healthcare</h3>
                        <p>
                            Jl.Kalisari No.20.Kel. Kalisari<br>
                            Kec.Pasar Rebo<br>
                            Jakarta Timur <br><br>
                            <strong>Phone:</strong> 0822 9999 6577<br>
                            <strong>Email:</strong> kalisarihealthcare@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Link tautan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#doctors">Dokter</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Layanan Kami</h4>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Poli Umum</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Poli Gigi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Poli KIA</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Periksa Hamil</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Laboratorium</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Sunat Modern</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Vaksinasi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">HomeCare</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Jam Operasional</h4>
                        <p>Senin - Sabtu</p>
                        <p>08.00 - 20.00</p>
                        <p>Hari Minggu dan tanggal Merah Libur</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Kalisari Healthcare</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                    Designed by <a> | Ulyanaf</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://www.tiktok.com/@klinikkalisarihealthcare?_t=8o8muvNKE8l&_r=1" class="twitter"><i class="bx bxl-tiktok"></i></a>
    
                <a href="https://www.instagram.com/kalisarihealthcare/" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Tambahkan di bagian bawah formulir HTML -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('form');
      const modal = new bootstrap.Modal(document.getElementById('validationModal'));
  
      form.addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form submit default
  
        // Asumsi variabel isLoggedIn yang menunjukkan status login
        const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
        let isValid = true;
  
        // Periksa apakah semua field telah diisi
        const requiredFields = form.querySelectorAll('input[required], textarea[required], select[required]');
        requiredFields.forEach(field => {
          if (!field.value.trim()) {
            isValid = false;
          }
        });
  
        if (!isLoggedIn || !isValid) {
          // Tampilkan modal jika belum login atau ada field yang belum diisi
          modal.show();
        } else {
          // Kirim formulir jika sudah login dan semua field telah diisi
          form.submit();
        }
      });
    });
  </script>

<script>
    document.querySelector('input[name="nik"]').addEventListener('input', function (e) {
        if (this.value.length > 16) {
            this.value = this.value.slice(0, 16);
        }
        this.value = this.value.replace(/\D/g, '');
    });


    </script>

{{-- <script>
    document.getElementById('testimonial-form').addEventListener('submit', function(e) {
        e.preventDefault();

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;

        var testimonialWrap = document.getElementById('testimonial-wrap');

        var newTestimonial = document.createElement('div');
        newTestimonial.className = 'testimonial-item';
        newTestimonial.innerHTML = `
            <h3>${name}</h3>
            <h4>${subject}</h4>
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                ${message}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
        `;

        testimonialWrap.appendChild(newTestimonial);

        document.getElementById('testimonial-form').reset();
    });
</script> --}}
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- Vendor JS Files -->
    <script src="/medilab/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/medilab/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/medilab/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/medilab/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/medilab/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/medilab/assets/js/main.js"></script>

    <script src="{{ asset('sbadmin2') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('sbadmin2') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin2') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin2') }}/js/sb-admin-2.min.js"></script>
    <script src="{{ asset('sbadmin2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('sbadmin2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>

</html>
