<style>
.splide__arrow {
  width: 52px;
  height: 52px;
  background-color: #303231;
  opacity: 60px;
}

.splide__arrow svg {
  width: 20px;
  height: 20px;
  fill: #fff;
}
#splideFirst .splide__slide {
  opacity: 0.5;
  transform: scale(0.85);
  transition: all 0.4s ease;
}

#splideFirst .splide__slide.is-active {
  opacity: 1;
  transform: scale(1);
}

#splideFirst img {
  width: 100%;
  border-radius: 20px;
}

.splide__slide {
  display: flex;
  align-items: center;   /* tengah vertikal */
  justify-content: center; /* tengah horizontal */
}

.splide__slide img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

/* dots */
.splide__pagination__page {
  width: 22px;
  height: 5px;
  bottom: -30px;
  border-radius: 2px;
  background: white;
  opacity: 0.5;
}

.splide__pagination__page.is-active {
  background: #076a34;
  opacity: 1;
}

.card-body {
  padding: 20px;
  display: flex;
  flex-direction: column;
  height: 100%;
}
.card-image-clinic {
  position: relative;
}

.card-image-clinic img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}
.card-body h3 {
  font-size: 20px;
  margin-bottom: 8px;
}

.card-body p {
  font-size: 14px;
  color: #555;
  margin-bottom: auto;
}
.card-body {
  padding: 18px;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.card-body h3 {
  font-size: 16px;
  margin-bottom: 12px;
}
.card-body-clinic {
  padding: 18px;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.card-body-clinic h3 {
  font-size: 20px;
  margin-bottom: 12px;
}
.training-card {
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 18px rgba(0,0,0,.08);
  height: 100%;
  display: flex;
  flex-direction: column;
  transition: .3s ease;
}

.training-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 16px 30px rgba(0,0,0,.15);
}
.card-image {
  position: relative;
}

.card-image img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}
    </style>
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