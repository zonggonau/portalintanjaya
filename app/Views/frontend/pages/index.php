<?= $this->extend('frontend/template/layout') ?>
<?= $this->section('frontend') ?>



<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

    <div class="item active" style="position: absolute;  overflow: hidden;">
        <video controls autoplay loop muted>
            <source src="<?= base_url('assets/video/profile.mp4') ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="pateren"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <!-- <div class="col-xl-12">
                <img src="assets/img/logokabij.png" class="img-fluid" style="width: 200px; height: 200px;" alt="">
            </div> -->
            <div class="col-xl-6 col-lg-8">
                <h3><b>WEBSITE RESMI PEMERINTAH</b></h3>
                <h1><b>KABUPATEN INTAN JAYA</b></h1>
                <p class="font-weight-bold">"Ondoma dangge inia hainggia duadia"</p>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                    <i class="bi bi-binoculars"></i>
                    <h3><a href="#pengumuman">PENGUMUMAN</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                    <i class="bi bi-bullseye"></i>
                    <h3><a href="#pimpinan">PIMPINAN</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                    <i class="bi bi-fullscreen-exit"></i>
                    <h3><a href="https://ppid.intanjayakab.go.id" target="_blank">PPID</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                    <i class="bi bi-card-list"></i>
                    <h3><a href="/egov">E-GOV</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
                <div class="icon-box">
                    <i class="bi bi-gem"></i>
                    <h3><a href="/galeri">GALERI</a></h3>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Hero Section -->

<section id="pengumuman" class="features section">

    <div class="container">

        <div class="row gy-4">
            <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/pengumuman.png" alt=""></div>
            <div class="col-lg-6">
                <?php foreach ($info as $item): ?>
                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-archive flex-shrink-0"></i>
                        <div>
                            <a href="/berita/<?= $item->slug ?>">
                                <h4><?= $item->judul ?></h4>
                            </a>
                            <p><?= $item->konten ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

</section>




<section id="pimpinan" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Bupati</h2>
        <p>dari masa ke masa</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div x-data="fetchLeaders">
            <div class="row gy-4">
                <!-- Looping through leaders data -->
                <template x-for="(leader, index) in leaders" :key="index">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" :data-aos-delay="(index + 1) * 100">
                        <div class="team-member">
                            <div class="member-img">
                                <img :src="leader.profile_picture" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4 x-text="leader.name"></h4>
                                <span x-text="leader.position"></span>
                                <span x-text="leader.term"></span>
                            </div>
                        </div>
                    </div>
                </template>
                <!-- Show loading if data is being fetched -->
                <div x-show="loading">Loading...</div>
            </div>
        </div>

    </div>

</section><!-- /Team Section -->

<section id="clients" class="clients section">

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
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                        },
                        "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                        },
                        "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                        },
                        "992": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                <?php foreach ($egov as $item): ?>
                    <div class="swiper-slide">
                        <a href="<?= $item->website ?>" target="_blank">
                            <img src="<?= $item->thumbnail ?>" class="img-fluid" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Clients Section -->




<?= $this->endSection('frontend') ?>