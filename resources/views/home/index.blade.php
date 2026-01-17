<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Document</title>
</head>

<body>
    @include('component.navbar')
    <section class="slider">
        <div id="splideFirst" class="splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <img src="{{ asset('assets/img/imgslider1.jpg') }}" alt="Slide 1">
                    </li>

                    <li class="splide__slide">
                        <img src="{{ asset('assets/img/imgslider2.jpg') }}" alt="Slide 2">
                    </li>

                    <li class="splide__slide">
                        <img src="{{ asset('assets/img/imgslider3.jpg') }}" alt="Slide 3">
                    </li>

                    <li class="splide__slide">
                        <img src="{{ asset('assets/img/imgslider4.jpg') }}" alt="Slide 3">
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section class="training-section">
        <div class="container">
            <h2 class="section-title">Pelatihan dan Pengetahuan</h2>
            <div class="card-grid">
                <!-- Card 1 -->
                <div class="card">
                    <img src="{{ asset('assets/img/navbarcard1.png') }}" alt="Pelatihan">
                    <div class="card-body">
                        <h3>Pelatihan</h3>
                        <p>Ikuti Pelatihan untuk tingkatkan kompetensi anda</p>
                        <a href="{{ url('/pelatihan') }}" class="btn-card">Selengkapnya</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <img src="{{ asset('assets/img/navbarcard2.png') }}" alt="Klinik Pengetahuan">
                    <div class="card-body">
                        <h3>Klinik Pengetahuan</h3>
                        <p>Ikuti materi Pengetahuan untuk tingkatkan kualifikasi anda</p>
                        <a href="#" class="btn-card">Selengkapnya</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <img src="{{ asset('assets/img/navbarcard3.png') }}" alt="Berbagi Pengetahuan">
                    <div class="card-body">
                        <h3>Berbagi Pengetahuan</h3>
                        <p>Ikuti materi Pengetahuan untuk tingkatkan kualifikasi anda</p>
                        <a href="#" class="btn-card">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container about-wrapper">

            <!-- KIRI: GAMBAR -->
            <div class="about-image">
                <img src="{{ asset('assets/img/imgabout.png') }}" alt="Tentang Pintar">
            </div>

            <!-- KANAN: KONTEN -->
            <div class="about-content">
                <h2>Tentang Learn-Tag</h2>
                <p>
                    Pintar (Pusat Informasi Pelatihan & Pembelajaran) hadir sebagai wadah
                    untuk belajar bersama secara daring dan terbuka untuk semua ASN
                    Kementerian Agama di Indonesia. PINTAR terdiri dari dua kategori
                    pembelajaran yakni, pelatihan dan pengetahuan, semua tersedia dalam
                    bentuk artikel, video, dan materi untuk meningkatkan skill dan
                    kapasitas SDM Kementerian Agama, agar semua dapat tumbuh bersama.
                </p>

                <div class="about-features">
                    <div class="feature">
                        <div class="icon green">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <span>Pusat Pelatihan & Media Pembelajaran Online</span>
                    </div>

                    <div class="feature">
                        <div class="icon yellow">
                            <i class="fa-solid fa-brain"></i>
                        </div>
                        <span>Pusat Pengetahuan & Peningkatan Kualitas SDM</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-training animate-section">
        <div class="container">

            <!-- HEADER -->
            <div class="section-header animate-section">
                <h2>Pelatihan Terbaru</h2>
                <a href="{{ url('/pelatihan') }}" class="see-all">Lihat Semua</a>
            </div>

            <!-- SPLIDE -->
            <div id="training-slider" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- SLIDE -->
                        <li class="splide__slide">
                            <div class="training-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge">Angkatan I</span>
                                </div>

                                <div class="card-body">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>

                        <!-- DUPLIKASI SLIDE -->
                        <li class="splide__slide">
                            <div class="training-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge">Angkatan I</span>
                                </div>

                                <div class="card-body">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="training-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge">Angkatan I</span>
                                </div>

                                <div class="card-body">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="training-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge">Angkatan I</span>
                                </div>

                                <div class="card-body">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="training-card">
                                <div class="card-image">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge">Angkatan I</span>
                                </div>

                                <div class="card-body">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="training-clinic animate-section">
        <div class="container">

            <!-- HEADER -->
            <div class="section-header-clinic animate-section">
                <h2>Klinik Pengetahuan</h2>
                <a href="{{ url('/pelatihan') }}" class="see-all-clinic">Lihat Semua</a>
            </div>

            <!-- SPLIDE -->
            <div id="training-clinic" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- SLIDE -->
                        <li class="splide__slide">
                            <div class="clinic-card">
                                <div class="card-image-clinic">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge-clinic">Angkatan I</span>
                                </div>

                                <div class="card-body-clinic">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta-clinic">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary-clinic">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>

                        <!-- DUPLIKASI SLIDE -->
                        <li class="splide__slide">
                            <div class="clinic-card">
                                <div class="card-image-clinic">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge-clinic">Angkatan I</span>
                                </div>

                                <div class="card-body-clinic">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta-clinic">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary-clinic">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="clinic-card">
                                <div class="card-image-clinic">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge-clinic">Angkatan I</span>
                                </div>

                                <div class="card-body-clinic">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta-clinic">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary-clinic">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="clinic-card">
                                <div class="card-image-clinic">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge-clinic">Angkatan I</span>
                                </div>

                                <div class="card-body-clinic">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta-clinic">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary-clinic">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="clinic-card">
                                <div class="card-image-clinic">
                                    <img src="{{ asset('assets/img/imgcontoh.jpg') }}">
                                    <span class="badge-clinic">Angkatan I</span>
                                </div>

                                <div class="card-body-clinic">
                                    <h3>Pelatihan Pendidikan Inklusif Berjenjang...</h3>

                                    <div class="meta-clinic">
                                        <span><i class="fa-regular fa-calendar"></i> 11 Des 2025 – 15 Des 2025</span>
                                        <span><i class="fa-regular fa-user"></i> Peserta 50023</span>
                                        <span><i class="fa-regular fa-star"></i> 4.9</span>
                                    </div>

                                    <a href="#" class="btn-primary-clinic">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="start-section">
  <div class="start-container">

    <!-- LEFT -->
    <div class="start-left">
      <h2>
        Menjadi lebih pintar dengan <br />
        <span>Learn-Tag sekarang</span>
      </h2>
      <p>
        berikut adalah data PINTAR (Pusat Informasi pelatihan & pembelajaran)
        Kementerian Agama RI
      </p>
      <a href="#" class="btn-primary">Yuk Mulai Belajar</a>
    </div>

    <!-- RIGHT -->
    <div class="start-right">
      <div class="stat-card">
        <p class="label">Pelatihan</p>
        <h3 class="value">390</h3>
        <i class="fa-solid fa-graduation-cap icon"></i>
      </div>

      <div class="stat-card">
        <p class="label">Peserta</p>
        <h3 class="value">665996</h3>
        <i class="fa-solid fa-users icon"></i>
      </div>

      <div class="stat-card">
        <p class="label">Modul Belajar</p>
        <h3 class="value">930</h3>
        <i class="fa-solid fa-book icon"></i>
      </div>

      <div class="stat-card">
        <p class="label">Pengguna Aktif</p>
        <h3 class="value">0</h3>
        <i class="fa-solid fa-user icon"></i>
      </div>
    </div>
  </div>
</section>
@include('component.footer')

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        // ANIMASI SLIDER
        new Splide('#splideFirst', {
            type: 'loop',
            perPage: 1,
            focus: 'center',
            gap: '40px',
            autoplay: true,
            interval: 4000,
            pauseOnHover: true,
            arrows: false,
            pagination: true,
            padding: '25%',
        }).mount();

        new Splide('#training-slider', {
            type: 'slide',
            perPage: 4,
            gap: 24,
            pagination: false,
            arrows: true,
            speed  : 1200,
            easing : 'cubic-bezier(0.25, 1, 0.5, 1)',
        }).mount();

        new Splide('#training-clinic', {
            type: 'slide',
            perPage: 3,
            gap: 28,
            pagination: false,
            arrows: true,
            speed  : 1400, // makin besar = makin lambat (ms)
            easing : 'cubic-bezier(0.25, 1, 0.5, 1)', // smooth banget
        }).mount();
    </script>
</body>

</html>
